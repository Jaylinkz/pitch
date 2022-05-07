<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReportStoreRequest;
use App\Models\Report;
use App\Events\NewReport;
use App\Models\User;
use App\Notifications\ReportsNotification;
use Notification;
use App\Mail\ReportMail;
use Mail;

class ReportsController extends Controller
{
    public function report(ReportStoreRequest $req)
    {
        $users = User::all();

        $image = $req->file('image')->store('public/repImg');
        $evi = $req->file('possible_evidence')->store('public/evidence');
        $report = new Report;
        $report->name = $req->name;
        $report->email = $req->email;
        $report->location = $req->location;
        $report->phone_no = $req->phone_no;
        $report->possible_evidence = $evi;
        $report->image = $image;
        $report->report = $req->report;

        $report->subject = $req->subject;
        Notification::send($users, new ReportsNotification($req->name,$req->email,$req->report,$req->image,$req->possible_evidence));
        Mail::to("jay@example.com")->send(new ReportMail());
//     dd('mail sent successfully');
        // event(new NewReport($report->save()));
        return back()->with('success','report recorded successfully, you will be contacted as soon as possible');

    }
    public function sendMail()
    {
        $emails = User::pluck('emails');
        Mail::to($emails)->send(new ReportMail());
        if (Mail::failures()){
            return response()->Fail('Sorry, please try again');

        }else{
            return response()->success('mail sent');
        }
    
    }
    public function xyz()
    {
        return view('NGO.');
    }


    public function mail()
{
    $mailData = Report::orderBy("id","DESC")->get()->take(1);
    return view('email.report',compact('mailData'));
}
public function show(Report $report)
{
    return view('NGO.show',compact('report'));
}
}

