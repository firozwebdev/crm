<!DOCTYPE html>
<html lang="en">
<head>

    <title>Insurance Carriers :: SClaim</title>
    <? include('inc/header.php');?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.datatable.min.css">

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
                        <li class="active">Todos</li>




                    </ol>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2>Todos</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>/index.php/todo/create/"><i class="icon-plus"></i></a>
                                    </div>

                                </div>
                                <? echo $this->session->flashdata('msg'); ?>
                                <div class="box-content">
                                    <div style="float: right; margin-bottom: 10px">
                                        <button id="download" class="btn btn-primary" onclick='window.location="<?php echo base_url(); ?>/index.php/todo/create"'>Add Todo</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                        <thead>

                                        <th>Title</th>
                                        <th>Deadline</th>
                                        <th>Priority</th>

                                        <th style="display:none">Publication Status</th>
                                        <th style="display:none">Status</th>
                                        <th style="display:none">world</th>


                                        <th>Action</th>


                                        <!--
                                        <tr>
                                            <th>Title</th>
                                            <th>Deadline</th>
                                            <th>Priority</th>
                                            <th width="18%" class="text-center">Actions</th>
                                        </tr>-->
                                        </thead>
                                        <tbody>


                                        <?
                                        foreach( $rows as $c ) :
                                            ?>
                                            <tr>
                                                <td><a href="/index.php/todo/edit/<? echo $c->todo_id; ?>"><? echo $c->todo_title; ?></a></td>
                                                <td><?=$c->todo_deadline ?></td>
                                                <td><?=$c->todo_priority ?></td>
                                                <td class="text-center" style="width:20%">
                                                    <a class="btn btn-info" href="<?php echo base_url();?>/index.php/todo/edit/<? echo $c->todo_id; ?>">
                                                        <i class="icon-edit "></i>
                                                    </a>

                                                    <a class="btn btn-danger" href="<?php echo base_url();?>/index.php/todo/delete/<? echo $c->todo_id; ?>" onclick="return confirm('Are you sure to delete..');">
                                                        <i class="icon-trash "></i>
                                                    </a>

                                                </td>
                                                <th style="display:none">Publication Status</th>
                                                <th style="display:none">Status</th>
                                                <th style="display:none">world</th>
                                            </tr>
                                        <?  endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--/col-->

                    </div><!--/row-->





                </div><!--/col-->
                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <?  include('inc/right.blank.php') ?>

                </div><!--/col-->


            </div><!--/row-->


        </div>
        <!-- end: Content -->

    </div><!--/row-->

</div><!--/container-->

<div class="clearfix"></div>

<? include('inc/footer.php'); ?>
<script src="/assets/js/pages/index.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mydatatable.js"></script>

</body>
</html>