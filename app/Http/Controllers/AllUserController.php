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
            return redirect()->route('dasboard')->with('msg', 'User Added Successfully');
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
    public function edit(AllUser $allUser,$id)
    {
        $user = AllUser::find($id);
        // dd($user);
        return view('editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'profile_photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = AllUser::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_photo_path')) {
            $imagePath = $request->file('profile_photo_path')->store('images', 'public');
            $user->profile_photo_path = $imagePath;
        }

        $user->save();
        return redirect()->route('dashboard')->with('msg', 'User updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllUser $allUser)
    {
        //
    }
}
