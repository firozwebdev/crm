<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Map :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>
    <?php echo $map['js']; ?>
		
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
						  	<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
						  	<li class="active" >Map</li>
						</ol>
 
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo $map['html']; ?>
                            </div><!--/col-->

                        </div><!--/row-->

					</div><!--/col-->
		 
				</div><!--/row-->

		    </div>
				
		</div><!--/row-->
		
	</div><!--/container-->

	<div class="clearfix"></div>

    <? include('inc/footer.php'); ?>
	
	<!-- end: JavaScript-->
	
</body>
</html>