<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register2()
    {
        return view('webistecontent.register2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        try {
            $this->validate($request, [
                'fullname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'id_number' => 'required',
                'legal_address' => 'required',
                'profile_image' => 'required',
                'password' => 'required',
            ]);

            // Store cover
            if ($request->hasFile('profile_image')) {
                $profile_image = $request->file('profile_image');
                $profile_imageName = time().'.'.$profile_image->getClientOriginalExtension();
                $path = public_path('/images');
                $profile_image->move('/images/', $profile_imageName);
            } 

            $HashPassword = Hash::make($request->password);

            // Save to database
            $user = new User();
            $user->fullname = $request->input('fullname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->gender = $request->input('gender');
            $user->id_number = $request->input('id_number');
            $user->legal_address = $request->input('legal_address');
            $user->password = $HashPassword;
            $user->profile_image = $profile_imageName; 
            $user->save();

            return back()->with('success','User added Successfully..');

        } catch (\Throwable $th) {
            return back()->withErrors(['danger' => $th->getMessage()], 500);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
