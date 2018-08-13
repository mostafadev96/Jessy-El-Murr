<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noOfitems=12;
        if($request->has('testimonialpage')) {
            if($request->testimonialpage<1 || $request->testimonialpage>ceil(Testimonial::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');

            }
        }
        $testimonials = Testimonial::paginate(12,['*'],'testimonialpage');
        return view('Visitor_pages.testimonials', ['testimonials' => $testimonials]);
//        return $testimonials;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addtestimonial');
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
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $path='visitor/imgs/testimonials/';
        $nameData=$request->name;
        $descriptionData=$request->description;
        $testimonial=new Testimonial;
        $testimonial->name=$nameData;
        $testimonial->description=$descriptionData;
        $testimonial->save();
        $request->photo->move(public_path($path), $testimonial->id.'.png');
        $testimonial->photo=$path.$testimonial->id.'.png';
        $testimonial->save();
        return redirect('/dashboard/testimonial/create')->with('success', 'you have added a new testimonial with name: '.$nameData);
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
        $testimon=Testimonial::find($id);
        $result='no';
        if($testimon){
            $result=$testimon;
        }
        return  view('Admin_pages.Edit_Element.edittestimonial', ['testimonial' => $result,'id'=>$id]);
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
            'name' => 'required_without_all:description,photo',
            'description' => 'required_without_all:name,photo',
            'photo' => 'required_without_all:name,description|image|mimes:jpeg,bmp,png|max:3000',
        ]);
        $testimon=Testimonial::find($id);
        $path='visitor/imgs/episodes/';
        if($request->input('name')!=""){
            $testimon->name=$request->name;
        }
        if($request->input('description')!=""){
            $testimon->description=$request->description;
        }
        if($request->hasFile('photo')){
            unlink($testimon->photo);
            $request->photo->move(public_path($path), $id.'.png');
            $testimon->photo=$path.$id.'.png';
        }
        $testimon->save();
        return redirect('/dashboard/testimonial/'.$id.'/edit')->with('success', 'you have edited testimonial info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testim=Testimonial::find($id);
        unlink($testim->photo);
        $testim->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllTestimonials(Request $request)
    {
        $noOfitems=12;
        if($request->has('testimonialpage')) {
            if($request->testimonialpage<1 || $request->testimonialpage>ceil(Testimonial::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');

            }
        }
        $testimonials = Testimonial::paginate(12,['*'],'testimonialpage');
        return view('Admin_pages.All_Tables.testimonials', ['testimonials' => $testimonials]);
//        return $testimonials;
    }
}
