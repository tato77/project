<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Lattertype;
use Session;

class LattertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        $lattertypes = Lattertype::orderBy('id', 'desc')->paginate(6);
        
        return view ('lattertypes.index')->withLattertypes($lattertypes);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
        return view('lattertypes.create');
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
         $this->validate($request , array(
         'name'=> 'required',
        ));
        //2
 
        $lattertype = new Lattertype;
        $lattertype->name = $request->name;
        $lattertype->save();

        Session::flash('success','تم الحفظ بنجاح');

        //3
        return redirect()->route('lattertypes.show', $lattertype->id);
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
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
        $lattertype = Lattertype::find($id);
        return view('lattertypes.show')->withLattertype($lattertype);
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
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
        $lattertype = Lattertype::find($id);
       
         //return the view ans pass in the variable

        return view('lattertypes.edit')->withLattertype($lattertype);
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
        $this->validate($request , array(
         'name'=> 'required',
        ));
        //save the data to the data base
        
        $lattertype = Lattertype::find($id);
        $lattertype->name = $request->input('name');
        $lattertype->save();
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('lattertypes.show', $lattertype->id);
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
        $lattertype = Lattertype::find($id);
        $lattertype->delete();
        Session::flash('success','تم حذف الخطاب بنجاح');
        return redirect()->route('lattertypes.index');
    }
}
