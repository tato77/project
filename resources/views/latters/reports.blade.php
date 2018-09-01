@extends('main')

@section('title','| كل الرسائل'
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
				<th>رقم القسم</th>
				<th>اسم القسم</th>
				<th>عدد الخطابات</th>
			</thead>
			<tbody>
				@foreach($depts as $dept)
				<tr>
					<th>{{$dept->id}}</th>
					<td>{{$dept->name}}</td>
					<td>{{ $dept->latters->count() }}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
			
		</div>
</div>


@stop


