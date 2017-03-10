<!DOCTYPE html>
<html lang="en">
<head>

    <title>Property :: SClaim</title>
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

					<div class="col-sm-12 col-md-12">
						<ol class="breadcrumb">
						  	<li><a href="/index.php/">Dashboard</a></li>
						  	<li>Property Report</li>

						 

						</ol>
 
							<div class="row">		
									<div class="col-lg-12">
										<div class="box">
											<div class="box-header">
												<h2></h2>
												 
											</div>
											<div class="box-content">

												<div style="float: right; margin-bottom: 10px">
									            <button id="download" class="btn btn-default" onclick="window.location='/index.php/reports/export/property'">Save to Excel</button>
									            </div>
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													 	<th axis="string">Insured's Name</th>
														<th style="text-align:center" axis="string">Address</th>
														<th style="text-align:center" axis="string">City</th>
														<th style="text-align:center" axis="string">State</th>
														<th style="text-align:center" axis="string">Zip</th>
														<th style="text-align:center" axis="string">Construction</th>
														<th style="text-align:center" axis="string">Telephone</th>
														<th style="text-align:center" axis="string">Total Sqft</th>
														<th style="text-align:center" axis="string">Built</th>
                                                        <th style="text-align:center" axis="string">Action</th>
												  </tr>
											  </thead>   
											  <tbody>
											
											
												<?php 
											  $r=1;					
											foreach($rows as $i)
											{
												echo '<tr class=""  id="'.$r.'">
												<td><h2>'.stripslashes($i->property_name).'</h2></td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_address_1).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_city).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_state).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_zip).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_telephone).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_construction).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_total_sqft).'</h2>&nbsp;</td>
												<td style="text-align:center"><h2>'.stripslashes($i->property_year_built).'</h2>&nbsp;</td>
												<td style="text-align:center"><a class="btn btn-info" href="'.base_url().'index.php/property/edit/'.$i->property_id.'">
                                                        <i class="icon-edit "></i>
                                                    </a></td>';
											}
                                            for($c=count($rows);$c<12;++$c):
                                                print
                                                    '<tr class=""  id="'.$r.'">
												<td>&nbsp;</td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												</tr>';
                                            endfor; ?>
											
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->

							</div><!--/row-->

					
					 
						 

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


<? include('inc/footer.php');?>

	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>