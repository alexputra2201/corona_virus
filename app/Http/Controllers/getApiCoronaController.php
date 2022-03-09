<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class getApiCoronaController extends Controller
{
    public function index(request $request)
    {

        if ($request->has('country')) {
            $country = $request->country;
        } else {
            $country = "";
        }
        $host = 'covid-19-coronavirus-statistics.p.rapidapi.com';
        $key = '37d1f0fb08msh483edec74b6b078p12311ejsn28b057612743';

        $list_data = $this->getApi($host, $key, $country)['data']['covid19Stats'][0];
        $list_country = $this->getApi($host, $key, $country = '')['data']['covid19Stats'];

        $country_array = [];
        foreach ($list_country as $result) {
            $country_array[] = $result['country'];
        }

        $country = collect($country_array)->unique();

        return view('report', compact('list_data', 'country'));
    }




    private function getApi($host, $key, $country)
    {
        return Http::withHeaders([
            'x-rapidapi-host' => $host,
            'x-rapidapi-key' => $key
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats', [
            "country" => $country
        ]);
    }
}
