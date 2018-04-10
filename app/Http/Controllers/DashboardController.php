<?php

namespace App\Http\Controllers;

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
        $content = json_decode('{"current": 1,"rowCount": 10,"rows": [{"id": 19,"name": "123@test.de","created_at": "2014-05-30T22:15:00"},{"id": 14,"name": "123@test.de","created_at": "2014-05-30T20:15:00"}],"total": 1123}');

        $currentPage  = request('current');
        $listingCount = request('rowCount');
        $sort         = request('sort');
        $searchText   = request('searchPhrase');





        return response(json_encode($content))->withHeaders([
                                                'Content-Type' => 'application/json; charset=ISO-8859-1',
                                            ]);
    }
}
