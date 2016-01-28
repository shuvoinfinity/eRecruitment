@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        Dashboard <samll class="bg-success">You are logged in!</samll>
                    </h4>
                </div>

                <div class="panel-body">
                    You are logged in!

                    <h1>List of Applicants</h1>

                    @if($applicants!= null)
                    <div class="table-responsive">          
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Applied Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($applicants as $applicant)
                              <tr>
                                <td> {{$applicant->name}} </td>
                                <td> {{$applicant->email}} </td>
                                <td> {{$applicant->phone}} </td>
                                <td> {{$applicant->created_at}} </td>
                                <td>view</td>
                                <td>pdf</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
