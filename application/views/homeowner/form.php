<?php
if( $this->uri->segment(3) ) :
    $claimQ = $this->db->query("SELECT * FROM new_claims_claim WHERE claim_id='".mysql_escape_string( $this->uri->segment(3) )."'");
    $claim = $claimQ->row();
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('New Claim :: SClaim'); ?>
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
							<li class="active">New</li>
						</ol>
						<div class="box">
							<div class="box-header">
								
							</div>
							<div class="box-content">
								
		 								<div id="MyWizard" class="wizard">
											<ul class="steps">
												<li data-target="#step1" class="active"><span class="badge badge-info">1</span><span class="chevron"></span>Claim</li>
												<li data-target="#step2"><span class="badge">2</span><span class="chevron"></span>Contacts</li>
												<li data-target="#step3"><span class="badge">3</span><span class="chevron"></span>Property</li>
												<li data-target="#step4"><span class="badge">4</span><span class="chevron"></span>Insurer</li>
												<li data-target="#step5"><span class="badge">5</span>Loss</li>
											</ul>	
										</div>
										<div class="row">		
											<div class="col-lg-12">
												<form class="form-horizontal" action="<? echo base_url(); ?>index.php/claims/save" method="post">
													<fieldset>

													<!-- Form Name -->
													<legend></legend>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_number">Claim Number</label>
													  <div class="controls">
													    <input id="claim_number" name="claim_number" placeholder="Unique Identifier" class="input-xlarge" type="text">

													  </div>
													</div>

                                                    <!-- Select Basic -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="claim_type">Folder</label>
                                                        <div class="controls">
                                                            <select id="property_construction" name="property_construction" class="input-xlarge">
                                                                <option value="0"></option>
                                                                <option value="Add">Add Folder</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group" style="display: none" id="new_folder">
                                                        <label class="control-label" for="folder_name">Folder Name</label>
                                                        <div class="controls">
                                                            <input id="folder_name" name="folder_name" placeholder="" class="input-xlarge" type="text">

                                                        </div>
                                                    </div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_type">Type</label>
													  <div class="controls">
                                                          <select id="property_construction" name="property_construction" class="input-xlarge">
                                                              <option value="0"></option>
                                                              <option value="Add">Add Type</option>
                                                              <? foreach( $this->forms_model->val_list( $this->forms_model->val_list_id('claim') ) as $row ) : ?>
                                                                  <option value="<? echo $row->value_id; ?><"><? echo $row->value_label; ?></option>
                                                              <? endforeach; ?>
                                                          </select>
													  </div>
													</div>


                                                    <!-- Text input-->
                                                    <div class="control-group" style="display: none" id="new_type">
                                                        <label class="control-label" for="add_type">New Type</label>
                                                        <div class="controls">
                                                            <input id="add_type" name="add_type" placeholder="" class="input-xlarge" type="text">

                                                        </div>
                                                    </div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_policy_carrier">Insurer</label>
													  <div class="controls">
                                                          <select id="claim_policy_carrier" name="claim_policy_carrier" class="input-xlarge">
                                                              <option value="0"></option>
                                                              <? foreach( $this->insurers_model->all() as $row ) : ?>
                                                                  <option value="<? echo $row->insurer_id; ?><"><? echo $row->insurer_name; ?></option>
                                                              <? endforeach; ?>
                                                          </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="carrier_adjuster">Adjuster</label>
													  <div class="controls">
													    <select id="carrier_adjuster" name="carrier_adjuster" class="input-xlarge" disabled>
                                                            <option value="0"></option>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="carrier_estimator">Estimator</label>
													  <div class="controls">
													    <select id="carrier_estimator" name="carrier_estimator" class="input-xlarge" disabled>
                                                            <option value="0"></option>
													    </select>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_value">Loss Value</label>
													  <div class="controls">
													    <input id="claim_loss_value" name="claim_loss_value" placeholder="$0.00" class="input-xlarge" type="text">

													  </div>
													</div>



                                                    <div class="form-group">
                                                        <label class="control-label" for="date01">Date of Loss</label>
                                                        <div class="controls row">
                                                            <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon">
                                                                <i class="icon-calendar"></i>
                                                                </span>
                                                                <input id="date01" class="form-control date-picker" type="text" name="claim_loss_date" data-date-format="mm/dd/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_sqft">Loss SqFt</label>
													  <div class="controls">
													    <input id="claim_loss_sqft" name="claim_loss_sqft" placeholder="" type="text">

													  </div>
													</div>

													<!-- Textarea -->
													<div class="control-group">
													  <label class="control-label" for="claim_note">Note</label>
													  <div class="controls">                     
													    <textarea id="claim_note" name="claim_note" class="input-xlarge"></textarea>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_adjuster">Staff Aduster</label>
													  <div class="controls">
													    <select id="claim_adjuster" name="claim_adjuster" class="input-xlarge">
                                                            <option value="0"></option>
                                                            <? foreach( $this->insurers_model->all() as $row ) : ?>
                                                                <option value="<? echo $row->insurer_id; ?><"><? echo $row->insurer_name; ?></option>
                                                            <? endforeach; ?>
													    </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_estimator">Staff Estimator</label>
													  <div class="controls">
													    <select id="claim_estimator" name="claim_estimator" class="input-xlarge">
                                                            <option value="0"></option>
                                                            <? foreach( $this->insurers_model->all() as $row ) : ?>
                                                                <option value="<? echo $row->insurer_id; ?><"><? echo $row->insurer_name; ?></option>
                                                            <? endforeach; ?>
													    </select>
													  </div>
													</div>

													<!-- Select Multiple -->
													<div class="control-group">
													  <label class="control-label" for="assigned_staff[]">Assigned Staff</label>
													  <div class="controls">
													    <select id="assigned_staff[]" name="assigned_staff[]" class="input-xlarge" multiple="multiple">
                                                            <option value="0"></option>
                                                            <? foreach( $this->claims_model->staff() as $row ) : ?>
                                                                <option value="<? echo $row->insurer_id; ?><"><? echo $row->insurer_name; ?></option>
                                                            <? endforeach; ?>
													    </select>
													  </div>
													</div>
													<!-- Button (Double) -->
													<div class="control-group"> 
													  <div class="controls text-center">
													    <button type="button" onclick="javascript: window.location='/index.php/claims';" id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                                                          <button id="button1id" name="button1id" class="btn btn-success">Save Claim</button>
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
                        <h2>Upcoming Activity</h2>

                        <ul id="filter">
                            <li><a class="green" href="<? echo base_url(); ?>#" data-option-value="task">Tasks</a></li>
                            <li><a class="red" href="<? echo base_url(); ?>#" data-option-value="comment">Comments</a></li>
                            <li><a class="blue" href="<? echo base_url(); ?>#" data-option-value="message">Messages</a></li>
                            <li><a href="<? echo base_url(); ?>#" data-option-value="all">All</a></li>
                        </ul>

                        <ul id="timeline">

                            <li class="task">
                                <i class="icon-check-sign green"></i>
                                <div class="title">New website - A/B Tests</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                <span class="date">3 seconds ago</span>
                                <span class="separator">•</span>
                                <span class="name">Megan Abbott</span>
                            </li>

                            <li class="comment">
                                <i class="icon-comments red"></i>
                                <div class="title">Sales increase</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                                <span class="date">15 minutes ago</span>
                                <span class="separator">•</span>
                                <span class="name">Ashley Tan</span>
                            </li>

                            <li class="comment">
                                <i class="icon-comments red"></i>
                                <div class="title">New Bootstrap Theme</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                                <span class="date">Today</span>
                                <span class="separator">•</span>
                                <span class="name">Ashley Tan</span>
                            </li>

                            <li class="message">
                                <i class="icon-edit-sign blue"></i>
                                <div class="title">Job offer</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                <span class="date">Yesterday</span>
                                <span class="separator">•</span>
                                <span class="name">James Doe</span>
                            </li>

                            <li class="task">
                                <i class="icon-check-sign green"></i>
                                <div class="title">Custom Design</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                <span class="date">5 days ago</span>
                                <span class="separator">•</span>
                                <span class="name">Megan Abbott</span>
                            </li>

                        </ul>
                        <a href="<? echo base_url(); ?>#" id="load-more">•••</a>

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

        <? include( 'inc/footer.php' ); ?>

        <!-- end: JavaScript-->
        <script>
            $('#claim_policy_carrier').change(function(){
                $.ajax({
                    type: "GET",
                    url: "<? echo base_url(); ?>index.php/reps/ajax/adjuster/"+$(this).val(),
                    success: function(data){
                        $('#carrier_adjuster').prop('disabled', false);
                        $('#carrier_adjuster').html(data);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "<? echo base_url(); ?>index.php/reps/ajax/estimator/"+$(this).val(),
                    success: function(data){
                        $('#carrier_estimator').prop('disabled', false);
                        $('#carrier_estimator').html(data);
                    }
                });
            })
        </script>
	
</body>
</html>