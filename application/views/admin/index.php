<!DOCTYPE html>
<html lang="en">
<head>

    <title>Administration :: SClaim</title>
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
									<a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-12">
						<ol class="breadcrumb">
						  	<li class="active"><a href="<? echo base_url(); ?>index.php/">Administration</a></li> 

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Users</h2>
											<div class="box-icon">
												<a href="<? echo base_url(); ?>index.php/users/add"><i class="icon-plus"></i></a>
											</div>
										</div>
										<div class="box-content">
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Name</th>
													  <th width="12%" class="text-center">Date registered</th>
													  <th width="10%" class="text-center">Role</th>
													  <th width="4%" class="text-center">Status</th>
													  <th width="10%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $contacts as $c ) :
											?>
												<tr>
													<td><a href="<? echo base_url(); ?>index.php/users/profile"><? echo $c->contact_first_name; ?></a></td>
													<td class="text-center">2012/01/01</td>
													<td class="text-center">Member</td>
													<td class="text-center">
														<span class="label label-success">Active</span>
													</td>
													<td class="text-center">
														<? $cid=$c->contact_id; ?>
														<a class="btn btn-info" href="<? echo base_url(); ?>index.php/users/view/<? echo $cid; ?>">
															<i class="icon-edit "></i>
														</a>
														<form action="<? echo base_url(); ?>index.php/users/delete/" id="delete<? echo $cid; ?>" method="post" style="display:inline">
														<a class="btn btn-danger" href="javascript: void(0);" 
															onclick="javascript: delete<? echo $cid; ?>.submit();">
															<i class="icon-trash "></i>
														</a>
														</form> 
													</td>
												</tr>
											 <? endforeach;  for( $c=count($insurers);$c<10;++$c) : ?>
                                                <tr>
                                                    <td>
                                                    <td class="text-center">
                                                    <td class="text-center">
                                                    <td class="text-center">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                            <?
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

	<div class="clearfix"></div>


    <? include('inc/footer.php'); ?>
	
</body>
</html>