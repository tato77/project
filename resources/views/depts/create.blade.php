@extends('main')

@section('title','| انشاء رسالة')
@section('stylesheets')

@endsection
@section('content')
<div class="row">
	
<div class="col-md-8 col-md-offset-2">

{!! Form::open(['route' => 'depts.store', 'data-parsley-validate' => '']) !!}

					{{form::label('name', 'اسم القسم:')}}
					{{form::text('name',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('type', 'نوع القسم:')}}
					<select class="form-control" name="type">
                    <option value='اكاديمي'> اكاديمي </option>
                    <option value='اداري'> اداري </option>
                    </select>

					{{form::label('Email', 'البريد الالكتروني:')}}
					{{form::text('Email',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('phone', 'رقم هاتف القسم:')}}
					{{form::text('phone',null,array('class' => 'form-control','required' => '' )) }}


					{{form::submit('انشاء',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}
</div>
</div>

@endsection