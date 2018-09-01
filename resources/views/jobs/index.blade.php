@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-5">
<a href=" {{ route('jobs.create')}} " class="btn btn-lg btn-block btn-primary">انشاء وظيفة</a>
</div>
<div class="col-md-5">
 
</div>
<div class="col-md-12">
<hr>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>اسم الوظيفة</th>
				<th>الوصف الوظيفي</th>
				<th>تم الانشاء في</th>
				<th></th>

			</thead>
			<tbody>
				@foreach($jobs as $job)
				<tr>
					<td>{{$job->name}}</td>
					<td>{{$job->desc}}</td>
					<td>{{ date('M j,Y', strtotime($job->created_at)) }}</td>
					<td><a href="{{ route('jobs.show',$job->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('jobs.edit',$job->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			
		</div>
	</div>
</div>


@stop