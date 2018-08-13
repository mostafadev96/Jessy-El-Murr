<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Biography;
use App\Episode;
use App\Guest;
use App\Personal;
use App\Testimonial;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function dashboard(){
        $phrases=Biography::take(3)->get();
        $videos=Video::take(3)->get();
        $guests=Guest::take(3)->get();
        $episodes=Episode::take(3)->get();
        $albums=Album::take(3)->get();
        $testimonials=Testimonial::take(3)->get();
        $personal_info=Personal::take(3)->get();
        $data=array('personal' =>$personal_info,
            'biography'=>$phrases,
            'video'=>$videos,
            'guest'=>$guests,
            'episode'=>$episodes,
            'gallery'=>$albums,
            'testimonial'=>$testimonials,
        );
        $data = json_encode($data);
        return view('Admin_pages.dashboard')->with('data',$data);
    }
}
