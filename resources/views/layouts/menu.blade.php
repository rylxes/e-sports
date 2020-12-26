<li class="{{ Request::is('clubAssesments*') ? 'active' : '' }}">
    <a href="{{ route('clubAssesments.index') }}"><i class="fa fa-edit"></i><span>Club Assesments</span></a>
</li>

<li class="{{ Request::is('personalDetails*') ? 'active' : '' }}">
    <a href="{{ route('personalDetails.index') }}"><i class="fa fa-edit"></i><span>Personal Details</span></a>
</li>

