@extends('main')

@section('title','| كل الرسائل')

@section('content')
<div class="row">
	
<div class="col-md-5">
<a href=" {{ route('committees.create')}} " class="btn btn-lg btn-block btn-primary">انشاء لجنة جديدة</a>
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
				<th>#</th>
				<th>اسم اللجنة</th>
				<th>مكون اللجنة</th>
				<th>الغرض من تكوين اللجنة</th>
				<th>تم الانشاء في</th>
				<th></th>

			</thead>
			<tbody>
@foreach($committees as $committee)
<tr>
<th>{{$committee->id}}</th>
<td>{{$committee->name}}</td>
<td>{{$committee->ownername}}</td>
<td>{{ substr(strip_tags($committee->purpose), 0,30) }} {{ strlen(strip_tags($committee->purpose)) > 50 ? "...." : ""}}</td>
<td>{{ date('M j,Y', strtotime($committee->created_at)) }}</td>
<td><a href="{{ route('committees.show',$committee->id)}}" class="btn btn-primary btn-sm">عرض</a>  <a href="{{ route('committees.edit',$committee->id)}}" class="btn btn-primary btn-sm">تعديل</a> </td>
</tr>
@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $committees->links();  !!}
		</div>
	</div>
</div>


@stop