@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1> {{ $dept->name }}</h1>
		<hr>
		<h1> {{ $dept->type }}</h1>
		<hr>
		<h1> {{ $dept->Email }}</h1>
		<hr>
		<h1> {{ $dept->phone }}</h1>
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
					 {{ Html::linkRoute('depts.edit','تعديل',array($dept->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {!! Form::open(['route'=>['depts.destroy', $dept->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection