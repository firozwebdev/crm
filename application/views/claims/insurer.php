<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Policy :: SClaim'); ?>
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
    <li>Insurer</li>
    <li class="active">New</li>
</ol>
<div class="box">
<div class="box-header">

</div>
<div class="box-content">


<div class="row">
<div class="col-lg-12">
<div id="MyWizard" class="wizard">
    <ul class="steps">
        <li data-target="#step1"><span class="badge">1</span><span class="chevron"></span>Claim</li>
        <li data-target="#step2"><span class="badge">2</span><span class="chevron"></span>Contacts</li>
        <li data-target="#step3"><span class="badge">3</span><span class="chevron"></span>Property</li>
        <li data-target="#step4" class="active"><span class="badge badge-info">4</span><span class="chevron"></span>Policy</li>
        <li data-target="#step5"><span class="badge">5</span>Loss</li>
    </ul>
</div>

<form class="form-horizontal" action="<? echo base_url(); ?>index.php/policy/save" method="post">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
    <label class="control-label" for="policy_display">Policy </label>

    <div class="controls">

    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Type : </label>

    <div class="controls">
        <input type="radio" name="policy_display" value="res" <?php
        if( $get_pol_rslt['policy_display']=='res' ) print 'checked="checked"'; ?> > Residential
        <input type="radio" name="policy_display" value="bus" <?php
        if( $get_pol_rslt['policy_display']=='bus' ) print 'checked'; ?> >Commercial
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number">Number : </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Effective Date : </label>

    <div class="controls">
        <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon">
                                                                <i class="icon-calendar"></i>
                                                                </span>
            <input id="date01" class="form-control date-picker" type="text" name="claim_loss_date" data-date-format="mm/dd/yyyy">
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
            <input id="date01" class="form-control date-picker" type="text" name="claim_loss_date" data-date-format="mm/dd/yyyy">
        </div>
    </div>
</div>
<div class="form-group">
    <label class="control-label" for="policy_display">General Liability : </label>

    <div class="controls">
        <input  name="policy_general_liability	" type="text"   value="<? echo number_format($get_pol_rslt['policy_general_liability'],2); ?>" ></td>

    </div>
</div>
<div class="form-group">
    <label class="control-label" for="policy_display">Coverage A : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Coverage B : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Coverage C : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Coverage D : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_display">Coverage E : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV
    </div>
</div>
<div class="form-group">
    <label class="control-label" for="policy_display">Coverage F : </label>

    <div class="controls">
        <input  name="policy_coverage_F" type="text"   value="<?echo number_format($get_pol_rslt['policy_coverage_F'],true)?>" >
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="acv" <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='acv' ) print 'checked '; ?>> ACV
        &nbsp;&nbsp;<input type="radio" name="policy_coverage_F_acvrcv" value="rcv"		 <?php
        if( $get_pol_rslt['policy_coverage_F_acvrcv']=='rcv' ) print 'checked '; ?>> RCV

    </div>
</div>
<div class="form-group">
    <label class="control-label" for="policy_number">Ordinance Law : </label>
    <div class="controls">
        <input  name="policy_ordinance_law" type="text"   value="<?=$get_pol_rslt['policy_ordinance_law']?>" ></td>
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number">Flood </label>
    <div class="controls">
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Building :  </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Contents :  </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Scheduled Property :  </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Deductibles </label>
    <div class="controls">
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Fire :  </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Wind :   </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number">Flood : </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Earthquake :   </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <label class="control-label" for="policy_number"> Special :   </label>
    <div class="controls">
        <input  name="policy_number" type="text"    value="<?=$get_pol_rslt['policy_number']?>" >
    </div>
</div>

<div class="form-group">
    <div class="controls text-center">
        <button type="button" onclick="javascript: window.location='/index.php/claims';" id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
        <button id="button1id" name="button1id" class="btn btn-success">Save Policy</button>
    </div>
</div>
</fieldset>
</form>
</div><!--/row-->
</div>
</div>
</div>
</div><!--/col-->

<div class="col-md-3 visible-md visible-lg" id="feed">
    <h3>Carrier Information</h3>
    <ul class="profile-details">

        <li>
            <div><i class="icon-phone"></i> Toll Free</div>
            <? echo $ins->insurer_toll_free; ?>
        </li>
        <li>
            <div><i class="icon-phone"></i> Main Phone</div>
            <? echo $ins->insurer_main_phone; ?>
        </li>
        <li>
            <div><i class="icon-tablet"></i> Website</div>
            <? echo $ins->insurer_website; ?>
        </li>
        <li>
            <div><i class="icon-pencil"></i> Handling Instructions</div>
            <? echo $ins->insurer_handling_instructions; ?>
        </li>
        <li>
            <div><i class="icon-envelope"></i> Note</div>
            <? echo $ins->insurer_note; ?>
        </li>
        <li>
            <div><i class="icon-map-marker"></i> address</div>
            Konopnickiej 42<br/>
            43-190 Mikolow<br/>
            Slask, Poland
        </li>
    </ul>
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
<? include('inc/footer.php'); ?>

</body>
</html>