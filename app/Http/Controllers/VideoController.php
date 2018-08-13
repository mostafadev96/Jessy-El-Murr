<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
//use Alaouy\Youtube\Facades\Youtube;
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
        return view('Visitor_pages.videos', ['videos' => $videos]);
//        return $array;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'link' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $path='visitor/imgs/videos/';
        $titleData=$request->title;
        $durationData=$request->duration;
        $linkData=$request->link;
        $descriptionData=$request->description;
        $video=new Video;
        $video->title=$titleData;
        $video->duration=$this->secToHR($durationData);
        $video->link=$linkData;
        $video->srtdesc=$descriptionData;
        $video->save();
        $imageName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path($path), $video->id.'.png');
        $video->photo=$path.$video->id.'.png';
        $video->save();
        return redirect('/dashboard/video/create')->with('success', 'you have added a new video called: '.$titleData);
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
        $vid=Video::find($id);
        $result='no';
        if($vid){
            $result=$vid;
        }
        return  view('Admin_pages.Edit_Element.editvideo', ['video' => $result,'id'=>$id]);
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
        $request->validate([
            'title' => 'required_without_all:duration,link,description,photo',
            'duration' => 'required_without_all:title,description,link,photo',
            'link' => 'required_without_all:title,duration,description,photo',
            'description' => 'required_without_all:title,duration,link,photo',
            'photo' => 'required_without_all:title,link,description,duration|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $vid=Video::find($id);
        $path='visitor/imgs/Videos/';
        if($request->input('title')!=""){
            $vid->title=$request->title;
        }
        if($request->input('link')!=""){
            $vid->link=$request->link;
        }
        if($request->input('duration')!=""){
            $vid->duration=$this->secToHR($request->duration);
        }
        if($request->input('description')!=""){
            $vid->srtdesc=$request->description;
        }
        if($request->hasFile('photo')){
            unlink($vid->photo);
            $request->photo->move(public_path($path), $id.'.png');
            $vid->photo=$path.$id.'.png';
        }
        $vid->save();
        return redirect('/dashboard/video/'.$id.'/edit')->with('success', 'you have edited the video content');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vid=Video::find($id);
        unlink($vid->photo);
        $vid->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllVideos(Request $request)
    {
        $noOfitems=12;
        if($request->has('videopage')) {
            if($request->videopage<1 || $request->videopage>ceil(Video::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $videos = Video::paginate($noOfitems,['*'],'videopage');
        return view('Admin_pages.All_Tables.videos', ['videos' => $videos]);
    }
}
