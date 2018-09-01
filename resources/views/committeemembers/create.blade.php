@extends('main')

@section('title','| انشاء رسالة')

@section('content')

<div class="row">
	
<div class="col-md-8 col-md-offset-2">
	<h1>انشاء رسالة جديدة</h1>
	<hr>
					{!! Form::open(['route' => 'committeemembers.store', 'data-parsley-validate' => '']) !!}

					{{form::label('commit_id', 'اللجنة:')}}
					<select class="form-control" name="commit_id">
                    	@foreach($committees as $committee)
                         <option value='{{ $committee->id}}'> {{ $committee->name}}</option>
                    	@endforeach
                    </select>
					{{form::label('user_id', 'اسم الموظف:')}}
					<select class="form-control" name="user_id">
                    	@foreach($users as $user)
                         <option value='{{ $user->id}}'> {{ $user->name}}</option>
                    	@endforeach
                    </select>

					{{form::label('Position', 'المنصب:')}}
					<select class="form-control" name="Position">
                         <option value='رئيس'> رئيس </option>
                         <option value='نائب رئيس'> نائب رئيس </option>
                         <option value='مقرر'> مقرر </option>
                         <option value='عضوا'> عضوا </option>
                    	
                    </select>

					{{form::submit('انشاء',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}

</div>
</div>


@endsection