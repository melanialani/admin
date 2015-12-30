
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('index.php/admin/dashboard'); ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><?php echo $title; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Overview</h1>
			</div>
		</div><!--/.row-->
		
		<!-- INSERT CHARTS AND WHATEVER YOU WANT OVER HERE -->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo number_format($total_order); ?></div>
							<div class="text-muted">Total Orders</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo number_format($total_user); ?></div>
							<div class="text-muted">Total Users</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked laptop computer and mobile"><use xlink:href="#stroked-laptop-computer-and-mobile"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo number_format($total_item); ?></div>
							<div class="text-muted">Total items</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo number_format($income_day); ?></div>
							<div class="text-muted">Today's Income</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> New Orders</div>
					<div class="panel-body">
						<table id="table_new_order" class="table table-striped table-bordered" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>ID HORDER</th>
					            <th>ID Barang</th>
					            <th>Nama Barang</th>
					            <th>Keterangan</th>
					            <th>Qty</th>
					        </tr>
					    </thead>
					   	<tbody>
					   		<tr>
					            <th>1</th>
					            <th>2</th>
					            <th>3</th>
					            <th>4</th>
					            <th>5</th>
					        </tr>
					        <tr>
					            <th>6</th>
					            <th>7</th>
					            <th>8</th>
					            <th>9</th>
					            <th>10</th>
					        </tr>
					        <tr>
					            <th>11</th>
					            <th>12</th>
					            <th>13</th>
					            <th>14</th>
					            <th>15</th>
					        </tr>
					   	</tbody>
					</table>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script type="text/javascript" class="init">
		$(document).ready(function() {
			$('#table_new_order').DataTable();
			
			$('#calendar').datepicker({});
		} );
	</script>
