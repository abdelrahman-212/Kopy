<?php

namespace App\Http\Controllers\Website;


use App\Models\Payment;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;
use Illuminate\Support\Facades\Validator;
use Moyasar\Providers\PaymentService;

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
                'source.cvc' => 'required|max:4|min:3',
                'source.number' => 'required|digits:16',
                'source.month' => 'required|in:01,02,03,04,05,06,07,08,09,10,11,12',
                'source.year' => 'required|digits:4|integer|min:' . (date('Y')),
            ),
            array(
                'source.name.required' => 'The name is required',
                'source.cvc.required' => 'The cvc is required',
                'source.cvc.max' => 'The cvc is too long max is 4 numbers',
                'source.cvc.min' => 'The cvc is too short min is 3 numbers',
                'source.number.digits' => 'The CVC number must be 16 digits',
                'source.number.required' => 'The CVC number is required',
                'source.month.required' => 'The month is required',
                'source.month.in' => 'The month is not valid',
                'source.year.required' => 'The year is required',
                'source.year.min' => 'The year is Not Valid',
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
                $amount = (int)session('checkOut_details')['total'];
                $request = $request->merge(['amount' => $amount * 100]);
                $request->request->remove('_token');
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

        }

        catch (GuzzleException $exception) {
             //$responseBody = $exception->getResponse()->getBody(true)->getContents();
            $response = json_decode($exception->getResponse()->getBody(true)->getContents(), true);
            $errors = $response['errors'];
            if ($errors) {
                session()->flash('err', $errors);
            }
            return redirect(route('get.payment'))->withInput();
        }

    }

}
