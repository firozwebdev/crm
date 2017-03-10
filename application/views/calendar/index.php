<!DOCTYPE html>
<html lang="en">
<head>

    <title>Calendar :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>
		<style>
            .log_outer .fc-event-time{ display: none; }
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
									<a href="calendar.html#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">
			
			
			<div class="row">
				<div class="col-lg-12">
				  	<div class="box">
                        <div class="box-header">
                            <h2></h2>
                            <div class="box-icon">
                                <i class="icon-folder-close"></i>
                            </div>
                        </div>
                        <? echo $this->session->flashdata('msg'); ?>
					  <div class="box-content">
							<div class="row"> 
								<div class="col-lg-12">
									<div id="calendar" class="col-lg-12"></div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div><!--/row-->

		
					
			</div>
			<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->

	<div class="clearfix"></div>


    <? include( 'inc/footer.php' ); ?>
<!--<script>

$(document).ready(function() {
                  
                  $('#calendar').fullCalendar({
                          header: {
                          left: 'prev,next today',
                          center: 'title',
                          right: 'month,agendaWeek,agendaDay'
                          },
                          defaultDate: '2014-06-12',
                          defaultView: 'month',
                          editable: true,
                          events: [
                          {
                          title: 'All Day Event',
                          start: '2014-06-01'
                          },
                          {
                          title: 'Long Event',
                          start: '2014-06-07',
                          end: '2014-06-10'
                          },
                          {
                          id: 999,
                          title: 'Repeating Event',
                          start: '2014-06-09T16:00:00'
                          },
                          {
                          id: 999,
                          title: 'Repeating Event',
                          start: '2014-06-16T16:00:00'
                          },
                          {
                          title: 'Meeting',
                          start: '2014-06-12T10:30:00',
                          end: '2014-06-12T12:30:00'
                          },
                          {
                          title: 'Lunch',
                          start: '2014-06-12T12:00:00'
                          },
                          {
                          title: 'Birthday Party',
                          start: '2014-06-13T07:00:00'
                          },
                          {
                          title: 'Click for Google',
                          url: 'http://google.com/',
                          start: '2014-06-28'
                          }
                          ]
                          });
                  
                  });


</script>-->
	<!-- inline scripts related to this page -->
	
	<!-- end: JavaScript-->

        <!--full calendar my code-->

        <script>
            $(document).ready(function() {

                var calendar = $('#calendar').fullCalendar({
                    header:{
						left:'prev,next today',
						center:'title',
						right:'month,agendaWeek,agendaDay'
					},
                    events: {
                        url: '<?php echo base_url(); ?>index.php/calendar/events_json',
                        type: 'POST', // Send post data
                        error: function() {
                            alert('There was an error while fetching events.');
                        }
                    }
                });
            });
        </script>


	
</body>
</html>