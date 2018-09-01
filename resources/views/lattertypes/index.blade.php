@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-5">
<a href=" {{ route('lattertypes.create')}} " class="btn btn-lg btn-block btn-primary">انشاء نوع خطاب جديد</a>
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
				<th>اسم نوع الخطاب</th>
				<th>تم الانشاء في </th>

			</thead>
			<tbody>
				@foreach($lattertypes as $lattertype)
				<tr>
			
					<td>{{$lattertype->name}}</td>
					
					<td>{{ date('M j,Y', strtotime($lattertype->created_at)) }}</td>
					<td><a href="{{ route('lattertypes.show',$lattertype->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('lattertypes.edit',$lattertype->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			
			</div>
	</div>
</div>


@stop