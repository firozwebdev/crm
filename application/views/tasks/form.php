<!DOCTYPE html>
<html lang="en">
<head>

    <title>Task :: SClaim</title>
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
						  	<li><a href="/indx.php/">Dashboard</a></li>
						  	<li><a href="/indx.php/calendar">Calendar</a> </li>
							<li class="active" >Add </li>
						</ol>

								<div class="row">
									<div class="col-lg-12">
										<div class="box">
                                            <div class="box-header">
                                                <h2>Schedule a Task</h2>
                                                <div class="box-icon">
                                                    <i class="icon-folder-close"></i>
                                                </div>
                                            </div>
											
														<div class="box-content">
                                                            <? if( $this->uri->segment(2)=='view' && $this->uri->segment(3)): ?>
                                                                <div style="float: right; margin-bottom: 10px">
                                                                    <button id="download" class="btn btn-danger" onclick="window.location='/index.php/tasks/edit/<? echo $row->calendar_id; ?>'">Edit Event</button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                                                <div style="float: right; margin-bottom: 10px">
                                                                    <button id="download" class="btn btn-danger" onclick="confirmdelete('/index.php/tasks/delete/<? echo $row->calendar_id; ?>');">Delete Event</button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            <? endif; ?>

                                                            <form class="form-horizontal" action="<? echo base_url(); ?>index.php/tasks/save" method="post">


                                                            <div class="form-group">
                                                                <label class="control-label" for="appointment_title">Title</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4">
                                                                        <span class="input-group-addon"><i class="icon-pencil"></i></span>
                                                                        <input type="text" class="form-control" id="calendar_title" name="appointment_title" value="<? echo $row->appointment_title; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="created_for">For</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4">
                                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                                    <select id="created_for" name="created_for" class="form-control">
                                                                        <option value="0"></option>
                                                                        <?php
                                                                        foreach( $this->users_model->all() as $a ) : ?>
                                                                            <option value="<? echo $a->user_id; ?>" <?
                                                                            if( $this->session->userdata('user_id')==$a->user_id
                                                                                || $row->created_for==$a->user_id) echo 'selected'; ?>
                                                                                ><? echo $a->contact_first_name; ?></option>
                                                                        <? endforeach; ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="entry_type">Event Type</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4">
                                                                        <span class="input-group-addon"><i class="icon-gear"></i></span>
                                                                        <select id="entry_type" name="entry_type" class="form-control">
                                                                            <option value="0"></option>
                                                                            <option value="phone">Phone Call</option>
                                                                            <option value="email">eMail</option>deadline
                                                                            <option value="appointment">Appointment</option>
                                                                            <option value="deadline">Deadline</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="timepicker1">Due Time</label>
                                                                <div class="controls row">
                                                                    <div class="input-group col-sm-4 bootstrap-timepicker">
                                                                        <span class="input-group-addon"><i class="icon-time"></i></span>
                                                                        <input type="text" class="form-control timepicker" id="timepicker2" name="timepicker2" value="11:30 PM">
                                                                    </div>
                                                                </div>
                                                            </div>

															<div class="form-group">
															  <label class="control-label" for="date-picker">Due Date</label>
															  <div class="controls row">
																<div class="input-group col-sm-4">
																	<span class="input-group-addon"><i class="icon-calendar"></i></span>
																	<input type="text" class="form-control date-picker" id="date-picker" name="datep-icker" value="<? echo date('m/d/Y',time()); ?>">
																</div>
															  </div>
															</div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="colorpicker1">Task Color</label>
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
                                                                            <textarea class="cleditor" id="textarea2" rows="3" name="calendar_note"><? echo $row->calendar_note; ?>"</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <? if( $this->uri->segment(2)!='view' ): ?>
                                                            <!-- Button (Double) -->
                                                            <div class="control-group text-center">
                                                                <input type="hidden" name="calendar_id"  value="<? echo $row->calendar_id; ?>">
                                                                <button type="button" onclick="javascript: window.location='/index.php/tasks';" class="btn btn-primary">Cancel</button>
                                                                <button id="button1id" name="button1id" class="btn btn-success">Save Task</button>

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

                        <?php include( 'inc/right.blank.php' ); ?>

                    </div><!--/col-->

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