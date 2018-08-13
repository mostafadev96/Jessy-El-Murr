<?php

namespace App\Http\Controllers;

use App\Biography;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrases=array();
        $tempphrases=Biography::all();
        for($i=0;$i<count($tempphrases);$i++){
            array_push($phrases,$tempphrases[$i]->phrase);
        }
        return view('Visitor_pages.biography')->with('phrases',$phrases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addbiography');
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
            'phrase' => 'required',
        ]);
        $phraseData=$request->input('phrase');
        $phrase=new Biography;
        $phrase->phrase=$phraseData;
        $phrase->save();
        return redirect('/dashboard/biography/create')->with('success', 'you have added a new biography statement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bio=Biography::find($id);
        $result='no';
        if($bio){
            $result=$bio;
        }
        return  view('Admin_pages.Edit_Element.editbiography', ['bio' => $result,'id'=>$id]);
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
        $bio=Biography::find($id);
        $request->validate([
            'phrase' => 'required',
        ]);
        $phraseData=$request->input('phrase');

        $bio->phrase=$phraseData;
        $bio->save();

        return redirect('/dashboard/biography/'.$id.'/edit')->with('success', 'you have edited the phrase');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bio=Biography::find($id);
        $bio->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }

    public function paginateAllBiography(Request $request)
    {
        $noOfitems=12;
        if($request->has('biopage')) {
            if($request->biopage<1 || $request->biopage>ceil(Biography::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $bio = Biography::paginate(12,['*'],'biopage');
        return view('Admin_pages.All_Tables.biography', ['bio' => $bio]);
//        return $episodes;
    }
}
