<?php

namespace App\Listeners;

use App\Events\NewReport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMailFired
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
     * @param  \App\Events\NewReport  $event
     * @return void
     */
    public function handle(NewReport $event)
    {
        //
    }
}
