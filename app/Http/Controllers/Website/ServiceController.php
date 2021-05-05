<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            $request->branch_id = $id;
        }
        else{
            $request->address_id = $id;
        }
        $return = (app(\App\Http\Controllers\Api\BranchesController::class)->getBranchWorkingHours($request))->getOriginalContent();

        if ($return['success'] == true) {
            session()->put(['branch_id'=>$return['data']['id']]);
            session()->put(['service_type'=>$service_type]);
            return redirect()->route('menu.page');
        }
       return redirect()->back()->with('err',$return['message']);
    /*
     @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    */
    }
}
