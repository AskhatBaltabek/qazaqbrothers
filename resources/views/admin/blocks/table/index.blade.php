

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    @if (! $data->isEmpty() )
      <?php
      if (isset($data[0]::$inputs)) {
        $model_columns = $data[0]::$inputs;
      } else {
        $model_columns = $data[0]['attributes'];
      }

      $relation_inputs = $data[0]['relations'];

      if (isset($trashed) && $trashed) {
        $row_actions = ['trashed', 'restore', 'force_delete'];
      } else {
        $row_actions = ['show', 'edit', 'delete'];
      }

      
      ?>
      <table class="table table-bordered table-striped model-list-table">
        @include('admin.blocks.table.header')
        <tbody>
          @foreach($data as $val )
            <?php
              $row = $val['attributes'];
              $relation_inputs = $val['relations'];
            ?>
            @include('admin.blocks.table.row')
          @endforeach
        </tbody>
        @include('admin.blocks.table.footer')
      </table>
    @endif
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
