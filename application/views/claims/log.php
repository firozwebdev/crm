<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Claim Log :: SClaim'); ?>
    <? Page::header(); ?>
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
									<a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">  
							<li><a href="/index.php/">Dashboard</a></li> 
							<li>Claim</li>
							<li class="active">Log</li>
						</ol>
						<div class="box">
							<div class="box-header">
								
							</div>
							<div class="box-content">
								
		 								<div id="MyWizard" class="wizard">
											<ul class="steps">
												<li data-target="#step1" class="active"><span class="badge badge-info">1</span><span class="chevron"></span>Step 1</li>
												<li data-target="#step2" class="active"><span class="badge">2</span><span class="chevron"></span>Step 2</li>
												<li data-target="#step3" class="active"><span class="badge">3</span><span class="chevron"></span>Step 3</li>
												<li data-target="#step4" class="active"><span class="badge">4</span><span class="chevron"></span>Step 4</li>
												<li data-target="#step5"><span class="badge">5</span>Step 5</li>
											</ul>	
										</div>
										<div class="row">		
											<div class="col-lg-12">
												<form class="form-horizontal" action="/index.php/claim/form_save"> 
													<fieldset>

													<!-- Form Name -->
													<legend>Form Name</legend>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_number">Claim Number</label>
													  <div class="controls">
													    <input id="claim_number" name="claim_number" placeholder="Unique Identifier" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_type">Type</label>
													  <div class="controls">
													    <select id="claim_type" name="claim_type" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_policy_carrier">Carrier</label>
													  <div class="controls">
													    <select id="claim_policy_carrier" name="claim_policy_carrier" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="carrier_adjuster">Adjuster</label>
													  <div class="controls">
													    <select id="carrier_adjuster" name="carrier_adjuster" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="carrier_estimator">Estimator</label>
													  <div class="controls">
													    <select id="carrier_estimator" name="carrier_estimator" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_value">Loss Value</label>
													  <div class="controls">
													    <input id="claim_loss_value" name="claim_loss_value" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_date">Date of Loss</label>
													  <div class="controls">
													    <input id="claim_loss_date" name="claim_loss_date" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_sqft">Loss SqFt</label>
													  <div class="controls">
													    <input id="claim_loss_sqft" name="claim_loss_sqft" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Textarea -->
													<div class="control-group">
													  <label class="control-label" for="claim_note">Note</label>
													  <div class="controls">                     
													    <textarea id="claim_note" name="claim_note">default text</textarea>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_adjuster">Staff Aduster</label>
													  <div class="controls">
													    <select id="claim_adjuster" name="claim_adjuster" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_estimator">Staff Estimator</label>
													  <div class="controls">
													    <select id="claim_estimator" name="claim_estimator" class="input-xlarge">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													<!-- Select Multiple -->
													<div class="control-group">
													  <label class="control-label" for="assigned_staff[]">Assigned Staff</label>
													  <div class="controls">
													    <select id="assigned_staff[]" name="assigned_staff[]" class="input-xlarge" multiple="multiple">
													      <option>Option one</option>
													      <option>Option two</option>
													    </select>
													  </div>
													</div>

													</fieldset>
													</form>
											

											</div><!--/col-->

										</div><!--/row-->

							</div>
						</div>
					</div><!--/col-->

					<div class="col-md-3 visible-md visible-lg" id="feed">
						
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
	<script src="/assets/js/pages/claim_start.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>