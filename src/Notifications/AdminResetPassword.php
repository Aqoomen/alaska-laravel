<?php

namespace iPremium\Alaska\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdminResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;
    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
    /**
     * Build the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        return (new MailMessage)
            ->subject(config('app.name').' : Повторная инициализация пароля')
            ->line([
                'Вы получаете это письмо, потому что мы получили запрос на повторную инициализацию пароля для вашей учетной записи.',
                'Нажмите эту кнопку, чтобы повторно инициализировать пароль:',
            ])
            ->action('Повторная инициализация пароля', route('admin-password-reset', ['token' => $this->token]))
            ->line('Если вы не попросили повторно инициализировать свой пароль, то вам не нужно ничего делать.');
    }

}
