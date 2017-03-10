 <!DOCTYPE html>
<html lang="en">
<head>

    <title>Properties :: SClaim</title>
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
                <li class="active" >Properties</li>
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
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th style="text-align:center">Address</th>
                                    <th width="20%" style="text-align:center">City</th>
                                    <th width="4%" style="text-align:center">State</th>
                                    <th width="10%" style="text-align:center">Zip</th>
                                    <th width="10%" style="text-align:center">Claims</th>
                                    <th width="10%" style="text-align:center">Summary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $this->property_model->get_properties() as $c ) :

                                    ?>
                                    <tr>
                                        <td><h2><? echo $c->property_address_1; ?></h2></td>
                                        <td><h2><? echo $c->property_city; ?></h2></td>
                                        <td style="text-align:center"><h2><? echo $c->property_state; ?></h2></td>
                                        <td style="text-align:center"><h2><? echo $c->property_zip; ?></h2></td>
                                        <td style="text-align:center">

                                                <a class="btn btn-cencel" href="<? echo base_url(); ?>index.php/property/claims/<? echo $c->property_id; ?>"" title="Property Claims">
                                                            <i class="icon-folder-open "></i>
                                                        </a>
                                        </td>
                                        <td style="text-align:center">
                                                <a class="btn btn-cancel" href="<? echo base_url(); ?>index.php/property/view/<? echo $c->property_id; ?>" title="Property Summary">
                                                    <i class="icon-list "></i>
                                                </a>
                                        </td>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for($c=count($this->property_model->get_properties());$c<=12;++$c) : ?>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
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