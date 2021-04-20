<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Careers::where('status', 1)->get();
        return $jobs;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function request($id)
    {
        $job = Careers::find($id);
        if (!$job) {
            return redirect()->route('front.careers.index')->with([
                'type' => 'success',
                'error' => 'Job Not Found'
            ]);
        }
        // return view('front.careers.create',compact('job'));
        return ($job);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function apply(Request $request, $id)
    {


        $job = Careers::find($id);
        if (!$job) {
            return redirect()->route('front.careers.index')->with([
                'type' => 'success',
                'error' => 'Job Not Found'
            ]);
        }

        $attributes = $request->validate([
            'name' => 'min:3|max:20',
            'email' => 'required',
            'cv_file' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000',
            'description_en' => 'nullable',
         ]);
        if ($request->hasFile('cv_file')) {

            $file = $request->cv_file;
            $file_new_name = time() . $file->getClientOriginalName();
            $file_path = $file->move(public_path('cv_files'), $file_new_name);

        }
        $make_request = $job->job_requests()->create([
            'name' => $request->name,
            'email' => $request->email,
            'cv_file' => '/cv_files/' . $file_path,
            'description' => $request->description,
        ]);
        return $make_request;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
