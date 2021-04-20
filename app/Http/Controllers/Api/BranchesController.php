<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use DB;

class BranchesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//Get all branches with its city, areas and today working hours

        $branches = Branch::with(['city', 'area', 'deliveryAreas'])->with(['workingDays' => function($day) {
            $day->where('day', strtolower(now()->englishDayOfWeek))->first();
        }])->paginate(10);

        $branches = Branch::with(['city', 'area', 'deliveryAreas', 'workingDays'])->get();

        foreach($branches as $branch) {
            $currentDay =  $branch->workingDays()->where('day', strtolower(now()->englishDayOfWeek))->first();
            $branch->working_hours = $currentDay;
        }

        return $this->sendResponse($branches, 'Branches Resource');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Branch $branch)
    {
        $branch = $branch->with(['city', 'area', 'deliveryAreas'])->with(['workingDays' => function($day) {
            $day->where('day', strtolower(now()->englishDayOfWeek))->first();
        }])->first();

        return $this->sendResponse($branch, 'Branch retreived successfully!');
    }

    public function getBranchWorkingHours(Request $request) {



        if ($request->address_id) {

            $customerAddress = Address::where('id', $request->address_id)->first();

            // get the branch covers customer area and open
            $area = $customerAddress->area;

            if ($area) {
                $branch = DB::table('branch_delivery_areas')->where('area_id', $area->id. "")->first();

                if ($branch) {
                    $branch = Branch::find($branch->branch_id);

                    if ($branch) {
                        $branch->workingDays;
                        return $this->sendResponse($branch, 'Branch Retrieved successfuly!');
                    } else {
                        return $this->sendError("sorry there is no branch cover this area");
                    }
                } else {
                    return $this->sendError("sorry there is no branch cover this area");
                }
            } else {
                return $this->sendError("sorry there is no branch cover this area");
            }
        } else if ($request->branch_id) {
            $branch = Branch::find($request->branch_id);
            if ($branch) {
                $branch->workingDays;
                return $this->sendResponse($branch, 'Branch Retrieved successfuly!');
            }
        }

        return $this->sendError("Please Enter Valid Address or branch");
    }
}
