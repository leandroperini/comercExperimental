<?php

namespace App\Http\Controllers;

use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('admin');
    }

    public function dataGet()
    {
        $content = [];;

        $currentCount = request('current', 1);
        $listingCount = request('rowCount', 10);
        $sorts        = request('sort');
        $searchText   = request('searchPhrase', '');

        $reports = Report::query();

        if (!empty($searchText)) {
            $reports->where('name', 'like', "%$searchText%");
        }
        $total = $reports->count();

        foreach ($sorts as $column => $sort) {
            $reports->orderBy($column, $sort);
        }
        if ($listingCount >= 0) {
            $reports = $reports->take($listingCount)->skip(($currentCount - 1) * $listingCount);
        }


        $reports = $reports->get()->toArray();

        $content['current']  = $currentCount;
        $content['rowCount'] = $listingCount;
        $content['rows']     = $reports;
        $content['total']    = $total;

        return response(json_encode($content))->withHeaders([
                                                                'Content-Type' => 'application/json; charset=ISO-8859-1',
                                                            ]);
    }

    function deleteReport()
    {
        $reportId = request('id', 0);

        $report = Report::find($reportId);

        return response(json_encode($report->delete()))->withHeaders([
                                                                         'Content-Type' => 'application/json; charset=ISO-8859-1',
                                                                     ]);
    }

    function createReport()
    {
        $reportName  = request('name', 0);
        $reportValue = request('value', 0);

        $report             = new Report();
        $report->name       = $reportName;
        $report->value      = $reportValue;
        $report->created_at = Carbon::now();
        if (!$report->save()) {
            $report = false;
        }
        return response(json_encode($report))->withHeaders([
                                                               'Content-Type' => 'application/json; charset=ISO-8859-1',
                                                           ]);
    }


    function updateReport()
    {
        $reportId    = request('id', 0);
        $reportName  = request('name', 0);
        $reportValue = request('value', 0);

        $report        = Report::find($reportId);
        $report->name  = $reportName;
        $report->value = $reportValue;
        if (!$report->save()) {
            $report = false;
        }
        return response(json_encode($report))->withHeaders([
                                                               'Content-Type' => 'application/json; charset=ISO-8859-1',
                                                           ]);
    }

    function getReport()
    {
        $reportId = request('id', 0);

        $report = Report::find($reportId);

        return response(json_encode($report))->withHeaders([
                                                               'Content-Type' => 'application/json; charset=ISO-8859-1',
                                                           ]);
    }
}
