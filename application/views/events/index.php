<!DOCTYPE html>
<html lang="en">
<head>

    <title>Logs :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.datatable.min.css">
    <style>
        .form-horizontal .controls {
            margin-left: 180px;
        }
    </style>
</head>

<body>
<!-- start: Header -->
<header class="navbar">
    <div class="container">

        <? include('inc/top.adjust.php');?>

    </div>
</header>
<!-- end: Header -->

<div class="container">
    <div class="row">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="col-lg-2 col-sm-1 ">

            <div class="sidebar-nav nav-collapse collapse navbar-collapse">
                <? include( 'inc/sidenav.adjust.php' ); ?>
				</div>
									<a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

                    <div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
						  	<li><a href="/index.php/">Dashboard</a></li>
						  	<li class="active">Events</li>

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Events</h2>
											<div class="box-icon">
												<a href="<? echo base_url(); ?>index.php/logs/create"><i class="icon-plus"></i></a>
											</div>
										</div>
                                            <? echo $this->session->flashdata('msg'); ?>
										<div class="box-content">
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick='window.location="<?php echo base_url(); ?>index.php/events/add"'>Add</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>

											  <th>Title</th>
											  <th>For</th>
											  <th>Start Date</th>
											  <th>End Date</th>
											  <th style="display:none">Publication Status</th>
											  <th style="display:none">Status</th>
											  <th style="display:none">world</th>


											  <th>Action</th>


											  <!-- <tr>
                                               <th>Title</th>
                                               <th>For</th>
                                               <th>Start Date</th>
                                               <th>End Date</th>

                                               <th width="14%" class="text-center">Actions</th>
                                           </tr>-->
											  </thead>
												<tbody>
												<?php
												foreach( $rows as $c ) :
													?>
													<tr>
														<td><? echo $c->calendar_title; ?></td>
														<td class="text-center"><? echo $c->created_for; ?></td>
														<td class="text-center"><? echo $c->calendar_start; ?></td>
														<td class="text-center"><? echo $c->calendar_start; ?></td>

														<td  class="text-center">
															<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/events/view/<? echo $c->calendar_id; ?>">
																<i class="icon-edit "></i>
															</a>

															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/events/delete/<? echo $c->calendar_id ?>" onclick='return confirm("Are you sure to delete..")'>
																<i class="icon-trash "></i>
															</a>
														</td>
														<th style="display:none">Publication Status</th>
														<th style="display:none">Status</th>
														<th style="display:none">world</th>
													</tr>
												<?php endforeach; ?>
												</tbody>
										  </table>
										</div>
									</div>




								</div><!--/col-->

                                    <? //include('inc/debug.php') ?>

							</div><!--/row-->





					</div><!--/col-->


				</div><!--/row-->
                    <div class="col-md-3 visible-md visible-lg" id="feed">

                        <? include('inc/right.blank.php');?>

                    </div><!--/col-->

				</div>
				<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->

	
	<div class="clearfix"></div>

		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="/assets/js/jquery-1.10.2.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<![endif]-->
	<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/assets/js/jquery.sparkline.min.js"></script>
	<script src="/assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/assets/js/excanvas.min.js"></script><![endif]-->
	<script src="/assets/js/jquery.flot.min.js"></script>
	<script src="/assets/js/jquery.flot.pie.min.js"></script>
	<script src="/assets/js/jquery.flot.stack.min.js"></script>
	<script src="/assets/js/jquery.flot.resize.min.js"></script>
	<script src="/assets/js/jquery.flot.time.min.js"></script>
	<script src="/assets/js/jquery.autosize.min.js"></script>
	<script src="/assets/js/jquery.placeholder.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/daterangepicker.min.js"></script>
	<script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
	<script src="/assets/js/jquery.dataTables.min.js"></script>
	<script src="/assets/js/dataTables.bootstrap.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/index.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mydatatable.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>