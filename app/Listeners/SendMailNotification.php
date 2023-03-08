<?php

namespace App\Listeners;

use App\Events\UserRegisterEvent;
use App\Notifications\UserRegisterNotification;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendMailNotification implements ShouldQueue
{


    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserRegisterEvent $event)
    {
        Notification::send($event->user, new UserRegisterNotification($event->user));
    }

}
