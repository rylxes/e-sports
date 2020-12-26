<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Enjoy Practice Routines Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enjoy_practice_routines', 'Enjoy Practice Routines:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enjoy_practice_routines', 0) !!}
        {!! Form::checkbox('enjoy_practice_routines', '1', null) !!}
    </label>
</div>


<!-- Is Participated In Competitions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_participated_in_competitions', 'Is Participated In Competitions:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_participated_in_competitions', 0) !!}
        {!! Form::checkbox('is_participated_in_competitions', '1', null) !!}
    </label>
</div>


<!-- Is Selected To Represent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_selected_to_represent', 'Is Selected To Represent:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_selected_to_represent', 0) !!}
        {!! Form::checkbox('is_selected_to_represent', '1', null) !!}
    </label>
</div>


<!-- Competitions Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('competitions', 'Competitions:') !!}
    {!! Form::textarea('competitions', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivation', 'Motivation:') !!}
    {!! Form::textarea('motivation', null, ['class' => 'form-control']) !!}
</div>

<!-- Achievement Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('achievement', 'Achievement:') !!}
    {!! Form::textarea('achievement', null, ['class' => 'form-control']) !!}
</div>

<!-- Admired Sportsperson Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admired_sportsperson', 'Admired Sportsperson:') !!}
    {!! Form::text('admired_sportsperson', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Top Athlete Plans Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('top_athlete_plans', 'Top Athlete Plans:') !!}
    {!! Form::textarea('top_athlete_plans', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_team', 'Current Team:') !!}
    {!! Form::text('current_team', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Joined Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_joined_team', 'Date Joined Team:') !!}
    {!! Form::text('date_joined_team', null, ['class' => 'form-control','id'=>'date_joined_team']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_joined_team').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Favourite Jersey Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('favourite_jersey_number', 'Favourite Jersey Number:') !!}
    {!! Form::text('favourite_jersey_number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nickname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nickname', 'Nickname:') !!}
    {!! Form::text('nickname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Favourite Sports Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('favourite_sports_team', 'Favourite Sports Team:') !!}
    {!! Form::text('favourite_sports_team', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Why Like Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('why_like_team', 'Why Like Team:') !!}
    {!! Form::text('why_like_team', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No Of Teams Played For Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_teams_played_for', 'No Of Teams Played For:') !!}
    {!! Form::number('no_of_teams_played_for', null, ['class' => 'form-control']) !!}
</div>

<!-- Why Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('why_leave', 'Why Leave:') !!}
    {!! Form::text('why_leave', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Can Improve In Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('can_improve_in_team', 'Can Improve In Team:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('can_improve_in_team', 0) !!}
        {!! Form::checkbox('can_improve_in_team', '1', null) !!}
    </label>
</div>


<!-- Is Like Coach Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_like_coach_team', 'Is Like Coach Team:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_like_coach_team', 0) !!}
        {!! Form::checkbox('is_like_coach_team', '1', null) !!}
    </label>
</div>


<!-- Positions Play Field -->
<div class="form-group col-sm-6">
    {!! Form::label('positions_play', 'Positions Play:') !!}
    {!! Form::text('positions_play', null, ['class' => 'form-control']) !!}
</div>

<!-- Preferred Foot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preferred_foot', 'Preferred Foot:') !!}
    {!! Form::text('preferred_foot', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clubAssesments.index') }}" class="btn btn-default">Cancel</a>
</div>
