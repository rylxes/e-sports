<div class="table-responsive">
    <table class="table" id="clubAssesments-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Enjoy Practice Routines</th>
        <th>Is Participated In Competitions</th>
        <th>Is Selected To Represent</th>
        <th>Competitions</th>
        <th>Motivation</th>
        <th>Achievement</th>
        <th>Admired Sportsperson</th>
        <th>Top Athlete Plans</th>
        <th>Current Team</th>
        <th>Date Joined Team</th>
        <th>Favourite Jersey Number</th>
        <th>Nickname</th>
        <th>Favourite Sports Team</th>
        <th>Why Like Team</th>
        <th>No Of Teams Played For</th>
        <th>Why Leave</th>
        <th>Can Improve In Team</th>
        <th>Is Like Coach Team</th>
        <th>Positions Play</th>
        <th>Preferred Foot</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clubAssesments as $clubAssesment)
            <tr>
                <td>{{ $clubAssesment->user_id }}</td>
            <td>{{ $clubAssesment->enjoy_practice_routines }}</td>
            <td>{{ $clubAssesment->is_participated_in_competitions }}</td>
            <td>{{ $clubAssesment->is_selected_to_represent }}</td>
            <td>{{ $clubAssesment->competitions }}</td>
            <td>{{ $clubAssesment->motivation }}</td>
            <td>{{ $clubAssesment->achievement }}</td>
            <td>{{ $clubAssesment->admired_sportsperson }}</td>
            <td>{{ $clubAssesment->top_athlete_plans }}</td>
            <td>{{ $clubAssesment->current_team }}</td>
            <td>{{ $clubAssesment->date_joined_team }}</td>
            <td>{{ $clubAssesment->favourite_jersey_number }}</td>
            <td>{{ $clubAssesment->nickname }}</td>
            <td>{{ $clubAssesment->favourite_sports_team }}</td>
            <td>{{ $clubAssesment->why_like_team }}</td>
            <td>{{ $clubAssesment->no_of_teams_played_for }}</td>
            <td>{{ $clubAssesment->why_leave }}</td>
            <td>{{ $clubAssesment->can_improve_in_team }}</td>
            <td>{{ $clubAssesment->is_like_coach_team }}</td>
            <td>{{ $clubAssesment->positions_play }}</td>
            <td>{{ $clubAssesment->preferred_foot }}</td>
                <td>
                    {!! Form::open(['route' => ['clubAssesments.destroy', $clubAssesment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clubAssesments.show', [$clubAssesment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clubAssesments.edit', [$clubAssesment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
