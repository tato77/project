@extends('main')

@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
		<h1> {{ $user->name }}</h1>
		<hr>
		<h1> {{ $user->home_no }}</h1>
		<hr>
		<h1> {{ $user->dept_id }}</h1>
		<hr>
		<h1> {{ $user->Qualification }}</h1>
		<hr>
		<h1> {{ $user->phone }}</h1>
		<hr>
		<h1> {{ $user->dept->name }} </h1>
		<hr>
		<h1> {{ $user->grad->name }} </h1>
		<hr>
		<h1> {{ $user->job->name }} </h1>
		
		
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($user->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($user->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('users.edit','تعديل',array($user->id),array('class'=>'btn btn-primary btn-block')) }}
					
                   
				</div>
				<div class="col-sm-6">
                      <!-- here is tow array !-->
					{!! Form::open(['route'=>['users.destroy', $user->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
					
				</div>
				
			</div>
		</div>
	</div>
</div>


@endsection