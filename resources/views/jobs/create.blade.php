@extends('main')

@section('title','| انشاء رسالة')
@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css') !!}

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
    tinymce.init({ 
    	selector:'textarea',
    	plugins: 'link code',
    	plugins: 'table',
    	plugins: 'print',
    	menubar: false
    });
    </script>

@endsection
@section('content')
<div class="row">
	
<div class="col-md-8 col-md-offset-2">

{!! Form::open(['route' => 'jobs.store', 'data-parsley-validate' => '']) !!}

					{{form::label('name', 'اسم الوظيفة:')}}
					{{form::text('name',null,array('class' => 'form-control','required' => '' )) }}

					{{form::label('desc', 'الوصف الوظيفي:')}}
					{{form::textarea('desc',null,array('class' => 'form-control')) }}


					{{form::submit('انشاء',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}
</div>
</div>

@endsection