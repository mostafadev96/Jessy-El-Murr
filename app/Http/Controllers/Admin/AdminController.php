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
        $phrases=Biography::where('id', '<',5)->get();
        $videos=Video::where('id', '<',5)->get();
        $guests=Guest::where('id', '<',5)->get();
        $episodes=Episode::where('id', '<',5)->get();
        $albums=Album::where('id', '<',5)->get();
        $testimonials=Testimonial::where('id', '<',5)->get();
        $personal_info=Personal::where('id','<',5)->get();
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
