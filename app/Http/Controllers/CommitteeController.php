<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Committee;
use Session;
use Auth;
 
class CommitteeController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        if(!Gate::allows('isManager') )
            {
               abort(404,"soory");
            }

        $committees = Committee::orderBy('id', 'desc')->paginate(4);
        //return view and pass in the variable
        
        return view ('committees.index')->withCommittees($committees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
       return view('committees.create');
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
         'purpose' => 'required'
        ));
        //2 
        
        $committee = new Committee;
        $committee->name = $request->name;
        $committee->ownername = Auth::user()->name;
        $committee->purpose = $request->purpose;
        $committee->save();

        Session::flash('success','تم الحفظ بنجاح');

        return redirect()->route('committees.show', $committee->id);

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
        $committee = Committee::find($id);
        return view('committees.show')->withCommittee($committee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $committee = Committee::find($id);
         //return the view ans pass in the variable

        return view('committees.edit')->withCommittee($committee);
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
         'purpose' => 'required'
        ));
        //
        $committee = Committee::find($id);
        $committee->name = $request->input('name');
        $committee->ownername = Auth::user()->name;
        $committee->purpose = $request->input('purpose');
        $committee->save();
        //
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('committees.show', $committee->id);
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
        
        $committee = Committee::find($id);
        $committee->delete();
        Session::flash('success','تم حذف الموظف بنجاح');
        return redirect()->route('committees.index');
    }
}
