<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('User :: SClaim'); ?>
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
			  	<li><a href="/">Dashboard</a></li>
				<li><a href="/index.php/admin/users">Users</a></li>
			  	<li class="active">User</li>
			</ol>

			<div class="row profile">

				<div class="col-sm-3">

					<div class="row">
						<div class="col-xs-7 col-sm-12">

						</div>
						<div class="col-xs-5 col-sm-12">
							<h3>General Information</h3>

							<ul class="profile-details">
								<li>
									<div><i class="icon-briefcase"></i> position</div>
									CEO
								</li>
								<li>
									<div><i class="icon-building"></i> company</div>
									creativeLabs
								</li>
							</ul>

							<h3>Contact Information</h3>

							<ul class="profile-details">
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
					  	<li><a href="page-profile.html#friends">Friends</a></li>
					  	<li><a href="page-profile.html#photos">Photos</a></li>
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
							<ul class="friends-list clearfix">
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar.jpg"></a>
									<div>Lukasz Holeczek</div>
									<span class="label label-success">active</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar2.jpg"></a>
									<div>Ann Polansky</div>
									<span class="label label-warning">busy</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar3.jpg"></a>
									<div>May Lin</div>
									<span class="label label-important">blocked</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar4.jpg"></a>
									<div>Kate Norman</div>
									<span class="label label-default">offline</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar5.jpg"></a>
									<div>Mia Lopez</div>
									<span class="label label-important">blocked</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar6.jpg"></a>
									<div>Katia Svoboda</div>
									<span class="label label-success">active</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar7.jpg"></a>
									<div>Blanka Rosicky</div>
									<span class="label label-warning">busy</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar8.jpg"></a>
									<div>Garry Old</div>
									<span class="label label-success">active</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
								<li>
									<a class="avatar" href="page-profile.html#"><img src="/assets/img/avatar9.jpg"></a>
									<div>Nick White</div>
									<span class="label label-success">active</span>
									<a href="page-profile.html#" class="icon-facebook-sign"></a>
									<a href="page-profile.html#" class="icon-twitter-sign"></a>
									<a href="page-profile.html#" class="icon-linkedin-sign"></a>
								</li>
							</ul>

					  	</div>
					  	<div class="tab-pane" id="photos">

							<div class="row">
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo1.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo2.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo3.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo4.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo5.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo6.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo7.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo8.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo9.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo10.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo11.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo12.jpg" alt="Sample Image">
								</div>
																<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
									<img class="img-thumbnail" src="/assets/img/gallery/photo13.jpg" alt="Sample Image">
								</div>
															</div>

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