<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Horizontal Form</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ route('admin:postModelAction', [$model_name, $page_action, $data->id]) }}">
    {{ csrf_field() }}
    <div class="box-body">
      @if ($data->inputs)

        @foreach($data->inputs as $input_name => $input_options)
          <? 
          $input_type = $input_options['type'];
          $label = $input_name; 
          $value = isset($data['attributes'][$input_name]) 
                    ? $data['attributes'][$input_name] 
                    : '';
          ?>

          @if (View::exists('admin.blocks.form.inputs.' . $input_type)) 

            @include('admin.blocks.form.inputs.' . $input_type)
          @else
            @include('admin.blocks.form.inputs.text')
          @endif
        @endforeach

      @else

        @foreach($data['attributes'] as $label => $value)
          <? if ($label == 'id') continue; ?>
          @include('admin.blocks.form.inputs.text')
        @endforeach

      @endif

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="reset" class="btn btn-default">Отменить</button>
      <button type="submit" class="btn btn-info pull-right">Отправить</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>