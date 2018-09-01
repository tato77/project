<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Dept;
use App\Grad;
use App\Job;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $employees = Employee::orderBy('id', 'desc')->paginate(4);
        
        //return view and pass in the variable
        return view ('employees.index')->withEmployees($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $depts = Dept::all();
        $grads = Grad::all();
        $jobs = Job::all();
        return view('employees.create')->withDepts($depts)->withGrads($grads)->withJobs($jobs);
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
         'gender'=> 'required',
         'phone' => 'required',
         'Email' => 'required',
         'state'=> 'required',
         'city' => 'required',
         'unit' => 'required',
         'home_no' => 'required',
         'dept_id' => 'required',
         'Qualification' => 'required',
         'grad_id' => 'required',
         'job_id' => 'required',
        ));
        //2
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->Email = $request->Email;
        $employee->state = $request->state;
        $employee->city = $request->city;
        $employee->unit = $request->unit;
        $employee->home_no = $request->home_no;
        $employee->dept_id = $request->dept_id;
        $employee->Qualification = $request->Qualification;
        $employee->grad_id = $request->grad_id;
        $employee->job_id = $request->job_id;
        $employee->save();

        Session::flash('success','تم الحفظ بنجاح');

        return redirect()->route('employees.show', $employee->id);
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
        $employee = Employee::find($id);
        return view('employees.show')->withEmployee($employee);
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
        $employee = Employee::find($id);
         //return the view ans pass in the variable
         $depts = Dept::all();
         $lt = array();
         foreach ($depts as $dept) {
             $lt[$dept->id] = $dept->name;
         }
        return view('employees.edit')->withEmployee($employee)->withDepts($lt);
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
         'gender'=> 'required',
         'phone' => 'required',
         'Email' => 'required',
         'state'=> 'required',
         'city' => 'required',
         'unit' => 'required',
         'home_no' => 'required',
         'dept_id' => 'required',
         'Qualification' => 'required',
         'grad_id' => 'required',
         'job_id' => 'required', 
         
        ));
        //save the data to the data base
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->Email = $request->input('Email');
        $employee->state = $request->input('state');
        $employee->city = $request->input('city');
        $employee->unit = $request->input('unit');
        $employee->home_no = $request->input('home_no');
        $employee->dept_id = $request->input('dept_id');
        $employee->Qualification = $request->input('Qualification');
        $employee->grad_id = $request->input('grad_id');
        $employee->job_id = $request->input('job_id');
        $employee->save();
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('employees.show', $employee->id);
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
        $employee = Employee::find($id);

        $employee->delete();
        Session::flash('success','تم حذف الموظف بنجاح');
        return redirect()->route('employees.index');
    }
}
