@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#0055A6; color:white">
                    <h4>Dashboard <small class = "text-default">You are logged in!</small></h4>
                </div>

                <div class="panel-body">
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
                                    <th>Details</th>
                                    <th>Recommendation Letter</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($applicants as $applicant)
                              <tr>
                                <td> {{$applicant->name}} </td>
                                <td> {{$applicant->email}} </td>
                                <td> {{$applicant->phone}} </td>
                                <td> {{$applicant->created_at->format('Y-m-d')}} </td>
                                <td> <a target="_blank" href="{{ url('application',$applicant->id) }}">view</a></td>
                                <td><a target="_blank" href="{{asset('uploads/letters/'.$applicant->recommendation_letter)}}">Download</a></td>
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
