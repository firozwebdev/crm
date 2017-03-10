<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Rep :: SClaim'); ?>
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

        <? Page::top_links(); ?>

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
                <li><a href="<? echo base_url(); ?>index.php/insurers">Carriers</a></li>
                <li><a href="<? echo base_url(); ?>index.php/insurers/view/<? echo $ins->insurer_id; ?>"><? echo $ins->insurer_name; ?></a></li>
                <li><a href="<? echo base_url(); ?>index.php/insurers/reps">Reps</a></li>
                <li class="active"><? echo ( $this->uri->segment(3)=='add' ? 'Add' : 'Edit ' ); ?>
            </ol>
            <div class="box">
                <div class="box-header">
                    <h2>Representative</h2>
                    <div class="box-icon">
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                                <form class="form-horizontal" action="<? echo base_url(); ?>index.php/reps/save" method="post">
                                <fieldset>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_first_name">First name</label>
                                        <div class="controls">
                                            <input id="contact_first_name" name="contact_first_name" placeholder="" class="input-xlarge" required="" type="text" value="<? echo $row->contact_first_name; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_last_name">Last Name</label>
                                        <div class="controls">
                                            <input id="contact_last_name" name="contact_last_name" placeholder="" class="input-xlarge" required="" type="text" value="<? echo $row->contact_last_name; ?>">

                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_type">Type</label>
                                        <div class="controls">
                                            <select id="contact_type" name="contact_type" class="input-xlarge">
                                                <option value="12">Estimator</option>
                                                <option value="13">Adjuster</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_email">eMail</label>
                                        <div class="controls">
                                            <input id="contact_email" name="contact_email" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_email; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_primary_phone">Telephone</label>
                                        <div class="controls">
                                            <input id="contact_primary_phone" name="contact_primary_phone" placeholder="Primary" class="input-xlarge" required="" type="text" value="<? echo $row->contact_primary_phone; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_secondary_phone">Telephone</label>
                                        <div class="controls">
                                            <input id="contact_secondary_phone" name="contact_secondary_phone" placeholder="Secondary" class="input-xlarge" type="text" value="<? echo $row->contact_secondary_phone; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_fax">Fax</label>
                                        <div class="controls">
                                            <input id="contact_fax" name="contact_fax" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_fax; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_address_1">Address</label>
                                        <div class="controls">
                                            <input id="contact_address_1" name="contact_address_1" placeholder="Property Number &amp; Street" class="input-xlarge" required="" type="text" value="<? echo $row->contact_address_1; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_address_2">Address</label>
                                        <div class="controls">
                                            <input id="contact_address_2" name="contact_address_2" placeholder="Unit Number" class="input-xlarge" type="text" value="<? echo $row->contact_address_2; ?>">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_city">City</label>
                                        <div class="controls">
                                            <input id="contact_city" name="contact_city" placeholder="" class="input-xlarge" required="" type="text" value="<? echo $row->contact_city; ?>">

                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="contact_state">State</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-12">
                                                <select name="contact_state" class="input-xlarge"  id="contact_state">
                                                    <option value=""></option>
                                                    <? foreach( $this->account_model->states() as $k=>$v ) : ?>
                                                        <option value="<? echo $k; ?>" <? echo ( $row->contact_state==$k ? 'selected' : '' ); ?> ><? echo $v; ?></option>
                                                    <? endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->


                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="contact_zip">Zip</label>
                                        <div class="controls">
                                            <input id="contact_zip" name="contact_zip" placeholder="XXXXX" class="input-xlarge" type="text" value="<? echo $row->contact_zip; ?>">

                                        </div>
                                    </div>

                                    <!-- Button (Double) -->
                                    <div class="control-group">
                                        <div class="controls text-center">
                                            <button type="button" class="btn btn-danger" onclick="javascript: window.location='<? echo base_url(); ?>index.php/insurers/reps/<? echo $ins->insurer_id; ?>';">Cancel</button>
                                            <button id="button1id" name="button1id" class="btn btn-success">Save Rep</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="insurer_id" value="<? echo $ins->insurer_id; ?>">
                                    <input type="hidden" name="contact_id" value="<? echo $row->contact_id; ?>">
                                </fieldset>
                            </form>


                            <? include('inc/debug.php') ?>

                        </div><!--/col-->
                    </div><!--/row-->

                </div>
            </div>
        </div><!--/col-->

        <div class="col-md-3 visible-md visible-lg" id="feed">
            <? include('inc/right.blank.php') ?>
        </div><!--/col-->

    </div><!--/row-->







</div>
<!-- end: Content -->

</div><!--/row-->

</div><!--/container-->

<div class="clearfix"></div>

<? include('inc/footer.php');?>

<!-- inline scripts related to this page -->
<script src="<? echo base_url(); ?>assets/js/pages/claim_start.js"></script>

<!-- end: JavaScript-->

</body>
</html>