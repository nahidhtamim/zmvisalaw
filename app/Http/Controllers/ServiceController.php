<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllServices(){
        $services = service::all();
        return view('admin.service.view-services', compact('services'));
    }

    public function addService(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|unique:services',
            'description' => 'required',
            'image' => 'required',
            'fontawesome' => 'required',
        ));
        
        $service = new service();
        $service->fontawesome = $request->input('fontawesome');
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->meta_tag = $request->input('meta_tag');
        $service->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/service/', $fileName);
            $service->image = $fileName; 
        }
        $service->status = $request->input('status')==true ? '1':'0';
        $service->save();
        return redirect()->back()->with('status', 'Your service has been saved');
    }

    public function editService($id){
        $service = service::Find($id);
        return view('admin.service.edit-service', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required',
            'fontawesome' => 'required',
        ));
        $service = service::Find($id);
        $service->fontawesome = $request->input('fontawesome');
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->meta_tag = $request->input('meta_tag');
        $service->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $destination = 'upload/service/'.$service->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/service/', $fileName);
            $service->image = $fileName; 
        }
        $service->update();
        return redirect('/view-services')->with('status', 'Your service item has been updated');
    }

    public function deleteService($id){
        $service = service::Find($id);
        $service->delete();
        return redirect('/view-services')->with('status', 'Your service item has been deleted');
    }

    public function activeService($id)
    {
        $service = service::find($id);
        $service->status = '1';
        $service->update();
        return redirect()->back()->with('status', 'Service Item Activated');
    }

    public function deactiveService($id)
    {
        $service = service::find($id);
        $service->status = '0';
        $service->update();
        return redirect()->back()->with('warning', 'Service Item De-activated');
    }

}
