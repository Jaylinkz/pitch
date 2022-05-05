<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReportStoreRequest;
use App\Models\Report;
use App\Events\NewReport;
use App\Models\User;

class ReportsController extends Controller
{
    public function report(ReportStoreRequest $req)
    {
       $report = Report::create($req->all());
        event(new NewReport($report));
        return back()->with('success','report recorded successfully, you will be contacted as soon as possible');

    }
    public function sendMail()
    {
        $emails = User::select('emails')->where('role','2')->get();
        Mail::to($emails)->send(new ReportMail());
        if (Mail::failures()){
            return response()->Fail('Sorry, please try again');

        }else{
            return response()->success('mail sent');
        }
    
    }
}
