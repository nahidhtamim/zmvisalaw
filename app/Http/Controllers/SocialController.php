<?php

namespace App\Http\Controllers;

use App\Models\social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllSocials(){
        $socials = social::all();
        return view('admin.social.view-socials', compact('socials'));
    }

    public function addSocial(Request $request)
    {
        $social = new social();
        $social->fontawesome = $request->input('fontawesome');
        $social->link = $request->input('link');
        $social->status = $request->input('status')==true ? '1':'0';
        $social->save();
        return redirect()->back()->with('status', 'Your social has been saved');
    }

    public function editSocial($id){
        $social = social::Find($id);
        return view('admin.social.edit-social', compact('social'));
    }

    public function updateSocial(Request $request, $id)
    {
        $social = social::Find($id);
        $social->fontawesome = $request->input('fontawesome');
        $social->link = $request->input('link');
        $social->update();
        return redirect('/view-socials')->with('status', 'Your social item has been updated');
    }

    public function deleteSocial($id){
        $social = social::Find($id);
        $social->delete();
        return redirect('/view-socials')->with('status', 'Your social item has been deleted');
    }

    public function activeSocial($id)
    {
        $social = social::find($id);
        $social->status = '1';
        $social->update();
        return redirect()->back()->with('status', 'social Item Activated');
    }

    public function deactiveSocial($id)
    {
        $social = social::find($id);
        $social->status = '0';
        $social->update();
        return redirect()->back()->with('warning', 'social Item De-activated');
    }
}
