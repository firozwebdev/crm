<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Loss :: SClaim</title>
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
						  	<li><a href="<? echo base_url(); ?>index.php/claims/edit/<? echo $this->uri->segment(3); ?>" >Claim</a></li>
                            <li><a href="<? echo base_url(); ?>index.php/claims/policy/<? echo $this->uri->segment(3); ?>" >Policy</a></li>
                            <li class="active">Loss</li>

						 

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Loss</h2>
											<div class="box-icon">
												<a href="index-2.html#" class="btn-setting"><i class="icon-wrench"></i></a> 
											</div>
										</div>
										<div class="box-content">

                                            <? include('inc/steps.php');?>

                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick="window.location='<? echo base_url(); ?>index.php/loss/add'">Add Content</button>
                                            </div>
                                            <div class="clearfix"></div>
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Title</th>
													  <th width="16%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $rows as $c ) :
											?>
												<tr>
													<td><? echo $c->item_name; ?></td>

													<td class="text-center">
														<a class="btn btn-info" href="<? echo base_url(); ?>index.php/loss/edit/<? echo $this->uri->segment(3); ?>/<? echo $c->content_id; ?>">
															<i class="icon-edit "></i>
														</a>
														<form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete<? echo $c->content_id; ?>" method="post" style="display:inline">
														<input type="hidden" name="item" value="<? echo $c->content_id; ?>">
                                                        <a class="btn btn-danger" href="javascript: void(0);"
															onclick="javascript: delete<? echo $c->content_id; ?>.submit();">
															<i class="icon-trash "></i>
														</a>
														</form> 
													</td>
												</tr>
											 <? endforeach;
                                            for($r=count($rows);$r<=14;++$r) :?>
                                            <tr>
                                                <td>&nbsp;
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
	
	<div class="clearfix"></div>



        <? include('inc/footer.php');?>

            <!-- inline scripts related to this page -->
            <script src="/assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>