<!DOCTYPE html>
<html lang="en">
<head>

    <title>Attachment :: SClaim</title>
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

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
							<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
							<li><a href="<? echo base_url(); ?>index.php/attachments">Attachments</a></li>
                            <li class="active">View</li>
						</ol>
						<div class="box">
							<div class="box-header">

							</div>
							<div class="box-content">

		 								<div class="row">
											<div class="col-lg-12">
												<form class="form-horizontal" action="<? echo base_url(); ?>index.php/attachment/titled" method="post">



												<!-- Text input-->
												<div class="control-group">
                                                    <label class="control-label" for="select_title">Title</label>
												  <div class="controls">
												    <input id="title" name="title[]" placeholder="" class="input-xlarge" type="text">

												  </div>
												</div>


												<!-- Button (Double) -->
												<div class="control-group">
												  <label class="control-label" for="submit"></label>
												  <div class="controls">
												    <button id="submit" name="submit" class="btn btn-success">Save Log</button>
												    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
												  </div>
												</div>

												</form>


											</div><!--/col-->

										</div><!--/row-->

							</div>
						</div>
					</div><!--/col-->

					<div class="col-md-3 visible-md visible-lg" id="feed">

					</div><!--/col-->

				</div><!--/row-->







				</div>
				<!-- end: Content -->

				</div><!--/row-->

	</div><!--/container-->


	<div class="clearfix"></div>


        <? include( 'inc/footer.php' ); ?>

        <!-- inline scripts related to this page -->
        <script src="<? echo base_url(); ?>assets/js/pages/form-elements.js"></script>

        <!-- end: JavaScript-->

	<!-- end: JavaScript-->

</body>
</html>