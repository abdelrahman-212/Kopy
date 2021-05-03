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

    public function takeawayBranch($branch_id){
        session()->put(['branch_id'=>$branch_id]);
        return redirect()->route('home.page');
    }
}
