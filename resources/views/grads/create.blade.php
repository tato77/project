@extends('main')

@section('title','| انشاء رسالة')
@section('stylesheets')

   
@endsection
@section('content')
<div class="row">
	
<div class="col-md-8 col-md-offset-2">

{!! Form::open(['route' => 'grads.store', 'data-parsley-validate' => '']) !!}

					{{form::label('name', 'اسم الدرجة الوظيفية:')}}
					{{form::text('name',null,array('class' => 'form-control','required' => '' )) }}


					{{form::submit('انشاء',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}
</div>
</div>

@endsection