@extends('main')

@section('title','|تعديل')
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
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($job, ['route'=>['jobs.update',$job->id] , 'method' => 'PUT' ]) !!}
	 	{{form::label('name', 'الوظيفة:')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}
        {{form::label('desc', 'الوصف الوظيفي:')}}
		{{ form::textarea('desc', null, ["class"=>'form-control' ]) }}
        
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($job->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($job->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('jobs.show','الغاء',array($job->id),array('class'=>'btn btn-danger btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
					{{ Form::submit('حفظ', ['class'=>'btn btn-success btn-block'] )}}
                      
				</div>
				
			</div>
		</div>
	</div>

{!! Form::close() !!}
</div> <!-- end the form

@stop