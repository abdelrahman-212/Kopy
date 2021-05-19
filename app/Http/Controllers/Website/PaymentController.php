<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;

class PaymentController extends Controller
{
    public function index(Request $request){
        session()->put(['checkOut_details'=>$request->all()]);
        return view('website.payment');
    }

    public function get_payment(Request $request)
    {
        $request->request->remove('_token');
        $request = $request->merge(['amount' => 5000]);

        $endpoint = "https://api.moyasar.com/v1/payments.html";
        $redir = [];
        $client = new Client(['allow_redirects'=>true,]);
        $response = $client->request('POST', $endpoint, [
            'form_params' => $request->all(),
            'on_stats'=>function (TransferStats $stats) use(&$redir) {
                $redir[] = (string)$stats->getEffectiveUri();
            }
        ]);
        if ($response->getStatusCode() == '200')
            return redirect($redir[1]);
        return $statusCode = $response->getStatusCode();

    }

}
