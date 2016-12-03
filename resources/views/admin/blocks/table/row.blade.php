<tr>
  <?php $string_limit = isset($string_limit) ? $string_limit : 50; ?>

  @foreach($model_columns as $key => $val )
    <?php
      $val = $row[$key];
    ?>
    <td>{{ str_limit($val, $string_limit) }}</td>
  @endforeach

  @if (isset($relation_inputs) && $relation_inputs)
    @foreach($relation_inputs as $key => $val )
      <td>{{ $val->title }}</td>
    @endforeach
  @endif

  @if( isset($row_actions) )
      <td>
        @foreach($row_actions as $action)
            <a href="{{ route('admin:getModelAction', [$model_name, $action, $row['id']]) }}">{{ trans('model.'.$action) }}</a>
        @endforeach
    </td>
  @endif

</tr>
