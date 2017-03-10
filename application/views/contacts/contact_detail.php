<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo ( $this->uri->segment(2)=='add' ? 'Add' : 'Edit' ); ?> Contact :: SClaim</title>

    <?php include( 'inc/header.php' ); ?>

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

            <a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11 ">

            <div class="row">

                <div class="col-sm-12 col-md-9">

                    <ol class="breadcrumb">
                        <li><a href="<? echo base_url(); ?>/index.php/">Dashboard</a></li>
                        <li><a href="<? echo base_url(); ?>/index.php/contacts">Contact</a></li>
                        
                       <!-- <li class="active"><? echo ( $this->uri->segment(2)=='add' ? 'Add' : 'Edit' ); ?></li>-->
                        <li class="active">Contact Details></li>

                    </ol>

                    <div class="box">
                        <div class="box-header">
                            <h2></h2>
                            <div class="box-icon">
                                <i class="icon-folder-close"></i>
                            </div>
                        </div>
                        <div class="box-content" style="overflow:hidden">

                            <? include('inc/steps.php');?>




                        </div><!--/col-->

                            </div><!--/row-->

                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <? include('inc/right.claim.php');?>

                </div><!--/col-->

            </div><!--/row-->







        </div>
        <!-- end: Content -->

    </div><!--/row-->

</div><!--/container-->

<div class="clearfix"></div>

<? include('inc/footer.php');?>

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

<!-- inline scripts related to this page -->
<script src="<? echo base_url(); ?>assets/js/pages/form-elements.js"></script>

<!-- end: JavaScript-->
<script>

    $(document).ready(function(){
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
        });
    });</script>

</body>
</html>