<thead>
<tr>
    @foreach($model_columns as $key => $val )
      <th>{{ trans('model.' . $key) }}</th>
    @endforeach
    <th></th>
</tr>
</thead>