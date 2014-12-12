@extends('layouts.default')

@section('title')
	Home
@stop

@section('subtitle')
	Welcome Home!
@stop

@section('username')
<?php
	
	if(Session::has('uid'))
	{
		$UID = Session::get('uid', 'default');
		$data = DB::table('users')->where('UID', $UID)->first();

		if( $UID == $data->UID)
		{
			echo $data->name;
		}
	}
	else
		echo "Trojan";
?>
@stop

@section('link')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Editable Table</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													Print </a>
												</li>
												<li>
													<a href="javascript:;">
													Save as PDF </a>
												</li>
												<li>
													<a href="javascript:;">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 UID
								</th>
								<th>
									 Name
								</th>
								<th>
									 Password
								</th>
								<th>
									 Email
								</th>
								<th>
									 Join Date
								</th>
								<th>
									 Last Active
								</th>
								<th>
									 Edit
								</th>
								<th>
									 Delete
								</th>
							</tr>
							</thead>
							<tbody>

								
							<?php

								$results = DB::select('select * from users_pw where UID = 1', array(2));

								$data = DB::table('users')->get();

								foreach ($data as $row)
								{
									//if( $row->role != 9)
									{
										$pass = DB::table('users_pw')->where('UID', $row->UID)->first();

										echo '<tr>';
										echo '<td>'.$row->UID.'</td>';
										echo '<td>'.$row->name.'</td>';
										echo '<td>'.$pass->password.'</td>';
										echo '<td>'.$row->email.'</td>';
										echo '<td>'.$row->join_date.'</td>';
										echo '<td>'.$row->last_active.'</td>';
										echo '<td>
												<a class="edit" href="javascript:;">
												Edit </a>
											  </td>';
										echo '<td>
												<a class="delete" href="javascript:;">
												Delete </a>
											  </td>';
										echo '</tr>';
									}
								}
							?>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->

@stop


@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/table-editable.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableEditable.init();
});
</script>

@stop