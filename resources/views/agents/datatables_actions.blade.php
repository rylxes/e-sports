{!! Form::open(['route' => ['agents.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('agents.show', $item->id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
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
