<?php

namespace App\Http\Controllers;

use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleXMLElement;

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

        $report             = Report::find($reportId);
        $report->name       = $reportName;
        $report->value      = $reportValue;
        $report->updated_at = Carbon::now();

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

    function getDash()
    {
        $reports = Report::take(4)->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get();
        $curl    = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://exame.abril.com.br/noticias-sobre/mercado-imobiliario/feed/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/xml',
            ),
        ));
        $feed = curl_exec($curl);
        $err  = curl_error($curl);
        curl_close($curl);
        if ($err) {
            error_log("Erro ao obter dados meteorológicos:" . $err);
        } else {

        }
        $doc              = new SimpleXmlElement($feed, LIBXML_NOCDATA);
        $noticia          = $doc->channel->item[0];
        $noticia->imagem  = $noticia->enclosure->attributes()->url[0];
        $noticia2         = $doc->channel->item[1];
        $noticia2->imagem = $noticia2->enclosure->attributes()->url[0];


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3477/current?token=7c004e896f16469e76abc7858e33989b",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
            ),
        ));
        $tempo = curl_exec($curl);
        $err   = curl_error($curl);
        curl_close($curl);
        if ($err) {
            error_log("Erro ao obter dados meteorológicos:" . $err);
        } else {
            $tempo = json_decode($tempo);
        }
        $tempo->data->date = Carbon::createFromFormat('Y-m-d H:i:s', $tempo->data->date)->format('H:i');

        return view('dashboard', [
            'reports' => $reports,
            'tempo' => $tempo,
            'noticia' => $noticia,
            'noticia2' => $noticia2,

        ]);
    }
}
