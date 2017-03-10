<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('SClaim'); ?>
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
									<a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
						  	<li><a href="index-2.html#">Genius</a></li>
						  	<li class="active" >Dashboard</li>

							<div class="form-group choose-date hidden-xs">
							  	<div class="controls">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-calendar"></i></span>
										<input type="text" class="form-control" id="daterange" value="09/09/2013 - 09/28/2013">
										<span class="input-group-addon"><i class="icon-chevron-down"></i></span>
									</div>
							  	</div>
							</div>

						</ol>
 
							<div class="row">		
								<div class="col-lg-12">
									<div class="box">
										<div class="box-header" data-original-title>
											<h2><i class="icon-user"></i><span class="break"></span>Members</h2>
											<div class="box-icon">
												<a href="table.html#" class="btn-setting"><i class="icon-wrench"></i></a>
												<a href="table.html#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
												<a href="table.html#" class="btn-close"><i class="icon-remove"></i></a>
											</div>
										</div>
										<div class="box-content">
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Username</th>
													  <th>Date registered</th>
													  <th>Role</th>
													  <th>Status</th>
													  <th>Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
												<tr>
													<td>Anton Phunihel</td>
													<td>2012/01/01</td>
													<td>Member</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>  
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>  
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Alphonse Ivo</td>
													<td>2012/01/01</td>
													<td>Member</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>  
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>  
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Thancmar Theophanes</td>
													<td>2012/01/01</td>
													<td>Member</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>  
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>  
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
													</td>
												</tr>
												<tr>
													<td>Walerian Khwaja</td>
													<td>2012/01/01</td>
													<td>Member</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Clemens Janko</td>
													<td>2012/02/01</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Chidubem Gottlob</td>
													<td>2012/02/01</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Hristofor Sergio</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Tadhg Griogair</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Pollux Beaumont</td>
													<td>2012/01/21</td>
													<td>Staff</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Adam Alister</td>
													<td>2012/01/21</td>
													<td>Staff</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Carlito Roffe</td>
													<td>2012/08/23</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Sana Amrin</td>
													<td>2012/08/23</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Adinah Ralph</td>
													<td>2012/06/01</td>
													<td>Admin</td>
													<td>
														<span class="label label-default">Inactive</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Dederick Mihail</td>
													<td>2012/06/01</td>
													<td>Admin</td>
													<td>
														<span class="label label-default">Inactive</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 
														</a>
													</td>
												</tr>
												<tr>
													<td>Hipólito András</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Fricis Arieh</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Scottie Maximilian</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Bao Gaspar</td>
													<td>2012/01/01</td>
													<td>Member</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Tullio Luka</td>
													<td>2012/02/01</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Felice Arseniy</td>
													<td>2012/02/01</td>
													<td>Admin</td>
													<td>
														<span class="label label-default">Inactive</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Finlay Alf</td>
													<td>2012/02/01</td>
													<td>Admin</td>
													<td>
														<span class="label label-default">Inactive</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Theophilus Nala</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Sullivan Robert</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Kristóf Filiberto</td>
													<td>2012/01/21</td>
													<td>Staff</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Kuzma Edvard</td>
													<td>2012/01/21</td>
													<td>Staff</td>
													<td>
														<span class="label label-success">Active</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Bünyamin Kasper</td>
													<td>2012/08/23</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Crofton Arran</td>
													<td>2012/08/23</td>
													<td>Staff</td>
													<td>
														<span class="label label-important">Banned</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Bernhard Shelah</td>
													<td>2012/06/01</td>
													<td>Admin</td>
													<td>
														<span class="label label-default">Inactive</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Grahame Miodrag</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Innokentiy Celio</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Kostandin Warinhari</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
												<tr>
													<td>Ajith Hristijan</td>
													<td>2012/03/01</td>
													<td>Member</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
													<td>
														<a class="btn btn-success" href="table.html#">
															<i class="icon-zoom-in "></i>                                            
														</a>
														<a class="btn btn-info" href="table.html#">
															<i class="icon-edit "></i>                                            
														</a>
														<a class="btn btn-danger" href="table.html#">
															<i class="icon-trash "></i> 

														</a>
													</td>
												</tr>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/col-->

							</div><!--/row-->

					
						<div class="row">

							<div class="col-lg-6">
								<div class="box calendar">	
									<div class="calendar-small"></div>
									<div class="calendar-details">
										<div class="day">MONDAY</div>
										<div class="date">MAY 22</div>
										<ul class="events">
											<li>MAY 22, 19:30 Meeting</li>
											<li>MAY 22, 19:30 Meeting</li>
										</ul>
										<div class="add-event">
											<input type="text" class="new event" placeholder="click here to add event">
										</div>		
									</div>
									<div class="clearfix"></div>
								</div>
							</div><!--/col-->

							<div class="col-lg-6">

						 
							</div><!--/col-->

						</div><!--/row-->
							<div class="row">

								<div class="col-xs-12">

									<div class="box">
									 	<div class="box-content">

											<div class="tab-content">


											  	<div class="tab-pane active" id="month">
											  		<div id="chart-month" style="height:250px;width:100%;"></div>

											  	</div>
											</div>

										</div>

									</div>

								</div><!--/col-->

							</div><!--/row-->

						<div class="row">		

							<div class="col-lg-4 col-md-4">

								<div class="box">
									<div class="box-header">
										<h2><i class="icon-check"></i>To Do List</h2>
										<div class="box-icon">
											<a href="index-2.html#" class="btn-setting"><i class="icon-wrench"></i></a>
											<a href="index-2.html#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
											<a href="index-2.html#" class="btn-close"><i class="icon-remove"></i></a>
										</div>
									</div>
									<div class="box-content">
										<div class="todo">
											<ul class="todo-list">
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">Windows Phone 8 App</span> 
													<span class="label label-important">today</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>					
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">New frontend layout</span>
													<span class="label label-important">today</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">Hire developers</span>
													<span class="label label-warning">tommorow</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">Windows Phone 8 App</span>
													<span class="label label-warning">tommorow</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">New frontend layout</span>
													<span class="label label-success">this week</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">Hire developers</span>
													<span class="label label-success">this week</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">New frontend layout</span>
													<span class="label label-info">this month</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
												<li>
													<span class="todo-actions">
														<a href="index-2.html#"><i class="icon-ok"></i></a>
													</span>
													<span class="desc">Hire developers</span>
													<span class="label label-info">this month</span>
													<a class="remove" href="index-2.html#"><i class="icon-remove"></i></a>	
												</li>
											</ul>
										</div>	
									</div>
								</div>

							</div><!--/col-->

							<div class="col-lg-8 col-md-8">
								<div class="box">
									<div class="box-header">
										<h2><i class="icon-list"></i>Recent</h2>
										<div class="box-icon">
											<a href="index-2.html#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
											<a href="index-2.html#" class="btn-close"><i class="icon-remove"></i></a>
										</div>
										<ul class="nav nav-tabs" id="recent">
										  	<li class="active"><a href="index-2.html#tickets">Tickets</a></li>
										  	<li><a href="index-2.html#users">Users</a></li>
										  	<li><a href="index-2.html#comments">Comments</a></li>
										</ul>
									</div>
									<div class="box-content no-padding">

										<div class="tab-content">
										  	<div class="tab-pane active" id="tickets">
												<table class="table bootstrap-datatable datatable small-font">
													<thead>
														<tr>
															<th>Status</th>
															<th>Date</th>
															<th>Description</th>
															<th>User</th>
															<th>Number</th>
														</tr>
													</thead>   
													<tbody>
														<tr>
															<td><span class="label label-success">Complete</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Server problem</td>
															<td>Ashley Tan</td>
															<td><b>[#199278]</b></td>
														</tr>
														<tr>
															<td><span class="label label-warning">Suspended</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Mobile App Problem</td>
															<td>Ann Kovalsky</td>
															<td><b>[#199277]</b></td>
														</tr>
														<tr>
															<td><span class="label label-info">In progress</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Paypal Issue</td>
															<td>Chris Dan</td>
															<td><b>[#199276]</b></td>
														</tr>
														<tr>
															<td><span class="label label-important">Rejected</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>IE7 Problem</td>
															<td>John Grand</td>
															<td><b>[#199275]</b></td>
														</tr>
														<tr>
															<td><span class="label label-success">Complete</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Mobile App Problem</td>
															<td>Agnes Young</td>
															<td><b>[#199274]</b></td>
														</tr>
														<tr>
															<td><span class="label label-warning">Suspended</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Mobile App Problem</td>
															<td>Patricia Doyle</td>
															<td><b>[#199273]</b></td>
														</tr>
														<tr>
															<td><span class="label label-info">In progress</span></td>
															<td>Jul 25, 2012 11:09</td>
															<td>Mobile App Problem</td>
															<td>Melanie Brown</td>
															<td><b>[#199272]</b></td>
														</tr>

													</tbody>
												</table>
										  	</div>
										  	<div class="tab-pane" id="users">
												<ul class="users-list">
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Lucas" src="/assets/img/avatar.jpg">
														</a>
														<div class="name">Łukasz Holeczek 
															<div class="dropdown pull-right">
																<a class="icon-cogs" data-toggle="dropdown" href="index-2.html#"></a>
																<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																	<li><a href="index-2.html#"><i class="icon-ok"></i> Accept</a></li>
																	<li><a href="index-2.html#"><i class="icon-remove"></i>Reject</a></li>
																	<li><a href="index-2.html#"><i class="icon-minus-sign-alt"></i>Block</a></li>
																	<li><a href="index-2.html#"><i class="icon-trash"></i>Delete</a></li>
																</ul>
															</div>
														</div>
														<span class="place"><i class="icon-map-marker"></i>Mikolow, POLAND</span>
														<span class="job"><i class="icon-briefcase"></i>Founder, BootstrapMaster.com</span>                                 
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Bill" src="/assets/img/avatar9.jpg">
														</a>
														<div class="name">Bill Cole
															<div class="dropdown pull-right">
																<a class="icon-cogs" data-toggle="dropdown" href="index-2.html#"></a>
																<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																	<li><a href="index-2.html#"><i class="icon-ok"></i> Accept</a></li>
																	<li><a href="index-2.html#"><i class="icon-remove"></i>Reject</a></li>
																	<li><a href="index-2.html#"><i class="icon-minus-sign-alt"></i>Block</a></li>
																	<li><a href="index-2.html#"><i class="icon-trash"></i>Delete</a></li>
																</ul>
															</div>
														</div>
														<span class="place"><i class="icon-map-marker"></i>London, ENGLAND</span>
														<span class="job"><i class="icon-briefcase"></i>CEO, Rainbow INC</span>                                 
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Jane" src="/assets/img/avatar5.jpg">
														</a>
														<div class="name">Jane Sanchez
															<div class="dropdown pull-right">
																<a class="icon-cogs" data-toggle="dropdown" href="index-2.html#"></a>
																<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																	<li><a href="index-2.html#"><i class="icon-ok"></i> Accept</a></li>
																	<li><a href="index-2.html#"><i class="icon-remove"></i>Reject</a></li>
																	<li><a href="index-2.html#"><i class="icon-minus-sign-alt"></i>Block</a></li>
																	<li><a href="index-2.html#"><i class="icon-trash"></i>Delete</a></li>
																</ul>
															</div>
														</div>
														<span class="place"><i class="icon-map-marker"></i>Berlin, GERMANY</span>
														<span class="job"><i class="icon-briefcase"></i>Head of Stars Group</span>                               
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Kate" src="/assets/img/avatar6.jpg">
														</a>
														<div class="name">Kate Presley
															<div class="dropdown pull-right">
																<a class="icon-cogs" data-toggle="dropdown" href="index-2.html#"></a>
																<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																	<li><a href="index-2.html#"><i class="icon-ok"></i> Accept</a></li>
																	<li><a href="index-2.html#"><i class="icon-remove"></i>Reject</a></li>
																	<li><a href="index-2.html#"><i class="icon-minus-sign-alt"></i>Block</a></li>
																	<li><a href="index-2.html#"><i class="icon-trash"></i>Delete</a></li>
																</ul>
															</div>
														</div>
														<span class="place"><i class="icon-map-marker"></i>Madrid, SPAIN</span>
														<span class="job"><i class="icon-briefcase"></i>Creative Director, IdeaLab LTD</span>                                  
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Lucas" src="/assets/img/avatar7.jpg">
														</a>
														<div class="name">Anna Holmes 
															<div class="dropdown pull-right">
																<a class="icon-cogs" data-toggle="dropdown" href="index-2.html#"></a>
																<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																	<li><a href="index-2.html#"><i class="icon-ok"></i> Accept</a></li>
																	<li><a href="index-2.html#"><i class="icon-remove"></i>Reject</a></li>
																	<li><a href="index-2.html#"><i class="icon-minus-sign-alt"></i>Block</a></li>
																	<li><a href="index-2.html#"><i class="icon-trash"></i>Delete</a></li>
																</ul>
															</div>
														</div>
														<span class="place"><i class="icon-map-marker"></i>Paris, FRANCE</span>
														<span class="job"><i class="icon-briefcase"></i>Co-Founder, ArtStudio</span>                                 
													</li>
												</ul>
										  	</div>
										  	<div class="tab-pane" id="comments">
										  		<ul class="comments-list">
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Lucas" src="/assets/img/avatar.jpg">
														</a>
														<div>
															<strong>Łukasz Holeczek</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
														</div>
														<div class="date">4 minutes ago</div>
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Bill" src="/assets/img/avatar9.jpg">
														</a>
														<div>
															<strong>Bill Cole</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
														</div>
														<div class="date">22 hours ago</div>	                                
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Jane" src="/assets/img/avatar5.jpg">
														</a>
														<div>
															<strong>Jane Sanchez</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
														</div>
														<div class="date">2 days ago</div>		                                  
													</li>
													<li>
														<a href="index-2.html#">
															<img class="avatar" alt="Kate" src="/assets/img/avatar6.jpg">
														</a>
														<div>
															<strong>Kate Presley</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
														</div>
														<div class="date">10 days ago</div>	                                  
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>	
							</div><!--/col-->

						</div><!--/row-->		

					 

					</div><!--/col-->

					<div class="col-md-3 visible-md visible-lg" id="feed">

						<h2>Activity Feed <a class="icon-repeat"></a></h2>

						<ul id="filter">
							<li><a class="green" href="index-2.html#" data-option-value="task">Tasks</a></li>
							<li><a class="red" href="index-2.html#" data-option-value="comment">Comments</a></li>
							<li><a class="blue" href="index-2.html#" data-option-value="message">Messages</a></li>
							<li><a href="index-2.html#" data-option-value="all">All</a></li>
						</ul>

						<ul id="timeline">

							<li class="task">
								<i class="icon-check-sign green"></i>
								<div class="title">New website - A/B Tests</div>
								<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								<span class="date">3 seconds ago</span>
								<span class="separator">•</span>
								<span class="name">Megan Abbott</span>
							</li>

							<li class="comment">
								<i class="icon-comments red"></i>
								<div class="title">Sales increase</div>
								<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
								<span class="date">15 minutes ago</span>
								<span class="separator">•</span>
								<span class="name">Ashley Tan</span>
							</li>

							<li class="comment">
								<i class="icon-comments red"></i>
								<div class="title">New Bootstrap Theme</div>
								<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
								<span class="date">Today</span>
								<span class="separator">•</span>
								<span class="name">Ashley Tan</span>
							</li>

							<li class="message">
								<i class="icon-edit-sign blue"></i>
								<div class="title">Job offer</div>
								<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
								<span class="date">Yesterday</span>
								<span class="separator">•</span>
								<span class="name">James Doe</span>
							</li>

							<li class="task">
								<i class="icon-check-sign green"></i>
								<div class="title">Custom Design</div>
								<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								<span class="date">5 days ago</span>
								<span class="separator">•</span>
								<span class="name">Megan Abbott</span>
							</li>		

						</ul>
						<a href="index-2.html#" id="load-more">•••</a>		


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
	<script src="/assets/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>