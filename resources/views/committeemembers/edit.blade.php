@extends('main')

@section('title','|تعديل')

@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($committeemember, ['route'=>['committeemembers.update',$committeemember->id] , 'method' => 'PUT' ]) !!}
	 	{{form::label('commit_id', 'اللجنة:')}}
		{{ form::select('commit_id',$committees, null , ["class"=>'form-control input-lg' ]) }}

        {{form::label('user_id', 'اسم الموظف:')}}
		{{ form::text('user_id', null, ["class"=>'form-control' ]) }}
        {{form::label('Position', 'المنصب:')}} 
		           <select class="form-control" name="Position">
                         <option value='رئيس'> رئيس </option>
                         <option value='نائب رئيس'> نائب رئيس </option>
                         <option value='مقرر'> مقرر </option>
                         <option value='عضوا'> عضوا </option>
                    	
                    </select>
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committeemember->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($committeemember->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('committeemembers.show','الغاء',array($committeemember->id),array('class'=>'btn btn-danger btn-block')) }}
                   
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