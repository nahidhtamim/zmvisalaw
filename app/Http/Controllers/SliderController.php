<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllSliders(){
        $sliders = slider::all();
        return view('admin.slider.view-sliders', compact('sliders'));
    }

    public function addSlider(Request $request)
    {
        $this->validate($request, array(
            'line_one' => 'required',
            'line_two' => 'required',
            'image' => 'required',
        ));
        
        $slider = new slider();
        $slider->line_one = $request->input('line_one');
        $slider->line_two = $request->input('line_two');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/slider/', $fileName);
            $slider->image = $fileName; 
        }
        $slider->status = $request->input('status')==true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status', 'Your slider has been saved');
    }

    public function editSlider($id){
        $slider = slider::Find($id);
        return view('admin.slider.edit-slider', compact('slider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $this->validate($request, array(
            'line_one' => 'required',
            'line_two' => 'required',
        ));
        $slider = slider::Find($id);
        $slider->line_one = $request->input('line_one');
        $slider->line_two = $request->input('line_two');
        if($request->hasfile('image'))
        {
            $destination = 'upload/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/slider/', $fileName);
            $slider->image = $fileName; 
        }
        $slider->update();
        return redirect('/view-sliders')->with('status', 'Your slider item has been updated');
    }

    public function deleteSlider($id){
        $slider = slider::Find($id);
        $slider->delete();
        return redirect('/view-sliders')->with('status', 'Your slider item has been deleted');
    }

    public function activeSlider($id)
    {
        $slider = slider::find($id);
        $slider->status = '1';
        $slider->update();
        return redirect()->back()->with('status', 'Slider Item Activated');
    }

    public function deactiveSlider($id)
    {
        $slider = slider::find($id);
        $slider->status = '0';
        $slider->update();
        return redirect()->back()->with('warning', 'Slider Item De-activated');
    }
}
