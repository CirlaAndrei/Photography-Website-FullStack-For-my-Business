<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactSubmission;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    /**
     * Create a new message instance.
     */
    public function __construct(ContactSubmission $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Booking Confirmation - Vogue Vision Photography')
                    ->view('emails.booking-confirmation')
                    ->with([
                        'submission' => $this->submission,
                    ]);
    }
}