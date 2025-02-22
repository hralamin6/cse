<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushChannel;
use NotificationChannels\WebPush\WebPushMessage;

class MessageSentNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $userName;
    public $body;
    public $user;
    public function __construct($userName, $body, $user)
    {
        $this->userName = $userName;
        $this->body = $body;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
//    public function via(object $notifiable): array
//    {
//        return ['mail'];
//    }
    public function via($notifiable)
    {
        try {
            return [WebPushChannel::class];
        } catch (\Exception $e) {
            \Log::error('Notification Error: ' . $e->getMessage());
            throw $e;
        }    }
    /**
     * Get the mail representation of the notification.
     */
//    public function toMail(object $notifiable): MailMessage
//    {
//        return (new MailMessage)
//                    ->line('The introduction to the notification.')
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');
//    }
    public function toWebPush($notifiable, $notification)
    {
//        $user = User::find($this->user);
        return (new WebPushMessage())
            ->title('New message from: ' . $this->userName)
//            ->icon('https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name))
            ->icon(getUserProfileImage($this->user))
            ->body($this->body)
            ->badge('/app/chat/')
            ->action('View account', 'view_account')
            ->options(['TTL' => 1000])
            ->vibrate([200, 100, 200]);
        // ->badge()
        // ->dir()
        // ->image()
        // ->lang()
        // ->renotify()
        // ->requireInteraction()
        // ->tag()
        // ->vibrate()
    }
}
