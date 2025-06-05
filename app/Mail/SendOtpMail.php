<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $otp;
    public $room_number;

    // ✅ Only one constructor
    public function __construct($name, $otp ,$room_number)
    {
        $this->name = $name;
        $this->otp = $otp;
        $this->room_number = $room_number;
    }

    public function build()
    {
        return $this->subject('Your Booking Confirmation Code')
                    ->view('emails.sendOtp');
    }
}
