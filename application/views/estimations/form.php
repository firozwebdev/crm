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
    <li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
    <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>">Claim</a></li>
    <li class="active" >Estimation</li>
</ol>
<div class="box">
    <div class="box-header">
        <h2>Estimations</h2>
        <div class="box-icon">
            <a href="<? echo base_url(); ?>index.php/estimations/add"><i class="icon-plus" id="new_estimation"></i></a>
        </div>
    </div>
    <div class="box-content">

        <div class="row">
            <div class="col-lg-12">
               <form class="form-horizontal" action="<? echo base_url(); ?>index.php/estimations/save" id="estimation_form" name="estimation_form" method="post">
                    <fieldset>


                        <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="estimation_loss_value">Loss Value</label>
                        <div class="controls">
                            <input id="estimation_loss_value" name="estimation_loss_value" placeholder="" class="input-xlarge" type="text">

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="date01">Date</label>
                        <div class="controls row">
                            <div class="input-group date col-sm-4">
                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                <input type="text" class="form-control date-picker" id="estimation_date" name="estimation_date" data-date-format="mm/dd/yyyy"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">File Upload</label>
                        <div class="controls">
                                <div class="fallback">
                                    <input name="estimation_attachment" type="file" multiple="" />
                                </div>
                        </div>
                    </div>
                        <!-- Textarea -->
                    <div class="control-group">
                        <label class="control-label" for="estimation_note">Log</label>
                        <div class="controls">
                            <textarea id="estimation_note" name="estimation_note"  class="input-xlarge cleditor"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="property_description">&nbsp;</label>
                        <div class="controls text-center">
                            <input type="hidden" name="claim_id" value="<? echo $this->uri->segment(3); ?>"
                            <button onclick="javascript: window.location='/index.php/claims/view/<? echo $this->uri->segment(3); ?>';" class="btn btn-danger">Cancel</button>
                            <button id="button1id" name="button1id" type="submit" class="btn btn-success">     Save Estimation     </button>
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

<script src="/assets/js/phone.js"></script>
<!-- inline scripts related to this page -->
<script src="/assets/js/pages/form-elements.js"></script>

<!-- end: JavaScript-->

</body>
</html>