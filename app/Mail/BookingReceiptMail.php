<?php

namespace App\Mail;

use Illuminate\Support\Facades\Storage;
use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingReceiptMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $pdfPath;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, $pdfPath)
    {
        $this->booking = $booking;
        $this->pdfPath = $pdfPath;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.booking-receipt')
            ->subject('Your Booking Receipt')
            ->attach(Storage::disk('public')->path($this->pdfPath));
    }
}
