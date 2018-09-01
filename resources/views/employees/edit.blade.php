@extends('main')

@section('title','|تعديل')

@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($employee, ['route'=>['employees.update',$employee->id] ,'method' => 'PUT']) !!}

	 	{{form::label('name', 'name:')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}

        {{form::label('gender', 'gender:')}}
		{{ form::text('gender', null, ["class"=>'form-control' ]) }}

		{{form::label('phone', 'phone:',['class'=>'form-spacing-top' ])}}
		{{ form::text('phone', null, ["class"=>'form-control' ]) }}

		{{form::label('Email', 'Email:')}}
		{{ form::text('Email', null,["class"=>'form-control' ]) }}

        {{form::label('state', 'state:')}}
		{{ form::text('state', null, ["class"=>'form-control' ]) }}

		{{form::label('city', 'city:',['class'=>'form-spacing-top' ])}}
		{{ form::text('city', null, ["class"=>'form-control' ]) }}

		{{form::label('unit', 'unit:')}}
		{{ form::text('unit', null,["class"=>'form-control' ]) }}

		{{form::label('home_no', 'home_no:')}}
		{{ form::text('home_no', null, ["class"=>'form-control' ]) }}

        {{form::label('dept_id', 'dept_no:')}}
		{{ form::select('dept_id', $depts, null ,['class'=>'form-control']) }}

        {{form::label('Qualification', 'Qualification:')}}
		{{ form::text('Qualification', null, ["class"=>'form-control' ]) }}

		{{form::label('grad_id', 'grade:',['class'=>'form-spacing-top' ])}}
		{{ form::text('grad_id', null, ["class"=>'form-control' ]) }}

		{{form::label('job_id', 'job:',['class'=>'form-spacing-top' ])}}
		{{ form::text('job_id', null, ["class"=>'form-control' ]) }}
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($employee->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($employee->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('employees.show','الغاء',array($employee->id),array('class'=>'btn btn-danger btn-block')) }}
                   
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