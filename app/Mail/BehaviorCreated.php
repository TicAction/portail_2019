<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Behavior;

class BehaviorCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Behavior
     */
    public $behavior;


    public function __construct(Behavior $behavior)
    {
        $this->subject('Nouvelle entrée');
        $this->behavior = $behavior;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.behavior-created')  ->with([
            'behavior_content' => $this->behavior->behavior_content,

        ]);
    }
}
