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
            <a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11 ">


            <div class="row">

                <div class="col-sm-12 col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="/index.php/">Dashboard</a></li>
                        <li><a href="/index.php/todo">Todo</a></li>
                        <li class="active">New</li>
                    </ol>
                    <div class="box">
                        <div class="box-header">
                            <h2>Todo</h2>
                            <div class="box-icon">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                        <div class="box-content">

                            <div class="row">
                                <div class="col-lg-12">
                                    <? if( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                        <div style="float: right; margin-bottom: 10px">
                                            <button id="download" class="btn btn-danger" onclick='javascript: confirmdelete("<? echo base_url(); ?>index.php/todo/delete/<? echo $row->todo_id; ?>");''>Delete Todo</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    <? endif; ?>
                                    <form class="form-horizontal" action="<? echo base_url(); ?>index.php/todo/save" method="post">
                                        <fieldset>



                                            <div class="form-group">
                                                <label class="control-label" for="todo_title">Title</label>
                                                <div class="controls row">
                                                    <div class="input-group date col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-pencil"></i></span>
                                                        <input type="text" class="input-xlarge form-control" id="todo_title" name="todo_title" value="<? echo $row->todo_title; ?>"/>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label" for="todo_deadline">Deadline</label>
                                                <div class="controls row">
                                                    <div class="input-group date col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                        <input type="text" class="form-control date-picker" id="todo_deadline" name="todo_deadline" value="<? echo $row->todo_deadline; ?>" data-date-format="mm/dd/yyyy"/>
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
                                            <div class="control-group">
                                                <label class="control-label" for="claim_id">Priority</label>
                                                <div class="controls">
                                                    <select id="claim_id" name="todo_priority" class="input-xlarge">
                                                        <?php if(!$row->todo_priority): ?>
                                                        <option value="Low">Low</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="High">High</option>
                                                        <?php endif; ?>

                                                        <?php if($row->todo_priority=='Low'):?>
                                                            <option selected value="Low">Low</option>
                                                            <option value="Medium">Medium</option>
                                                            <option value="High">High</option>
                                                        <?php  endif; ?><?php if($row->todo_priority=='Medium'):?>
                                                            <option  value="Low">Low</option>
                                                            <option selected value="Medium">Medium</option>
                                                            <option value="High">High</option>
                                                        <?php  endif; ?>

                                                        <?php if($row->todo_priority=='High'):?>
                                                            <option  value="Low">Low</option>
                                                            <option value="Medium">Medium</option>
                                                            <option selected value="High">High</option>
                                                        <?php  endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="control-group">
                                                <label class="control-label" for="todo_detail">Details</label>
                                                <div class="controls">
                                                    <textarea id="textarea" name="todo_detail"  class="input-xlarge cleditor"><?php echo $row->todo_detail; ?></textarea>

                                                </div>
                                            </div>


                                            <!-- Button (Double) -->
                                            <div class="control-group text-center">
                                                <input type="hidden" name="todo_id" value="<? echo $row->todo_id; ?>">


                                                <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/todo'" class="btn btn-primary">Cancel</button>
                                                <? if( $this->uri->segment(2)=='create'): ?>
                                                    <button id="submit" name="submit" class="btn btn-success">Save Todo</button>
                                                <?php endif; ?>

                                                <? if( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                                    <button id="submit" name="submit" class="btn btn-success">Update Todo</button>
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