<tr>
  @foreach($row as $key => $val )
    <td>{{ $val }}</td>
  @endforeach

  @if( isset($row_actions) )
      <td>
        @foreach($row_actions as $action)
            <a href="{{ route('admin:getModelAction', [$model_name, $action, $row['id']]) }}">{{ trans($action) }}</a>
        @endforeach
    </td>
  @endif

</tr>
