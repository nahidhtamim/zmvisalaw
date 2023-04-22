<?php

namespace App\Http\Controllers;

use App\Models\metatag;
use Illuminate\Http\Request;

class MetaTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewMetaTags(){
        $metatags = metatag::all();
        return view('admin.metatag.view-metatags', compact('metatags'));
    }

    public function addMetaTag(Request $request)
    {
        $this->validate($request, array(
            'page_name' => 'required|unique:metatags',
            'meta_tag' => 'required',
        ));
        
        $metatag = new metatag();
        $metatag->page_name = $request->input('page_name');
        $metatag->meta_tag = $request->input('meta_tag');
        $metatag->save();
        return redirect()->back()->with('status', 'Your metatag has been saved');
    }

    public function editMetaTag($id){
        $metatag = metatag::Find($id);
        return view('admin.metatag.edit-metatag', compact('metatag'));
    }

    public function updateMetaTag(Request $request, $id)
    {
        $this->validate($request, array(
            'meta_tag' => 'required',
        ));

        $metatag = metatag::Find($id);
        // $metatag->page_name = $request->input('page_name');
        $metatag->meta_tag = $request->input('meta_tag');
        $metatag->update();
        return redirect('/view-metatags')->with('status', 'Your metatag item has been updated');
    }

    public function deleteMetaTag($id){
        $metatag = metatag::Find($id);
        $metatag->delete();
        return redirect('/view-metatags')->with('status', 'Your metatag item has been deleted');
    }

}
