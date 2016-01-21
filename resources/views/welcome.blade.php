@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"> 
                  <h2> Welcome to Recruitment Portal.</h2>
                </div>

                <div class="panel-body"> 
                  {!! Form::open( array( 'route'=> 'application.store' ,'class' => 'form', 'files' => true, 'accept-charset'=>'UTF-8')) !!}

                    <h3> Personal Information</h3>
                    <hr>

                    <div class="col-md-12">

                      <div  class = "col-md-6">

                        <div class="form-group">
                          {!! Form::label('Name') !!}
                          {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Fullname')) !!}
                        </div> 

                        <div class="form-group">
                          {!! Form::label('Email') !!}
                          {!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email address')) !!}
                        </div> 

                        <div class="form-group">
                        {!! Form::label('Personal Contact Number') !!}
                        {!! Form::text('phone', null, array('required', 'class' => 'form-control', 'placeholder' => 'Mobile number')) !!}  
                        </div> 

                        <div class="form-group">
                        {!! Form::label('Address') !!}
                        {!! Form::text('address', null, array('required', 'class' => 'form-control', 'placeholder' => 'Mailing Address')) !!}  
                        </div> 

                        <div class="form-group">
                        {!! Form::label('Select ID Type') !!}
                        {!! Form::select('id_type',array('National ID'=>'National ID','Passport No'=>'Passport No', 'Birth Certificate No' => 'Birth Certificate No'),'National ID') !!}
                        {!! Form::text('id_number', null, array('required', 'class' => 'form-control', 'placeholder' => 'ID number')) !!}  
                        </div> 
                        
                      </div>

                      <div class = "col-md-6">

                        <div class="form-group">
                        {!! Form::label('Upload Photo') !!}
                        {!! Form::file('photo', null, ['required']) !!}
                        <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                        {!! Form::label('Gender') !!}<br/>                        
                        {!! Form::label('Male') !!}
                        &nbsp; 
                        {!! Form::radio('gender', 'male') !!}                          
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        {!! Form::label('Female') !!} 
                        &nbsp;
                        {!! Form::radio('gender', 'male') !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('Marital Status') !!}
                        {!! Form::select('marital_status',array('married'=>'Married','single'=>'Single'),'single') !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('Upload Church Pastors Recommendation Letter') !!}
                        {!! Form::file('recommendation_letter', null, ['required']) !!}
                        <p class="help-block">Example block-level help text here.</p>
                        </div>

                      </div>

                    </div>            
                      
                     
                    <h3> Educational Qualifications</h3> 
                    <hr>                                                   
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Degree</th>
                          <th>Institute</th>
                          <th>Result</th>
                          <th>Passing Year</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            {!! Form::text('degree[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::text('institute[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::text('result[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::text('passing_year[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <h3> Job Experience(s)</h3>                  
                    <hr>                
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Designation</th>
                          <th>Organization</th>
                          <th>From (Date)</th>
                          <th>To (Date)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            {!! Form::text('designation[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::text('organization[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::date('from[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                          <td>
                            {!! Form::date('to[]', null, ['class' => 'form-control', 'required']) !!}
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <hr> 
                    <h3> Translation Test</h3>

                    <div class="from-group">
                      
                      <p class="lead">
                        Nullam quis risus eget urna mollis ornare vel eu leo. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nullam id dolor id nibh ultricies vehicula.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, 
                        nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non 
                        metus auctor fringilla.
                        Maecenas sed diam eget risus varius blandit sit amet non magna. 
                        Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, 
                        nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                      </p>
                      {!! Form::label('Translate to Bangla', null, ['class'=>'form-control text-center']) !!}
                      {!! Form::textarea('bangla_translation', null, ['required', 'class' => 'form-control', 'placeholder' => 'Start writting here . . .']) !!}
                    </div>
                    <br>
                    <div class="from-group">
                      
                      <p class="lead">
                        Nullam quis risus eget urna mollis ornare vel eu leo. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nullam id dolor id nibh ultricies vehicula.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, 
                        nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non 
                        metus auctor fringilla.
                        Maecenas sed diam eget risus varius blandit sit amet non magna. 
                        Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, 
                        nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                      </p>
                      {!! Form::label('Translate to English', null, ['class' => 'form-control text-center']) !!}
                      {!! Form::textarea('english _translation', null, ['required', 'class' => 'form-control', 'placeholder' => 'Start writting here . . .']) !!}
                    </div>

                    <div class = "form-group text-center">
                      <hr>
                      {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

                    </div>

                  {!! Form::close() !!}

                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
