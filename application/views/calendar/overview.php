<!DOCTYPE html>
<html lang="en">
<head>

    <title>Timeline :: SClaim</title>
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
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">
			
			
			<div class="row page-todo">
				
				<div class="col-sm-7 tasks">
					
					<div class="task-list">
						<h1>Tasks</h1>

                        <? foreach( $this->calendar_model->tasks() as $t ) : ?>
						<div class="priority high"><span>high priority</span></div>

						<div class="task high">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
                        <? endforeach; ?>
						<div class="task high">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div>1 day</div>
							</div>
						</div>
						<div class="task high">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task high last">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div>1 day</div>
							</div>
						</div>

						<div class="priority medium"><span>medium priority</span></div>

						<div class="task medium">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task medium last">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>

						<div class="priority low"><span>low priority</span></div>

						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>
						<div class="task low">
							<div class="desc">
								<div class="title">Lorem Ipsum</div>
								<div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
							</div>
							<div class="time">
								<div class="date">Jun 1, 2012</div>
								<div> 1 day</div>
							</div>
						</div>

						<div class="clearfix"></div>		

					</div>		
					
				</div><!--/col-->
				
				<div class="col-sm-5">
					
					<div class="graph">

                        <h1>Events</h1>

						<div class="timeline">
                            <?
                            $l=0;
                            foreach( $this->calendar_model->events() as $t ) :  ?>

                            <div class="timeslot <? echo ( $l%2 ? 'alt' : '' ); ?>">

                                <div class="task">
						    		<span>
                                        <span class="type">d<? echo $t->title; ?></span>
										<span class="details">
											Lukasz Holeczek at creativeLabs HQ
										</span>
										<span>
											remaining time
											<span class="remaining">
												3h 38m 15s
											</span>	
										</span> 
									</span>
									<div class="arrow"></div>
								</div>							
								<div class="icon">
									<i class="icon-map-marker"></i>
								</div>
								<div class="time">
									3:43 PM
								</div>	

						    </div>

							<div class="clearfix"></div>

                            <?
                            ++$l;
                            endforeach; ?>

						</div>

					</div>
				
				</div><!--/col-->	
						
			</div>
			
       
					
			</div>
			<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->
	

	
	<div class="clearfix"></div>

    <? include( 'inc/footer.php' ); ?>

	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/page-todo.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>