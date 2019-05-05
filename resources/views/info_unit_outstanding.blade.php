@extends('crudbooster::admin_template')
@section('content')
<div class="row">
		<?php foreach($area as $data => $value): ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-map-marker"></i></span>
			
            <div class="info-box-content">
              <span class="info-box-text"><strong><?=$data;?></strong></span>
              <span class="info-box-number"><small><?=$value;?></small></span>
            </div>
            <!-- /.info-box-content -->
		
          </div>
          <!-- /.info-box -->
        </div>
     	<?php endforeach; ?>  
        <!-- /.col -->
</div>
@endsection