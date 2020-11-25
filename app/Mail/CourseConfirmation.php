<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $course;
    public $request;

    /**
     * Create a new message instance.
     *
     * @param $course
     * @param $request
     */
    public function __construct($course, $request)
    {
        $this->course = $course;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.course-confirmation')
            ->from(env('MAIL_FROM_ADDRESS'), 'info@prevhelp.de')
            ->replyTo('info@prevhelp.de')
            ->subject('Kursbuchung Bestätigung');
    }
}
