<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ipnStatus;
use App\Models\Participant;
use Exception;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    protected $provider;

    public function __construct()
    {
        $this->provider = new ExpressCheckout();
    }

    public function confirm(Course $course, Request $request)
    {
        $response = $this->provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            session([
                'token' => $request->token,
                'PayerID' => $request->PayerID,
            ]);
        }

        return redirect(route('event.checkout', ['course' => $course]), 303);
    }

    public function abort(Course $course, Request $request)
    {
        $request->session()->forget('token', 'PayerID');

        $array[0] = session(0);
        $array[0]['payment'] = 'local';
        session($array);

        return redirect(route('event.checkout', ['course' => $course]), 303);
    }

    /**
     * Parse PayPal IPN.
     *
     * @param Request $request
     * @throws Exception
     */
    public function ipn(Request $request)
    {
        if (! ($this->provider instanceof ExpressCheckout)) {
            $this->provider = new ExpressCheckout();
        }

        $post = [
            'cmd' => '_notify-validate',
        ];

        foreach ($request->input() as $key => $value) {
            if ($value == null) {
                $request->request->set($key, '');
            }
        }

        $data = $request->all();

        foreach ($data as $key => $value) {
            $post[$key] = $value;
        }

        $response = (string) $this->provider->verifyIPN($post);

        if (isset($data['parent_txn_id'])) {
            $transaction_id = $data['parent_txn_id'];
        } else {
            $transaction_id = $data['txn_id'];
        }

        $participant = Participant::where([
            ['transaction_id', $transaction_id],
        ])->first();

        if ($participant && $response == 'VERIFIED' && isset($data['payment_status'])) {
            if ($data['payment_status'] == 'Completed' && $data['mc_gross'] > 0 || $data['payment_status'] == 'Canceled_Reversal' && $data['mc_gross'] > 0) {
                $participant->payed = 1;
            } else {
                $participant->payed = 0;
            }
            $participant->save();
        }

        if ($participant) {
            $participant_id = $participant->id;
        } else {
            $participant_id = 0;
        }

        $ipn = new ipnStatus();
        $ipn->payload = json_encode($post);
        $ipn->status = $response;
        $ipn->transaction_id = $data['txn_id'];
        $ipn->participant_id = $participant_id;
        $ipn->save();
    }
}
