@extends('main')

@section('title','|تعديل')

@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($committee, ['route'=>['committees.update',$committee->id] , 'method' => 'PUT' ]) !!}
	 	{{form::label('name', 'اسم اللجنة:')}}
		{{ form::text('name', null , ["class"=>'form-control input-lg' ]) }}
        {{form::label('purpose', 'الغرض من اللجنة:')}}
		{{ form::textarea('purpose', null,["class"=>'form-control' ]) }}
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committee->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committee->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('committees.show','الغاء',array($committee->id),array('class'=>'btn btn-danger btn-block')) }}
                   
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