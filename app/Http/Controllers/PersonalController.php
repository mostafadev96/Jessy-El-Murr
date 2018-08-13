<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_pages.Add_Element.addpersonal');
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
            'type' => 'required',
            'info' => 'required',
        ]);
        $typeData=$request->type;
        $infoData=$request->info;
        $personal=new Personal;
        $personal->type=$typeData;
        $personal->info=$infoData;
        $personal->save();

        return redirect('/dashboard/personal/create')->with('success', 'you have added a new personal data with type: '.$infoData);
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
        $person=Personal::find($id);
        $result='no';
        if($person){
            $result=$person;
        }
        return  view('Admin_pages.Edit_Element.editpersonal', ['person' => $result,'id'=>$id]);
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
        $person=Personal::find($id);
        $request->validate([
            'type' => 'required_without_all:info',
            'info' => 'required_without_all:type',
        ]);

        if($request->input('type')!=""){
            $person->type=$request->type;
        }
        if($request->input('info')!=""){
            $person->info=$request->info;
        }
        $person->save();
        return redirect('/dashboard/personal/'.$id.'/edit')->with('success', 'you have edited personal information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person=Personal::find($id);
        //Delete photo from file system before deletion of item
        $person->delete();
        return redirect()->back()->with('delete', 'your deletion is done successfully');
    }
    public function paginateAllPersonal(Request $request)
    {
        $noOfitems=12;
        if($request->has('personalpage')) {
            if($request->personalpage<1 || $request->personalpage>ceil(Personal::count()/$noOfitems)){
                throw new NotFoundHttpException('Not found');
            }
        }
        $personal = Personal::paginate(12,['*'],'personalpage');
        return view('Admin_pages.All_Tables.personal', ['personal' => $personal]);
//        return $guests;
    }
}
