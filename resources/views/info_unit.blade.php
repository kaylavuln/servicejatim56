@extends('crudbooster::admin_template')
@section('content')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cari Data Unit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="get" action='<?php echo URL::to('admin/info_unit/detail/read'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <label for="nopol" class="col-sm-2 control-label">Nomor Polisi</label>
                  <div class="col-sm-10">
                    <input type="text" name="nomor_polisi" class="form-control" id="nopol" value="<?=g('nomor_polisi');?>" placeholder="Nomor Polisi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="types" class="col-sm-2 control-label">Informasi</label>
                  <div class="col-sm-10">
                    <select name="for" class="form-control">
                    <option value="unit" <?=(g('for') === 'unit') ? 'selected' : '';?>>Unit</option>
                    <option value="historical" <?=(g('for') === 'historical') ? 'selected' : '';?>>Historical</option>
                  </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
             
                <button type="submit" class="btn btn-danger">Pencarian</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
<?php 
try { 
if(g('for') === 'unit'):
?>		  
		<div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-info"></i>
              <h3 class="box-title">Hasil Pencarian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <dl class="dl-horizontal">
			  <?php 
			  unset($result->id); 
			  unset($result->Tanggal);
			  unset($result->created_at);
			  unset($result->updated_at);
			  ?>
			  <?php foreach($result as $key => $kendaraan):?>
                <dt><?=str_replace('_',' ',$key);?></dt>
                <dd><?=$result->$key;?></dd>
              <?php endforeach; ?>
			  </dl>
            </div>
            <!-- /.box-body -->
          </div>
<?php 
elseif(g('for') === 'historical'):
$no = 1;
 ?>
 <div class="box">
            <div class="box-header">
            <i class="fa fa-info"></i>
              <h3 class="box-title">Historical Unit</h3>             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
				<tr>
				  <th>No</th>
                  <th>Equipment</th>
				  <th>Nomor Polisi</th>
				  <th>Order</th>
				  <th>Bsc Start</th>
				  <th>Description</th>
				  <th>Totcosplan</th>
				  <th>Totcostact</th>
				  <th>Material Description</th>
				  <th>Sort field</th>

                </tr>
				<?php foreach($result as $kendaraan):?>
                <tr>
				  <td><?=$no;?></td>
                  <td><?=$kendaraan->Equipment;?></td>
				  <td><?=$kendaraan->Nomor_Polisi;?></td>
				  <td><?=$kendaraan->Order;?></td>
				  <td><?=$kendaraan->Bsc_start;?></td>
				  <td><?=$kendaraan->Description;?></td>
				  <td><?=$kendaraan->Totcosplan;?></td>
				  <td><?=$kendaraan->Totcostact;?></td>
				  <td><?=$kendaraan->Material_Description;?></td>
				  <td><?=$kendaraan->Sort_field;?></td>
                </tr>
                <?php 
				$no++;
				endforeach; ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
<?php

endif;

} catch (Exception $e) { 

}
 ?>		  
@endsection