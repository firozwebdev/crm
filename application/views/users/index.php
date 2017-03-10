<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Staff :: SClaim</title>
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
									<a href="<? echo base_url(); ?>#" id="main-menu-min" class="full visible-md visible-lg"></a>
			</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-12">
						<ol class="breadcrumb">
						  	<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
						  	<li class="/index.php/admin/users" >Staff</li>

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-9">
									<div class="box">
                                        <div class="box-header">
                                            <h2>Accounts</h2>
                                            <div class="box-icon">
                                               <!-- <a href="<? echo base_url(); ?>index.php/admin/user/add"><i class="icon-plus"></i></a>-->
                                            </div>
                                        </div>
										<? echo $this->session->flashdata('msg'); ?>
										<div class="box-content">
                                                <div style="float: right; margin-bottom: 10px">
                                                   <!-- <button id="download" class="btn btn-success" onclick='window.location="<?php echo base_url(); ?>index.php/admin/user_add"'>Add User</button>-->
													<a href="<?php echo base_url(); ?>index.php/admin/add_user" class="btn btn-success">Add User</a>
                                                </div>
                                                <div class="clearfix"></div>
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Username</th>
													  <th width="24%">Registered</th>
													  <th width="22%">Role</th>
													  <th width="8%">Status</th>
													  <th width="12%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $users as $c ) :
											?>
												<tr>
													<td><a href="<? echo base_url(); ?>index.php/contacts/profile"><? echo $c->username; ?></a></td>
													<td><? echo $c->registerDate; ?></td>
													<td>
														<?php if($c->usertype==9):?>
															<?php	echo "Company Administrator"; ?>
														<?php endif;?>

														<?php if($c->usertype==10):?>
															<?php	echo "Manager"; ?>
														<?php endif;?>

														<?php if($c->usertype==11):?>
															<?php	echo "Office"; ?>
														<?php endif;?>

														<?php if($c->usertype==12):?>
															<?php	echo "Estimator"; ?>
														<?php endif;?>

														<?php if($c->usertype==13):?>
															<?php	echo "Adjuster"; ?>
														<?php endif;?>
													</td>
													<td class="text-center">
														<span class="deact label label-<? echo ( $c->activation==1 ? 'success' : 'danger' ); ?>" id="deact<? echo $c->user_id; ?>" data-value="<? echo ( $c->activation==1 ? 'active' : 'suspend' ); ?>" data-id="<? echo $c->id; ?>"><? echo ( $c->activation==1 ? 'Active' : 'Suspend' ); ?></span>
													</td>
													<td>
														<? $cid=$c->contact_first_name; ?> 
														 <a class="btn btn-info" href="<? echo base_url(); ?>index.php/admin/user_edit/<? echo $c->id; ?>">
															<i class="icon-edit "></i>
														</a>
														<form action="<? echo base_url(); ?>index.php/admin/user_delete/" id="delete<? echo $c->id; ?>" method="post" style="display:inline">
														<input type="hidden" name="user" value="<? echo $c->user_id; ?>">
                                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/user_delete/<? echo $c->id; ?>"
															onclick="return confirm('Are you sure to delete')">
															<i class="icon-trash "></i>
														</a>
														</form> 
													</td>
												</tr>
											 <? endforeach;
                                            for($r=count($users);$r<14;++$r):?>
                                                <tr>
                                                    <td>&nbsp;
                                                    <td>
                                                    <td>
                                                    <td class="text-center">
                                                    <td>
                                                    </td>
                                                </tr>
                                            <? endfor; ?>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->
                                <div class="col-md-3 visible-md visible-lg" id="feed">

                                    <? include('inc/right.blank.php'); ?>


                                </div><!--/col-->

                            </div><!--/row-->





					</div><!--/col-->

		 
				</div><!--/row-->	


				</div>
				<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->

	<? include('inc/footer.php'); ?>
        
	<![endif]--><script>
            $(function() {
                $(".deact").click(function() {
                    var uid = $(this).attr("data-id");
                    if( $("#deact"+ uid).hasClass('label-success') )
                        var type = 'active';
                    else if( $("#deact"+ uid).hasClass('label-danger') )
                        var type = 'suspend';
                    $.ajax({
                        type: "GET",
                        url: "<? echo base_url(); ?>index.php/account/"+type+"/"+uid,
                        success: function(data){
                            if( data==1 ) {
                                $("#deact"+ uid).html().replace("Active","Suspend");
                                $("#deact"+ uid).toggleClass('label-danger label-success');
                            } else if( data==0 ) {
                                $("#deact"+ uid).html().replace("Suspend","Active");
                                $("#deact"+ uid).toggleClass('label-success label-danger');
                            }
                        }
                    });
                });
            });
        </script>


	<!-- end: JavaScript-->
	
</body>
</html>