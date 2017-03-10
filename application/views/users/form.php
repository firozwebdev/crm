<!DOCTYPE html>
<html lang="en">
<head>

    <title>Account :: SClaim</title>
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
        <li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
        <li><a href="<? echo base_url(); ?>index.php/admin/users">Users</a></li>
        <li class="active">Account</li>
    </ol>
    <div class="box">
        <div class="box-header">
            <h2>Details</h2>
            <div class="box-icon">
                <i class="icon-user"></i>
            </div>
        </div>
        <? echo $this->session->flashdata('msg'); ?>
        <div class="box-content">


            <div class="row">
                <div class="col-lg-12">

                    <? if( $this->uri->segment(2)=='add_user'): ?>
                    <form class="form-horizontal" action="<? echo base_url(); ?>index.php/admin/user_save" method="post">
                    <?php endif; ?>

                        <? if( $this->uri->segment(2)=='user_edit' && $this->uri->segment(3)): ?>
                        <form class="form-horizontal" action="<? echo base_url(); ?>index.php/admin/user_update" method="post">
                            <?php endif; ?>

                        <div class="control-group">
                            <label class="control-label" for="contact_first_name">First name</label>
                            <div class="controls">
                                <input id="contact_first_name" name="first_name" placeholder="" class="input-xlarge" type="text" value="<? echo $row->first_name; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="contact_last_name">Last Name</label>
                            <div class="controls">
                                <input id="contact_last_name" name="last_name" placeholder="" class="input-xlarge" type="text" value="<? echo $row->last_name; ?>">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="control-group">
                            <label class="control-label" for="contact_type">Role</label>
                            <div class="controls">
                                <select id="contact_type" name="user_type" class="input-xlarge">
                                    <? foreach( $this->users_model->groups() as $g) : ?>
                                        <option value="<? echo $g->id; ?>" <?php if($g->id == $row->usertype){echo 'selected';} ?>><? echo $g->title; ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="email">eMail</label>
                            <div class="controls">
                                <input id="contact_email" name="email" placeholder="" class="input-xlarge" type="text" value="<? echo $row->email; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="username">Username</label>
                            <div class="controls">
                                <input id="username" name="username" placeholder="" class="input-xlarge" type="text" value="<? echo $row->username; ?>">

                            </div>
                        </div>

                        <div class="controlgroup">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                    <input type="password"  class="input-xlarge" id="password" name="password"/>

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="username">Password x2</label>
                            <div class="controls">
                                    <input type="password"  class="input-xlarge" id="password2" name="password2"/>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="telephone_one">Telephone</label>
                            <div class="controls">
                                <input id="contact_primary_phone" name="telephone_one"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Primary" class="input-xlarge" type="text" value="<? echo $row->telephone_one; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="telephone_two">Telephone</label>
                            <div class="controls">
                                <input id="contact_secondary_phone" name="telephone_two"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Secondary" class="input-xlarge" type="text" value="<? echo $row->telephone_two; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="contact_fax">Fax</label>
                            <div class="controls">
                                <input id="contact_fax" name="fax" placeholder=""   onkeyup="javascript:backspacerUP(this,event);" class="input-xlarge" type="text" value="<? echo $row->fax; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="address_one">Address</label>
                            <div class="controls">
                                <input id="contact_address_1" name="address_one" placeholder="Property Number &amp; Street" class="input-xlarge" type="text" value="<? echo $row->address_one; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="address_two">Address</label>
                            <div class="controls">
                                <input id="contact_address_2" name="address_two" placeholder="Unit Number" class="input-xlarge" type="text" value="<? echo $row->address_two; ?>">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="city">City</label>
                            <div class="controls">
                                <input id="contact_city" name="city" placeholder="" class="input-xlarge" type="text" value="<? echo $row->city; ?>">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="control-group">
                            <label class="control-label" for="state">State</label>
                            <div class="controls">
                                <select name="state" id="state">
                                    <?php if($row->state): ?>
                                        <option value="<?php echo $row->state; ?>" selected><?php echo $row->state; ?></option>
                                    <?php endif; ?>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District of Columbia">District of Columbia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                            <label class="control-label" for="zip">Zip</label>
                            <div class="controls">
                                <input id="contact_zip" name="zip" placeholder="XXXXX" class="input-xlarge" type="text" value="<? echo $row->zip; ?>">

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="control-group text-center">
                                <input id="contact_id" name="contact_id" value="<? echo $row->contact_id; ?>" type="hidden">
                                <input id="user_id" name="user_id" value="<? echo $row->id; ?>" type="hidden">


                            <? if( $this->uri->segment(2)=='add_user' ): ?>
                                <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/admin/users'" class="btn btn-danger">Cancel</button>
                                <button id="button1id" name="button1id" class="btn btn-success" >Save Account</button>
                            <?php endif; ?>
                            <? if( $this->uri->segment(2)=='user_edit' && $this->uri->segment(3)): ?>
                                <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/admin/users'" class="btn btn-danger">Cancel</button>
                                <button id="button1id" name="button1id" class="btn btn-success" >Update Account</button>
                            <?php endif; ?>
                        </div>

                    </form>

                </div><!--/col-->

            </div><!--/row-->

        </div>
    </div>
</div><!--/col-->

<div class="col-md-3 visible-md visible-lg" id="feed">

    <? include('inc/right.blank.php'); ?>

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
<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/fullcalendar.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/assets/js/excanvas.min.js"></script><![endif]-->
<script src="/assets/js/jquery.flot.min.js"></script>
<script src="/assets/js/jquery.flot.pie.min.js"></script>
<script src="/assets/js/jquery.flot.stack.min.js"></script>
<script src="/assets/js/jquery.flot.resize.min.js"></script>
<script src="/assets/js/jquery.flot.time.min.js"></script>
<script src="/assets/js/jquery.autosize.min.js"></script>
<script src="/assets/js/jquery.placeholder.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/daterangepicker.min.js"></script>
<script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/dataTables.bootstrap.min.js"></script>

<!-- theme scripts -->
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/core.min.js"></script>

<!-- inline scripts related to this page -->
<script src="/assets/js/pages/claim_start.js"></script>

<!-- end: JavaScript-->

</body>
</html>