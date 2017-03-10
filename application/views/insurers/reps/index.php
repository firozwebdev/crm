<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrler Reps :: SClaim</title>
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
            <a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a></div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11 ">


            <div class="row">

                <div class="col-sm-12 col-md-9">

                    <ol class="breadcrumb">
                        <li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
                        <li><a href="/index.php/insurers">Insurers</a></li>
                        <li class="active">Reps</li>




                    </ol>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2>Carrier Reps</h2>
                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>index.php/reps/add/<? echo $this->uri->segment(3); ?>"><i class="icon-plus"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">

                                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th width="18%" class="text-center">Role</th>
                                            <th width="18%" class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?
                                        foreach( $insurers as $c ) :
                                            ?>
                                            <tr>
                                                <td><h2><? echo $c->contact_first_name; ?></h2></td>
                                                <td class="text-center">
                                                    <? echo $this->reps_model->user_role($c->contact_type); ?>
                                                <td class="text-center">
                                                        <a class="btn btn-info" href="<? echo base_url(); ?>index.php/reps/edit/<? echo $this->uri->segment(3); ?>/<? echo $c->contact_id; ?>">
                                                            <i class="icon-edit "></i>
                                                        </a>
                                                    <form action="<? echo base_url(); ?>index.php/contacts/delete/" id="delete-<? echo $c->contact_id; ?>" method="post" style="display:inline">
                                                        <a class="btn btn-danger" href="javascript: void(0);"
                                                           onclick="javascript: delete<? echo $c->contact_id; ?>.submit();">
                                                            <i class="icon-trash "></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        <? endforeach;
                                        for( $c=count($insurers);$c<20;++$c) : ?>
                                            <tr>
                                                <td>
                                                    &nbsp;
                                                <td class="text-center">
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

<!-- end: JavaScript-->

</body>
</html>