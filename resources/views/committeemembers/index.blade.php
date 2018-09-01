@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
<div class="col-md-12">
<hr>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>اسم اللجنة</th>
				<th>اسم الموظف</th>
				<th>المنصب</th>
				<th>تم الانضمام في</th>
				<th></th>
  
			</thead>
			<tbody>
				@foreach($committeemembers as $committeemember) 
				<tr>
					<th></th>
					<td>{{$committeemember->committee->name}}</td>
					<td>{{$committeemember->user->name}}</td>
			     	<td>{{$committeemember->Position}}</td>
					<td>{{ date('M j,Y', strtotime($committeemember->created_at)) }}</td>
					<td><a href="{{ route('committeemembers.show',$committeemember->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('committeemembers.edit',$committeemember->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
			

		</div>
</div>


@stop


