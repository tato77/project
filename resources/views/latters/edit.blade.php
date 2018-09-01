@extends('main')

@section('title','|تعديل')

@section('stylesheets')

    
	{!! Html::style('css/select2.min.css') !!}
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>	
    <script>
    tinymce.init({ 
    	selector:'textarea',
    	plugins: 'link',
    	plugins: 'table',
    	plugins: 'print',
    	menubar: false
    });
    </script>
@endsection

@section('content')
<div class="row">
	<!-- to array here !-->
	
	 <div class="col-md-8">
	 	{!! Form::model($latter, ['route'=>['latters.update',$latter->id], 'method' => 'PUT' ]) !!}
	 	{{form::label('type', 'type:')}}
		{{ form::select('type', $lattertypes, null ,['class'=>'form-control']) }}

        {{form::label('title', 'title:')}}
		{{ form::text('title', null, ["class"=>'form-control' ]) }}

		{{form::label('users', 'users:' )}}
		{{ form::select('users[]',$users ,null, ['class'=>'form-control select2-multi', 'multiple' => 'multiple' ]) }}


		{{form::label('body', 'body:',['class'=>'form-spacing-top' ])}}
		{{ form::textarea('body', null, ["class"=>'form-control' ]) }}
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			<dt> Create at: </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($latter->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> update at </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($latter->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('latters.show','الغاء',array($latter->id),array('class'=>'btn btn-danger btn-block')) }}
                   
				</div>
				<div class="col-sm-6">
                      {{ Form::submit('حفظ', ['class'=>'btn btn-success btn-block'] )}}
				</div>
				
			</div>
		</div>
	</div>

{!! Form::close() !!}
</div> 

@stop
@section('scripts')

{!! Html::script('js/select2.min.js') !!}

<script type="text/javascript">

		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($latter->users()->allRelatedIds() ) !!}).trigger('change');
		
	</script>
	
@endsection