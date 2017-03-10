<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        Property :: SClaim</title>
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
    <a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11 ">


<div class="row">

<div class="col-sm-12 col-md-9">
<ol class="breadcrumb">
    <li><a href="/index.php/">Dashboard</a></li>
    <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>" >Claims</a></li>
    <li><a href="<? echo base_url(); ?>index.php/property/claims/<? echo $this->uri->segment(3); ?>" >Properties</a></li>
    <li class="active"><? echo ( $this->uri->segment(4) ? 'Edit' : 'New' ); ?></li>
</ol>
<div class="box">
    <div class="box-header">

    </div>
    <div class="box-content">


        <? include('inc/steps.php');?>

        <? if( $this->uri->segment(2)=='view' && $this->uri->segment(3)): ?>
            <div style="float: right; margin-bottom: 10px">
                <button id="download" class="btn btn-danger" onclick="window.location='/index.php/contacts/edit/<? echo $row->calendar_id; ?>'">Edit Contact</button>
            </div>
            <div class="clearfix"></div>
        <? elseif( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
            <div style="float: right; margin-bottom: 10px">
                <button id="download" class="btn btn-danger" onclick="javascript: confirmdelete('/index.php/properties/delete/<? echo $row->claim_id; ?>');">Delete</button>
            </div>
            <div class="clearfix"></div>
        <? endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="/index.php/claims/property_save" id="property_form" name="property_form" method="post">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="property_name">Name of Insured </label>
                            <div class="controls">
                                <input id="property_name" name="property_name" placeholder="Label for Property" class="input-xlarge" type="text" value="<? echo $row->property_name; ?>"

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_telephone">Telephone</label>
                            <div class="controls">
                                <input id="property_telephone" name="property_telephone" placeholder="Contact Number of Property" class="input-xlarge" type="text"  value="<? echo $row->property_telephone; ?>"  onkeyup="javascript:backspacerUP(this,event);">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_type">Property Type</label>
                            <div class="controls">
                                <select id="property_type" name="property_type" class="input-xlarge">
                                    <? foreach( $this->forms_model->val_list( $this->forms_model->val_list_id('property') ) as $row ) : ?>
                                        <option value="<? echo $row->value_id; ?>" <? echo ( $row->property_type==$k ? 'selected' : '' ); ?> ><? echo $row->value_label; ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_address_1">Address</label>
                            <div class="controls">
                                <input id="property_address_1" name="property_address_1" placeholder="Property Number &amp; Street" class="input-xlarge" type="text" value="<? echo $row->property_address_1; ?>">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_address_2">Address</label>
                            <div class="controls">
                                <input id="property_address_2" name="property_address_2" placeholder="Unit Number" class="input-xlarge" type="text" value="<? echo $row->property_address_2; ?>">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_city">City</label>
                            <div class="controls">
                                <input id="property_city" name="property_city" placeholder="" class="input-xlarge" type="text" value="<? echo $row->property_city; ?>">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="state">State</label>
                            <div class="controls">
                                <select name="state" class="input-xlarge"  id="state">
                                    <option value=""></option>
                                    <? foreach( $this->account_model->states() as $k=>$v ) : ?>
                                        <option value="<? echo $k; ?>" <? echo ( $row->property_state==$k ? 'selected' : '' ); ?> ><? echo $v; ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_zip">Zip</label>
                            <div class="controls">
                                <input id="property_zip" name="property_zip" placeholder="XXXXX" class="input-xlarge" type="text" value="<? echo $row->property_zip; ?>">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="number_structures">Structures</label>
                            <div class="controls">
                                <select id="number_structures" name="number_structures" class="input-xlarge">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_construction">Construction</label>
                            <div class="controls">
                                <select id="property_construction" name="property_construction" class="input-xlarge">
                                    <option value="0"></option>
                                    <option value="Add">Add Type</option>
                                    <? foreach( $this->forms_model->val_list( $this->forms_model->val_list_id('construction') ) as $row ) : ?>
                                        <option value="<? echo $row->value_id; ?><"><? echo $row->value_label; ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_total_sqft">Total SqFt.</label>
                            <div class="controls">
                                <input id="property_total_sqft" name="property_total_sqft" placeholder="Footage of Damage Area" class="input-xlarge" type="text">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="property_description">Description</label>
                            <div class="controls">
                                <textarea id="property_description" class="input-xlarge" name="property_description"></textarea>
                            </div>
                        </div>

                        <? if( $this->uri->segment(2)!='view' ): ?>

                        <div class="control-group">
                            <label class="control-label" for="property_description">&nbsp;</label>
                            <div class="controls text-center" style="margin-right:20%">

                                <button onclick="javascript: window.location='/index.php/';" class="btn btn-danger">Cancel</button>
                                <button id="button1id" name="button1id" type="submit" class="btn btn-success"  onclick="javascript:
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
                                 ">     Save Property     </button>
                            </div>
                        </div>
                        <? endif; ?>

                    </fieldset>
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
<script src="/assets/js/phone.js"></script>

<!-- end: JavaScript-->

</body>
</html>