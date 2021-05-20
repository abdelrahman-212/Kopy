<?php

namespace App\Http\Controllers\Website;


use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        return view('website.payment');
    }

    public function get_payment(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                'source.name' => 'required',
                'source.cvc' => 'required',
                'source.number' => 'required',
                'source.month' => 'required',
                'source.year' => 'required',
            ),
            array(
                'source[name].required' => 'The name is required',
                'source[cvc].required' => 'The cvc is required',
                'source[number].required' => 'The number is required',
                'source[month].required' => 'The month is required',
                'source[year].required' => 'The year is required',
            )
        );

        // If validation fails, redirect to the settings page and send the errors
        if ($validator->fails()) {
            $error = $validator->getMessageBag();
            $errorarray = [];
            if ($error->first('source.name')) {
                $errorarray['source[name]'] = $error->first('source.name');
            }
            if ($error->first('source.cvc')) {
                $errorarray['source[cvc]'] = $error->first('source.cvc');
            }
            if ($error->first('source.number')) {
                $errorarray['source[number]'] = $error->first('source.number');
            }
            if ($error->first('source.month')) {
                $errorarray['source[month]'] = $error->first('source.month');
            }
            if ($error->first('source.year')) {
                $errorarray['source[year]'] = $error->first('source.year');
            }
            return view('website.payment', compact(['errorarray']));
        }
        try {


            if (session()->has('checkOut_details')) {


                $request = $request->merge(['amount' => session('checkOut_details')['total']]);
                $request->request->remove('_token');
                $request = $request->merge(['amount' => 5000]);
                $endpoint = "https://api.moyasar.com/v1/payments.html";
                $redir = [];
                $client = new Client(['allow_redirects' => true,]);
                $response = $client->request('POST', $endpoint, [
                    'form_params' => $request->all(),
                    'on_stats' => function (TransferStats $stats) use (&$redir) {
                        $redir[] = (string)$stats->getEffectiveUri();
                    }
                ]);
                if ($response->getStatusCode() == '200')
                    return redirect($redir[1]);
                return $statusCode = $response->getStatusCode();

            } else {
                session()->flash('error', 'Something went wrong !, please try again later');
                return redirect()->route('get_cart');
            }

        } catch (RequestException $exception) {
            //$responseBody = $exception->getResponse()->getBody(true)->getContents();
            $response = json_decode($exception->getResponse()->getBody(true)->getContents(), true);
            $errors = $response['errors'];
            return redirect(route('get.payment'))->withInput()->withErrors($errors);
        }
    }
}
