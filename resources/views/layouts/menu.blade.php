@role('admin')
<li class="{{ Request::is('superAgents*') ? 'active' : '' }}">
    <a href="{{ route('superAgents.index') }}"><i class="fa fa-edit"></i><span>Super Agents</span></a>
</li>
@endrole

@hasanyrole('super_agent|admin')
<li class="{{ Request::is('agents*') ? 'active' : '' }}">
    <a href="{{ route('agents.index') }}"><i class="fa fa-edit"></i><span>Agents</span></a>
</li>
@endrole
{{--<li class="{{ Request::is('branches*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('branches.index') }}"><i class="fa fa-edit"></i><span>Branches</span></a>--}}
{{--</li>--}}

{{--<li class="{{ Request::is('unions*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('unions.index') }}"><i class="fa fa-edit"></i><span>Unions</span></a>--}}
{{--</li>--}}

{{--<li class="{{ Request::is('units*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('units.index') }}"><i class="fa fa-edit"></i><span>Units</span></a>--}}
{{--</li>--}}

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

