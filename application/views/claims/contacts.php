<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contacts :: SClaim</title>

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
									<a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-12">
						<ol class="breadcrumb">
						  	<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
                            <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>" >Claim</a></li>
						  	<li><a href="<? echo base_url(); ?>index.php/claims/contacts/<? echo $this->uri->segment(3); ?>" >Contacts</a></li>

						</ol>

							<div class="row">		
								<div class="col-lg-9">

									<div class="box">
                                        <div class="box-header">
                                            <h2>Contacts</h2>
                                            <div class="box-icon">
                                                <a href="<? echo base_url(); ?>index.php/claims/contact/<? echo $this->uri->segment(3); ?>"><i class="icon-plus"></i></a>
                                            </div>
                                        </div>

										<div class="box-content">
                                            <? include('inc/steps.php');?>
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick="window.location='/index.php/claims/contact/<? echo $this->uri->segment(3); ?>'">Add Contact</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Name</th>
													  <th width="20%" class="text-center">Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
											<?
											foreach( $this->claims_model->get_contacts() as $c ) :
											?>
												<tr>
													<td><? echo $c->contact_first_name; ?></td>
												 
													<td class="text-center">
														<? $cid=$c->contact_id; ?> 
														<a class="btn btn-info" href="<? echo base_url(); ?>index.php/claims/contact/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id ?>">
															<i class="icon-edit "></i>
														</a>
														     <a class="btn btn-danger" href="<? echo base_url(); ?>index.php/contacts/delete/<? echo $c->contact_id ?>/<? echo $this->uri->segment(3); ?>"
															onclick="javascript: delete<? echo $cid; ?>.submit();">
															<i class="icon-trash "></i>
														</a>
													</td>
												</tr>
											 <? endforeach;
                                            for($c=count($this->claims_model->get_contacts());$c<12;++$c): ?>
                                                <tr>
                                                    <td>
                                                        &nbsp;
                                                    <td class="text-center">

                                                    </td>
                                                </tr>
                                            <?
                                            endfor; ?>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->
                                <div class="col-md-3 visible-md visible-lg" id="feed">
                                    <?php include( 'inc/right.blank.php' ); ?>
                                </div><!--/col-->

                            </div><!--/row-->

					
					 
						 

					</div><!--/col-->

		 
				</div><!--/row-->	


				</div>
				<!-- end: Content -->
        </div><!--/row-->
		
	</div><!--/container-->

	
	<div class="clearfix"></div>

    <?php include( 'inc/footer.php' ); ?>
	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>