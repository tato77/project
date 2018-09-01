<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Job;
use Session;
class JobController extends Controller
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
         $jobs = Job::orderBy('id')->paginate(10);
        //return view and pass in the variable
        return view ('jobs.index')->withJobs($jobs);
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
      $jobs = Job::all();
      return view('jobs.create')->withJobs($jobs); 
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
         'desc'=> 'required'
         
        ));
        //2
        $jobs = new Job;
        $jobs->name = $request->name;
        $jobs->desc = $request->desc;
        $jobs->save();     
        Session::flash('success','تم الحفظ بنجاح');

        //3
        return redirect()->route('jobs.show', $jobs);
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
        
        $jobs = Job::find($id);
        return view('jobs.show')->withJobs($jobs);
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
        $job = Job::find($id);
        return view('jobs.edit')->withJob($job);
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
         'desc'=> 'required'
        ));

        //save the data to the data base
        $job = Job::find($id);
        $job->name = $request->input('name');
        $job->desc = $request->input('desc');
        
        $job->save();
        
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('jobs.show',$job->id);
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
        $job = Job::find($id);
        $job->delete();
        Session::flash('success','تم حذف الخطاب بنجاح');
        return redirect()->route('jobs.index');
    }
}
