<!DOCTYPE html>
<html lang="en">
<head>

    <title>Policy :: SClaim</title>
    <? include('inc/header.php'); ?>

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
        <? include('inc/sidenav.adjust.php');?>
        </div>
        <a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
    </div>
    <!-- end: Main Menu -->

    <!-- start: Content -->
    <div id="content" class="col-lg-10 col-sm-11 ">

    <div class="row">

        <div class="col-sm-12 col-md-9">
        <ol class="breadcrumb">
            <li><a href="<? echo base_url(); ?>">Dashboard</a></li>
            <li><a href="<? echo base_url(); ?>index.php/claims/edit/<? echo $this->uri->segment(3); ?>">Claims</a></li>
            <li class="active">Policy</li>
            <li class="active"><? echo(!$this->uri->segment(3) ? 'New' : 'Edit'); ?></li>
        </ol>
        <div class="box">
            <div class="box-header">
                <h2>Information</h2>

                <div class="box-icon">
                    <a href="<? echo base_url(); ?>index.php/claims/contact/<? echo $this->uri->segment(3); ?>"><i
                            class="icon-plus"></i></a>
                </div>
            </div>
            <div class="box-content">


            <div class="row">
            <div class="col-lg-12">

            <? include('inc/steps.php');?>

            <form class="form-horizontal" action="<? echo base_url(); ?>index.php/policy/save" method="post">

            <div class="form-group">
                <label class="control-label" for="policy_display">Type : </label>

                <div class="controls">

                    <div class="input-group date col-sm-4">
                    <input type="radio" name="policy_display" value="res" <?php
                    if ($row->policy_display == 'res') print 'checked="checked"'; ?> > Residential
                    <input type="radio" name="policy_display" value="bus" <?php
                    if ($row->policy_display == 'bus') print 'checked'; ?> > Commercial
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="policy_number">Policy Number : </label>

                <div class="controls">

                    <div class="input-group date col-sm-4">
                        <input name="policy_number" type="text" value="<?= $row->policy_number ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="policy_display">Effective Date : </label>

                <div class="controls">
                    <div class="input-group date col-sm-4">
                <span class="input-group-addon">
                <i class="icon-calendar"></i>
                </span>
                        <input id="date01" class="form-control date-picker" type="text" name="policy_effective_date"
                               data-date-format="mm/dd/yyyy">
                    </div>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="control-label" for="date01">Estimate Date:</label>

                <div class="controls">
                    <div class="input-group date col-sm-4">
                <span class="input-group-addon">
                <i class="icon-calendar"></i>
                </span>
                        <input id="date01" class="form-control date-picker" type="text" name="policy_estimation_date"
                               data-date-format="mm/dd/yyyy">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="policy_display">General Liability : </label>

                <div class="controls">

                    <div class="input-group col-sm-4">
                    <input name="policy_general_liability	" type="text"
                           value="<? echo number_format($row->policy_general_liability, 2); ?>"></td>
                    </div>
                </div>
            </div>

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseOne">
                                Coverages
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage A : </label>

                                <div class="controls">
                                    <input name="policy_coverage_F" type="text"
                                           value="<? echo number_format($row->policy_coverage_F, true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_F_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_F_acvrcv == 'rcv') print 'checked '; ?>> RCV
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage B : </label>

                                <div class="controls">
                                    <input name="policy_coverage_B" type="text"
                                           value="<? echo number_format($row->policy_coverage_B,true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_B_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_B_acvrcv == 'rcv') print 'checked '; ?>> RCV
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage C : </label>

                                <div class="controls">
                                    <input name="policy_coverage_C" type="text"
                                           value="<? echo number_format($row->policy_coverage_C,true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_C_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_C_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_C_acvrcv == 'rcv') print 'checked '; ?>> RCV
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage D : </label>

                                <div class="controls">
                                    <input name="policy_coverage_D" type="text"
                                           value="<? echo number_format($row->policy_coverage_D,true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_D_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_D_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_D_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_D_acvrcv == 'rcv') print 'checked '; ?>> RCV
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage E : </label>

                                <div class="controls">
                                    <input name="policy_coverage_F" type="text"
                                           value="<? echo number_format($row->policy_coverage_E,true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_E_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_E_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_E_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_E_acvrcv == 'rcv') print 'checked '; ?>> RCV
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="policy_display">Coverage F : </label>

                                <div class="controls">
                                    <input name="policy_coverage_F" type="text"
                                           value="<? echo number_format($row->policy_coverage_F,true) ?>">
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
                                    if ($row->policy_coverage_F_acvrcv == 'acv') print 'checked '; ?>> ACV
                                    &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"         <?php
                                    if ($row->policy_coverage_F_acvrcv == 'rcv') print 'checked '; ?>> RCV

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseTwo">
                                Deductibles
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="control-label" for="policy_fire_deductible"> Fire : </label>

                                <div class="controls">
                                    <input name="policy_fire_deductible" type="text" value="<?= $row->policy_fire_deductible ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_wind_deductible"> Wind : </label>

                                <div class="controls">
                                    <input name="policy_wind_deductible" type="text" value="<?= $row->policy_wind_deductible ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_flood_deductible">Flood : </label>

                                <div class="controls">
                                    <input name="policy_flood_deductible" type="text" value="<?= $row->policy_flood_deductible ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_earthquake_deductible"> Earthquake : </label>

                                <div class="controls">
                                    <input name="policy_earthquake_deductible" type="text" value="<?= $row->policy_earthquake_deductible ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_spec   "> Special : </label>

                                <div class="controls">
                                    <input name="policy_spec" type="text" value="<?= $row->policy_spec ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseThree">
                                Other
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="control-label" for="policy_ordinance_law">Ordinance Law : </label>

                                <div class="controls">
                                    <input name="policy_ordinance_law" type="text" value="<?= $row->policy_ordinance_law ?>"></td>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_flood">Flood </label>

                                <div class="controls">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_building"> Building : </label>

                                <div class="controls">
                                    <input name="policy_building" type="text" value="<?= $row->policy_building ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_contents"> Contents : </label>

                                <div class="controls">
                                    <input name="policy_contents" type="text" value="<?= $row->policy_contents ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="policy_scheduled_property"> Scheduled Property : </label>

                                <div class="controls">
                                    <input name="policy_scheduled_property" type="text" value="<?= $row->policy_scheduled_property ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>







            <div class="form-group text-center">
                    <input id="policy_id" name="policy_id" value="<?= $row->policy_id ?>" type="hidden">
                    <input id="claim_id" name="claim_id" value="<?= $row->claim_id ?>" type="hidden">

                    <button type="button" onclick="javascript: window.location='/index.php/claims';" id="button2id" name="button2id"
                            class="btn btn-danger">Cancel
                    </button>
                    <button id="button1id" name="button1id" class="btn btn-success" onclick="javascript:
                                    var no_err =  true;
                                    var r = new RegExp( '[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?' );
                                    var v = $('#email').val();

                                    if( !$('#property_name').val() ) { $('#property_name').css('border','1px red solid'); no_err = false; }
                                        else { $('#property_name').css('border','');  }

                                    if( !$('#property_telephone').val() ) { $('#property_telephone').css('border','1px red solid'); no_err = false; }
                                        else { $('#property_telephone').css('border','');  }

                                    if( !$('#property_type').val() ) { $('#property_type').css('border','1px red solid'); no_err = false; }
                                        else { $('#property_type').css('border','');  }

                                    if( no_err==false )
                                        return false;
                                 ">Save Policy</button>
            </div>

            </form>
            </div>







            <!--/row-->
            </div>
            </div>
        </div>
    </div>
    <!--/col-->

        <div class="col-md-3 visible-md visible-lg" id="feed">
            <? include('inc/right.blank.php'); ?>
        </div><!--/col-->

</div>
<!--/row-->


</div>
<!-- end: Content -->

</div>
<!--/row-->

</div>
<!--/container-->

<div class="clearfix"></div>

<? include('inc/footer.php'); ?>

<!-- inline scripts related to this page -->
<script src="/assets/js/pages/form-elements.js"></script>
<script src="/assets/js/pages/ui-elements.js"></script>

</body>
</html>