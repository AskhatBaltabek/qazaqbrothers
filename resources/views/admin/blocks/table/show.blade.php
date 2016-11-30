<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    @if ( isset($data) )
      <table class="table table-bordered table-striped model-list-table">
        <tbody>
          <?php
          foreach ($data['attributes'] as $key => $value) :
            $row = [trans('model.' . $key), $value];
          ?>
            @include('admin.blocks.table.row')
          <? endforeach; ?>
        </tbody>
      </table>
    @endif
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
