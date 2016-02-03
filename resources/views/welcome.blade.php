@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"> Welcome to Compassion International Bangladesh e-Recruitment. </div>

        <div class="panel-body"> 
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
          {!! Form::open( array( 'url'=>'application', 'class' => 'form', 'files' => true, 'accept-charset'=>'UTF-8')) !!}

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
                {!! Form::file('photo', ['required' => 'required']) !!}
                <p class="help-block">Image must be in <mark>jpg</mark> formate and maximum file size <mark>150KB</mark></p>
              </div>

              <div class="form-group">
                {!! Form::label('Date of Birth') !!}
                {!! Form::text('date_of_birth', null, array( 'required', 'class' => 'form-control datepicker','placeholder' => 'Pick the Birth Date')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('Gender') !!}<br/>                        
                {!! Form::label('Male') !!}
                &nbsp; 
                {!! Form::radio('gender', 'male') !!}                          
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                {!! Form::label('Female') !!} 
                &nbsp;
                {!! Form::radio('gender', 'female') !!}
              </div>
              <div class="form-group">
                {!! Form::label('Marital Status') !!}
                {!! Form::select('marital_status',array('married'=>'Married','single'=>'Single'),'single') !!}
              </div>

              <div class="form-group">
                {!! Form::label('Upload Church Pastors Recommendation Letter') !!}
                {!! Form::file('recommendation_letter', ['required' => 'required']) !!}
                <p class="help-block">Letter must be in <mark>pdf</mark> formate and maximum file size <mark>200KB</mark></p>
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
                <th colspan="2">Passing Year</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  {!! Form::text('degree[]', old('degee.0'), [ 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'Level of education']) !!}
                </td>
                <td>
                  {!! Form::text('institute[]', old('institute.0'), ['required' => 'required','class' => 'form-control', 'placeholder' => 'Name of Institute']) !!}
                </td>
                <td>
                  {!! Form::text('result[]', old('result.0'), ['required' => 'required','class' => 'form-control', 'placeholder' => 'Result in gpa/division']) !!}
                </td>
                <td>
                  {!! Form::text('passing_year[]', old('passing_year.0'), ['required' => 'required','class' => 'form-control', 'placeholder' => 'Example: 2012']) !!}
                </td>
                <td>
                  <p class="removeRow">
                    <span class="glyphicon glyphicon-remove"></span>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="text-right">
            <p class="btn btn-sm btn-primary addRow">
              <span class="glyphicon glyphicon-plus"></span> add more
            </p>
          </div>


          <h3> Job Experience(s) <small>If Any</samll></h3>                  
          <hr>                
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Designation</th>
                <th>Organization</th>
                <th>From (Date)</th>
                <th colspan="2">To (Date)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  {!! Form::text('designation[]', old('designation.0'), ['class' => 'form-control']) !!}
                </td>
                <td>
                  {!! Form::text('organization[]', old('organization.0'), ['class' => 'form-control']) !!}
                </td>
                <td>
                  {!! Form::date('from[]', old('from.0'), ['class' => 'form-control datepicker fromDatePicker']) !!}
                </td>
                <td>
                  {!! Form::date('to[]', old('to.0'), ['class' => 'form-control datepicker toDatePicker']) !!}
                </td>
                <td>
                  <p class="removeRow">
                    <span class="glyphicon glyphicon-remove"></span>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="text-right">
            <p class="btn btn-sm btn-primary addRow">
              <span class="glyphicon glyphicon-plus"></span> add more
            </p>
          </div>

          <h3> Translation Test</h3>
          <hr> 
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
            {!! Form::textarea('bangla_translation', null, ['required' => 'required','class' => 'form-control', 'placeholder' => 'Start writting here . . .']) !!}
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
            {!! Form::textarea('english_translation', null, ['required' => 'required', 'class' => 'form-control', 'placeholder' => 'Start writting here . . .']) !!}
          </div>

          <div class = "form-group text-center">
            <hr>
            {!! Form::submit('Contact Us!', array('class' => 'btn btn-primary')) !!}

          </div>

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
