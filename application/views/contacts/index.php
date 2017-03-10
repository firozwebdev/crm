<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contacts :: SClaim</title>
    <? include('inc/header.php');?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.datatable.min.css">

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
						  	<li class="/index.php/contacts" >Contacts</li>
						</ol>

							<div class="row">
								<div class="col-lg-12">
									<div class="box">
                                        <div class="box">
                                            <div class="box-header">
                                                <h2>Contacts</h2>
                                                <div class="box-icon">
                                                    <a href="<? echo base_url(); ?>index.php/contacts/add"><i class="icon-plus"></i></a>
                                                </div>
                                            </div>
                                            <? echo $this->session->flashdata('msg'); ?>
										<div class="box-content">
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick="window.location='<? echo base_url(); ?>index.php/contacts/add'">Add Contact</button>
                                            </div>
                                            <div class="clearfix"></div>
											<table class="table table-striped table-bordered bootstrap-datatable datatable display">
												<thead>
													<tr>


														<th>Contact Name</th>
														<th>Company</th>

														<th>Email</th>
														<th>Primary Phone</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>

												<?php

												foreach( $contacts as $c ) :
													?>
													<tr>

													<td><a href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $c->contact_id ?>"><?php echo $c->contact_first_name .' '. $c->contact_last_name; ?></a></td>
													<td><?php echo $c->contact_company; ?></td>

													<td><?php echo $c->contact_email; ?></td>
													<td><?php echo $c->contact_primary_phone; ?></td>

													<td>
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/contacts/edit/<?php echo $c->contact_id ?>">
															<i class="icon-edit "></i>
														</a>

														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/contacts/contact_details/<?php echo $c->contact_id ?>">
															<i class="icon-eye-open "></i>
														</a>

														<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/contacts/delete/<?php echo $c->contact_id ?>" onclick='return confirm("Are you sure to delete..")'>
															<i class="icon-trash "></i>
														</a>
													</td>

												</tr>
												<?php endforeach; ?>
												</tbody>
										  </table>
										</div>
									</div>
								</div><!--/col-->

							</div><!--/row-->





					</div><!--/col-->


				</div><!--/row-->


				</div>

                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <? include('inc/right.blank.php');?>

                </div><!--/col-->
				<!-- end: Content -->

				</div><!--/row-->

	    </div><!--/container-->
    </div>
</div>

<div class="clearfix"></div>


    <? include('inc/footer.php');?>

	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/index.js"></script>

		<script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/mydatatable.js"></script>

	<!-- end: JavaScript-->

</body>
</html>