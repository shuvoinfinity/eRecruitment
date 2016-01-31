@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Resume</h4>
                </div>
                <div class="panel-body">
                    @if($applicant != null)

                    @else
                    <h2>Not found!!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection