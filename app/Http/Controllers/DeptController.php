<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Dept;
use Session;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() 
    {
        if(!Gate::allows('isAdmin'))
            {
               abort(404,"soory");
            }
        //
        $depts = Dept::orderBy('id', 'desc')->paginate(8);
        //return view and pass in the variable
        return view ('depts.index')->withDepts($depts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //

      $depts = Dept::all();
      //$employees = Employee::pluck('name', 'id')->all();

      return view('depts.create')->withdepts($depts);
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
         'type'=> 'required',
         'Email' => 'required',
         'phone' => 'required'
        ));
        //2

        $dept = new Dept;
        $dept->name = $request->name;
        $dept->type = $request->type;
        $dept->Email = $request->Email;
        $dept->phone = $request->phone;
        $dept->save();
        Session::flash('success','تم الحفظ بنجاح');

        //3
        return redirect()->route('depts.show', $dept->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
        $dept = Dept::find($id);
        return view('depts.show')->withDept($dept); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
         $dept = Dept::find($id);
        return view('depts.edit')->withDept($dept);
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
         'type'=> 'required',
         'Email'=> 'required',
         'phone'=> 'required'
        ));
 
        //save the data to the data base
        $dept = Dept::find($id);
        $dept->name = $request->input('name');
        $dept->type = $request->input('type');
        $dept->Email = $request->input('Email');
        $dept->phone = $request->input('phone');
        $dept->save(); 
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('depts.show',$dept->id);
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
        $dept = Dept::find($id);
        $dept->delete();
        Session::flash('success','تم حذف الخطاب بنجاح');
        return redirect()->route('depts.index');
    }
}
