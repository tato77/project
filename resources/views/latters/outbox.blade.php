@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-10">

</div>
<div class="col-md-12">
<hr>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>نوع الرسالة</th>
				<th>رقم الموظف</th>
				<th>العنوان</th>
				<th>الرسالة</th>
				<th>تم الاستلام</th>
				<th></th>

			</thead>
			<tbody>
				@foreach($latters as $latter)
				<tr>
					<th>{{$latter->id}}</th>
					<td>{{$latter->type}}</td>
					<td>{{$latter->user_id}}</td>
					<td>{{$latter->title}}</td>
					<td>{{ substr(strip_tags($latter->body), 0,30) }} {{ strlen(strip_tags($latter->body)) > 50 ? "...." : ""}}</td>
					<td>{{ date('M j,Y', strtotime($latter->created_at)) }}</td>
					<td><a href="{{ route('latters.show',$latter->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('latters.edit',$latter->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
			
		</div>
</div>


@stop


