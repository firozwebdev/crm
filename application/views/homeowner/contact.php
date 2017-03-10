<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Claim Contact :: SClaim'); ?>
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
							<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
							<li>Claim</li>
							<li class="active">Contact</li>
						</ol>
						<div class="box">
							<div class="box-header">
								
							</div>
							<div class="box-content">
								
		 								<div id="MyWizard" class="wizard">
                                            <ul class="steps">
                                                <li data-target="#step1"><span class="badge">1</span><span class="chevron"></span>Claim</li>
                                                <li data-target="#step2" class="active"><span class="badge badge-info">2</span><span class="chevron"></span>Contact</li>
                                                <li data-target="#step3"><span class="badge">3</span><span class="chevron"></span>Property</li>
                                                <li data-target="#step4"><span class="badge">4</span><span class="chevron"></span>Insurer</li>
                                                <li data-target="#step5"><span class="badge">5</span>Loss</li>
                                            </ul>
                                        </div>


										<div class="row">		
											<div class="col-lg-12">
												<form class="form-horizontal" action="<? echo base_url(); ?>index.php/claims/contact_save" method="post">
												<fieldset>

                                                    <? echo $this->session->flashdata('msg'); ?>
												<!-- Form Name -->
												<legend></legend>
													<div class="control-group">
													  <label class="control-label" for="contact_first_name">First name</label>
													  <div class="controls">
													    <input id="contact_first_name" name="contact_first_name" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_last_name">Last Name</label>
													  <div class="controls">
													    <input id="contact_last_name" name="contact_last_name" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_title">Title</label>
													  <div class="controls">
													    <input id="contact_title" name="contact_title" placeholder="Example: Owner, Manager, or Tenant" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_company">Company</label>
													  <div class="controls">
													    <input id="contact_company" name="contact_company" placeholder="Example: Business Name" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Multiple Checkboxes (inline) -->
													<div class="control-group">
													  <label class="control-label" for="checkboxes"></label>
													  <div class="controls">
													    <label class="checkbox inline" for="checkboxes-0">
													      <input name="checkboxes" id="checkboxes-0" value="Primary Contact" type="checkbox">
													      Primary Contact
													    </label>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_email">eMail</label>
													  <div class="controls">
													    <input id="contact_email" name="contact_email" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_primary_phone">Telephone</label>
													  <div class="controls">
													    <input id="contact_primary_phone" name="contact_primary_phone"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Primary" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_secondary_phone">Telephone</label>
													  <div class="controls">
													    <input id="contact_secondary_phone" name="contact_secondary_phone"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Secondary" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_fax">Fax</label>
													  <div class="controls">
													    <input id="contact_fax" name="contact_fax" placeholder=""   onkeyup="javascript:backspacerUP(this,event);" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Multiple Checkboxes (inline) -->
													<div class="control-group">
													  <label class="control-label" for=""></label>
													  <div class="controls">
													    <label class="checkbox inline" for="-0">
													      <input name="" id="-0" value="Use Property Address" type="checkbox">
                                                          <input type="hidden" name="property_address" value="">
													      Use Property Address
													    </label>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_address_1">Address</label>
													  <div class="controls">
													    <input id="contact_address_1" name="contact_address_1" placeholder="Property Number &amp; Street" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_address_2">Address</label>
													  <div class="controls">
													    <input id="contact_address_2" name="contact_address_2" placeholder="Unit Number" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_city">City</label>
													  <div class="controls">
													    <input id="contact_city" name="contact_city" placeholder="" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="contact_state">State</label>
													  <div class="controls">
                                                          <? echo Fields::states(''); ?>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="contact_zip">Zip</label>
													  <div class="controls">
													    <input id="contact_zip" name="contact_zip" placeholder="XXXXX" class="input-xlarge" type="text">

													  </div>
													</div>

													<!-- Button (Double) -->
													<div class="control-group"> 
													  <div class="controls text-center">
                                                          <input id="contact_type" name="contact_type" value="claim" type="hidden">
                                                          <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
													    <button id="button1id" name="button1id" class="btn btn-success">Save Contact</button>
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
                        <h3>Carrier Information</h3>

                        <ul class="profile-details">
                            <li>
                                <div><i class="icon-briefcase"></i> position</div>
                                CEO
                            </li>
                            <li>
                                <div><i class="icon-building"></i> company</div>
                                creativeLabs
                            </li>
                            <li>
                                <div><i class="icon-phone"></i> phone</div>
                                +48 123 456 789
                            </li>
                            <li>
                                <div><i class="icon-tablet"></i> mobile phone</div>
                                +48 123 456 789
                            </li>
                            <li>
                                <div><i class="icon-envelope"></i> e-mail</div>
                                lukasz@bootstrapmaster.com
                            </li>
                            <li>
                                <div><i class="icon-map-marker"></i> address</div>
                                Konopnickiej 42<br/>
                                43-190 Mikolow<br/>
                                Slask, Poland
                            </li>
                        </ul>
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
	<script src="/assets/js/pages/claim_start.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>