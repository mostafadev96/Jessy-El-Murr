<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noOfitems=12;
        if($request->has('guestpage')) {
            if($request->guestpage<1 || $request->guestpage>ceil(Guest::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
                }
        }
        $guests = Guest::paginate(12,['*'],'guestpage');
        return view('Visitor_pages.guests', ['guests' => $guests]);
//        return $guests;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addguest');
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
            'name' => 'required',
            'job' => 'required',
            'plane' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'photo' => 'required|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $path='visitor/imgs/guests/';
        $nameData=$request->name;
        $jobData=$request->job;
        $planeData=$request->plane;
        $facebookData=$request->facebook;
        $twitterData=$request->twitter;
        $guest=new Guest;
        $guest->name=$nameData;
        $guest->job=$jobData;
        $guest->plane=$planeData;
        $guest->facebook=$facebookData;
        $guest->twitter=$twitterData;
        $guest->save();
        $request->photo->move(public_path($path), $guest->id.'.png');
        $guest->photo=$path.$guest->id.'.png';
        $guest->save();
        return redirect('/dashboard/guest/create')->with('success', 'you have added a new guest called: '.$nameData);

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
        $guest=Guest::find($id);
        $result='no';
        if($guest){
            $result=$guest;
        }
        return  view('Admin_pages.Edit_Element.editguest', ['guest' => $result,'id'=>$id]);
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
            'name' => 'required_without_all:job,plane,facebook,twitter,photo',
            'job' => 'required_without_all:name,plane,facebook,twitter,photo',
            'plane' => 'required_without_all:job,name,facebook,twitter,photo',
            'facebook' => 'required_without_all:job,plane,name,twitter,photo',
            'twitter' => 'required_without_all:job,plane,facebook,name,photo',
            'photo' => 'required_without_all:job,plane,facebook,twitter,name|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $guest=Guest::find($id);
        $path='visitor/imgs/guests/';
        if($request->input('name')!=""){
            $guest->name=$request->name;
        }
        if($request->input('job')!=""){
            $guest->job=$request->job;
        }
        if($request->input('plane')!=""){
            $guest->plane=$request->plane;
        }
        if($request->input('facebook')!=""){
            $guest->facebook=$request->facebook;
        }
        if($request->input('twitter')!=""){
            $guest->twitter=$request->twitter;
        }
        if($request->hasFile('photo')){
            unlink($guest->photo);
            $request->photo->move(public_path($path), $id.'.png');
            $guest->photo=$path.$id.'.png';
        }
        $guest->save();
        return redirect('/dashboard/guest/'.$id.'/edit')->with('success', 'you have edited the guest information');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guest=Guest::find($id);
        unlink($guest->photo);
        $guest->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllGuests(Request $request)
    {
        $noOfitems=12;
        if($request->has('guestpage')) {
            if($request->guestpage<1 || $request->guestpage>ceil(Guest::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $guests = Guest::paginate(12,['*'],'guestpage');
        return view('Admin_pages.All_Tables.guests', ['guests' => $guests]);
//        return $guests;
    }
}
