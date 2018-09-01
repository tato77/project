@extends('main')
 
@section('title','|عرض')

@section('content')
<div class="row">
	 <div class="col-md-8">
	 	
		<h3><strong>عنوان الخطاب :</strong>  {{ $latter->title }}</h3>		
		<hr>
		<h3><strong>نوع الخطاب :</strong> {{ $latter->lattertype->name }} </h3>		
		<hr>
		<h4> {!! $latter->body !!}</h4> 
		<hr>
         {{ $name[0] }}
		<hr>
		 @php
		 if($latter->status == 1)
		 {
		 	 echo "Reded"; 
		 }
		 else
		 {
             echo "UnReded"; 
		 }

		 @endphp
		<hr>
		
         @foreach($latter->users as $user)
         <div class="lable lable-default"> المستلم :{{ $user->name }} </div>
         @endforeach
         <hr>
         @php
         if($committees == "x")
         {
               echo "<br> <hr>"; 
         }
		 else
           foreach($committees as $committee)
           {
	          echo "اسم اللجنة : ".$committee->name."<br> <hr>" ;
           }
		        
         
         if($committeemembers == "x")
         {
            echo "<br> <hr>";  
         }
         else
                foreach($committeemembers as $committeemember)
                {
		          echo "المنصب : ".$committeemember->Position ;
		        }
		 
		 @endphp               
	</div>
	<div class="col-md-4">
		<div class="well"> 
			<dl class="dl-horizontal">
			<dt> تم الارسال في : </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($latter->created_at)) }} </dd>
			</dl>

			<dl class="dl-horizontal">
			<dt> تم التعديل في : </dt>
			<dd> {{ date( 'M j, h:ia', strtotime($latter->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					 {{ Html::linkRoute('latters.edit','تعديل',array($latter->id),array('class'=>'btn btn-primary btn-block')) }}
                   
				</div>
				
				<div class="col-sm-6">
                      {!! Form::open(['route'=>['latters.destroy', $latter->id], 'method'=>'DELETE' ] ) !!}
          
                      {!! Form::submit('حذف', ['class'=> 'btn btn-danger btn-block' ]) !!}
                      {!! Form::close() !!}
				</div> 	
				<div class="col-sm-6">
					<h1>المرفقات : </h1><a href='/download/{{$latter->filename}}'>{{$latter->filename}} </a>
		            <hr>
				</div>
		        
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset2">
		@foreach($latter->comments as $comment)
           <div class="comment">
           	<p><strong>الاسم</strong>  {{$comment->name}}    </p>
           	<p><strong>التعليق</strong>  {{$comment->comment}}  </p>
           </div>
		@endforeach
	</div>
</div>

<div class="row">
	<div id="comment-form" class="col-md-8 col-md-offset-2">
     {{ Form::open(['route' => ['comments.store', $latter->id ], 'method' => 'POST']) }}
     <div class="row">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
       {{Form::label('comment','التعليق:')}}
       {{Form::textarea('comment', null, ['class'=>'form-control', 'rows' => '5']) }}

       {{Form::submit('التعليق على الخطاب', array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px'))  }} 
       
      </div>
	</div>
	{{Form::close() }}
</div>
@endsection