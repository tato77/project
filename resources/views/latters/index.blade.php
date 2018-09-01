@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-10">

</div>
<div class="col-md-2">
<a href=" {{ route('latters.create')}} " class="btn btn-lg btn-block btn-primary">خطاب جديد</a>
</div>
<div class="col-md-12">
<hr>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>رقم الخطاب</th>
				<th>نوع الخطاب</th>
				<th>اسم المرسل</th>
				<th>عنوان الخطاب</th>
				<th>نص الخطاب</th>
				<th>تم الاستلام</th>
				<th></th>

			</thead>
			<tbody>
				@foreach($latters as $latter)
				<tr>
					<th>{{$latter->id}}</th>
					<td>{{$latter->lattertype->name}}</td>
					
					<td>{{$latter->title}}</td>
					<td>{{ substr(strip_tags($latter->body), 0,100) }} {{ strlen(strip_tags($latter->body)) > 50 ? "...." : ""}}</td>
					<td>{{ date('M j,Y', strtotime($latter->created_at)) }}</td>
					<td><a href="{{ route('latters.show',$latter->id)}}" class="btn btn-primary btn-sm">عرض</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
			
		</div>
</div>


@stop


