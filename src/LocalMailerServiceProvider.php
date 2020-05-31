<?php

namespace Undeadline\LM;

use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class LocalMailerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('local-mail.php')
        ], 'config');

        if (strtolower(env('APP_ENV')) !== 'production') {
            Event::listen(MessageSending::class, function($event) {
                $event->message->setTo(config('local-mail.development.to'), config('local-mail.development.name'));
            });
        }
    }
}