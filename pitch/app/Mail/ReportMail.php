<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Report;

class ReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $report;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Report $report)
    {
      $this->report = $report;  //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('test email')->view('email.report')->attachFromStorage('path','report.pdf',[
        ]);
    }
}
