<?php

namespace App\Http\Controllers;

use App\Album;
use App\Biography;
use App\Episode;
use App\Guest;
use App\Personal;
use App\Testimonial;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin_pages.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $query = $request->input('query');
        $type = lcfirst($request->input('type'));
        if($type=='personal'){
            $result=Personal::all();
        }
        elseif ($type=='biography'){
            $result=Biography::all();
        }
        elseif ($type=='video'){
            $result = Video::whereRaw("title LIKE '%$query%' ")->get()->toArray();
        }
        elseif ($type=='guest'){
            $result = Guest::whereRaw("name LIKE '%$query%' ")->get()->toArray();
        }
        elseif ($type=='episode'){
            $result = Episode::whereRaw("title LIKE '%$query%' ")->get()->toArray();
        }
        elseif ($type=='gallery'){
            $result = Album::whereRaw("title LIKE '%$query%' ")->get()->toArray();
        }
        elseif ($type=='testimonial'){
            $result = Testimonial::whereRaw("name LIKE '%$query%' ")->get()->toArray();
        }
        if ( empty ( $result ) ) {
            return response()->json(['status'=>'404','data'=>$result]);
        }
        return response()->json(['status'=>'200','data'=>$result,'type'=>$type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
