<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Page
{
	
	public function title($txt)
    {
        echo '<title>' . $txt . '</title>';
    }
	
    public function col_links()
    { ?>
    
        <ul class="nav main-menu">
			<li><a href="/index.php"><i class="icon-bar-chart"></i><span class="hidden-sm text"> Dashboard</span></a></li>	
			<li>
				<a class="dropmenu" href="/index.php/reports"><i class="icon-list-alt"></i><span class="hidden-sm text"> Claims</span> <span class="chevron closed"></span></a>
				<ul>
					<li><a class="submenu" href="/index.php/claims/add"><i class="icon-chevron-right"></i><span class="hidden-sm text"> New</span></a></li>
					<li><a class="submenu" href="/index.php/claims"><i class="icon-chevron-right"></i><span class="hidden-sm text"> List</span></a></li> 	 
				</ul>

			</li> 
			<li>
				<a class="dropmenu" href="/index.php/appointments"><i class="icon-list-alt"></i><span class="hidden-sm text"> Appointments</span> <span class="chevron closed"></span></a>
				<ul>
					<li><a class="submenu" href="/index.php/appointments/add"><i class="icon-plus"></i><span class="hidden-sm text"> Add Event</span></a></li>
                    <li>
                        <a href="/index.php/calendar/"><i class="icon-calendar"></i><span class="hidden-sm text"> Calendar</span></a>
					<li><a class="submenu" href="/index.php/appointments/"><i class="icon-search"></i><span class="hidden-sm text"> Overview</span></a></li>
                </ul>
			<li>
				<a class="dropmenu" href="/index.php/reports"><i class="icon-list-alt"></i><span class="hidden-sm text"> Log</span> <span class="chevron closed"></span></a>
				<ul>
					<li><a class="submenu" href="/index.php/logs/create"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Create</span></a></li>
					<li><a class="submenu" href="/index.php/logs/"><i class="icon-chevron-right"></i><span class="hidden-sm text"> List</span></a></li> 
				</ul>

			</li>
			<li>
				<a class="dropmenu" href="/index.php/reports"><i class="icon-list-alt"></i><span class="hidden-sm text"> Reports</span> <span class="chevron closed"></span></a>
				<ul>
					<li><a class="submenu" href="/index.php/reports/property"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Property</span></a></li>
					<li><a class="submenu" href="/index.php/reports/activity"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Activity</span></a></li>
					<li><a class="submenu" href="/index.php/reports/summary"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Summary</span></a></li>
				</ul>
		
			</li>
			<li>
                <a href="/index.php/insurers"><i class="icon-calendar"></i><span class="hidden-sm text"> Insurers</span></a>
            </li>
			<li>
                <a href="/index.php/contacts"><i class="icon-calendar"></i><span class="hidden-sm text"> Contacts</span></a>
            </li>
			<li>
                <a href="/index.php/map"><i class="icon-calendar"></i><span class="hidden-sm text"> Map</span></a>
            </li> 
			<li>
                <a class="dropmenu" href="/index.php/admin"><i class="icon-calendar"></i><span class="hidden-sm text"> Administration</span><span class="chevron closed"></span></a>
            <ul>
                    <li><a class="submenu" href="/index.php/appointments/add"><i class="icon-plus"></i><span class="hidden-sm text"> Users</span></a></li>
            </ul>
            </li>
		 
		</ul> <?php        
    }

	public function header()
	{ ?>
		
		<!-- start: Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Genius Dashboard - Bootstrap Admin Template.">
		<meta name="author" content="Łukasz Holeczek">
		<meta name="keyword" content="Genius, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<!-- end: Meta -->
		
		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- end: Mobile Specific -->

		<!-- start: CSS -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/style.min.css" rel="stylesheet">
		<link href="/assets/css/retina.min.css" rel="stylesheet">
		<link href="/assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
		
		
		<link rel="stylesheet" type="text/css" href="/assets/js/box/jquery.fancybox.css?v=2.1.5" media="screen" /> 
		<link rel="stylesheet" type="text/css" href="/assets/js/box/helpers/jquery.fancybox-buttons.css?v=1.0.5" /> 
		<link rel="stylesheet" type="text/css" href="/assets/js/box/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		<style>
			@import url('http://fonts.googleapis.com/css?family=Paytone+One');
			.webfont1{
				font-family: 'Paytone One', sans-serif;
				text-transform: none;
			}
			.webfont1 a{
				color: white;
				text-decoration: none;
			}
			.webfont1 a:hover{
				color: #36A9E1;
				text-decoration: none;
			}
		</style>
		<!-- end: CSS -->

		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>

		  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="/assets/js/respond.min.js"></script>

		<![endif]-->

		<!-- start: Favicon and Touch Icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="/assets/ico/favicon.png">
		<!-- end: Favicon and Touch Icons --><?
	}
	
	public function footer()
	{ ?>
		
		<!-- start: JavaScript-->
		<!--[if !IE]>-->

		<script src="/assets/js/jquery-2.0.3.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>

		<script src="/assets/js/jquery-1.10.2.min.js"></script>

		<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
		window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>

		<script type="text/javascript">
		window.jQuery || document.write("<script src='/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>

		<![endif]-->
		<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>

		<!-- page scripts -->
		<script src="/assets/js/jquery.icheck.min.js"></script>

		<!-- theme scripts -->
		<script src="/assets/js/custom.min.js"></script>
		<script src="/assets/js/core.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="/assets/js/pages/login.js"></script>

		<script type="text/javascript" src="/assets/js/box/jquery.mousewheel-3.0.6.pack.js"></script> 
		<script type="text/javascript" src="/assets/js/box/jquery.fancybox.js?v=2.1.5"></script>
		<script type="text/javascript" src="/assets/js/box/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script> 
		<script type="text/javascript" src="/assets/js/box/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script> 
		<script type="text/javascript" src="/assets/js/box/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		
		<script>
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox({
				fitToView	: true,
				width		: '400',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
		</script>
		<!-- end: JavaScript--><?        
	}
    function top_links()
    { ?>
      	 
			<div id="search" class="col-sm-5 col-xs-8 col-lg-3">
			 
				<input type="text" placeholder="search" />
				<i class="icon-search"></i>
			</div>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<!-- start: User Dropdown -->
					<li class="dropdown" style="width:160px">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="/index.php#"> 
							<div class="user">
								<span class="hello">@username</span>
								<span class="name">active: </span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/index.php#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="/index.php#"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="/index.php/account/logout"><i class="icon-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div><? 
            }


}
?>
