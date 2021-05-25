<?php

namespace App\Http\Controllers\Api;


use App\Models\Payment;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;
use Illuminate\Support\Facades\Validator;

class PaymentController extends BaseController
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
        }
        try {


            if (session()->has('checkOut_details')) {
                $request = $request->merge(['amount' => session('checkOut_details')['total']]);
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

                return $this->sendError('error', 'Something went wrong');

            }

        } catch (GuzzleException $exception) {
            $response = json_decode($exception->getResponse()->getBody(true)->getContents(), true);
            return $this->sendError('error', $exception->getMessage());
        }

    }

    public function refund($payment_id)
    {

        try {
            $payment = Payment::find($payment_id);

            if ($payment->status == 'paid') {
                $paymentService = new \Moyasar\Providers\PaymentService();
                $payment_service = $paymentService->fetch($payment->payment_id);
                $payment_service->refund(); // 10.00 SAR
                $payment->update([
                    'status' => 'refunded'
                ]);
                return $this->sendResponse($payment, 'This payment has been refunded');

            }
            if ($payment->status == 'refunded') {
                return $this->sendResponse($payment, 'This payment is already refunded');
            }


        } catch (\Moyasar\Exceptions\ApiException $e) {
            $e->getCode(); // HTTP Status Code
            $e->type(); // Error Type
            $e->getMessage(); // Error Message
            $e->errors(); // Empty Array
            return $this->sendError($payment, $e->getMessage());

        }
    }
}
