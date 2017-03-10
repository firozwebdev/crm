<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Contacts :: SClaim'); ?>
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
                            <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>" >Claim</a></li>
						  	<li><a href="<? echo base_url(); ?>index.php/claims/contacts/<? echo $this->uri->segment(3); ?>" >Contacts</a></li>

						</ol>

							<div class="row">		
								<div class="col-lg-9">

									<div class="box">
                                        <div class="box-header">
                                            <h2>Contacts</h2>
                                            <div class="box-icon">
                                                <a href="<? echo base_url(); ?>index.php/claims/contact/<? echo $this->uri->segment(3); ?>"><i class="icon-plus"></i></a>
                                            </div>
                                        </div>

										<div class="box-content">
                                            <div id="MyWizard" class="wizard">
                                                <ul class="steps">
                                                    <li data-target="#step1"><span class="badge">1</span><span class="chevron"></span><a href="<? echo base_url();?>index.php/claims/edit/<? echo $this->uri->segment(3); ?>">Claim</a></li>
                                                    <li data-target="#step2" class="active"><span class="badge badge-info">2</span><span class="chevron"></span><a href="<? echo base_url();?>index.php/claims/contacts/<? echo $this->uri->segment(3); ?>">Contacts</a></li>
                                                    <li data-target="#step3"><span class="badge">3</span><span class="chevron"></span><a href="<? echo base_url();?>index.php/claims/property/<? echo $this->uri->segment(3); ?>">Property</a></li>
                                                    <li data-target="#step4"><span class="badge">4</span><span class="chevron"></span><a href="<? echo base_url();?>index.php/claims/policy/<? echo $this->uri->segment(3); ?>">Insurer</a></li>
                                                    <li data-target="#step5"><span class="badge">5</span><a href="<? echo base_url();?>index.php/claims/loss/<? echo $this->uri->segment(3); ?>">Loss</a></li>
                                                </ul>
                                            </div>
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Name</th>
													  <th width="10%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $this->claims_model->get_contacts() as $c ) :
											?>
												<tr>
													<td><? echo $c->contact_first_name; ?></td>
												 
													<td class="text-center">
														<? $cid=$c->contact_id; ?> 
														<a class="btn btn-info" href="<? echo base_url(); ?>index.php/claims/contact/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id ?>">
															<i class="icon-edit "></i>
														</a>
														<form action="<? echo base_url(); ?>index.php/claims/contact_delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
														<input type="hidden" name="contact" value="<? echo $c->contact_id ?>">
                                                        <input type="hidden" name="claim_id" value="<? echo $this->uri->segment(3); ?>">
                                                            <a class="btn btn-danger" href="javascript: void(0);"
															onclick="javascript: delete<? echo $cid; ?>.submit();">
															<i class="icon-trash "></i>
														</a>
														</form> 
													</td>
												</tr>
											 <? endforeach;
                                            for($c=count($this->claims_model->get_contacts());$c<20;++$c): ?>
                                                <tr>
                                                    <td>
                                                        &nbsp;
                                                    <td class="text-center">

                                                    </td>
                                                </tr>
                                            <?
                                            endfor; ?>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->
                                <div class="col-md-3 visible-md visible-lg" id="feed">

                                    <? include('inc/right.blank.php'); ?>

                                </div><!--/row-->

					
					 
						 

					</div><!--/col-->

		 
				</div><!--/row-->	


				</div>
				<!-- end: Content -->
        </div><!--/row-->
		
	</div><!--/container-->
	
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