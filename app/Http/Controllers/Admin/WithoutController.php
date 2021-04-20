<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Without;
use App\Filters\WithoutFilters;
use App\Models\Category;


class WithoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, WithoutFilters $filters)
    {
        $categories = Category::all();

        $withouts = Without::filter($filters)->get();
        return view('admin.withouts.index', compact('categories', 'withouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.withouts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name_ar" => 'required|string',
            "name_en" => 'required|string',
            "description_ar" => 'nullable|required|string',
            "description_en" => 'nullable|required|string',
            "price" => 'required|numeric',
            "calories" => 'required|numeric',
            "image" => 'required|image',
            "category_id" => 'required|exists:categories,id',
        ]);
        
        $without = Without::create($validatedData);

        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move(public_path('withouts'), $image_new_name);
            $without->image = '/withouts/' . $image_new_name;
            $without->save();
        }

        if (!$without)
            return redirect()->route('admin.without.index')->with([
                'type' => 'error',
                'message' => 'There is something wrong!!'
            ]);

        return redirect()->route('admin.without.index')->with([
            'type' => 'success',
            'message' => 'Without Created successfuly'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Without $without)
    {
        return view('admin.withouts.show', compact('without'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Without $without)
    {
        $categories = Category::all();
        return view('admin.withouts.edit', compact('without', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Without $without)
    {

        $validatedData = $request->validate([
            "name_ar" => 'required|string',
            "name_en" => 'required|string',
            "description_ar" => 'nullable|required|string',
            "description_en" => 'nullable|required|string',
            "price" => 'required|numeric',
            "calories" => 'required|numeric',
            "image" => 'nullable|image',
            "category_id" => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move(public_path('withouts'), $image_new_name);
            $without->image = '/withouts/' . $image_new_name;
            $without->save();
        }
        
        if (!$without->update($validatedData))
            return redirect()->route('admin.without.index')->with([
                'type' => 'error',
                'message' => 'There is something wrong!!'
            ]);

        return redirect()->route('admin.without.index')->with([
            'type' => 'success',
            'message' => 'Without Updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Without $without)
    {

        $without->delete();

        return redirect()->back()->with([
            'type' => 'success',
            'message' => 'Without deleted successfuly'
        ]);

    }
}
