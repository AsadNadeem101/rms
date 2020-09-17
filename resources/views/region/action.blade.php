<a href=""><i class="fas fa-eye" style="color: darkblue"></i></a>
<a href="{{route('regions.edit',$id)}}"><i class="fas fa-pen" style="color: brown"></i></a>
{!! Form::open(['method' => 'DELETE', 'route' => ['regions.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}