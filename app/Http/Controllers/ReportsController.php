<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReportStoreRequest;
use App\Models\Report;

class ReportsController extends Controller
{
    public function report(ReportStoreRequest $req)
    {
       $report = Report::create($req->all());
        event(new NewReport($report));

    }
}
