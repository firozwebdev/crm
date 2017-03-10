<!DOCTYPE html>
<html lang="en">
<head>

    <title>Event :: SClaim</title>
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
									<a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->

				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
						  	<li><a href="/index.php/">Dashboard</a></li>
						  	<li><a href="/index.php/contacts">Contact</a> </li>

							<?php if( $this->uri->segment(2)=='create_event_by_contact_id'){?>
								<li class="active"><? echo 'Contact Details/create event'; ?></li>
							<?php  } ?>

							<?php if( $this->uri->segment(2)=='contact_details_edit'){?>
								<li class="active"><? echo 'Contact Details/Edit event'; ?></li>
							<?php  } ?>
						</ol>

								<div class="row">
									<div class="col-lg-12">
										<div class="box">
                                            <div class="box-header">
                                                <h2>Schedule an Event</h2>
                                                <div class="box-icon">
                                                    <i class="icon-folder-close"></i>
                                                </div>
                                            </div>

														<div class="box-content">
                                                            <? if( $this->uri->segment(2)=='view' && $this->uri->segment(3)): ?>

                                                                <div style="float: right; margin-bottom: 10px">
                                                                    <button id="download" class="btn btn-danger" onclick='javascript: confirmdelete("<?php echo base_url(); ?>/index.php/events/delete/<? echo $row->calendar_id; ?>");'>Delete Event</button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            <? endif; ?>

															<? if( $this->uri->segment(2)!='create_event_by_contact_id' && $this->uri->segment(2)!='contact_details_edit'): ?>
															 <form class="form-horizontal" action="<? echo base_url(); ?>index.php/events/save" method="post">
															<?php endif; ?>


																<? if(( $this->uri->segment(2)=='create_event_by_contact_id' && $this->uri->segment(3)) || ($this->uri->segment(2)=='contact_details_edit' && $this->uri->segment(3))): ?>
																<form class="form-horizontal" action="<? echo base_url(); ?>index.php/contacts/save_event_by_contact_id" method="post">
																<? endif; ?>


                                                            <div class="form-group">
                                                                <label class="control-label" for="calendar_title">Title</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4">
                                                                        <span class="input-group-addon"><i class="icon-pencil"></i></span>
                                                                        <input type="text" class="form-control" id="calendar_title" name="calendar_title" value="<? echo $row->calendar_title; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="calendar_title">For</label>
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

																<!--Start status-->
																<? if( $this->uri->segment(2)=='contact_details_edit' && $this->uri->segment(3)): ?>
																<div class="form-group">
																	<label class="control-label" for="calendar_title">Status</label>
																	<div class="controls row">
																		<div class="input-group col-sm-4">
																			<span class="input-group-addon"><i class="icon-user"></i></span>

																			<select  name="status" class="form-control">
																				    <?php
																					if($row->status==0){?>
																						<option value="0" selected>Pending</option>
																						<option value="1">Done</option>
																						<option value="2">Cancel</option>
																					<?php } ?>
																				<?php
																					if($row->status==1){?>
																						<option value="0">Pending</option>
																						<option value="1" selected>Done</option>
																						<option value="2" >Cancel</option>
																					<?php } ?>
																				<?php
																					if($row->status==2){?>
																						<option value="0" >Pending</option>
																						<option value="1" >Done</option>
																						<option value="2" selected>Cancel</option>
																					<?php } ?>





																			</select>
																		</div>
																	</div>
																</div>
																<?php endif; ?>
																<!--End status-->

                                                            <div class="form-group">
															  <label class="control-label" for="timepicker1">Start Time</label>
															  <div class="controls row">
																<div class="input-group col-sm-4 bootstrap-timepicker">
																	<span class="input-group-addon"><i class="icon-time"></i></span>
																	<input type="text" class="form-control timepicker" id="timepicker1" name="calendar_start" value="<? echo time_cov($row->calendar_start); ?>">
																</div>
															  </div>
															</div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="timepicker1">End Time</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4 bootstrap-timepicker">
                                                                        <span class="input-group-addon"><i class="icon-time"></i></span>
                                                                        <input type="text" class="form-control timepicker" id="timepicker2" name="calendar_stop" value="<? echo time_cov($row->calendar_stop); ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

															<div class="form-group">
															  <label class="control-label" for="daterange">Date Range</label>
															  <div class="controls row">
																<div class="input-group col-sm-4">
																	<span class="input-group-addon"><i class="icon-calendar"></i></span>
																	<input type="text" class="form-control" id="daterange" name="daterange" value="<? echo $row->daterange; ?>">
																</div>
															  </div>
															</div>

															<div class="form-group">
															  <label class="control-label" for="colorpicker1">Event Color</label>
															  <div class="controls row">
																<div class="input-group color col-sm-4">
																	<span class="input-group-addon"><i class="icon-tint"></i></span>
																	<input type="text" class="form-control" id="colorpicker1" name="calendar_color"  value="<? echo $row->calendar_color; ?>">
																</div>
															  </div>
															</div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="colorpicker1">Note</label>
                                                                <div class="controls row">
                                                                    <div class="input-group color col-sm-9">
                                                                        <textarea class="cleditor" id="textarea2" rows="3" name="calendar_note"><? echo $row->calendar_note; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <? if( $this->uri->segment(2)!='view'  && $this->uri->segment(2) !='create_event_by_contact_id'  && $this->uri->segment(2) !='contact_details_edit'): ?>
                                                                <!-- Button (Double) -->
                                                            <div class="control-group text-center">
                                                                <input type="hidden" name="calendar_id"  value="<? echo $row->calendar_id; ?>">

																	<button type="button" onclick='javascript: window.location="<?php echo base_url(); ?>index.php/events"' class="btn btn-primary">Cancel</button>

																<button id="button1id" name="button1id" class="btn btn-success">Save Event</button>

                                                            </div>
                                                            <? endif; ?>

															<? if( $this->uri->segment(2)=='view' && $this->uri->segment(3) ): ?>
                                                                <!-- Button (Double) -->
                                                            <div class="control-group text-center">
                                                                <input type="hidden" name="calendar_id"  value="<? echo $row->calendar_id; ?>">
                                                                <button type="button" onclick='javascript: window.location="<?php echo base_url(); ?>index.php/events";' class="btn btn-primary">Cancel</button>
                                                                <button id="button1id" name="button1id" class="btn btn-success">Update Event</button>

                                                            </div>
                                                            <? endif; ?>


																<? if( $this->uri->segment(2)=='create_event_by_contact_id' && $this->uri->segment(3) ): ?>
                                                                <!-- Button (Double) -->
																	<div class="control-group text-center">
																		<input type="hidden" name="calendar_id"  value="<? echo $row->calendar_id; ?>">
																		<!--<button type="button" onclick=javascript: window.location="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $row->created_for; ?>"' class="btn btn-primary">Cancel</button>-->
																		<a href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $contact_id; ?>"><button  class="btn btn-primary" type="button">Cancel</button></a>
																		<button id="button1id" name="button1id" class="btn btn-success">Create Event</button>

																	</div>
                                                            	<? endif; ?>

																	<? if( $this->uri->segment(2)=='contact_details_edit' && $this->uri->segment(3) ): ?>
                                                                <!-- Button (Double) -->
																	<div class="control-group text-center">
																		<input type="hidden" name="calendar_id"  value="<? echo $row->calendar_id; ?>">
																		<!--<button type="button" onclick=javascript: window.location="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $row->created_for; ?>"' class="btn btn-primary">Cancel</button>-->
																		<a href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $row->created_for; ?>"><button  class="btn btn-primary" type="button">Cancel</button></a>
																		<button id="button1id" name="button1id" class="btn btn-success">Update Event</button>

																	</div>
                                                            	<? endif; ?>






											</div>

                                            </form>
									</div>
									</div><!--/col-->

								</div><!--/row-->



								</div>
								<!-- end: Content -->
                    <div class="col-md-3 visible-md visible-lg" id="feed">


                    </div><!--/col-->

									</div><!--/row-->

						</div><!--/container-->

						<div class="clearfix"></div>



						<!-- start: JavaScript-->
						<!--[if !IE]>-->

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

						<!-- end: JavaScript-->

					</body>
					</html>