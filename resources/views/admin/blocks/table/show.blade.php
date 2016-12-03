@if ( isset($data) )
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">
        Data Table With Full Features
      </h3>
      <div class="pull-right">
          <a href="{{ route('admin:getModelAction', [$model_name, 'delete', $data->id]) }}" class="btn btn-default"> Удалить </a>
          <a href="{{ route('admin:getModelAction', [$model_name, 'edit', $data->id]) }}" class="btn btn-warning">Изменить</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered table-striped model-list-table">
        <tbody>
          <?php
          $string_limit = 1000;
          foreach ($data::$inputs as $key => $value) :
            $value = $data['attributes'][$key];
            if (!$value) continue;
            $model_columns = $row = [trans('model.' . $key), $value];
          ?>
            @include('admin.blocks.table.row')
          <? endforeach; ?>

          <?php
            foreach ($data::$relation_inputs as $key => $value) :
              if ($value == 'one') {
                // dd($data['relations'][$key]);
                $model_columns = $row = [trans('model.' . $key), $data['relations'][$key]->title];
              } elseif ($value == 'many') {
                foreach ($data['relations'][$key] as $relation_item) {
                }
              }
          ?>
            @include('admin.blocks.table.row')
          <? endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
@endif
