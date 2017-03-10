    <!DOCTYPE html>
<html lang="en">
<head>

    <title>Documents :: SClaim</title>

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

    <a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11 ">

<div class="row">

<div class="col-sm-12 col-md-9">

<ol class="breadcrumb">
    <li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
    <li>Documents</li>
    <? if( $row->claim_number ) : ?>
        <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $row->claim_id; ?>">Claim</a></li>
    <? endif;?>
    <li class="active">Upload</li>
</ol>

<div class="box">
<div class="box-header">
    <h2></h2>
    <div class="box-icon">
        <i class="icon-folder-close"></i>
    </div>
</div>
<div class="box-content">

<? if( $this->uri->segment(3)): ?>
    <div style="float: right; margin-bottom: 10px">
        <button id="download" class="btn btn-danger" onclick="window.location='/index.php/claims/delete/<? echo $row->claim_id; ?>'">Delete</button>
    </div>
    <div class="clearfix"></div>
<? endif; ?>

<div class="row">
<div class="col-lg-12">
    <form class="form-horizontal" action="<? echo base_url(); ?>index.php/attachments/save" method="post" enctype="multipart/form-data">

        <!-- Text input-->
        <div class="control-group">
            <label class="control-label" for="select_title">Title</label>
            <div class="controls row">
                <input id="title" name="title" placeholder="" class="input-xlarge" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="control-label">File Upload</label>
            <div class="controls row">
                <div class="fallback">
                    <input name="file[]" type="file" multiple="" />
                </div>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="control-group clearfix">
            <div class="text-center">
                <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/';" id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                <button id="button1id" name="button1id" class="btn btn-success">Save Attachment</button>
            </div>
        </div>

    </form>

</div><!--/col-->

</div><!--/row-->

</div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2>Attachments</h2>
                    <div class="box-icon">
                        <a href="<? echo base_url(); ?>index.php/attachments"  id="new_folder_close"><i class="icon-plus"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>Name</th>

                            <th width="21%" style="text-align: center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <? $fl2q = $this->uploads_model->no_claim();
                        foreach( $fl2q as $fl2 ) : ?>
                            <tr>
                                <td><? echo $fl2->file_title; ?></td>

                                <td align="center">
                                    <a class="btn btn-success" href="<? echo $fl2->file_path; ?>" target="_blank">
                                        <i class="icon-zoom-in "></i>
                                    </a>
                                    <a class="btn btn-info" href="<? echo base_url(); ?>index.php/attachments/edit/<? echo $fl2->file_id; ?>">
                                        <i class="icon-edit "></i>
                                    </a>
                                    <a class="btn btn-danger" href="<? echo base_url(); ?>index.php/attachments/delete/<? echo $fl2->file_id; ?>">
                                        <i class="icon-trash "></i>
                                    </a>
                                </td>
                            </tr>
                        <? endforeach;
                        for( $c=0;$c<4;++$c) : ?>
                            <tr>
                                <td>&nbsp;</td>

                                <td align="center">
                                    &nbsp;
                                </td>
                            </tr>
                        <?
                        endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/col-->

        <? include('inc/debug.php') ?>

    </div><!--/row-->
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