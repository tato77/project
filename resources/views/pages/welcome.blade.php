@extends('main')
@section('title','| الرئيسية')
@section('content')

<div class="row">
	<div class="col-md-12">
    <h1>صندوق البريد</h1>
    </div>
</div>
    <div class="row">
        @foreach($latters as $latter)
        <div class="col-md-12">
        	<div class="post">
	        <h3>{{ $latter->type }}</h3>
	    
	    	<p>{{ $latter->title }}</p>
	    	<p>{{ $latter->sender }}</p>
	    	<p>{{ $latter->reciver }}</p>
	    	<p>{{ substr($latter->body, 0, 30) }} {{ strlen($latter->body) > 300 ? "..." : ""}}</p>
	    	<a href="" class="btn btn-primary">عرض</a>
	    </div>
    	@endforeach
    </div>
    </div>
@endsection
</html>