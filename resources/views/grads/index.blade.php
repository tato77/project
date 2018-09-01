@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-5">
<a href=" {{ route('grads.create')}} " class="btn btn-lg btn-block btn-primary">انشاء درجة وظيفية</a>
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
				<th>رقم الدرجة</th>
				<th>اسم الدرجة</th>
				<th>تم الانشاء في </th>
				<th></th>

			</thead>
			<tbody>
				@foreach($grads as $grad)
				<tr>
					<th>{{$grad->id}}</th>
					<td>{{$grad->name}}</td>
					
					<td>{{ date('M j,Y', strtotime($grad->created_at)) }}</td>
					<td><a href="{{ route('grads.show',$grad->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('grads.edit',$grad->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
				{!! $grads->links(); !!}
			</div>
	</div>
</div>


@stop