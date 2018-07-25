<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noOfitems=12;
//        $videoList = Youtube::searchVideos('nature');
//        $video = Youtube::getVideoInfo('jPyKU4iqT9M');
//        $array = json_decode(json_encode($video), True);
        if($request->has('videopage')) {
            if($request->videopage<1 || $request->videopage>ceil(Video::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $videos = Video::paginate($noOfitems,['*'],'videopage');
        return view('videos', ['videos' => $videos]);
//        return $array;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
