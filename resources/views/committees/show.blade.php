@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1><strong>اسم اللجنة : </strong>{{ $committee->name }}</h1>
		<hr>
		<h1><strong>مكون اللجنة : </strong>{{ $committee->ownername }}</h1>
		<hr>
		<h1><strong> الغرض من اللجنة : </strong>{!! $committee->purpose !!}</h1>
		<hr>
		    
	</div>
	<div class="col-md-4"> 
		<div class="well">
			<dl class="dl-horizontal">
			<dt> تم الانشاء في: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committee->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> تم التعديل في : </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committee->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('committees.edit','تعديل',array($committee->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {!! Form::open(['route'=>['committees.destroy', $committee->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection