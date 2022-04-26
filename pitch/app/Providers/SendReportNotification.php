<?php

namespace App\Providers;

use App\Providers\NewReport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReportNotification
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
     * @param  \App\Providers\NewReport  $event
     * @return void
     */
    public function handle(NewReport $event)
    {
        //
    }
}
