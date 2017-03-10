<!DOCTYPE html>
<html lang="en">
<head>

    <title>Insurance Carriers :: SClaim</title>
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
                <? include( 'inc/sidenav.adjust.php' ); ?>
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
                        <li class="active">Insurers</li>




                    </ol>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2>Insurance Carrier</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>index.php/insurers/add/"><i class="icon-plus"></i></a>
                                    </div>

                                </div>
                                <? echo $this->session->flashdata('msg'); ?>
                                <div class="box-content">
                                    <div style="float: right; margin-bottom: 10px">
                                        <button id="download" class="btn btn-primary" onclick='window.location="<?php echo base_url(); ?>/index.php/insurers/add"'>Add Insurer</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                        <thead>
                                        <tr>
                                            <th>Carrier</th>
                                            <th width="18%" class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?
                                        foreach( $insurers as $c ) :
                                            ?>
                                            <tr>
                                                <td><a href="/index.php/insurers/view/<? echo $c->insurer_id; ?>"><? echo $c->insurer_name; ?></a></td>

                                                <td class="text-center" style="width:20%">
                                                    <? $cid=$c->insurer_id; ?>
                                                    <a class="btn btn-info" href="<?php echo base_url();?>/index.php/insurers/edit/<? echo $c->insurer_id; ?>">
                                                        <i class="icon-edit "></i>
                                                    </a>
                                                    <a class="btn btn-success" href="<?php echo base_url();?>/index.php/insurers/reps/<? echo $c->insurer_id; ?>">
                                                        <i class="icon-user "></i>
                                                    </a>
                                                    <a class="btn btn-danger" href="<?php echo base_url();?>/index.php/insurers/delete/<? echo $c->insurer_id; ?>" onclick="return confirm('Are you sure to delete..');">
                                                        <i class="icon-trash "></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        <? endforeach;
                                        for( $c=0;$c<10;++$c) : ?>
                                            <tr>
                                                <td>&nbsp;</td>

                                                <td align="center">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        <?
                                        endfor;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--/col-->

                    </div><!--/row-->





                </div><!--/col-->
                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <? include('inc/right.blank.php') ?>

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