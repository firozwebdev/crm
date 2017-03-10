<!DOCTYPE html>
<html lang="en">
<head>

    <title>Property Claims :: SClaim</title>
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
                <li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
                <li><a href="<? echo base_url(); ?>index.php/properties">Properties</a></li>
                <li class="active" >Claims</li>
            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h2>Properties</h2>
                            <div class="box-icon">
                                <i class="icon-home" id="new_folder_add"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div style="float: left; display: inline;  margin-bottom: 10px">
                                <button id="download" class="btn btn-primary" onclick="window.location='/index.php/map'">View Map</button>
                            </div>
                            <div style="float: right; display: inline;  margin-bottom: 10px">
                                <button id="download" class="btn btn-primary" onclick="window.location='/index.php/map'">View Map</button>
                            </div>
                            <div class="clearfix"></div>
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th style="text-align:left">Claim Number</th>
                                    <th width="10%" style="text-align:center">Summary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $this->property_model->get_claims($this->uri->segment(3)) as $c ) :
                                    ?>
                                    <tr>
                                        <td><h2><? echo $c->claim_number; ?></h2></td>

                                        </td>
                                        <td style="text-align:center">
                                            <a class="btn btn-success" href="<? echo base_url(); ?>index.php/claims/view/<? echo $c->claim_id; ?>" title="View Claim">
                                                <i class="icon-plus "></i>
                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for($c=0;$c<=20;++$c) : ?>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>

                                        <td style="text-align:center">
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

        <div class="col-md-3 visible-md visible-lg" id="feed">

            <? include('inc/right.blank.php'); ?>

        </div><!--/col-->

    </div><!--/row-->


</div>
<!-- end: Content -->

</div><!--/row-->

</div><!--/container-->

<div class="clearfix"></div>

<? include('inc/footer.php'); ?>

</body>
</html>