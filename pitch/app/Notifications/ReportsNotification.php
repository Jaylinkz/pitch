<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReportsNotification extends Notification
{
    use Queueable;
  

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($report,$email,$name,$image,$possible_evidence)
    {   $this->report = $report;
        $this->email = $email;
        $this->name = $name;
        $this->image  = $image;
        $this->possible_evidence = $possible_evidence;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
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
        return [
            'name'=>$this->name,
            'email'=>$this->email,
            'report'=>$this->report,
            'image'=>$this->image,
            'possible_evindece'=>$this->possible_evidence
            
        ];
    }
}
