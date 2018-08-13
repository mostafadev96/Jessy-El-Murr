<?php

namespace App\Http\Controllers;

use App\Album;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noOfitems=12;
        if($request->has('gallerypage')) {
            if($request->gallerypage<1 || $request->gallerypage>ceil(Album::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $albums=Album::paginate(12,['*'],'gallerypage');
        $albums->getCollection()->transform(function ($value) {
            $value->photos=Album::find($value->id)->photos();
            return $value;
        });
        return view('Visitor_pages.gallery', ['albums' => $albums]);
//        return $albums;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addgallery');
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
            'description' => 'required',
            'photos.*' => 'required|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $path='visitor/imgs/gallery';
        $titleData=$request->title;
        $descriptionData=$request->description;
        $album=new Album;
        $album->title=$titleData;
        $album->description=$descriptionData;
        $album->size=count($request->photos);
        $album->save();
        $path=$path."/".$album->id.'/';
        foreach ($request->photos as $photo) {
            $gallery=new Gallery;
            $gallery->album_id=$album->id;
            $gallery->save();
            $photo->move(public_path($path), $gallery->id.'.png');
            $gallery->photo=$path.$gallery->id.'.png';
            $gallery->save();
        }
        return redirect('/dashboard/gallery/create')->with('success', 'you have added a new album called: '.$titleData);
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
        $album=Album::find($id);
        $result='no';
        if($album){
            $albums=(object) [
                'id'=>$album->id,
                'title'=>$album->title,
                'size'=>$album->size,
                'photos'=>Album::find($id)->photos(),
                'description'=>$album->description,
            ];
            $result=$albums;
        }
        return  view('Admin_pages.Edit_Element.editgallery', ['album' => $result,'id'=>$id]);
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
            'title' => 'required_without_all:description,photos,selectedPhotos',
            'description' => 'required_without_all:title,photos,selectedPhotos',
            'photos.*' => 'required_without_all:title,description,selectedPhotos|image|mimes:jpeg,bmp,png|max:3000',
            'selectedPhotos'=>'required_without_all:title,description,photos'
        ]);
        $album=Album::find($id);
        $path='visitor/imgs/gallery';
        if($request->input('title')!=""){
            $album->title=$request->title;
        }
        if($request->input('description')!=""){
            $album->description=$request->description;
        }
        if($request->input('selectedPhotos')!=""){
            $photoIds=explode(",", $request->selectedPhotos);
            $album->size-=count($photoIds);
            foreach ($photoIds as $id){
                $gal=Gallery::find($id);
                unlink($gal->photo);
                $gal->delete();
            }
        }
        if($request->hasFile('photos')){
            $path=$path."/".$album->id.'/';
            foreach ($request->photos as $photo) {
                $gallery=new Gallery;
                $gallery->album_id=$album->id;
                $gallery->save();
                $photo->move(public_path($path), $gallery->id.'.png');
                $gallery->photo=$path.$gallery->id.'.png';
                $gallery->save();
                $album->size+=1;
            }
        }

        $album->save();
        return redirect('/dashboard/gallery/'.$album->id.'/edit')->with('success', 'you have edited the selected album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alb=Album::find($id);
        $photos=Album::find($id)->photos();
//        foreach ($photos as $photo){
//            unlink($photo->photo);
//        }
        $folder='';
        $photoIds=explode('/', $photos[0]->photo, -1);
        for ($i=0;$i<count($photoIds)-1;$i++){
            $folder.=$photoIds[$i].'/';
        }
        $folder.=$photoIds[$i];
        Log::debug($folder);
        $this->rmrf($folder);
        $alb->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllGallery(Request $request)
    {
        $noOfitems=12;
        if($request->has('gallerypage')) {
            if($request->gallerypage<1 || $request->gallerypage>ceil(Album::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $albums=Album::paginate(12,['*'],'gallerypage');
        return view('Admin_pages.All_Tables.gallery', ['albums' => $albums]);
//        return $albums;
    }

}
