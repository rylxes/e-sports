<div class="table-responsive">
    <table class="table" id="personalDetails-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>First Name</th>
        <th>Marital Status</th>
        <th>Mother Maiden Name</th>
        <th>Last Name</th>
        <th>Height</th>
        <th>Body Weight</th>
        <th>Phone</th>
        <th>Sm Handle</th>
        <th>Highest Education</th>
        <th>Place Of Birth</th>
        <th>School</th>
        <th>Career Preference</th>
        <th>Is Still Schooling</th>
        <th>Contact Address</th>
        <th>Dob</th>
        <th>Country Id</th>
        <th>State Of Origin</th>
        <th>Zipcode</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personalDetails as $personalDetails)
            <tr>
                <td>{{ $personalDetails->user_id }}</td>
            <td>{{ $personalDetails->first_name }}</td>
            <td>{{ $personalDetails->marital_status }}</td>
            <td>{{ $personalDetails->mother_maiden_name }}</td>
            <td>{{ $personalDetails->last_name }}</td>
            <td>{{ $personalDetails->height }}</td>
            <td>{{ $personalDetails->body_weight }}</td>
            <td>{{ $personalDetails->phone }}</td>
            <td>{{ $personalDetails->sm_handle }}</td>
            <td>{{ $personalDetails->highest_education }}</td>
            <td>{{ $personalDetails->place_of_birth }}</td>
            <td>{{ $personalDetails->school }}</td>
            <td>{{ $personalDetails->career_preference }}</td>
            <td>{{ $personalDetails->is_still_schooling }}</td>
            <td>{{ $personalDetails->contact_address }}</td>
            <td>{{ $personalDetails->dob }}</td>
            <td>{{ $personalDetails->country_id }}</td>
            <td>{{ $personalDetails->state_of_origin }}</td>
            <td>{{ $personalDetails->zipcode }}</td>
                <td>
                    {!! Form::open(['route' => ['personalDetails.destroy', $personalDetails->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('personalDetails.show', [$personalDetails->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('personalDetails.edit', [$personalDetails->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
