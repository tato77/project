@extends('main')

@section('title','|تعديل')

@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($dept, ['route'=>['depts.update',$dept->id] , 'method' => 'PUT' ]) !!}


	 	{{form::label('name', 'الاسم:')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}

		{{form::label('type', 'الاسم:')}} 
		<select class="form-control" name="type">
		<option value='اكاديمي'> اكاديمي </option>
        <option value='اداري'> اداري </option>
                    	
        </select>

		{{form::label('Email', 'الاسم:')}}
		{{ form::text('Email', null , ["class"=>'form-control input-lg' ]) }}

		{{form::label('phone', 'الاسم:')}}
		{{ form::text('phone', null , ["class"=>'form-control input-lg' ]) }}

		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> تم الانشاء: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($dept->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> تم التعديل </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($dept->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6"> 
					 {{ Html::linkRoute('depts.show','الغاء',array($dept->id),array('class'=>'btn btn-danger btn-block')) }}
                   
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