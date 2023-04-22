<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $abouts = about::all();
        return view('admin.dashboard', compact('abouts'));
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, array(
            'password' => 'required|string|min:8|confirmed',
        ));

        $profile = User::find(Auth::user()->id);
        $profile->password = Hash::make($request->password);
        $profile->update();
        return redirect()->back()->with('status', 'Password Updated Successfully'); 
    }

}
