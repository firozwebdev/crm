<!DOCTYPE html>
<html lang="en">
<head>

    <title>Log :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>

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
									<a href="" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->

				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url();?>index.php">Dashboard</a></li>
							<li><a href="<?php echo base_url();?>index.php/logs">Logs</a></li>
							<li class="active">New</li>
						</ol>
						<div class="box">
							<div class="box-header">
                                <h2>Log</h2>
                                <div class="box-icon">
                                    <i class="icon-pencil"></i>
                                </div>
							</div>
							<div class="box-content">

		 								<div class="row">
											<div class="col-lg-12">


												<? if( $this->uri->segment(2)=='create_log_by_contact_id' && $this->uri->segment(3)): ?>
														<form class="form-horizontal" action="<? echo base_url(); ?>index.php/contacts/save_log_by_contact_id" method="post">
													<?php endif; ?>

													<? if( $this->uri->segment(2)=='log_details_edit' && $this->uri->segment(3)): ?>
														<form class="form-horizontal" action="<? echo base_url(); ?>index.php/contacts/save_log_by_contact_id" method="post">
													<?php endif; ?>
												<fieldset>


                                                <!-- Select Basic -->
													<div class="form-group">
														<label class="control-label" for="calendar_title">Log For</label>
														<div class="controls row">
															<div class="input-group col-sm-4">
																<span class="input-group-addon"><i class="icon-user"></i></span>

																<select id="created_for" name="created_for" class="form-control">



																	<?php if($contact_id){ ?>
																		<option value="<?php echo $customer_by_contact_id->contact_id; ?>" selected><?php echo $customer_by_contact_id->contact_first_name; ?></option>

																	<?php } ?>

																	<?php if(!$contact_id){


																		foreach( $this->contacts_model->users_all() as $a ) : ?>
																			<option value="<? echo $a->contact_id; ?>"
																					<?php
																					if( $a->contact_id == $row->created_for ) echo 'selected'; ?>
																			><? echo $a->contact_first_name; ?></option>
																		<? endforeach;

																	}?>


																</select>
															</div>
														</div>
													</div>


													<!-- Select Basic --><!--prob-->
												<div class="control-group">
												  <label class="control-label" for="claim_id">Claim</label>
												  <div class="controls">
												    <select id="claim_id" name="claim_id" class="input-xlarge">
												      <option value="0"></option>
                                                        <?php
                                                        foreach( $this->claims_model->getClaims() as $c ) : ?>
                                                            <option value="<? echo $c->claim_id; ?>"  <?
                                                            if( $row->log_claim_id==$c->claim_id) echo 'selected'; ?> ><? echo $c->claim_number; ?></option>
                                                        <? endforeach; ?>
												    </select>
												  </div>
												</div>

                                                    <!-- Select Basic -->
