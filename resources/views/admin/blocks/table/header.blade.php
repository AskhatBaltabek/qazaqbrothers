<thead>
<tr>
    @foreach($model_columns as $key => $val )
      <th>{{ trans('model.' . $key) }}</th>
    @endforeach

    @if (isset($relation_inputs) && $relation_inputs)
        @foreach($relation_inputs as $key => $val )
          <th>{{ trans('model.' . $key) }}</th>
        @endforeach
    @endif

    <th></th>
</tr>
</thead>