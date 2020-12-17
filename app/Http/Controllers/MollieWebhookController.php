<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieWebhookController extends Controller
{
    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            $participant = Participant::find($payment->metadata->participant_id);
            $participant->payed = 1;
            $participant->payment_id = $request->id;
            $participant->save();
        }
    }
}
