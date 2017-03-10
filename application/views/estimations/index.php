<!DOCTYPE html>
<html lang="en">
<head>

    <title>Estimations :: SClaim</title>
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
                <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $this->uri->segment(3); ?>">Claim</a></li>
                <li class="active" >Estimation</li>




            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h2>Estimations</h2>
                            <div class="box-icon">
                                <a href="<? echo base_url(); ?>index.php/estimations/add/<? echo $this->uri->segment(3); ?>"><i class="icon-plus" id="new_estimation"></i></a>
                            </div>
                        </div>
                        <div class="box-content">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th width="10%" style="text-align:center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $rows as $c ) :
                                    ?>
                                    <tr>
                                        <td><h2><? echo $c->estimation_date; ?></h2></td>
                                        <td style="text-align:center">
                                                <a class="btn btn-cancel" href="<? echo base_url(); ?>index.php/estimations/view/<? echo $c->estimation_id; ?>" title="View Estimation">
                                                    <i class="icon-list "></i>
                                                </a>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for($c=count($rows);$c<=10  ;++$c) : ?>
                                    <tr>
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