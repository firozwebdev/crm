<!DOCTYPE html>
<html lang="en">
<head>

    <title>Content :: SClaim</title>
    <? include('inc/header.php');?>

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
							<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li> 
							<li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>">Claim</a></li>
                            <li><a href="<? echo base_url(); ?>index.php/claims/loss/<? echo $this->uri->segment(3); ?>">Contents</a></li>
							<li class="active">Item</li>
						</ol>
						<div class="box">
                            <div class="box-header">
                                <h2>Content</h2>
                                <div class="box-icon">
                                    <i class="icon-plus"></i>
                                </div>
                            </div>
                            <div class="box-content">
								
		 								<div class="row">		
											<div class="col-lg-12">
												<form class="form-horizontal" action="<? echo base_url(); ?>index.php/logs/save" method="post">

                                                    <table cellspacing="2" cellpadding="1" border="0" width="100%" class="m_tblrows">
                                                        <tr class="m_trdk">
                                                            <td width="140">Item Name :
                                                            <td>
                                                                <input type="text" style="width: 280px" name="item_name" value="<? echo $row->item_name?>">
                                                            <td>Quanity :
                                                            <td><input type="text" style="width: 80px" name="quanity">
                                                        </tr>
                                                        <tr class="m_trdk">
                                                            <td>Purchase Date : </td>
                                                            <td colspan=3>

                                                                <input name="purchase_date" class="date-picker" type="text" style="width:280px" id="purchase_date" value="<? echo $get_pol_rslt['policy_estimation_date']?>">

                                                            </td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Manufacturer</td>
                                                            <td><input type="text" style="width: 80px" name="manufacturer" value="<? echo $row->manufacturer?>"></td>
                                                            <td>Model / Serial : </td>
                                                            <td><input type="text" style="width: 80px" name="model" value="<? echo $row->model?>"></td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Age : </td>
                                                            <td><input type="text" style="width: 80px" name="age" value="<? echo $row->age?>"></td>
                                                            <td>Useful Life :</td>
                                                            <td><input type="text" style="width: 80px" name="useful_life"  value="<? echo $row->useful_life?>"></td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Price : </td>
                                                            <td><input type="text" style="width: 80px" name="price"  value="<? echo $row->price?>"></td>
                                                            <td>  </td>
                                                            <td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Depreciation : </td>
                                                            <td><input type="text" style="width: 80px" name="depreciation"  value="<? echo $row->depreciation?>"></td>
                                                            <td>Depreciation Taken:</td>
                                                            <td><input type="text" style="width: 80px" name="depreciation_taken"  value="<? echo $row->depreciation_taken?>"></td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Settlement Amount : </td>
                                                            <td><input type="text" style="width: 80px" name="settle_amount"  value="<? echo $row->settle_amount?>"></td>
                                                            <td>Sales Tax : </td>
                                                            <td><input type="text" style="width: 80px" name="sales_tax"  value="<? echo $row->sales_tax?>"></td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Amount Due Insured : </td>
                                                            <td><input type="text" style="width: 80px" name="amount_due_insured"  value="<? echo $row->depreciation_taken?>"></td>
                                                            <td>Amount Paid : </td>
                                                            <td><input type="text" style="width: 80px" name="amount_paid"  value="<? echo $row->amount_paid?>"></td>
                                                        </tr>
                                                        <tr class="m_trdk">
                                                            <td>Date Paid : </td>
                                                            <td>
                                                                <input name="date_paid" type="text" style="width:280px" id="date_paid" class="date-picker" value="<? echo $get_pol_rslt['date_paid']?>">

                                                            </td>
                                                            <td>Difference :
                                                            <td><input type="text" style="width: 80px" name="difference"  value="<? echo $row->difference?>"></td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td>Replacement Cost : </td>
                                                            <td><input type="text" style="width: 80px" name="replacement_cost"  value="<? echo $row->replacement_cost?>"></td>
                                                            <td>Total Value this Item : </td>
                                                            <td><input type="text" style="width: 80px" name="total_value_this_item"  value="<? echo $row->total_value_this_item?>"></td>
                                                        </tr>
                                                        <tr class="m_trdk">
                                                            <td> Upload Picture :
                                                            <td colspan="3" align="left">
                                                                <input type="file" name="item_picture" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td> Provide Link to Item :
                                                            <td colspan="3" align="left">
                                                                <input type="text" name="user_ser_content_link[]" value="">
                                                            </td>
                                                        </tr>
                                                        <?php

                                                        $links = explode(",",$row->content_links);
                                                        if( strlen($links[0])==0 )
                                                        {
                                                            $disabled = "disabled";
                                                        }
                                                        ?>
                                                        <tr class="m_trdk">
                                                            <td> Search Web
                                                            <td align="left"> <input type="checkbox" >
                                                            <td>Reset Links
                                                            <td align="left">  <input type="checkbox" <? echo $disabled?> >
                                                        </tr>
                                                        <tr class="m_tr">
                                                            <td colspan="4" align="center">
                                                                <input type="hidden" value="<? echo $this->input->post('property_id')?>" name="property_id">
                                                                <input type="hidden" value="<? echo $this->input->post('room')?>" name="area_id">
                                                                <input type="hidden" value="<? echo $row->content_id?>" name="item_id">

                                                    </table>
                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="contact_zip">Zip</label>
                                                        <div class="controls">
                                                            <input id="contact_zip" name="contact_zip" placeholder="XXXXX" class="input-xlarge" type="text" value="<? echo $row->contact_zip; ?>">

                                                        </div>
                                                    </div>

                                                    <!-- Button (Double) -->
                                                    <div class="control-group text-center">
                                                        <input id="contact_type" name="contact_type" value="15" type="hidden">
                                                        <input id="contact_id" name="contact_id" value="<? echo $this->uri->segment(4); ?>" type="hidden">
                                                        <input id="claim_id" name="claim_id" value="<? echo $this->uri->segment(3); ?>" type="hidden">
                                                        <button type="button" onclick="javascript: window.location='<? echo base_url(); ?>index.php/admin/users'" class="btn btn-danger">Cancel</button>
                                                        <button id="button1id" name="button1id" class="btn btn-success" >Save Account</button>
                                                    </div>


                                                </form>



											</div><!--/col-->

										</div><!--/row-->

                            </div>

						</div>

                        <div class="box" class="box-content">
                            <div class="box-header">
                                <h2>Item Links</h2>
                                <div class="box-icon">
                                    <i class="icon-plus"></i>
                                </div>
                            </div>
                            <div>
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th width="10%" class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?
                                    foreach( $this->loss_model->links() as $c ) :
                                        ?>
                                        <tr>
                                            <td><a href="<? echo base_url(); ?>index.php/claims/content/<? echo $this->uri->segment(3); ?>/<? echo $c->content_id; ?>"><? echo $c->item_name; ?></a></td>

                                            <td class="text-center">
                                                <? $cid=$c->insurer_id; ?>
                                                <form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
                                                    <a class="btn btn-info" href="javascript: void(0);"
                                                       onclick="javascript: delete<? echo $cid; ?>.submit();">
                                                        <i class="icon-edit "></i>
                                                    </a>
                                                </form>
                                                <form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
                                                    <a class="btn btn-danger" href="javascript: void(0);"
                                                       onclick="javascript: delete<? echo $cid; ?>.submit();">
                                                        <i class="icon-trash "></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    <? endforeach;
                                    for($c=count($this->loss_model->links());$c<=5;++$c) : ?>
                                        <tr>
                                            <td>&nbsp;
                                            <td class="text-center">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    <?
                                    endfor;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-md-3 visible-md visible-lg" id="feed">


                        <? include('inc/right.blank.php');?>

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

        <script src="<? echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>

        <!--<![endif]-->

        <!--[if IE]>

        <script src="<? echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>

        <![endif]-->

        <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>

        <!--<![endif]-->

        <!--[if IE]>

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>

        <![endif]-->
        <script src="<? echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap.min.js"></script>




        <!-- page scripts -->

        <script src="<? echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap.min.js"></script>




        <!-- page scripts -->
        <script src="<? echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.chosen.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.cleditor.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.placeholder.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/moment.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/daterangepicker.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/fullcalendar.min.js"></script>

        <!-- theme scripts -->
        <script src="<? echo base_url(); ?>assets/js/custom.min.js"></script>
        <script src="<? echo base_url(); ?>assets/js/core.min.js"></script>

        <!-- inline scripts related to this page -->
        <script src="<? echo base_url(); ?>assets/js/pages/form-elements.js"></script>

        <!-- end: JavaScript-->

	<!-- end: JavaScript-->
	
</body>
</html>