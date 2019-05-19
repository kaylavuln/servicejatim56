@extends('crudbooster::admin_template')
@section('content')
<?php 
try { 

if(CRUDBooster::getCurrentMethod() == 'getIndex'): ?>
<div class="row">
		<?php foreach($area as $data => $value): ?>
        <a href="<?=CRUDBooster::adminPath('unit3plus_outstanding/detail/'.$data);?>">
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-map-marker"></i></span>
			
            <div class="info-box-content">
              <span class="info-box-text"><strong><?=$data;?></strong></span>
              <span class="info-box-number"><small><?=count($value);?></small></span>
            </div>
            <!-- /.info-box-content -->
		
          </div>
          <!-- /.info-box -->
        </div>
		<a>
     	<?php endforeach; ?>  
        <!-- /.col -->
</div>
<?php endif; ?>

<?php if(CRUDBooster::getCurrentMethod() == 'getDetail'): ?>

<div class="box">
	<div class="box-header">
	<i class="fa fa-info"></i>
	  <h3 class="box-title"><?=count($area);?> Data Unit  </h3>             
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive no-padding">
	  <table class="table table-hover">
		<tbody>
		<tr>
		  <th>No</th>
		  <th>Bsc Start</th>
		  <th>Equipment</th>
		  <th>Nomor Polisi</th>
		  <th>Tipe Kendaraan</th>
		  <th>Customer Name</th>
		  <th>Area</th>
		</tr>
		<?php $no = 1; foreach($area as $value): ?>
		
		<tr>
			<td><?=$no;?></td>
			<td><?=date_format(date_create($value->lastcheck),"d M Y");?></td>
			<td><?=$value->Equipment;?></td>
			<td><?=$value->Nomor_Polisi;?></td>
			<td><?=$value->Tipe_Kendaraan;?></td>
			<td><?=$value->Customer_Name;?></td>
			<td><?=$value->Area;?></td>

		</tr>
		
		<?php $no++;endforeach; ?>
	  </tbody></table>
	</div>
	<!-- /.box-body -->
 </div>

<?php endif;
} catch (Exception $e) { 

}
 ?>
@endsection