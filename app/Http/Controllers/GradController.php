<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Grad;
use Session;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        if(!Gate::allows('isAdmin') )
            {
               abort(404,"soory");
            }
        //
        $grads = Grad::orderBy('id', 'ASC')->paginate(8);
        //return view and pass in the variable
        return view ('grads.index')->withGrads($grads);
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
        return view('grads.create');
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

        $grad = new Grad;
        $grad->name = $request->name;
        $grad->save();

        Session::flash('success','تم الحفظ بنجاح');

        //3
        return redirect()->route('grads.show', $grad->id);
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
        $grad = Grad::find($id);
        return view('grads.show')->withGrad($grad);
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
        $grad = Grad::find($id);
         //return the view ans pass in the variable

        return view('grads.edit')->withGrad($grad);
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
        
        $grad = Grad::find($id);
        $grad->name = $request->input('name');
        $grad->save();
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('grads.show', $grad->id);
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
        $grad = Grad::find($id);
        $grad->delete();
        Session::flash('success','تم حذف الخطاب بنجاح');
        return redirect()->route('grads.index');
    }
}
