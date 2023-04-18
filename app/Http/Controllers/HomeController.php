<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $currentDate = $this->currentDate();
        return view('home', compact('currentDate'));
    }

    public function result(Request $request)
    {
        $validatedData = $request->validate([
            'dni' => ['required', 'numeric', 'regex:/^([0-9]){8}$/']
        ]);

        $person = $this->consumeAPI($validatedData['dni']);
        $currentDate = $this->currentDate();

        return view('data-by-dni', compact('person', 'currentDate'));
    }

    public function currentDate()
    {
        $weekdayoptions = [
            0 => 'Domingo', 1 => 'Lunes', 2 => 'Martes', 3 => 'Miércoles',
            4 => 'Jueves', 5 => 'Viernes', 6 => 'Sábado'
        ];

        $monthoptions = [
            1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
            5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Setiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
        ];

        $currentDate = getdate();
        $weekday = $weekdayoptions[$currentDate['wday']];
        $mday = $currentDate['mday'];
        $month = $monthoptions[$currentDate['mon']];
        $year = $currentDate['year'];

        return $currentDate = $weekday . ', ' . $mday . ' de ' . $month . ' del ' . $year;
    }

    public function consumeAPI($dni)
    {
        $token = config('services.apisnetpe.token');
        $dniurl = config('services.apisnetpe.dniurl');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $dniurl . $dni,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Referer: https://apis.net.pe/consulta-dni-api',
            'Authorization: Bearer ' . $token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $person = json_decode($response);
    }
}
