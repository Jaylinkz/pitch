<?php

namespace App\Listeners;

use App\Events\NewReport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

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
     * @param  \App\Events\NewReport  $event
     * @return void
     */
    public function handle(NewReport $event)
    {
      $receivers = User::all();
      Notification::send($recievers, new ReportsNotification($event->report));  //
    }
}
