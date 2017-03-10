<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact :: SClaim</title>
    <? include('inc/header.php');?>
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
                <? include('inc/sidenav.adjust.php');?>
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
                        <li><a href="<? echo base_url(); ?>index.php/contacts/<? echo $this->uri->segment(3); ?>">Contacts</a></li>
                        <li class="active"><? echo ( !$this->uri->segment(3) ? 'New' : 'Edit' ); ?></li>
                    </ol>
                    <div class="box">
                        <div class="box-header">
                            <h2>Contact</h2>
                            <div class="box-icon">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        <? echo $this->session->flashdata('msg'); ?>

                        <div class="box-content">
                            <? if( $this->uri->segment(2)=='edit' ) : ?>
                                <div style="float: right; margin-bottom: 10px">
                                    <button id="download" class="btn btn-danger"href="javascript: void(0);" onclick='javascript: confirmdelete("<?php echo base_url(); ?>/index.php/contacts/delete/<? echo $row->contact_id; ?>");'>Delete Contact</button>
                                </div>
                            <? endif; ?>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-lg-12">

                                      <form class="form-horizontal" action="<? echo base_url(); ?>index.php/contacts/save" method="post">


 <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_company">Company <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_company" name="contact_company" placeholder=""   onkeyup="javascript:backspacerUP(this,event);" class="input-xlarge" type="text" value="<? echo $row->contact_company; ?>">

                                            </div>
                                        </div>
 

                                        <div class="control-group">
                                            <label class="control-label" for="contact_first_name">First name</label>
                                            <div class="controls">
                                                <input id="contact_first_name" name="contact_first_name" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_first_name; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_last_name">Last Name <span class="required">*</span> </label>
                                            <div class="controls">
                                                <input id="contact_last_name" name="contact_last_name" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_last_name; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_email">eMail <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_email" name="contact_email" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_email; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_primary_phone">Primary Telephone <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_primary_phone" name="contact_primary_phone"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Primary" class="input-xlarge" type="text" value="<? echo $row->contact_primary_phone; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_secondary_phone">Secondary Telephone</label>
                                            <div class="controls">
                                                <input id="contact_secondary_phone" name="contact_secondary_phone"   onkeyup="javascript:backspacerUP(this,event);" placeholder="Secondary" class="input-xlarge" type="text" value="<? echo $row->contact_secondary_phone; ?>">

                                            </div>
                                        </div>

                                       

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_address_1">Address Line 1</label>
                                            <div class="controls">
                                                <input id="contact_address_1" name="contact_address_1" placeholder="Property Number &amp; Street" class="input-xlarge" type="text" value="<? echo $row->contact_address_1; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_address_2">Address Line 2 <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_address_2" name="contact_address_2" placeholder="Unit Number" class="input-xlarge" type="text" value="<? echo $row->contact_address_2; ?>">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_city">City <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_city" name="contact_city" placeholder="" class="input-xlarge" type="text" value="<? echo $row->contact_city; ?>">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="contact_state">State <span class="required">*</span></label>
                                            <div class="controls">
                                                <select name="contact_state" class="input-xlarge"  id="contact_state">
                                                    <option value=""></option>
                                                    <? foreach( $this->account_model->states() as $k=>$v ) : ?>
                                                        <option value="<? echo $k; ?>" <? echo ( $row->contact_state==$k ? 'selected' : '' ); ?> ><? echo $v; ?></option>
                                                    <? endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="contact_zip">Zip <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="contact_zip" name="contact_zip" placeholder="XXXXX" class="input-xlarge" type="text" value="<? echo $row->contact_zip; ?>">

                                            </div>
                                        </div>

                                        <!-- Button (Double) -->
                                        <div class="control-group text-center">
                                            <input id="contact_id" name="contact_id" value="<? echo $row->contact_id; ?>" type="hidden">
                                            <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/contacts'" class="btn btn-primary">Cancel</button>
                                            <? if( $this->uri->segment(2)=='add'): ?>
                                            <button id="button1id" name="button1id" class="btn btn-success" onclick="javascript:
												var no_err =  true;
											 	var r = new RegExp( '[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?' );
												var v = $('#email').val();

												if( !$('#contact_first_name').val() ) { $('#contact_first_name').css('border','1px red solid'); no_err = false; }
													else { $('#contact_first_name').css('border','');  }

												if( !$('#contact_last_name').val() ) { $('#contact_last_name').css('border','1px red solid'); no_err = false; }
													else { $('#contact_last_name').css('border','');  }

                                                if( !$('#contact_email').val() ) { $('#contact_email').css('border','1px red solid'); no_err = false; }
													else {
														if( v.match(r) == null ) {
															$('#contact_email').css('border','1px red solid'); no_err = false;
														} else $('#contact_email').css('border','');
												}

												if( !$('#contact_primary_phone').val() ) { $('#contact_primary_phone').css('border','1px red solid'); no_err = false; }
													else { $('#contact_primary_phone').css('border',''); }

												if( no_err==false )
													return false;
											 ">Save Contact bb</button>
                                            <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                                <button id="button1id" name="button1id" class="btn btn-success" onclick="javascript:
												var no_err =  true;
											 	var r = new RegExp( '[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?' );
												var v = $('#email').val();

												if( !$('#contact_first_name').val() ) { $('#contact_first_name').css('border','1px red solid'); no_err = false; }
													else { $('#contact_first_name').css('border','');  }

												if( !$('#contact_last_name').val() ) { $('#contact_last_name').css('border','1px red solid'); no_err = false; }
													else { $('#contact_last_name').css('border','');  }

                                                if( !$('#contact_email').val() ) { $('#contact_email').css('border','1px red solid'); no_err = false; }
													else {
														if( v.match(r) == null ) {
															$('#contact_email').css('border','1px red solid'); no_err = false;
														} else $('#contact_email').css('border','');
												}

												if( !$('#contact_primary_phone').val() ) { $('#contact_primary_phone').css('border','1px red solid'); no_err = false; }
													else { $('#contact_primary_phone').css('border',''); }

												if( no_err==false )
													return false;
											 ">Update Contact bb</button>
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

<? include('inc/footer.php');?>

</body>
</html>