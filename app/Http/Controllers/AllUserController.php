<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AllUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = AllUser::all();
        return view('dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->profile_photo_path->extension();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_photo_path' => $filename,
        ];
        if(AllUser::create($data)){
            $request->profile_photo_path->move('images', $filename);
            return redirect()->back()->with('msg', 'User Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AllUser $allUser, $id)
    {
        $user = AllUser::find($id);
        // dd($user);
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllUser $allUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllUser $allUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllUser $allUser)
    {
        //
    }
}