<!--                                                    <div class="control-group">
                                                        <label class="control-label" for="property">Property</label>
                                                        <div class="controls">
                                                            <select id="property" name="log_property_id" class="input-xlarge">
                                                              <?php
																if( !$row->log_property_id ) : ?>
                                                                    <option value="0"></option><?
                                                                endif;
                                                                ?>
																<?php
																if( $row->log_property_id ) : ?>
                                                                    <option selected value="<?php echo $row->log_property_id ; ?>"><?php echo $row->property_address_1; ?></option><?
                                                                endif;
                                                                ?>

																<?php
																foreach( $this->property_model->property_all() as $a ) : ?>
																	<option value="<? echo $a->property_id; ?>"
																			<?php
																			if( $a->property_id == $row->log_property_id ) echo 'selected'; ?>
																	><?php echo $a->property_address_1; ?></option>
																<? endforeach;
                                                                ?>



                                                            </select>
                                                        </div>
                                                    </div>-->

                                                    <div class="form-group">
                                                        <label class="control-label" for="log_title">Log Title</label>
                                                        <div class="controls row">
                                                            <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon"><i class="icon-pencil"></i></span>
                                                                <input type="text" class="input-xlarge form-control" id="log_title" name="log_title" value="<? echo $row->log_title; ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
													  <label class="control-label" for="log_date">Log Date</label>
													  <div class="controls row">
														<div class="input-group date col-sm-4">
															<span class="input-group-addon"><i class="icon-calendar"></i></span>
															<input type="text" class="form-control date-picker" id="log_date" name="log_date" value="<? echo $row->log_date; ?>" data-date-format="mm/dd/yyyy"/>
														</div>
													  </div>
													</div>

													<div class="form-group">
													  <label class="control-label" for="start_time">Start Time</label>
													  <div class="controls row">
														<div class="input-group col-sm-4 bootstrap-timepicker">
															<span class="input-group-addon"><i class="icon-time"></i></span>
															<input type="text" class="form-control timepicker" id="timepicker1" name="start_time" value="<? echo $row->log_start_time; ?>">
														</div>
													  </div>
													</div>

												<!-- Text input-->
												<div class="form-group">
												  <label class="control-label" for="timepicker2">End Time</label>
												  <div class="controls row">
													<div class="input-group col-sm-4 bootstrap-timepicker">
														<span class="input-group-addon"><i class="icon-time"></i></span>
														<input type="text" class="form-control timepicker" id="timepicker2" name="stop_time" value="<? echo $row->log_stop_time; ?>">
													</div>
												  </div>
												</div>

                                            <!--
                                                <div class="control-group">
                                                    <label class="control-label" for="start__point">Start Point</label>
                                                    <div class="controls">
                                                        <input id="start_point" name="start_point" placeholder="" class="input-xlarge typeahead" type="text">

                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="start_property">Property</label>
                                                    <div class="controls">
                                                        <select id="start_property" name="start_property" class="input-xlarge">
                                                            <option value="0">Use Property</option>
                                                            <option value="0">Office</option>
                                                            <option value="0">Add Location</option>
                                                        </select>
                                                    </div>
                                                </div>

												<div class="control-group">
												  <label class="control-label" for="end_point">End Point</label>
												  <div class="controls">
												    <input id="travel_point" name="end_point" placeholder="" class="input-xlarge" type="text">

												  </div>
												</div>

                                                <div class="control-group">
                                                    <label class="control-label" for="start_property">Property</label>
                                                    <div class="controls">
                                                        <select id="start_property" name="start_property" class="input-xlarge">
                                                            <option value="0">Use Property</option>
                                                            <option value="0">Office</option>
                                                            <option value="0">Add Location</option>
                                                        </select>
                                                    </div>
                                                </div>

												<div class="control-group">
												  <label class="control-label" for="include_directions">Include Directions</label>
												  <div class="controls">
												    <label class="checkbox inline" for="checkboxes-0">
												      <input name="checkboxes" id="include_directions" value="yes" type="checkbox" disabled>

												    </label>
												  </div>
												</div>

												<div class="control-group">
												  <label class="control-label" for="checkboxes">Round Trip</label>
												  <div class="controls">
												    <label class="checkbox inline" for="checkboxes-0">
												      <input name="checkboxes" id="checkboxes-0" value="yes" type="checkbox" disabled>

												    </label>
												  </div>
												</div>-->

												<!-- Textarea -->
												<div class="control-group">
												  <label class="control-label" for="log">Log</label>
												  <div class="controls">
												    <textarea id="textarea" name="log_note"  class="input-xlarge cleditor"><? echo $row->log_note; ?></textarea>

												  </div>
												</div>


												<!-- Button (Double) -->
												<div class="control-group text-center">
                                                    <input type="hidden" name="log_id" value="<? echo $row->log_id; ?>">
                                                   <!-- <input type="hidden" name="client_id" value="<? echo $this->account_model->client_id(); ?>">-->


													<? if( $this->uri->segment(2)=='create'): ?>
												    <button id="submit" name="submit" class="btn btn-success">Save Log</button>
														<button type="button" onclick='javascript: window.location="<? echo base_url(); ?>index.php/logs"'; class="btn btn-primary">Cancel</button>
													<?php endif; ?>

													<? if( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
												    <button id="submit" name="submit" class="btn btn-success">Update Log</button>
														<button type="button" onclick='javascript: window.location="<? echo base_url(); ?>index.php/logs"' class="btn btn-primary">Cancel</button>
													<?php endif; ?>

													<? if( $this->uri->segment(2)=='create_log_by_contact_id' && $this->uri->segment(3)): ?>
												    <button id="submit" name="submit" class="btn btn-success">Create Log</button>
														<a href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $contact_id; ?>"><button  class="btn btn-primary" type="button">Cancel</button></a>
													<?php endif; ?>

													<? if( $this->uri->segment(2)=='log_details_edit' && $this->uri->segment(3)): ?>
												    <button id="submit" name="submit" class="btn btn-success">Update Log</button>
														<a href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $row->created_for; ?>"><button  class="btn btn-primary" type="button">Cancel</button></a>
													<?php endif; ?>
												</div>

												</fieldset>
												</form>



											</div><!--/col-->



										</div><!--/row-->

							</div>
						</div>
					</div><!--/col-->

                    <div class="col-md-3 visible-md visible-lg" id="feed">

                        <? include('inc/right.blank.php');?>

                    </div><!--/col-->

				</div><!--/row-->







				</div>
				<!-- end: Content -->

				</div><!--/row-->

	</div><!--/container-->


	<div class="clearfix"></div>

        <? include('inc/footer.php'); ?>
		<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>

		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>

		<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>

		<![endif]-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>




		<!-- page scripts -->

		<script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>




		<!-- page scripts -->
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.chosen.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.cleditor.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>

		<!-- theme scripts -->
		<script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/core.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>


		<!-- inline scripts related to this page -->
        <script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>
        <!-- end: JavaScript-->
        <script>
            $('#claim_id').change(function(){
                $.ajax({
                    type: "GET",
                    url: "<? echo base_url(); ?>index.php/claims/properties_ajax/"+$(this).val(),
                    success: function(data){
                        $('#property').empty().append( data );
                    }
                });
            })

        </script>
        <!-- end: JavaScript-->


</body>
</html>