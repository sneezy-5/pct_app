<?php

namespace App\Notifications;

use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class ValidateSubject extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $subejct = Subject::find($this->subject->id)->title;
        return [
            'subject_id'=>$this->subject->id,
            'message'=>'la subejction'.$subejct.'a été validé'
        ];
    }

      public function toBroadcast($notifiable)
    {
        $subejct = Subject::find($this->subject->id)->title;
        return new BroadcastMessage([
            'subject_id'=>$this->subject->id,
            'message'=>'la subejction'.$subejct.'a été validé'
        ]);
    }
}
