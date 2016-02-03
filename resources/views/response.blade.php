@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">

	@if (\Session::has('message'))
		<h1 class = "text text-success">{{ \Session::get('message') }}</h1>
	@endif
</div>
@endsection