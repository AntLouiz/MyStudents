<?php

namespace App\Listeners;

use App\Events\StudentAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Listeners\SendEmail;
class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle(StudentAdded $event)
    {
        \Log::info('email', ['student' => $event->student]);
    }
}
