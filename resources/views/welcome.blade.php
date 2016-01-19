@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                <div >
                    {!! Form::open( array( 'class' => 'form')) !!}
                    <div>
                        <div class = "form-group col-md-6">

                            {!! Form::label('Your Name') !!}
                            {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your name')) !!}

                        </div>

                        <div class = "form-group col-md-6">
                            {!! Form::label('Your Email') !!}
                            {!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email Address')) !!}

                        </div>

                    </div>

                    <div>
                        <div class = "form-group col-md-6">

                            {!! Form::label('Your Name') !!}
                            {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your name')) !!}

                        </div>

                        <div class = "form-group col-md-6">
                            {!! Form::label('Your Email') !!}
                            {!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email Address')) !!}

                        </div>
                        
                    </div>

                    <div>
                        <div class = "form-group col-md-6">

                            {!! Form::label('Your Name') !!}
                            {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your name')) !!}

                        </div>

                        <div class = "form-group col-md-6">
                            {!! Form::label('Your Email') !!}
                            {!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email Address')) !!}

                        </div>
                        
                    </div>


                    <div class = "form-group">
                        {!! Form::label('Your Name') !!}
                        {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your name')) !!}

                    </div>

                    <div class = "form-group">
                        {!! Form::label('Your Email') !!}
                        {!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email Address')) !!}

                    </div>

                    <div class = "form-group">
                        {!! Form::label('Your Message') !!}
                        {!! Form::textarea('message', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your mesasge')) !!}

                    </div>

                    <div class = "form-group">
                        {!! Form::submit('Contact Us!', array('class' => 'btn btn-primary')) !!}

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
