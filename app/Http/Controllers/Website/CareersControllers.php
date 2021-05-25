<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
use App\Models\Careers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareersControllers extends Controller
{

    public function AllJobs()
    {
        $return = (app(FrontController::class)->getAllJobs())->getOriginalContent();
        foreach ($return as $in => $re) {
            if ($in == 'data') {
                $jobs = $re;
                return view('website.page-careers', compact(['jobs']));
            }
        }
    }

    public function GetJob($id)
    {
        $return = (app(FrontController::class)->GetJob($id))->getOriginalContent();
        foreach ($return as $in => $re) {
            if ($in == 'data') {
                $job = $re;

                $responsibilities_ar_my_string = preg_replace('/\r\n/', '#PH#', $job->responsibilities_ar);
                $arr_responsibilities_ar = explode('#PH#', $responsibilities_ar_my_string);
                $responsibilities_en_my_string = preg_replace('/\r\n/', '#PH#', $job->responsibilities_en);
                $arr_responsibilities_en = explode('#PH#', $responsibilities_en_my_string);

                $description_ar_my_string = preg_replace('/\r\n/', '#PH#', $job->description_ar);
                $arr_description_ar = explode('#PH#', $description_ar_my_string);
                $description_en_my_string = preg_replace('/\r\n/', '#PH#', $job->description_en);
                $arr_description_en = explode('#PH#', $responsibilities_en_my_string);

                return view('website.page-career', compact(['job', 'arr_responsibilities_ar', 'arr_responsibilities_en', 'arr_description_ar', 'arr_description_en']));
            }
        }
    }

    public function ApplyJobForm($id)
    {
        $return = (app(FrontController::class)->GetJob($id))->getOriginalContent();
        foreach ($return as $in => $re) {
            if ($in == 'data') {
                $job = $re;
                return view('website.page-career-form', compact(['job']));
            }
        }
    }

    public function CareerRequest(Request $request, $id)
    {
        $return = (app(FrontController::class)->jobRequest($request, $id))->getOriginalContent();
        $temp = '';

        foreach ($return as $in => $re) {

            if ($in == 'success') {
                $temp = $re;
            }
            if (!$temp) {
                session()->put('error', $return['message']);
                return redirect()->back();
            }

            if ($in == 'data') {
                if ($temp == true) {
                    return redirect()->route('careers.all')->with(['success' => 'your application been submitted']);

                } else {
                    $error = $re;
                     $errorarray = [];
                    if ($error->first('name')) {
                        $errorarray['name'] = $error->first('name');

                    }
                    if ($error->first('email')) {
                        $errorarray['email'] = $error->first('email');

                    }
                    if ($error->first('phone')) {
                        $errorarray['phone'] = $error->first('phone');

                    }
                    if ($error->first('description')) {
                        $errorarray['description'] = $error->first('description');

                    }
                    if ($error->first('cv_file')) {
                        $errorarray['cv_file'] = $error->first('cv_file');

                    }
                    $job = Careers::find($id);
                    return view('website.page-career-form', compact(['errorarray', 'job']));


                }
            }


        }
    }
}
