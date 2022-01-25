<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquireEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $enquireData;

    public function __construct($data)
    {
        $this->enquireData = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.enquire-email')->to($this->enquireData[0]['email'])->from('propertylisting@civanolo.com')->subject('Property Enquire')->with('data',$this->enquireData);
    }
}
