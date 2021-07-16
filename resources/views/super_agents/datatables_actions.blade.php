{!! Form::open(['route' => ['superAgents.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('superAgents.show', $item->id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>

    <br/>
    <a href="{{ url('superAgents/loadAccount', $item->id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-usd"></i>
    </a>
{{--    <a href="{{ route('superAgents.edit', $item->id) }}" class='btn btn-default btn-xs'>--}}
{{--        <i class="glyphicon glyphicon-edit"></i>--}}
{{--    </a>--}}
{{--    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [--}}
{{--        'type' => 'submit',--}}
{{--        'class' => 'btn btn-danger btn-xs',--}}
{{--        'onclick' => "return confirm('Are you sure?')"--}}
{{--    ]) !!}--}}
</div>
{!! Form::close() !!}
