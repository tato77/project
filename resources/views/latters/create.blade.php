@extends('main') 
 
@section('title','| انشاء رسالة')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!} 
	{!! Html::style('css/select2.min.css') !!}

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
    tinymce.init({ 
    	selector:'textarea',
    	plugins: 'link',
    	plugins: 'table',
    	plugins: 'print',
    	menubar: true
    });
    </script>

@endsection
@section('content')


<div class="row">
	
<div class="col-md-8 col-md-offset-2">
	<h1>انشاء خطاب جديد</h1>
	<hr>
	                @if(count($errors))
	                <u>
                     @foreach($errors->all() as $error)
                       <li> {{ $error }}</li>
                     @endforeach
                     </u> enctype="multipart/form-data"
	                @endif

					{!! Form::open(['route' => 'latters.store', 'data-parsley-validate' => '','method'=>'post' , 'files' => 'true', 'enctype'=>'multipart/form-data']) !!}

          {{csrf_field()}}
          {{form::label('type', 'نوع الخطاب :')}} 
					<select class="form-control" name="type">
                    	@foreach($lattertypes as $lattertype)
                         <option value='{{ $lattertype->id}}'> {{ $lattertype->name}}</option>
                    	@endforeach
                    </select> 
                                       
					{{form::label('users', 'المسلتم :')}}
					<select class="form-control select2-multi"  name="users[]" multiple="multiple">
                      
                       @foreach($users as $user) 

						<option value='{{$user->id}}'> {{ $user->name }} </option>
						
						
                        @endforeach
					</select>

					{{form::label('title', 'عنوان الخطاب :')}}
					{{form::text('title',null,array('class' => 'form-control','required' => '' )) }}
					
				  {{form::label('body', 'الخطاب :')}}
					{{form::textarea('body',null,array('class' => 'form-control' )) }}
          {{Form::file('file[]')}} 
					{{Form::token() }}

					{{form::submit('انشاء',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))}}

					{!! Form::close() !!}

</div>
</div>
@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}
<script type="text/javascript">
	
    $('.select2-multi').select2();

    $(document).ready(function() {

      $(".btn-success").click(function(){ 

          var lsthmtl = $(".clone").html();

          $(".increment").after(lsthmtl);

      });

      $("body").on("click",".btn-danger",function(){ 

          $(this).parents(".hdtuto control-group lst").remove();

      });

    });

</script>

<script type="text/javascript">

    

</script>
@endsection

