<?php

namespace App\Listeners;

use App\Events\SendEmail;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class SendEmailConfirm
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //

    }

    /**
     * Handle the event.
     */
    public function handle(SendEmail $event): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new WelcomeEmail($event->user));
        }
    }
}