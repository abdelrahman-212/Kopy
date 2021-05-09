<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function servicePage(){
        return view('website.deliveryORtakeaway');
    }

    public function deliveryPage(){
        return view('website.deliveryORtakeaway');
    }

    public function takeawayPage(){

        $branches = Branch::with(['city', 'area', 'deliveryAreas', 'workingDays'])->get();

        foreach($branches as $branch) {
            $currentDay =  $branch->workingDays()->where('day', strtolower(now()->englishDayOfWeek))->get();
            $branch->working_hours = $currentDay;
        }

        return view('website.takeaway',compact(['branches']));
    }

    public function takeawayBranch($id,$service_type){

        $request = new Request();
        if($service_type == 'takeaway'){
            $request->merge(['branch_id' => $id]);
        }
        else{
            $request->merge(['address_id' => $id]);
            session()->put(['address_id'=>$id]);
        }
        $return = (app(\App\Http\Controllers\Api\BranchesController::class)->getBranchWorkingHours($request))->getOriginalContent();

        if ($return['success'] == true) {
            session()->put(['branch_id'=>$return['data']['id']]);
            session()->put(['service_type'=>$service_type]);
            session()->forget('status');
            return redirect()->route('menu.page');
        }
       return redirect()->back()->withErrors(['err'=>$return['message']]);
    }
}
