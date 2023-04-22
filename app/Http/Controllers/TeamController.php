<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllTeams(){
        $teams = team::all();
        return view('admin.team.view-teams', compact('teams'));
    }

    public function addTeam(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'occupation' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => 'required',
        ));
        
        $team = new team();
        $team->name = $request->input('name');
        $team->occupation = $request->input('occupation');
        $team->email = $request->input('email');
        $team->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/team/', $fileName);
            $team->image = $fileName; 
        }
        $team->status = $request->input('status')==true ? '1':'0';
        $team->save();
        return redirect()->back()->with('status', 'Your team has been saved');
    }

    public function editTeam($id){
        $team = team::Find($id);
        return view('admin.team.edit-team', compact('team'));
    }

    public function updateTeam(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'occupation' => 'required',
            'email' => 'required',
            'description' => 'required',
        ));

        $team = team::Find($id);
        $team->name = $request->input('name');
        $team->occupation = $request->input('occupation');
        $team->email = $request->input('email');
        $team->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'upload/team/'.$team->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/team/', $fileName);
            $team->image = $fileName; 
        }
        $team->update();
        return redirect('/view-teams')->with('status', 'Your team item has been updated');
    }

    public function deleteTeam($id){
        $team = team::Find($id);
        $team->delete();
        return redirect('/view-teams')->with('status', 'Your team item has been deleted');
    }

    public function activeTeam($id)
    {
        $team = team::find($id);
        $team->status = '1';
        $team->update();
        return redirect()->back()->with('status', 'Team Item Activated');
    }

    public function deactiveTeam($id)
    {
        $team = team::find($id);
        $team->status = '0';
        $team->update();
        return redirect()->back()->with('warning', 'Team Item De-activated');
    }
}
