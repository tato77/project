@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1> {{ $lattertype->name }}</h1>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> تم الانشاء في: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($lattertype->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> تم التعديل في : </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($lattertype->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('lattertypes.edit','تعديل',array($lattertype->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {!! Form::open(['route'=>['lattertypes.destroy', $lattertype->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection