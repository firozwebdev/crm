<!DOCTYPE html>
<html lang="en">
<head>

    <title>Folders :: SClaim</title>
    <? include('inc/header.php');?>
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
                <? include('inc/sidenav.adjust.php');?>
				</div>
									<a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
							</div>
			<!-- end: Main Menu -->
						
				<!-- start: Content -->
				<div id="content" class="col-lg-10 col-sm-11 ">


				<div class="row">

					<div class="col-sm-12 col-md-9">
						<ol class="breadcrumb">
						  	<li><a href="/index.php/">Dashboard</a></li> 
						  	<li class="active" >Claims</li>
                        </ol>

                        <div class="box">
                            <div class="box-header">
                                <h2>Number</h2>
                                <div class="box-icon">
                                    <a href="<? echo base_url(); ?>index.php/claims/add/<? echo $this->uri->segment(3); ?>"><i class="icon-plus"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div style="float: right; margin-bottom: 10px">
                                    <button id="download" class="btn btn-primary" onclick="window.location='<? echo base_url(); ?>index.php/claims/add/<? echo $this->uri->segment(3); ?>'">Add Claim</button>
                                </div>
                                <div class="clearfix"></div>

                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th width="20%" style="text-align:center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <? $flq = $this->db->query('SELECT * FROM '.dbpre('claim').' WHERE claim_folder_id="'.mysql_escape_string( $this->uri->segment(3)).'"');

                                    foreach( $flq->result() as $fl ) : ?>
                                        <tr>
                                            <td><? echo $fl->claim_number; ?></td>

                                            <td align="center">
                                                <a class="btn btn-success" href="/index.php/claims/view/<? echo $fl->claim_id; ?>">
                                                    <i class="icon-zoom-in "></i>
                                                </a>
                                                <a class="btn btn-danger" href="table.html#">
                                                    <i class="icon-trash "></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <? endforeach;
                                    for( $c=count( $flq->result() );$c<14;++$c) : ?>
                                        <tr>
                                            <td></td>

                                            <td align="center">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    <?
                                    endfor; ?>
                                    </tbody>
                                </table>
                                <? if( count($flq->result())>5 ) : ?>
                                    <div class="pagination pagination-centered">
                                        <ul class="pagination">
                                            <li><a href="table.html#">Prev</a></li>
                                            <li class="active">
                                                <a href="table.html#">1</a>
                                            </li>
                                            <li><a href="table.html#">2</a></li>
                                            <li><a href="table.html#">3</a></li>
                                            <li><a href="table.html#">4</a></li>
                                            <li><a href="table.html#">Next</a></li>
                                        </ul>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>

                    </div><!--/col-->

                    <div class="col-md-3 visible-md visible-lg" id="feed">


                        <? include('inc/right.blank.php');?>

                    </div><!--/col-->
		 
				</div><!--/row-->


				</div>
				<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->

	
	<div class="clearfix"></div>
    <? include('inc/footer.php');?>
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>