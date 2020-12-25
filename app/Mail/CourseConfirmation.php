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
    public $participant;

    /**
     * Create a new message instance.
     *
     * @param $course
     * @param $request
     * @param $participant
     */
    public function __construct($course, $request, $participant)
    {
        $this->course = $course;
        $this->request = $request;
        $this->participant = $participant;
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
