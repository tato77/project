@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1> {{ $jobs->name }}</h1>
		<hr>
		<h1> {!! $jobs->desc !!}</h1>
		<hr>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> تم الانشاء في: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($jobs->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($jobs->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('jobs.edit','تعديل',array($jobs->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {!! Form::open(['route'=>['jobs.destroy', $jobs->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection