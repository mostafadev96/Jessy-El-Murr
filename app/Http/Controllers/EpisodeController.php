<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noOfitems=12;
        if($request->has('episodepage')) {
            if($request->episodepage<1 || $request->episodepage>ceil(Episode::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $episodes = Episode::paginate(12,['*'],'episodepage');
        return view('Visitor_pages.episodes', ['episodes' => $episodes]);
//        return $episodes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addepisode');
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
            'link' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $path='visitor/imgs/episodes/';
        $titleData=$request->title;
        $linkData=$request->link;
        $descriptionData=$request->description;
        $episode=new Episode;
        $episode->title=$titleData;
        $episode->link=$linkData;

        $episode->srtdesc=$descriptionData;
        $episode->save();
        $episode->photo=$path.$episode->id.'.png';
        $request->photo->move(public_path($path), $episode->id.'.png');
        $episode->save();

        return redirect('/dashboard/episode/create')->with('success', 'you have added a new episode called: '.$titleData);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $epi=Episode::find($id);
        $result='no';
        if($epi){
            $result=$epi;
        }
        return  view('Admin_pages.Edit_Element.editepisode', ['episode' => $result,'id'=>$id]);
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
            'title' => 'required_without_all:link,description,photo',
            'link' => 'required_without_all:title,description,photo',
            'description' => 'required_without_all:title,link,photo',
            'photo' => 'required_without_all:title,link,description|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $epi=Episode::find($id);
        $path='visitor/imgs/episodes/';
        if($request->input('title')!=""){
            $epi->title=$request->title;
        }
        if($request->input('link')!=""){
            $epi->link=$request->link;
        }
        if($request->input('description')!=""){
            $epi->srtdesc=$request->description;
        }
        if($request->hasFile('photo')){
            unlink($epi->photo);
            $request->photo->move(public_path($path), $id.'.png');
            $epi->photo=$path.$id.'.png';
        }
        $epi->save();
        return redirect('/dashboard/episode/'.$id.'/edit')->with('success', 'you have edited the episode content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode=Episode::find($id);
        unlink($episode->photo);
        //Delete photo from file system before deletion of item
        $episode->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllEpisodes(Request $request)
    {
        $noOfitems=12;
        if($request->has('episodepage')) {
            if($request->episodepage<1 || $request->episodepage>ceil(Episode::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $episodes = Episode::paginate(12,['*'],'episodepage');
        return view('Admin_pages.All_Tables.episodes', ['episodes' => $episodes]);
//        return $episodes;
    }
}
