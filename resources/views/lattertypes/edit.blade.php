@extends('main')

@section('title','|تعديل')
@section('stylesheets')

@endsection
@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($lattertype, ['route'=>['lattertypes.update',$lattertype->id] , 'method' => 'PUT' ]) !!}
	 	
	 	{{form::label('name', 'اسم الدرجة الوظيفية:')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}
		
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
					 {{ Html::linkRoute('lattertypes.show','الغاء',array($lattertype->id),array('class'=>'btn btn-danger btn-block')) }}
                   
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