<!DOCTYPE html>
<html lang="en">
<head>

    <title>Tasks :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>
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
						  	<li class="active">Tasks</li>

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Tasks</h2>
											<div class="box-icon">
												<a href="<? echo base_url(); ?>/index.php/logs/create"><i class="icon-plus"></i></a>
											</div>
										</div>
                                            <? echo $this->session->flashdata('msg'); ?>
										<div class="box-content">
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick='window.location="<?php echo base_url(); ?>/index.php/tasks/add/"'>Add</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Title</th>
													  <th width="14%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?php
											foreach( $rows as $c ) :
											?>
												<tr>
													<td><a href="/index.php/logs/edit/"><? echo $c->calendar_title; ?></a></td>

													<td  class="text-center">
														 <a class="btn btn-info" href="/index.php/tasks/edit/<? echo $c->calendar_id; ?>">
															<i class="icon-edit "></i>
														</a>
														<a class="btn btn-danger" href="javascript: confirmdelete('/index.php/contacts/delete/<? echo $c->calendar_id; ?>');">
															<i class="icon-trash "></i>
														</a>
													</td>
												</tr>
											 <?php endforeach;
                                            for( $r=0;$r<=10;++$r) : ?>
                                                <tr>
                                                    <td>&nbsp;
                                                    <td>&nbsp;
                                                </tr>
                                            <?php endfor; ?>
											  </tbody>
										  </table>
										</div>
									</div>


                                    <? include('inc/debug.php') ?>


								</div><!--/col-->
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
	
	<!-- end: JavaScript-->
	
</body>
</html>