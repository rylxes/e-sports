<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Marital Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marital_status', 'Marital Status:') !!}
    {!! Form::text('marital_status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mother Maiden Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_maiden_name', 'Mother Maiden Name:') !!}
    {!! Form::text('mother_maiden_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::text('height', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Body Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body_weight', 'Body Weight:') !!}
    {!! Form::text('body_weight', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sm Handle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sm_handle', 'Sm Handle:') !!}
    {!! Form::text('sm_handle', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Highest Education Field -->
<div class="form-group col-sm-6">
    {!! Form::label('highest_education', 'Highest Education:') !!}
    {!! Form::text('highest_education', null, ['class' => 'form-control']) !!}
</div>

<!-- Place Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place_of_birth', 'Place Of Birth:') !!}
    {!! Form::text('place_of_birth', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- School Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school', 'School:') !!}
    {!! Form::text('school', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Career Preference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('career_preference', 'Career Preference:') !!}
    {!! Form::text('career_preference', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Is Still Schooling Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_still_schooling', 'Is Still Schooling:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_still_schooling', 0) !!}
        {!! Form::checkbox('is_still_schooling', '1', null) !!}
    </label>
</div>


<!-- Contact Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('contact_address', 'Contact Address:') !!}
    {!! Form::textarea('contact_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- State Of Origin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_of_origin', 'State Of Origin:') !!}
    {!! Form::number('state_of_origin', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', 'Zipcode:') !!}
    {!! Form::number('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('personalDetails.index') }}" class="btn btn-default">Cancel</a>
</div>
