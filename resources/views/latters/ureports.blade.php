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
				<th>رقم الموظف</th>
				<th>اسم الموظف</th>
				<th>اسم القسم</th>
				<th>عدد الخطابات</th>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->dept->name}}</td>
					<td>{{ $user->latters->count() }}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
			
		</div>
</div>


@stop


