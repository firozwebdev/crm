<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Profile :: SClaim'); ?>
    <? Page::header(); ?>
		
</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
		
			<? Page::top_links(); ?>
			
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1 ">
								
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<? echo Page::col_links(); ?>

		 		</div>
									<a href="page-profile.html#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">
			
						
			<ol class="breadcrumb">
			  	<li><a href="<? echo base_url(); ?>">Dashboard</a></li>
				<li><a href="<? echo base_url(); ?>index.php/insurers">Insurers</a></li>
                <li><a href="<? echo base_url(); ?>index.php/insurers/view/<? echo $ins->insurer_id; ?>"><? echo $ins->insurer_name; ?></a></li>
			  	<li class="active">Summary</li>
			</ol>

			<div class="row profile">
				
				<div class="col-sm-3">
					
					<div class="row">
						<div class="col-xs-7 col-sm-12">
						 
						</div>
						<div class="col-xs-5 col-sm-12">
							<h3>Carrier Information</h3>

							<ul class="profile-details">
								<li>
									<div><i class="icon-briefcase"></i> Company</div>
									<? echo $ins->insurer_name; ?>
								</li>
								<li>
									<div><i class="icon-building"></i> company</div>
									creativeLabs
								</li>
								<li>
									<div><i class="icon-phone"></i> phone</div>
									+48 123 456 789
								</li>
								<li>
									<div><i class="icon-tablet"></i> mobile phone</div>
									+48 123 456 789
								</li>
								<li>
									<div><i class="icon-envelope"></i> e-mail</div>
									lukasz@bootstrapmaster.com
								</li>
								<li>
									<div><i class="icon-map-marker"></i> address</div>
									Konopnickiej 42<br/>
									43-190 Mikolow<br/>
									Slask, Poland
								</li>
							</ul>
						</div>	
					</div><!--/row-->	

				</div><!--/col-->
				
				<div class="col-sm-9">
					
					<ul class="nav nav-tabs" id="myTab">
					  	<li class="active"><a href="page-profile.html#skills">Skills</a></li>
					  	<li><a href="page-profile.html#friends">Reps</a></li>
					  	<li><a href="page-profile.html#photos">Claims</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="skills">
							
							<div class="row">
								
								<div class="col-sm-5">
									<h2>About Me</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<h2>Bio</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<h2>Job</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<h2>Languages</h2>
									<div class="row">
										<div class="col-xs-4">
											<div style="width:100%!important" class="language-skill1" data-percent="90"><span>90</span>%</div>
						                    <div style="text-align:center">English</div>
										</div><!--/col-->
										<div class="col-xs-4">
											<div style="width:100%!important" class="language-skill2" data-percent="43"><span>43</span>%</div>
						                    <div style="text-align:center">Spanish</div>
										</div><!--/col-->
										<div class="col-xs-4">
											<div style="width:100%!important" class="language-skill3" data-percent="17"><span>17</span>%</div>
						                    <div style="text-align:center">German</div>
										</div><!--/col-->
									</div><!--/row-->
										
								</div><!--/col-->
								
								<div class="col-sm-7">
									<h2>My Skills</h2>
									<ul class="skill-bar">
							        	<li>
							            	<h5>Web Design</h5>
							            	<div class="meter"><span class="lightBlue">40%</span></div>
							          	</li>
							          	<li>
							            	<h5>Wordpress</h5>
							            	<div class="meter"><span class="green">80%</span></div>
							          	</li>
							          	<li>
							            	<h5>Branding</h5>
							            	<div class="meter"><span class="red">100%</span></div>
							          	</li>
							          	<li>
							            	<h5>SEO Optmization</h5>
							            	<div class="meter"><span class="lightOrange">60%</span></div>
							          	</li>
										
							      	</ul>
							
									<h2>Other Skills</h2>
									<canvas id="canvas" class="chartjs" height="450" width="450"></canvas>
								</div><!--/col-->
									
							</div><!--/row-->		
							
						</div>
					  	<div class="tab-pane" id="friends">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th width="8%" class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $insurers as $c ) :
                                    ?>
                                    <tr>
                                        <td><a href="<? echo base_url(); ?>index.php/insurers/rep/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id; ?>"><? echo $c->contact_first_name; ?></a></td>

                                        <td class="text-center">
                                            <form action="/index.php/insurers/rep/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id; ?>" method="post" style="display:inline">
                                                <a class="btn btn-info" href="javascript: void(0);"
                                                   onclick="javascript: delete<? echo $c->contact_id; ?>.submit();">
                                                    <i class="icon-edit "></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for( $c=count($insurers);$c<20;++$c) : ?>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        <td class="text-center">
                                            &nbsp;
                                        </td>
                                    </tr>
                                <?
                                endfor; ?>
                                </tbody>
                            </table>

                        </div>
					  	<div class="tab-pane" id="photos">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th width="8%" class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $insurers as $c ) :
                                    ?>
                                    <tr>
                                        <td><a href="<? echo base_url(); ?>index.php/insurers/rep/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id; ?>"><? echo $c->contact_first_name; ?></a></td>

                                        <td class="text-center">
                                            <form action="/index.php/insurers/rep/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id; ?>" method="post" style="display:inline">
                                                <a class="btn btn-info" href="javascript: void(0);"
                                                   onclick="javascript: delete<? echo $c->contact_id; ?>.submit();">
                                                    <i class="icon-edit "></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for( $c=count($insurers);$c<20;++$c) : ?>
                                    <tr>
                                        <td>
                                            &nbsp;
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

			</div><!--/profile-->		
			
       
					
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
	<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="/assets/js/excanvas.min.js"></script><![endif]-->
	<script src="/assets/js/Chart.min.js"></script>
	<script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/page-profile.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>