<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllReviews(){
        $reviews = review::all();
        return view('admin.review.view-reviews', compact('reviews'));
    }

    public function addReview(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required'
        ));
        
        $review = new review();
        $review->name = $request->input('name');
        $review->occupation = $request->input('occupation');
        $review->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/review/', $fileName);
            $review->image = $fileName; 
        }
        $review->status = $request->input('status')==true ? '1':'0';
        $review->save();
        return redirect()->back()->with('status', 'Your review has been saved');
    }

    public function editReview($id){
        $review = review::Find($id);
        return view('admin.review.edit-review', compact('review'));
    }

    public function updateReview(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required'
        ));

        $review = review::Find($id);
        $review->name = $request->input('name');
        $review->occupation = $request->input('occupation');
        $review->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'upload/review/'.$review->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/review/', $fileName);
            $review->image = $fileName; 
        }
        $review->update();
        return redirect('/view-reviews')->with('status', 'Your review item has been updated');
    }

    public function deleteReview($id){
        $review = review::Find($id);
        $review->delete();
        return redirect('/view-reviews')->with('status', 'Your review item has been deleted');
    }

    public function activeReview($id)
    {
        $review = review::find($id);
        $review->status = '1';
        $review->update();
        return redirect()->back()->with('status', 'review Item Activated');
    }

    public function deactiveReview($id)
    {
        $review = review::find($id);
        $review->status = '0';
        $review->update();
        return redirect()->back()->with('warning', 'review Item De-activated');
    }
}
