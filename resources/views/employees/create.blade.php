@extends('main')

@section('title','| انشاء رسالة')

@section('content')

<div class="row"> 
	
		<div class="col-md-8 col-md-offset-2">
			        {!! Form::open(['route' => 'employees.store', 'data-parsley-validate' => '']) !!}

					{{form::label('name', 'name:')}}
					{{form::text('name',null,array('class' => 'form-control','required' => '' )) }}
					
					
					{{form::label('gender', 'Gender:')}}
					{{form::text('gender',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('phone', 'phone:')}}
					{{form::text('phone',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('Email', 'Email:')}}
					{{form::text('Email',null,array('class' => 'form-control','required' => '' )) }}
					
					{{form::label('state', 'state:')}}
					{{form::text('state',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('city', 'city:')}}
					{{form::text('city',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('unit', 'unit:')}}
					{{form::text('unit',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('home_no', 'home_no:')}}
					{{form::text('home_no',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('dept_id', 'deptNo:')}}
					<select class="form-control" name="dept_id">
						@foreach($depts as $dept)
                         <option value='{{ $dept->id}}'> {{ $dept->name}}</option>
                    	@endforeach
                    </select>

					{{form::label('Qualification', 'Qualification:')}}
					{{form::text('Qualification',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('grad_id', 'Grade:')}}
					<select class="form-control" name="grad_id">
						@foreach($grads as $grad)
                         <option value='{{ $grad->id}}'> {{ $grad->name}}</option>
                    	@endforeach
                    </select>
					{{form::label('job_id', 'job_id:')}}
					<select class="form-control" name="job_id">
						@foreach($jobs as $job)
                         <option value='{{ $job->id}}'> {{ $job->name}}</option>
                    	@endforeach
                    </select>

					{{form::submit('create',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}
		</div>
</div>

@endsection