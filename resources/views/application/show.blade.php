@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if($application != null)
                <div class="panel-heading">
                    <h3 class ="text-success"> Resume of {{$application->name}} </h3>
                </div>
                <div class="panel-body">
                    <div class="row">                   
                        <table class = "table" style="border-top:0px;">
                            <tr width="100%">
                                <td width = "70%">
                                    <div>
                            <h3 class = "text-primary">Basic information</h3>
                            <p>
                                <h2>{{$application->name}}</h2>
                            </p>

                            <p>
                                <strong>Email</strong> 
                                {{$application->email}}
                            </p>
                            <p>
                                <strong>Phone Number</strong> 
                                {{$application->phone}}
                            </p>

                            <p>
                                <strong>{{$application->id_type}}</strong> 
                                {{$application->id_number}}
                            </p>

                            <p>
                                <strong>Birth Date</strong>
                                {{$application->date_of_birth}}
                            </p>
                            <p>
                                <strong>Gender</strong>
                                {{$application->gender}}
                            </p>
                            <p>
                                <strong>Marital Staus</strong>
                                {{$application->marital_status}}
                            </p>
                            <address>
                                <strong>Address</strong><br> 
                                {{$application->address}}
                            </address>
                            
                        </div>
                                </td>
                                <td width = "30%">
                                    <div>
                                        <img src="{{ asset('uploads/photos/'.$application->photo) }}" alt="Image not Set yet" hieght = "200" width= "200" class="img-thumbnail">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="row">
                        <h3 class = "text-primary">Educational Qualifications</h3>
                        <hr>
                        @if($application->has('qualifications'))
                            <div class="table-responsive">          
                                <table class="table table-hover center">
                                    <thead>
                                        <tr>
                                            <th>Degree</th>
                                            <th>Institute</th>
                                            <th>Result</th>
                                            <th>Passing Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $application['qualifications'] as $qualification ) 
                                      <tr>
                                        <td> {{ $qualification['degree'] }} </td>
                                        <td> {{ $qualification['institute'] }} </td>
                                        <td> {{ $qualification['result'] }} </td>
                                        <td> {{ $qualification['passing_year'] }} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <h2>No Educational Qualification found!</h2>
                        @endif
                    </div>

                    <div class="row">
                        <h3 class = "text-primary">Experiences</h3>
                        <hr>
                        @if($application->has('qualifications'))
                            <div class="table-responsive">          
                                <table class="table table-hover center">
                                    <thead>
                                        <tr>
                                            <th>Designation</th>
                                            <th>Organization Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $application['experiences'] as $experience ) 
                                      <tr>
                                        <td> {{ $experience['designation'] }} </td>
                                        <td> {{ $experience['organization'] }} </td>
                                        <td> {{ $experience['from'] }} </td>
                                        <td> {{ $experience['to'] }} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <h2>No Experiences found!</h2>
                        @endif
                    </div>

                    <hr>
                    <h3 class = "text-primary">Translation</h4>
                    <div class="jumbotron">
                        <h4>English Translation</h4>
                        <hr>
                        <p> {{$application->english_translation}} </p>
                        <h4>Bangla Translation</h4>
                        <hr>
                        <p> {{$application->bangla_translation}} </p>
                    </div>

                </div>
                @else
                    <h2>Not found!!</h2>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection