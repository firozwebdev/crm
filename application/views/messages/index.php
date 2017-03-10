<!DOCTYPE html>
<html lang="en">
<head>
	
    <? Page::title('Messages'); ?>
    <? Page::header(); ?>
		
</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="icon-reorder"></i></a>		
			<a class="navbar-brand col-md-2 col-sm-1 col-xs-2" href="index-2.html"><span>Genius</span></a>
			<div id="search" class="col-sm-5 col-xs-8 col-lg-3">
				<select>
					<option>everything</option>
					<option>messages</option>
					<option>comments</option>
					<option>users</option>
			  	</select>
				<input type="text" placeholder="search" />
				<i class="icon-search"></i>
			</div>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="page-inbox.html#">
							<i class="icon-warning-sign"></i>
							<span class="number">11</span>
						</a>
						<ul class="dropdown-menu notifications">
							<li class="dropdown-menu-title">
								<span>You have 11 notifications</span>
							</li>	
                        	<li>
                                <a href="page-inbox.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">1 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">7 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">8 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">16 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">36 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
									<span class="message">2 items sold</span>
									<span class="time">1 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="page-inbox.html#">
									<span class="icon red"><i class="icon-user"></i></span>
									<span class="message">User deleted account</span>
									<span class="time">2 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="page-inbox.html#">
									<span class="icon red"><i class="icon-shopping-cart"></i></span>
									<span class="message">Transaction was canceled</span>
									<span class="time">6 hour</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                        		<a>View all notifications</a>
							</li>	
						</ul>
					</li>
					<!-- start: Notifications Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="page-inbox.html#">
							<i class="icon-tasks"></i>
							<span class="number">17</span>
						</a>
						<ul class="dropdown-menu tasks">
							<li>
								<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                        	</li>
							<li>
                                <a href="page-inbox.html#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressBlue">80</div> 
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressYellow">47</div> 
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressRed">32</div> 
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressGreen">63</div> 
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressPink">80</div> 
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all tasks</a>
							</li>	
						</ul>
					</li>
					<!-- end: Notifications Dropdown -->
					<!-- start: Message Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="page-inbox.html#">
							<i class="icon-envelope"></i>
							<span class="number">9</span>
						</a>
						<ul class="dropdown-menu messages">
							<li>
								<span class="dropdown-menu-title">You have 9 messages</span>
							</li>	
                        	<li>
                                <a href="page-inbox.html#">
									<span class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Łukasz Holeczek
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="avatar"><img src="assets/img/avatar2.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Megan Abott
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="avatar"><img src="assets/img/avatar3.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Kate Ross
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                                <a href="page-inbox.html#">
									<span class="avatar"><img src="assets/img/avatar4.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Julie Blank
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="page-inbox.html#">
									<span class="avatar"><img src="assets/img/avatar5.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Jane Sanders
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all messages</a>
							</li>	
						</ul>
					</li>
					<!-- end: Message Dropdown -->
					<li>
						<a class="btn" href="page-inbox.html#">
							<i class="icon-wrench"></i>
						</a>
					</li>
					<!-- start: User Dropdown -->
					<li class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="page-inbox.html#">
							<div class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></div>
							<div class="user">
								<span class="hello">Welcome!</span>
								<span class="name">Łukasz Holeczek</span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li><a href="page-inbox.html#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="page-inbox.html#"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="page-inbox.html#"><i class="icon-envelope"></i> Messages</a></li>
							<li><a href="page-login.html"><i class="icon-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
			
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1 minified">
								
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<ul class="nav main-menu">
						<li><a href="index-2.html"><i class="icon-bar-chart"></i><span class="hidden-sm text"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-eye-open"></i><span class="hidden-sm text"> UI Features</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="ui-sliders-progress.html"><i class="icon-eye-open"></i><span class="hidden-sm text"> Sliders & Progress</span></a></li>
								<li><a class="submenu" href="ui-nestable-list.html"><i class="icon-eye-open"></i><span class="hidden-sm text"> Nestable Lists</span></a></li>
								<li><a class="submenu" href="ui-elements.html"><i class="icon-eye-open"></i><span class="hidden-sm text"> Elements</span></a></li>
							</ul>
							</li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-sm text"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-folder-close-alt"></i><span class="hidden-sm text"> Example Pages</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="page-inbox.html"><i class="icon-envelope"></i><span class="hidden-sm text"> Inbox</span></a></li>
								<li><a class="submenu" href="page-invoice.html"><i class="icon-file-text-alt"></i><span class="hidden-sm text"> Invoice</span></a></li>
								<li><a class="submenu" href="page-todo.html"><i class="icon-tasks"></i><span class="hidden-sm text"> ToDo & Timeline</span></a></li>
								<li><a class="submenu" href="page-profile.html"><i class="icon-male"></i><span class="hidden-sm text"> Profile</span></a></li>
								<li><a class="submenu" href="page-pricing-tables.html"><i class="icon-table"></i><span class="hidden-sm text"> Pricing Tables</span></a></li>
								<li><a class="submenu" href="page-404.html"><i class="icon-unlink"></i><span class="hidden-sm text"> 404</span></a></li>
								<li><a class="submenu" href="page-500.html"><i class="icon-unlink"></i><span class="hidden-sm text"> 500</span></a></li>
								<li><a class="submenu" href="page-lockscreen.html"><i class="icon-lock"></i><span class="hidden-sm text"> LockScreen</span></a></li>
								<li><a class="submenu" href="page-lockscreen2.html"><i class="icon-lock"></i><span class="hidden-sm text"> LockScreen2</span></a></li>
								<li><a class="submenu" href="page-login.html"><i class="icon-key"></i><span class="hidden-sm text"> Login Page</span></a></li>
								<li><a class="submenu" href="page-register.html"><i class="icon-signin"></i><span class="hidden-sm text"> Register Page</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-edit"></i><span class="hidden-sm text"> Forms</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="form-elements.html"><i class="icon-edit"></i><span class="hidden-sm text"> Form elements</span></a></li>
								<li><a class="submenu" href="form-wizard.html"><i class="icon-edit"></i><span class="hidden-sm text"> Wizard</span></a></li>
								<li><a class="submenu" href="form-dropzone.html"><i class="icon-edit"></i><span class="hidden-sm text"> Dropzone Upload</span></a></li>
								<li><a class="submenu" href="form-x-editable.html"><i class="icon-edit"></i><span class="hidden-sm text"> X-editable</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-list-alt"></i><span class="hidden-sm text"> Charts</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="charts-flot.html"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Flot Charts</span></a></li>
								<li><a class="submenu" href="charts-xcharts.html"><i class="icon-chevron-right"></i><span class="hidden-sm text"> xCharts</span></a></li>
								<li><a class="submenu" href="charts-others.html"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Other</span></a></li>
							</ul>
						
						</li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-sm text"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-sm text"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-sm text"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-sm text"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-sm text"> File Manager</span></a></li>
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-star"></i><span class="hidden-sm text"> Icons</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="icons-halflings.html"><i class="icon-star"></i><span class="hidden-sm text"> Halflings</span></a></li>
								<li><a class="submenu" href="icons-glyphicons-pro.html"><i class="icon-star"></i><span class="hidden-sm text"> Glyphicons PRO</span></a></li>
								<li><a class="submenu" href="icons-font-awesome.html"><i class="icon-star"></i><span class="hidden-sm text"> Font Awesome</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="page-inbox.html#"><i class="icon-folder-open"></i><span class="hidden-sm text"> 4 Level Menu</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a href="2nd-level.html"><i class="icon-folder-close"></i><span class="hidden-sm text"> 2nd Level</span></a></li>
								<li>
									<a class="dropmenu" href="page-inbox.html#"><i class="icon-folder-open"></i><span class="hidden-sm text"> 2nd Level</span> <span class="chevron closed"></span></a>
									<ul>
										<li><a href="3rd-level.html"><i class="icon-folder-close"></i><span class="hidden-sm text"> 3rd Level</span></a></li>
										<li>
											<a class="dropmenu" href="page-inbox.html#"><i class="icon-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level.html"><i class="icon-folder-close"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a class="dropmenu" href="page-inbox.html#"><i class="icon-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level2.html"><i class="icon-folder-close"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
									</ul>	
								</li>
							</ul>
						</li>
					</ul>
				</div>
									<a href="page-inbox.html#" id="main-menu-min" class="minified visible-md visible-lg"><i class="icon-double-angle-right"></i></a>
							</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 sidebar-minified">
			
			
			<div class="row inbox">
				
				<div class="col-sm-2 inbox-menu">
					<a class="btn btn-danger">New Email</a>
					
					<ul>
						<li>
							<a href="page-inbox.html#"><i class="icon-inbox"></i> Inbox <span class="label label-important">4</span></a>
						</li>
						<li>
							<a href="page-inbox.html#"><i class="icon-star"></i> Stared</a>
						</li>
						<li>
							<a href="page-inbox.html#"><i class="icon-rocket"></i> Sent</a>
						</li>
						<li>
							<a href="page-inbox.html#"><i class="icon-trash"></i> Trash</a>
						</li>
						<li>
							<a href="page-inbox.html#"><i class="icon-bookmark"></i> Important<span class="label label-info">5</span></a>
						</li>
						<li class="title">
							Labels
						</li>
						<li>
							<a href="page-inbox.html#">Home <span class="label label-important"></span></a>
						</li>
						<li>
							<a href="page-inbox.html#">Job <span class="label label-info"></span></a>
						</li>
						<li>
							<a href="page-inbox.html#">Clients <span class="label label-success"></span></a>
						</li>
						<li>
							<a href="page-inbox.html#">News <span class="label label-warning"></span></a>
						</li>
					</ul>		
					
				</div>	
				
				<div class="col-sm-4 messages">
					
					<div class="buttons">
					
						<span class="btn-group">
						  	<button class="btn"><span class="icon-envelope"></span></button>
						  	<button class="btn"><span class="icon-star"></span></button>
						  	<button class="btn"><span class="icon-star-empty"></span></button>
							<button class="btn"><span class="icon-bookmark-empty"></span></button>
						</span>
					
						<span class="btn-group">
						  	<button class="btn"><span class="icon-mail-reply"></span></button>
						  	<button class="btn"><span class="icon-mail-reply-all"></span></button>
						  	<button class="btn"><span class="icon-mail-forward"></span></button>
						</span>
						
						<button class="btn"><span class="icon-trash"></span></button>
						
						<span class="btn-group">
							<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-tags"></span><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="page-inbox.html#">add label <span class="label label-important"> Home</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-info">Job</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-success">Clients</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-warning">News</span></a></li>
							</ul>
						</span>
												
						<span class="btn-group pull-right">
						  	<button class="btn"><span class="icon-chevron-left"></span></button>
						  	<button class="btn"><span class="icon-chevron-right"></span></button>
						</span>
					
					</div>
										
					<ul class="messages-list">
						
						<li class="unread">
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date"><span class="icon-paper-clip"></span> Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li class="active">
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date"><span class="icon-paper-clip"></span> Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li>
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li class="unread">
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li class="unread">
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li>
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li class="unread">
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li>
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>		
						</li>
						
						<li>
							<div class="header">
								<span class="action"><i class="icon-check-empty"></i></span> 
								<span class="from">Lukasz Holeczek</span>
								<span class="date">Today, 3:47 PM</span>
							</div>
							<div class="title">
								<span class="action"><i class="icon-star-empty"></i></span>
								Lorem ipsum dolor sit amet.
							</div>	
							<div class="description">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div>
									
						</li>
							
					</ul>
						
				</div><!--/col-->
				
				<div class="col-sm-4 message">
					
					<div class="buttons">
					
						<span class="btn-group">
						  	<button class="btn"><span class="icon-star"></span></button>
						  	<button class="btn"><span class="icon-star-empty"></span></button>
							<button class="btn"><span class="icon-bookmark-empty"></span></button>
						</span>
					
						<span class="btn-group">
						  	<button class="btn"><span class="icon-mail-reply"></span></button>
						  	<button class="btn"><span class="icon-mail-reply-all"></span></button>
						  	<button class="btn"><span class="icon-mail-forward"></span></button>
						</span>
						
						<button class="btn"><span class="icon-trash"></span></button>
						
						<span class="btn-group">
							<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-tags"></span><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="page-inbox.html#">add label <span class="label label-important"> Home</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-info">Job</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-success">Clients</span></a></li>
								<li><a href="page-inbox.html#">add label <span class="label label-warning">News</span></a></li>
							</ul>
						</span>
					
					</div>
					
					<div class="message-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
					<div class="header">
						
						<img class="avatar" src="assets/img/avatar.jpg">
						
						
						<div class="from">
							<span>Lukasz Holeczek</span>
							lukasz@holeczek.pl
						</div>
						<div class="date"><span class="icon-paper-clip"></span> Today, <b>3:47 PM</b></div>

						<div class="menu"></div>

					</div>

					<div class="content">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</blockquote>	
					</div>

					<div class="attachments">
						<ul>
							<li>
								<span class="label label-important">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
								<span class="quickMenu">
									<a href="page-inbox.html#" class="glyphicons search"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons share"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons cloud-download"><i></i></a>
								</span>
							</li>
							<li>
								<span class="label label-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
								<span class="quickMenu">
									<a href="page-inbox.html#" class="glyphicons search"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons share"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons cloud-download"><i></i></a>
								</span>
							</li>
							<li>
								<span class="label label-success">xls</span> <b>spreadsheet.xls</b> <i>(984KB)</i>
								<span class="quickMenu">
									<a href="page-inbox.html#" class="glyphicons search"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons share"><i></i></a>
									<a href="page-inbox.html#" class="glyphicons cloud-download"><i></i></a>
								</span>
							</li>
						</ul>		
					</div>

					<form class="replyForm"method="post" action="#">

						<fieldset>
							<textarea tabindex="3" class="input-lg col-xs-12" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
							
							<br/><br/>

							<div class="actions">

								<button tabindex="3" type="submit" class="btn btn-success">Send message</button>

							</div>

						</fieldset>

					</form>	
					
				</div><!--/col-->
				
				<div class="col-sm-2 contacts">
					
					<a href="page-inbox.html#" class="btn btn-success"> + Contact</a>
					
					<ul>
						<li><span class="label label-important"></span> Adam Alister</li>
						<li><span class="label label-default"></span> Alphonse Ivo</li>
						<li><span class="label label-success"></span> Anton Phunihel</li>
						<li><span class="label label-success"></span> Ajith Hristijan</li>
						<li><span class="label label-warning"></span> Bao Gaspar</li>
						<li><span class="label label-default"></span> Bernhard Shelah</li>
						<li><span class="label label-success"></span> Bünyamin Kasper</li>
						<li><span class="label label-important"></span> Carlito Roffe</li>
						<li><span class="label label-important"></span> Chidubem Gottlob</li>
						<li><span class="label label-warning"></span> Dederick Mihail</li>
						<li><span class="label label-success"></span> Felice Arseniy</li>
						<li><span class="label label-default"></span> Grahame Miodrag</li>
						<li><span class="label label-default"></span> Hristofor Sergio</li>
						<li><span class="label label-important"></span> Scottie Maximilian</li>
						<li><span class="label label-important"></span> Sullivan Robert</li>
						<li><span class="label label-important"></span> Thancmar Theophanes</li>
						<li><span class="label label-warning"></span> Tullio Luka</li>
						<li><span class="label label-success"></span> Walerian Khwaja</li>
					</ul>	
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

			<script src="assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.10.2.min.js"></script>
	
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
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/page-inbox.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>