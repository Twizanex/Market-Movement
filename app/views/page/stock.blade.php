@extends('layouts.default')

@section('title')
	Stock
@stop

@section('subtitle')
	Panel
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
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Responsive Flip Scroll Tables</span>
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
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed table-hover" id="example">
							<thead class="flip-content">
							<tr>
								<th width="20%">
									 Code
								</th>
								<th>
									 Company
								</th>
								<th class="numeric">
									 Price
								</th>
								<th class="numeric">
									 Change
								</th>
								<th class="numeric">
									 Change %
								</th>
								<th class="numeric">
									 Open
								</th>
								<th class="numeric">
									 High
								</th>
								<th class="numeric">
									 Low
								</th>
								<th class="numeric">
									 Volume
								</th>
							</tr>
							</thead>
							<tbody>
							<?php

								$UID = Session::get('uid', 'default');

								$data = DB::table('list_data')->get();

								foreach ($data as $row)
								{
									if( $UID == $row->UID)
									{
										echo '<tr>';
										echo '<td class="code">'.$row->stock.'</td>';
										echo '<td></td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '<td class="numeric">0</td>';
										echo '</tr>';
									}
								}
							?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
@stop


@section('script')

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/table-advanced.js"></script>
<script>
$(document).ready(function() {

	$('.code').each(function( index ) {

		var url = "http://query.yahooapis.com/v1/public/yql";
	    // var symbol = $("#symbol").val();
	    var symbol = $( this ).text();

	    var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + symbol + "')");

	    $.getJSON(url, 'q=' + data + "&format=json&diagnostics=true&env=http://datatables.org/alltables.env")
	        .done(function (data) {
	        //output(JSON.stringify(data.query.results.quote, undefined, 2));
	        $( ".code:eq(" + index + ")" ).next().html(data.query.results.quote.Name);
	        $( ".code:eq(" + index + ")" ).next().next().html(data.query.results.quote.LastTradePriceOnly);
	        $( ".code:eq(" + index + ")" ).next().next().next().html(data.query.results.quote.Change);
	        $( ".code:eq(" + index + ")" ).next().next().next().next().html(data.query.results.quote.ChangeinPercent);
	        $( ".code:eq(" + index + ")" ).next().next().next().next().next().html(data.query.results.quote.Open);
	        $( ".code:eq(" + index + ")" ).next().next().next().next().next().next().html(data.query.results.quote.DaysHigh);
	        $( ".code:eq(" + index + ")" ).next().next().next().next().next().next().next().html(data.query.results.quote.DaysLow);
	        $( ".code:eq(" + index + ")" ).next().next().next().next().next().next().next().next().html(data.query.results.quote.Volume);

	    	//output(JSON.stringify(data.query.results.quote, undefined, 2));
	    	console.log(JSON.stringify(data.query.results.quote,  undefined, 2));
	    })
	        .fail(function (jqxhr, textStatus, error) {
	        var err = textStatus + ", " + error;
	            $("#result").text('Request failed: ' + err);
	    });
	});


    $('#example').dataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Demo.init(); // init demo features
   TableAdvanced.init();
} );

</script>
@stop