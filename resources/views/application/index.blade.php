@extends('layouts.master')

@section('content')
<ul>
	@foreach($applicants as $applicant)
	<li> {{$applicant->name}} </li>
	<li> {{$applicant->bangla_translation}} </li>
	<li> {{$applicant->english_translation}} </li>
	@endforeach
</ul>
@endsection