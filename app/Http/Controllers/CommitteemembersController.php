<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Committeemember;
use App\Committee;
use App\User;
use Session;

class CommitteemembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    
    public function index()
    {
        if(!Gate::allows('isManager') )
            {
               abort(404,"soory");
            }
        //
        //return view and pass in the variable
        $committeemembers = Committeemember::orderBy('id')->get();
        //return view and pass in the variable
        //dd($committeemembers);
        return view ('committeemembers.index')->withCommitteemembers($committeemembers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isManager') )
            {
               abort(404,"soory");
            }
        //
      $committees = Committee::all();
      $users = User::all();
      
      //return view('latters.create')->withLattertypes($lattertypes)->withUsers($users); 
        return view('committeemembers.create')->withCommittees($committees)->withUsers($users);
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
            
         'commit_id'=> 'required',
         'user_id'=> 'required',
         'Position' => 'required',
        ));
        //2

        $committeemember = new Committeemember;
        $committeemember->commit_id = $request->commit_id;
        $committeemember->user_id = $request->user_id;
        $committeemember->Position = $request->Position;
        $committeemember->save();

        Session::flash('success','تم الحفظ بنجاح');

        //3
        return redirect()->route('committeemembers.show', $committeemember->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if(!Gate::allows('isManager') )
            {
               abort(404,"soory");
            }
        //
        $committeemember = Committeemember::find($id);
        return view('committeemembers.show')->withCommitteemember($committeemember);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isManager') )
            {
               abort(404,"soory");
            }
        //
        $committees = Committee::all();
        //grads arry
        $ltc = array();
         foreach ($committees as $committee) {
             $ltc[$committee->id] = $committee->name;
         }
        $committeemember = Committeemember::find($id);
         //return the view ans pass in the variable

        return view('committeemembers.edit')->withCommitteemember($committeemember)->withCommittees($ltc);
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
         'commit_id'=> 'required',
         'user_id'=> 'required',
         'Position' => 'required',
        ));
        //save the data to the data base
        $committeemember = Committeemember::find($id);
        $committeemember->commit_id = $request->input('commit_id');
        $committeemember->user_id = $request->input('user_id');
        $committeemember->Position = $request->input('Position');
        $committeemember->save();
        //set flash with success message
        Session::flash('success','تم الحفظ بنجاح');
        //redirect with flash data to  posts.show
        return redirect()->route('committeemembers.show', $committeemember->id);
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
        $committeemember = Committeemember::find($id);
        $committeemember->delete();
        Session::flash('success','تم حذف الخطاب بنجاح');
        return redirect()->route('committeemembers.index');
    }
}
