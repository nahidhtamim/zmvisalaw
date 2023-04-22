<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editAbout($id){
        $about = about::Find($id);
        return view('admin.edit-about', compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, array(
            'line_one' => 'required',
            'description' => 'required',
        ));

        $about = about::Find($id);
        if($request->hasfile('image'))
        {
            $destination = 'upload/about/'.$about->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/about/', $fileName);
            $about->image = $fileName; 
        }
        $about->line_one = $request->input('line_one');
        $about->description = $request->input('description');
        $about->update();
        return redirect('/dashboard')->with('status', 'Your about item has been updated');
    }

}
