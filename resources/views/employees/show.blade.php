@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1> {{ $employee->name }}</h1>
		<hr>
		<h1> {{ $employee->home_no }}</h1>
		<hr>
		<h1> {{ $employee->dept_id }}</h1>
		<hr>
		<h1> {{ $employee->Qualification }}</h1>
		<hr>
		<h1> {{ $employee->phone }}</h1>
		<hr>
		
		<h1>{{ $employee->dept->name }}</h1>
		<h1>{{ $employee->grad->name }}</h1>
		
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
					 {{ Html::linkRoute('employees.edit','تعديل',array($employee->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      <!-- here is tow array !-->
					{!! Form::open(['route'=>['employees.destroy', $employee->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
					
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection