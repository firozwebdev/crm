<?php ini_set('display_errors', 1);
error_reporting(E_ALL); ?>
<!DOCTYPE html>

<head>

    <title>Dashboard :: CRM </title>
    <?php include('inc/header.php'); ?>
<?php // echo $map['js']; ?>

</head>

<body>
    <!-- start: Header -->
    <header class="navbar">
        <div class="container">

<?php include('inc/top.adjust.php'); ?>

        </div>
        <style>
            .box{
                border:none !important;
            }
        </style>
    </header>
    <!-- end: Header -->

    <div class="container">
        <div class="row">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="col-lg-2 col-sm-1 ">

                <div class="sidebar-nav nav-collapse collapse navbar-collapse">
<?php include('inc/sidenav.adjust.php'); ?>
                </div>
                <a href="<?php echo base_url(); ?>" id="main-menu-min" class="full visible-md visible-lg"></a>
            </div>
            <!-- end: Main Menu -->

            <!-- start: Content -->
            <div id="content" class="col-lg-10 col-sm-11 ">


                <div class="row">

                    <div class="col-sm-12 col-md-9">
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>

                        </ol>
                        <!--problem-->

                        <!--problem-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box">
                                    <div class="box"><div class="box-header">
                                            <h2>Events</h2>
                                            <div class="box-icon">
                                                <a href="<?php echo base_url(); ?>index.php/logs/create"><i class="icon-plus"></i></a>
                                            </div>
                                        </div>
<?php echo $this->session->flashdata('msg'); ?>
                                        <div class="box-content">
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-primary" onclick='window.location = "<?php echo base_url(); ?>index.php/events/add"'>Add</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>For</th>
                                                        <th>Date Time Range</th>
                                                        <th width="30%" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach( $rows = $this->calendar_model->events() as $c ) :
                                                    ?>
                                                    <tr>
                                                        <td><a href="/index.php/logs/edit/"><?php echo $c->calendar_title; ?></a></td>
                                                        <td class="text-center"><? echo $c->created_for; ?></td>
                                                        <td class="text-center"><? echo $c->calendar_start; ?> - <?=$c->calendar_start ?></td>
                                                        <td  class="text-center">
                                                            <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/events/view/<?php echo $c->calendar_id; ?>">
                                                                <i class="icon-edit "></i>
                                                            </a>

                                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/events/delete/<?php echo $c->calendar_id ?>" onclick='return confirm("Are you sure to delete..")'>
                                                                <i class="icon-trash "></i>
                                                            </a>
                                                        </td>
                                                    </tr>


                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>




                                </div><!--/col-->

<?php //include('inc/debug.php')  ?>

                            </div><!--/row-->

                            <div class="col-lg-6"> <div class="box">
                                    <div class="box-header">
                                        <h2>Todos</h2>

                                        <div class="box-icon">
                                            <a href="<?php echo base_url(); ?>/index.php/todo/create/"><i class="icon-plus"></i></a>
                                        </div>

                                    </div>
<?php echo $this->session->flashdata('msg'); ?>
                                    <div class="box-content">
                                        <div style="float: right; margin-bottom: 10px">
                                            <button id="download" class="btn btn-primary" onclick='window.location = "<?php echo base_url(); ?>/index.php/todo/create"'>Add Todo</button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th width="18%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


<?php
$todos = $this->todo_model->todolist($this->session->userdata('user_id'));
foreach( $todos as $c ) :
?>
                                                <tr>
                                                    <td><a href="/index.php/todo/edit/<?php echo $c->todo_id; ?>"><?php echo $c->todo_title; ?></a></td>

                                                    <td class="text-center" style="width:28%">
                                                        <a class="btn btn-info" href="<?php echo base_url(); ?>/index.php/todo/edit/<?php echo $c->todo_id; ?>">
                                                            <i class="icon-edit "></i>
                                                        </a>

                                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/todo/delete/<?php echo $c->todo_id; ?>" onclick="return confirm('Are you sure to delete..');">
                                                            <i class="icon-trash "></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box">
                                    <div class="box-header">
                                        <h2>Documents</h2>

                                        <div class="box-icon">
                                            <i class="icon-plus"></i>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div style="float: right; margin-bottom: 10px">
                                            <button id="download" class="btn btn-primary" onclick='window.location = "<?php echo base_url(); ?>index.php/attachments"'>Add Document</button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>

                                                    <th width="14%" style="text-align: center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php $fl2q = $this->uploads_model->no_claim();
foreach ($fl2q as $fl2) :
?>
                                                <tr>
                                                    <td><h2><?php echo $fl2->file_title; ?></h2></td>

                                                    <td align="center">
                                                        <a class="btn btn-success"
                                                           href="<?php echo base_url(); ?>index.php/attachments/view/<?php echo $fl2->file_id; ?>">
                                                            <i class="icon-zoom-in "></i>
                                                        </a>
                                                        <a class="btn btn-danger"
                                                           href="<?php echo base_url(); ?>index.php/attachments/delete/<?php echo $fl2->file_id; ?>/dash">
                                                            <i class="icon-trash "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;
                                                for ($c = 0;
                                                $c < 4;
                                                ++$c) :
                                                ?>
                                                <tr>
                                                    <td>&nbsp;</td>

                                                    <td align="center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
<?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--/col-->
                            <!--Contact Portion-->
                            <div class="col-lg-6"> <div class="box">
                                    <div class="box-header">
                                        <h2>Contacts</h2>

                                        <div class="box-icon">
                                            <a href="<?php echo base_url(); ?>/index.php/contacts/add"><i class="icon-plus"></i></a>
                                        </div>

                                    </div>

                                    <div class="box-content">
                                        <div style="float: right; margin-bottom: 10px">
                                            <button id="download" class="btn btn-primary" onclick="window.location='<? echo base_url(); ?>index.php/contacts/add'">Add Contact</button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th width="18%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


<?php
$contacts = $this->contacts_model->contact_for_dashboard();
foreach( $contacts as $c ) :
?>
                                                <tr>
                                                    <td><a href="/index.php/todo/edit/<?php echo $c->contact_id; ?>"><?php echo $c->contact_first_name; ?></a></td>

                                                    <td class="text-center" style="width:28%">
                                                        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/contacts/edit/<? echo $c->contact_id ?>">
                                                            <i class="icon-edit "></i>
                                                        </a>


                                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/contacts/delete/<? echo $c->contact_id ?>" onclick='return confirm("Are you sure to delete..")'>
                                                            <i class="icon-trash "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                              <?php endforeach;   ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/row-->


                    </div>
                    <!--/col-->

                    <div class="col-md-3 visible-md visible-lg" id="feed">

<?php include('inc/right.blank.php'); ?>

                    </div>
                    <!--/col-->

                </div>
                <!--/row-->

            </div>
            <!-- end: Content -->

        </div>
        <!--/row-->

    </div>
    <!--/container-->

    <div class="clearfix"></div>

<?php include('inc/footer.php'); ?>
    <script src="<?php echo base_url(); ?>assets/js/pages/calendar.js"></script>

    <script
    src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0/src/markerclusterer.js"></script>

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
                                                        url: "/index.php/folders/ajax/" + $(this).html(),
                                                        error: function (data) {
                                                            alert("There was a problem");
                                                        },
                                                        success: function (data) {
                                                            $('#folder_list').html(data);
                                                        }
                                                    });

                                                });
    </script>
</body>
</html>

