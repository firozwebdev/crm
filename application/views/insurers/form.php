<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo ( $this->uri->segment(2)=='add' ? 'New' : 'Edit' ); ?> Carrier Rep :: SClaim</title>
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
                <li><a href="/index.php/">Dashboard</a></li>
                <li><a href="/index.php/insurers">Insurers</a></li>
                <li class="active"><? echo ( $this->uri->segment(2)=='add' ? 'New' : 'Edit' ); ?></li>
            </ol>
            <div class="box">
                <div class="box-header">
                    <h2>Carrier Information</h2>
                </div>
                <div class="box-content">

                    <? if( $this->uri->segment(2)=='view' && $this->uri->segment(3)): ?>
                        <div style="float: right; margin-bottom: 10px">
                            <button id="download" class="btn btn-danger" onclick="window.location='/index.php/contacts/edit/<? echo $row->contact_id; ?>'">Delete</button>
                        </div>
                        <div class="clearfix"></div>
                    <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                        <div style="float: right; margin-bottom: 10px">
                            <button id="download" class="btn btn-danger" onclick="window.location='/index.php/contacts/delete/<? echo $row->contact_id; ?>'">Delete</button>
                        </div>
                        <div class="clearfix"></div>
                    <? endif; ?>

                    <div class="row">
                        <div class="col-lg-12">
                        <a id="top"></a>
                            <? if( $this->uri->segment(2)=='add'): ?>
                            <form class="form-horizontal" enctype="multipart/form-data" action="<? echo base_url(); ?>index.php/insurers/save" method="post" name="frmInsurer">
                            <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                <form class="form-horizontal" enctype="multipart/form-data" action="<? echo base_url(); ?>index.php/insurers/update" method="post" name="frmInsurer">
                            <? endif; ?>

                        <fieldset>
                            <!-- Text input-->

                            <div class="control-group">
                                <label class="control-label" for="insurer_acc_ref">Reference :</label>
                                <div class="controls">
                                    <input id="insurer_acc_ref" name="insurer_acc_ref" placeholder="" value="<? echo $row->insurer_acc_ref; ?>" type="text" class="input-xlarge" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="claim_loss_sqft">Name :</label>
                                <div class="controls">
                                    <input id="insurer_name" name="insurer_name" placeholder="" value="<? echo $row->insurer_name; ?>" type="text" class="input-xlarge" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_invoice_rate">Invoice Rate :</label>
                                <div class="controls">
                                    <input id="insurer_invoice_rate" name="insurer_invoice_rate" placeholder="" value="<? echo $row->insurer_invoice_rate; ?>" type="text" class="input-xlarge" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_tax_1">Tax 1 :</label>
                                <div class="controls">
                                    <input id="insurer_tax_1" name="insurer_tax_1" placeholder="" value="<? echo $row->insurer_invoice_rate; ?>" type="text" class="input-xlarge" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_tax_2">Tax 2 :</label>
                                <div class="controls">
                                    <input id="insurer_tax_2" name="insurer_tax_2" placeholder="" value="<? echo $row->insurer_invoice_rate; ?>" type="text" class="input-xlarge" >

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_address">Address :</label>
                                <div class="controls">
                                    <textarea name="insurer_address" class="input-xlarge" ><? echo $row->insurer_address; ?></textarea>

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_city">City :</label>
                                <div class="controls">
                                    <input id="insurer_city" name="insurer_city" class="input-xlarge"  placeholder="" value="<? echo $row->insurer_city; ?>" type="text">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_state">State</label>
                                <div class="controls">
                                        <select name="insurer_state" class="input-xlarge"  id="insurer_state">
                                            <option value=""></option>
                                            <? foreach( $this->account_model->states() as $k=>$v ) : ?>
                                                <option value="<? echo $k; ?>" <? echo ( $row->insurer_state==$k ? 'selected' : '' ); ?> ><? echo $v; ?></option>
                                            <? endforeach; ?>
                                        </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_zip">Zip :</label>
                                <div class="controls">
                                    <input id="insurer_zip" name="insurer_zip" class="input-xlarge"  placeholder="" value="<? echo $row->insurer_zip; ?>" type="text">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_main_phone">Telephone :</label>
                                <div class="controls">
                                    <input id="insurer_main_phone" class="input-xlarge"  name="insurer_main_phone" placeholder="" value="<? echo $row->insurer_main_phone; ?>" type="text">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_toll_free">Toll Free :</label>
                                <div class="controls">
                                    <input id="insurer_toll_free" class="input-xlarge"  name="insurer_toll_free" placeholder="" value="<? echo $row->insurer_toll_free; ?>" type="text">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_fax">Fax :</label>
                                <div class="controls">
                                    <input id="insurer_fax" class="input-xlarge"  name="insurer_fax" placeholder="" value="<? echo $row->insurer_fax; ?>" type="text">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_website">Website :</label>
                                <div class="controls">
                                    <input id="insurer_website" class="input-xlarge"  name="insurer_website" placeholder="" value="<? echo $row->insurer_website; ?>" type="text">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="insurer_note">Note :</label>
                                <div class="controls">
                                    <textarea id="insurer_note" class="input-xlarge"  name="insurer_note"><? echo $row->insurer_note; ?></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_invoice_rate">Handling Doc :</label>
                                <div class="controls">
                                    <input name="insurer_handling_doc" class="input-xlarge"  type="file" multiple="" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="insurer_handling_instructions">Handling Instructions :</label>
                                <div class="controls">
                                    <textarea id="insurer_handling_instructions" class="input-xlarge"  name="insurer_handling_instructions"><? echo $row->insurer_handling_instructions; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group text-center">
                            <input type="hidden" name="insurer_id" value="<? echo $row->insurer_id; ?>" >
                            <button type="button" class="btn btn-primary" onclick="javascript: window.location='<? echo base_url(); ?>index.php/insurers/';">Cancel</button>


                                <? if( $this->uri->segment(2)=='add'): ?>
                                    <button type="submit" class="btn btn-success"onclick="javascript:

												if( !$('#insurer_acc_ref').val() ) { $('#insurer_acc_ref').css('border','1px red solid'); no_err = false; }
													else { $('#insurer_acc_ref').css('border','');  }

												if( !$('#insurer_name').val() ) { $('#insurer_name').css('border','1px red solid'); no_err = false; }
													else { $('#insurer_name').css('border','');  }
                                                $('html, body').animate({ scrollTop: 0 }, 0);
												if( no_err==false )
													return false;
											 ">Save Insurer</button>
                                <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                    <button type="submit" class="btn btn-success"onclick="javascript:

												if( !$('#insurer_acc_ref').val() ) { $('#insurer_acc_ref').css('border','1px red solid'); no_err = false; }
													else { $('#insurer_acc_ref').css('border','');  }

												if( !$('#insurer_name').val() ) { $('#insurer_name').css('border','1px red solid'); no_err = false; }
													else { $('#insurer_name').css('border','');  }
                                                $('html, body').animate({ scrollTop: 0 }, 0);
												if( no_err==false )
													return false;
											 ">Update Insurer</button>
                                <? endif; ?>
                            </div>
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