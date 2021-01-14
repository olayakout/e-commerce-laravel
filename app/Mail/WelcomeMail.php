<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * The user instance.
     *
     * @var User
     */
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome')
                    
                    ->attachData('pdf/loren-ipsum.pdf', 'ourproducts.pdf',[
                        'mime' => 'application/pdf',
                    ])
                    ->with([
                        'userName' => $this->user->name,
                        'pathToImage'=>'images/welcome.jpg'
                                            ]);
    }
}
