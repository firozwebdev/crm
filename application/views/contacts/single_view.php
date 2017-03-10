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
                                    <h2>Current User Contact Info.</h2>
                                    <div class="box-icon">
                                        <i class="icon-folder-close"></i>
                                    </div>
                                </div>

                                <div class="box-content">
                                   <table class="table table-hover" style="border:none !important">
                                       <tr>
                                           <th>Name :</th>
                                           <td><?php echo $single_contact->contact_first_name.' '. $single_contact->contact_last_name; ?></td>
                                       </tr>
                                       <tr>
                                           <th>Address :</th>
                                           <td><?php echo $single_contact->contact_address_1.', '.$single_contact->contact_address_2.', '.$single_contact->contact_city.', '.$single_contact->contact_state; ?></td>
                                       </tr>
                                       <tr>
                                           <th>Email :</th>
                                           <td><?php echo $single_contact->contact_email; ?></td>
                                       </tr>
                                       <tr>
                                           <th>Phone No. :</th>
                                           <td><?php echo $single_contact->contact_primary_phone; ?></td>
                                       </tr>


                                   </table>
                                    <a style="margin-top:20px;" class="btn btn-primary btn-md" href="<?php echo base_url(); ?>index.php/contacts/">Back</a>
                                </div>
                            </div>


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