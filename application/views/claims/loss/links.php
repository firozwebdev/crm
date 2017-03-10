<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Loss :: SClaim'); ?>
    <? Page::header(); ?>
		
</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
		
			<? Page::top_links(); ?>
			
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1 ">
								
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<? echo Page::col_links(); ?>
				</div>
									<a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-12">
						<ol class="breadcrumb">
						  	<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
						  	<li><a href="<? echo base_url(); ?>index.php/claims/edit/<? echo $this->uri->segment(3); ?>" >Claim</a></li>
                            <li></li>Loss</li>

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Loss</h2>
											<div class="box-icon">
												<a href="index-2.html#" class="btn-setting"><i class="icon-wrench"></i></a> 
											</div>
										</div>
										<div class="box-content">
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Title</th>
													  <th width="10%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $rows as $c ) :
											?>
												<tr>
													<td><a href="<? echo base_url(); ?>index.php/claims/content/<? echo $this->uri->segment(3); ?>/<? echo $c->content_id; ?>"><? echo $c->item_name; ?></a></td>

													<td class="text-center">
														<? $cid=$c->insurer_id; ?> 
														<form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
														<a class="btn btn-info" href="javascript: void(0);" 
															onclick="javascript: delete<? echo $cid; ?>.submit();">
															<i class="icon-edit "></i>
														</a>
														</form>
														<form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
														<a class="btn btn-danger" href="javascript: void(0);" 
															onclick="javascript: delete<? echo $cid; ?>.submit();">
															<i class="icon-trash "></i>
														</a>
														</form> 
													</td>
												</tr>
											 <? endforeach; ?>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->

							</div><!--/row-->

					
					 
						 

					</div><!--/col-->

		 
				</div><!--/row-->	


				</div>
				<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->
	
	
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>Here settings can be configured...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="clearfix"></div>
	
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">BootstrapMaster.com</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/" alt="Bootstrap Admin Template">Genius</a></span>
		</p>

	</footer>

            <!-- start: JavaScript-->
            <!--[if !IE]>-->

            <script src="/assets/js/jquery-2.0.3.min.js"></script>

            <!--<![endif]-->

            <!--[if IE]>

            <script src="/assets/js/jquery-1.10.2.min.js"></script>

            <![endif]-->

            <!--[if !IE]>-->

            <script type="text/javascript">
                window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
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

            <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
            <script src="/assets/js/bootstrap.min.js"></script>




            <!-- page scripts -->
            <script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="/assets/js/jquery.sparkline.min.js"></script>
            <script src="/assets/js/jquery.chosen.min.js"></script>
            <script src="/assets/js/jquery.cleditor.min.js"></script>
            <script src="/assets/js/jquery.autosize.min.js"></script>
            <script src="/assets/js/jquery.placeholder.min.js"></script>
            <script src="/assets/js/jquery.maskedinput.min.js"></script>
            <script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
            <script src="/assets/js/bootstrap-datepicker.min.js"></script>
            <script src="/assets/js/bootstrap-timepicker.min.js"></script>
            <script src="/assets/js/moment.min.js"></script>
            <script src="/assets/js/daterangepicker.min.js"></script>
            <script src="/assets/js/jquery.hotkeys.min.js"></script>
            <script src="/assets/js/bootstrap-wysiwyg.min.js"></script>
            <script src="/assets/js/bootstrap-colorpicker.min.js"></script>
            <script src="/assets/js/fullcalendar.min.js"></script>

            <!-- theme scripts -->
            <script src="/assets/js/custom.min.js"></script>
            <script src="/assets/js/core.min.js"></script>

            <!-- inline scripts related to this page -->
            <script src="/assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>