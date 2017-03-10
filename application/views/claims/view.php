<!DOCTYPE html>
<html lang="en">
<head>

    <title>Claim Summary :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>

</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
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

                    <? include('inc/sidenav.adjust.php'); ?>
                </div>
									<a href="page-profile.html#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->

			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">


			<ol class="breadcrumb">
			  	<li><a href="/">Dashboard</a></li>
				<li><a href="/index.php/claims">Claims</a></li>
			  	<li class="active">View</li>
			</ol>

			<div class="row profile">

				<div class="col-sm-3">

					<div class="row">
						<div class="col-xs-7 col-sm-12">

						</div>
						<div class="col-xs-5 col-sm-12">
                            <div class="control-group text-center">
                                    <a class="btn btn-primary" target="_blank" href="/index.php/pdf/claim/<? echo $this->uri->segment(3); ?>">
                                        Print Claim
                                    </a>
                            </div>
							<h3>Property Information<a style="float:right" href="<? echo base_url(); ?>index.php/property/<? echo ( !empty($prop) ? 'edit' : 'add' ); ?>/<? echo $clm->claim_id; ?><? echo ( $prop->property_id ? '/'.$prop->property_id : '' ); ?>"><? echo ( !empty($prop) ? 'Edit' : 'Add' ); ?></a></h3>
                            <?
                            if( !empty($prop) ) : ?>
							<ul class="profile-details">
								<li>
									<div><i class="icon-home"></i> address</div>
									<? echo $prop->property_name; ?><br />
                                    <? echo $prop->property_address_1; ?><br />
                                    <? echo ( $prop->property_address_2 ? $prop->property_address_2.'<br />' : '' ) ?>
                                    <? echo $prop->property_city; ?>, <? echo $prop->property_state; ?><br />
                                    <? echo $prop->property_zip; ?>
								</li>
							</ul>
                            <? endif; ?>
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

                            <div class="control-group text-center">
                                <form class="pull-center" action="<? echo base_url(); ?>index.php/claims/delete/" id="delete<? echo $this->uri->segment(3); ?>" method="post" style="display:inline">
                                    <input type="hidden" name="claim_id" value="<? echo $this->uri->segment(3); ?>">
                                    <a class="btn btn-danger" href="javascript: void(0);"
                                       onclick="javascript: delete<? echo $this->uri->segment(3); ?>.submit();">
                                        Delete Claim
                                    </a>
                                </form>
                            </div>


						</div>

					</div><!--/row-->

				</div><!--/col-->

				<div class="col-sm-9">

					<ul class="nav nav-tabs" id="myTab">
					  	<li class="active"><a href="#claims">Claims</a></li>
					  	<li><a href="#tasks">Tasks</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="claims">

                            <div class="row">

                                <div class="col-sm-7">
                                    <div class="text-center">
                                        <a class="btn btn-danger" href="javascript: void(0);"
                                       onclick="javascript: window.location='/index.php/claims/estimations/<? echo $this->uri->segment(3); ?>';">
                                        Estimations
                                    </a>
                                    <a class="btn btn-danger" href="javascript: void(0);"
                                       onclick="javascript: window.location='/index.php/claims/payments/<? echo $this->uri->segment(3); ?>';">
                                        Payments
                                    </a>
                                    </div>
                                    <h2>Policy Information</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p></p><p></p>
                                    <h2>Languages</h2>
                                    <div class="row">
                                        <div class="col-xs-12">
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
                                        </div><!--/col-->
                                    </div><!--/row-->

                                </div><!--/col-->
                                <style>.fc-header-right{ display: none; }</style>
                                <div class="col-sm-5">

                                    <div id="calendar"></div>


                                    <h2>Other Skills</h2>
                                    <canvas id="canvas" class="chartjs" height="450" width="450"></canvas>

                                </div><!--/col-->
                            </div><!--/row-->



						</div>

					  	<div class="tab-pane" id="tasks">

								<? include('inc/right.activity.php'); ?>

                        </div>
								<!-- end: Content -->

									</div><!--/row-->

					</div>

				</div><!--/col-->

			</div><!--/profile-->



			</div>
			<!-- end: Content -->

				</div><!--/row-->


				<div class="col-sm-1">

				</div>
	</div><!--/container-->

	<div class="clearfix"></div>


        <? include('inc/footer.php');?>
        <script src="<? echo base_url(); ?>assets/js/pages/calendar_claim.js"></script>
        <script language="javascript" type="text/javascript" src="/assets/js/excanvas.min.js"></script>

        <script src="/assets/js/Chart.min.js"></script>

        <!-- inline scripts related to this page -->
        <script src="/assets/js/pages/page-profile.js"></script>
        <script>
            /* ---------- Tabs ---------- */
            $('#mainCharts a:last').tab('show');
            $('#mainCharts a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

            $('#recent a:first').tab('show');
            $('#recent a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
            $('#new_folder_add').click(function (e) {
                $('#new_folder').toggle();
            })
            $('#new_folder_close').click(function (e) {
                $('#new_folder').toggle();
            })
            $('a[data-toggle="tab"]').click(function (e) {
                $.ajax({
                    type: "GET",
                    url: "/index.php/folders/ajax/"+$(this).html(),
                    error: function(data){
                        alert("There was a problem");
                    },
                    success: function(data){
                        $('#folder_list').html(data);
                    }
                })

            })
        </script>
</body>
</html>