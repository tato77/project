@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-10">
<p>All messages</p>
</div>
<div class="col-md-2">
<a href=" {{ route('employees.create')}} " class="btn btn-lg btn-block btn-primary">new message</a>
</div>
<div class="col-md-12">
<hr>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>الاسم الاول</th>
				<th>النوع</th>
				<th>رقم الهاتف</th>
				<th>البريد الالكتروني</th>
				<th>الولاية</th>
				<th>المدينة</th>
				<th>الوحدة الادارية</th>
				<th>المؤهلات</th>
				<th>النوع</th>
				<th>تم الانشاء</th>
				<th></th>

			</thead>
			<tbody>
				@foreach($employees as $employee)
				<tr>
					<th>{{$employee->id}}</th>
					<td>{{$employee->name}}</td>
					<td>{{$employee->gender}}</td>
					<td>{{$employee->phone}}</td>
					<td>{{$employee->Email}}</td>
					<td>{{$employee->state}}</td>
					<td>{{$employee->city}}</td>
					<td>{{$employee->unit}}</td>
					<td>{{$employee->home_no}}</td>
					<td>{{$employee->Qualification}}</td>
					<td>{{ date('M j,Y', strtotime($employee->created_at)) }}</td>

					<td><a href="{{ route('employees.show',$employee->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
					<td><a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-danger btn-sm btn-block">حذف</a> </td></td>


				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $employees->links();  !!}
		</div>
	</div>
</div>


@stop