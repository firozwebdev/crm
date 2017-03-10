<!DOCTYPE html>
<html lang="en">
<head>

    <title>Lists :: SClaim</title>
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
									<a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->

				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
						  	<li class="active"><a href="<? echo base_url(); ?>index.php/">Administration</a></li>



						</ol>

							<div class="row">
								<div class="col-lg-12">
									<div class="box">
										<div class="box"><div class="box-header">
											<h2>Users</h2>
											<div class="box-icon">
												<a href="<? echo base_url(); ?>index.php/users/add"><i class="icon-plus"></i></a>
											</div>
										</div>
										<div class="box-content">
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>List Name</th>
													  <th width="16%" class="text-center">Actions</th>
												  </tr>
											  </thead>
											  <tbody>
											<?
											foreach( $rows as $c ) :
											?>
												<tr>
													<td><a href="<? echo base_url(); ?>index.php/users/profile"><? echo ucfirst($c->list_name); ?></a></td>

													<td class="text-center">
														<? $cid=$c->list_id; ?>
														<a class="btn btn-info" href="<? echo base_url(); ?>index.php/admin/values/<? echo $c->list_id; ?>">
															<i class="icon-edit "></i>
														</a>
														<a class="btn btn-danger" href="<? echo base_url(); ?>index.php/admin/values/<? echo $c->list_id; ?>">
															<i class="icon-trash "></i>
														</a>
													</td>
												</tr>
											 <? endforeach;  for( $c=count($rows);$c<12;++$c) : ?>
                                                <tr>
                                                    <td>
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

							</div><!--/row-->





					</div><!--/col-->


				</div><!--/row-->


				</div>
</div>
                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <? include('inc/right.blank.php'); ?>

                </div>
				<!-- end: Content -->

				</div><!--/row-->

	</div><!--/container-->

	<div class="clearfix"></div>


    <? include('inc/footer.php'); ?>

</body>
</html>