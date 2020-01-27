<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\GeneralInfo;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['setting'] = SiteSetting::first();
        $data['socials'] = Social::all();
        $data['gen_info'] = GeneralInfo::first();
        $data['skills'] = Skill::orderBy('created_at', 'DESC')->get();
        $data['services'] = Service::orderBy('created_at', 'DESC')->get();
        $data['experiences'] = Experience::orderBy('created_at', 'DESC')->get();
        $data['educations'] = Education::orderBy('created_at', 'DESC')->get();
        $data['portfolios'] = Portfolio::orderBy('created_at', 'DESC')->get();
        $data['pCat'] =Portfolio::select('category')->groupBy('category')->get();
        $data['testimonials'] = Testimonial::orderBy('created_at', 'DESC')->get();
        $data['blogs'] = Blog::orderBy('created_at', 'DESC')->get();

        return view('frontend.index', $data);
    }

    public function message(Request $request)
    {
        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return response()->json(['type' => 'success']);
    }
}
