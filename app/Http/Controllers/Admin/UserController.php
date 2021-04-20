<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Branch;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->whereHas('roles', function ($role) {
            $role->where('name', '!=', 'customer');
        })->with('roles')->get();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'customer')->get();
        $branches = Branch::get();
        return view('admin.user.create', compact('roles', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'roles' => 'required|array',
            'branches' => 'required|array',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:4',
            'image' => 'nullable|image|max:5000',
        ]);


        if ($request->filled('middle_name')) {
            $name = $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name;
        } else {
            $name = $request->first_name . ' ' . $request->last_name;
        }


        $user = User::create([
            'name' => $name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'image' => '',
            'age' => $request->age,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'activation_token' => "",
            'active' => 1
        ]);

        
        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move(public_path('users'), $image_new_name);
            $user->image = '/users/' . $image_new_name;
            $user->save();
        }
        

        $user->attachRoles($request->roles);
        $user->branches()->sync($request->branches);

        return redirect()->route('admin.user.index')->with([
            'type' => 'success',
            'message' => 'User insert successfuly'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->load('roles');
        $roles = Role::all();
        $branches = Branch::get();
        return view('admin.user.edit', compact('user', 'roles', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable',
            'last_name' => 'required|min:3|max:20',
            'roles' => 'required|array',
            'email' => 'required|email',
            'first_phone' => 'nullable',
            'age' => 'nullable',
            'second_phone' => 'nullable',
            'image' => 'nullable|image|max:5000'
        ]);

        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move(public_path('users'), $image_new_name);
            $user->image = '/users/' . $image_new_name;
            $user->save();
        }
        

        //dd($request->all(), $attributes);
        $user->update($attributes);

        $user->roles()->detach();
        $user->roles()->syncWithoutDetaching($request->roles);

        $user->branches()->detach();
        $user->branches()->syncWithoutDetaching($request->branches);

        return redirect()->route('admin.user.index')->with([
            'type' => 'success',
            'message' => 'User updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index')->with([
            'type' => 'error',
            'message' => 'Role deleted successfuly'
        ]);
    }
}
