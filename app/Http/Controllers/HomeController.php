<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\blog;
use App\Models\review;
use App\Models\service;
use App\Models\slider;
use App\Models\team;
use App\Models\metatag;
use App\Models\social;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $sliders  = slider::where('status', 1)->get();
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $about = about::where('id', 1)->first();
        $home_metatag = metatag::where('id', 1)->first();
        $reviews = review::where('status', 1)->get();
        $blogs = blog::where('status', '1')->orderBy('created_at', 'desc')->get();
        return view('index', compact('sliders', 'services', 'about', 'reviews', 'blogs', 'home_metatag', 'socials'));
    }

    public function about(){
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $about = about::where('id', 1)->first();
        $about_metatag = metatag::where('id', 2)->first();
        return view('about', compact('services', 'about', 'about_metatag', 'socials'));
    }

    public function team(){
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $team_metatag = metatag::where('id', 3)->first();
        return view('team', compact('services', 'teams', 'team_metatag', 'socials'));
    }

    public function contact(){
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $contact_metatag = metatag::where('id', 4)->first();
        return view('contact', compact('services', 'contact_metatag', 'socials'));
    }

    public function service_details($slug){
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $service = service::where('slug', $slug)->first();
        return view('service-details', compact('service', 'services', 'socials'));
    }

    public function blog_details($slug){
        $services = service::where('status', 1)->get();
        $socials = social::where('status', 1)->get();
        $blog = blog::where('slug', $slug)->where('status', '1')->first();
        return view('blog-details', compact('blog', 'services', 'socials'));
    }

    public function license(){
        return view('license');
    }

}
