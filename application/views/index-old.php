<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dashboard :: SClaim</title>
    <? include('inc/header.php'); ?>
    <?php echo $map['js']; ?>

</head>

<body>
<!-- start: Header -->
<header class="navbar">
    <div class="container">

        <? include('inc/top.adjust.php'); ?>

    </div>
</header>
<!-- end: Header -->

<div class="container">
    <div class="row">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="col-lg-2 col-sm-1 ">

            <div class="sidebar-nav nav-collapse collapse navbar-collapse">
                <? include('inc/sidenav.adjust.php'); ?>
            </div>
            <a href="<? echo base_url(); ?>#" id="main-menu-min" class="full visible-md visible-lg"></a>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11 ">


            <div class="row">

                <div class="col-sm-12 col-md-9">
                    <ol class="breadcrumb">
                        <li class="active">Dashboard</li>
                        /
                    </ol>
                    <!--
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">

                                </div>
                                <div class="box-content">


                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-group"></i>
                                            <p>Users</p>
                                            <span class="notification blue">1.367</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-comments-o"></i>
                                            <p>Comments</p>
                                            <span class="notification green">167</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-shopping-cart"></i>
                                            <p>Orders</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-barcode"></i>
                                            <p>Products</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-envelope"></i>
                                            <p>Messages</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="quick-button">
                                            <i class="fa fa-calendar"></i>
                                            <p>Calendar</p>
                                            <span class="notification red">68</span>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                      -->
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="box" id="new_folder" style="display: none">
                                <div class="box-header">
                                    <h2>New Folder</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>#" id="new_folder_close"><i class="icon-remove"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">

                                    <form class="form-horizontal" action="<? echo base_url(); ?>index.php/folders/save" method="post">
                                        <fieldset> <!-- Text input-->
                                            <div class="control-group" id="new_folder">
                                                <label class="control-label" for="folder_name">Folder Name</label>

                                                <div class="controls  text-right">
                                                    <input id="folder_name" name="folder_name" placeholder="" class="input-small"
                                                           type="text">

                                                </div>
                                            </div>
                                            <!-- Button (Double) -->
                                            <div class="control-group clearfix">
                                                <div class="controls text-center">
                                                    <button type="button"
                                                            onclick="javascript: window.location='<? echo base_url(); ?>index.php/';"
                                                            id="button2id" name="button2id" class="btn btn-danger">Cancel
                                                    </button>
                                                    <button id="button1id" name="button1id" class="btn btn-success">Save Folder</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h2>Folders</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>#"><i class="icon-plus" id="new_folder_add"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div id="folder_list">
                                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                            <thead>
                                            <tr>
                                                <th>Name</th>

                                                <th width="32%" style="text-align:center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach ($this->folders_model->all() as $fl) : ?>
                                                <tr>
                                                    <td><h2><? echo $fl->folder_name; ?></h2></td>

                                                    <td align="center">
                                                        <a class="btn btn-success" title="View <? echo $fl->folder_name; ?>"
                                                           href="<? echo base_url(); ?>index.php/claims/add/<? echo $fl->folder_id; ?>">
                                                            <i class="icon-zoom-in "></i>
                                                        </a>
                                                        <?
                                                        if ($this->folders_model->props($fl->folder_id) == 0) : ?>
                                                            <a class="btn btn-danger" title="Delete <? echo $fl->folder_name; ?>"
                                                               href="<? echo base_url(); ?>index.php/folders/delete/<? echo $fl->folder_id; ?>">
                                                                <i class="icon-trash "></i>
                                                            </a>
                                                        <? else: ?>
                                                        <a class="btn btn-folder-closed" title="Files <? echo $fl->folder_name; ?>"
                                                           href="<? echo base_url(); ?>index.php/folders/view/<? echo $fl->folder_id; ?>">
                                                            <i class="icon-folder-open"></i>
                                                            <? endif; ?>
                                                    </td>
                                                </tr>
                                                <? ++$r;
                                            endforeach;
                                            for ($c = count($this->folders_model->all()); $c < 10; ++$c) : ?>
                                                <tr>
                                                    <td>
                                                        <h2></h2>
                                                    </td>

                                                    <td align="center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <?
                                            endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?
                                    if (count($this->folders_model->total()) > 10) :
                                        $pages = ceil(count($this->folders_model->total()) / 10);
                                        ?>
                                        <div class="text-center">
                                            <div class="pagination pagination-centered ">
                                                <ul class="pagination">
                                                    <? for ($r = 1; $r <= $pages; ++$r) : ?>

                                                        <li class="<? echo($r == 1 ? 'active' : ''); ?>">
                                                            <a href="<? echo base_url(); ?>#" data-toggle="tab"><? echo $r; ?></a>
                                                        </li>

                                                    <? endfor; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>


                        </div>
                        <!--/col-->

                        <div class="col-lg-6">
                            <div class="box">
                                <div class="box-header">
                                    <h2>Map</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>index.php/map"><i class="icon-globe"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <?php echo $map['html']; ?>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h2>To Do List</h2>

                                    <div class="box-icon">
                                        <a href="<? echo base_url(); ?>index.php/calendar"><i class="icon-plus" id="new_todo_add"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="todo">
                                        <? $todo = $this->calendar_model->schedule(); ?>
                                        <ul class="todo-list">
                                            <? foreach ($todo as $do) :
                                                ?>
                                                <li>
                                <span class="todo-actions">
                                    <a href="javascript: void(0);" data-value="<? echo $do->calendar_id; ?>"><i
                                            class="icon-ok"></i></a>
                                </span>
                                                    <span class="desc"><? echo $do->calendar_title; ?></span>
                                                    <span class="label label-important">today</span>
                                                    <a class="remove" href="javascript: void(0);" data-value="<? echo $do->calendar_id; ?>"><i class="icon-remove"></i></a>
                                                </li>
                                            <? endforeach;
                                            #label-important label-warning label-success

                                            for ($c = 0; $c < 8; ++$c) : ?>
                                                <li>
                                                    &nbsp;
                                                </li>
                                                <?
                                            endfor; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2>Documents</h2>

                                    <div class="box-icon">
                                        <i class="icon-plus"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div style="float: right; margin-bottom: 10px">
                                        <button id="download" class="btn btn-primary" onclick="window.location='<? echo base_url(); ?>index.php/attachments'">Add Document</button>
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
                                        <? $fl2q = $this->uploads_model->no_claim();
                                        foreach ($fl2q as $fl2) : ?>
                                            <tr>
                                                <td><h2><? echo $fl2->file_title; ?></h2></td>

                                                <td align="center">
                                                    <a class="btn btn-success"
                                                       href="<? echo base_url(); ?>index.php/attachments/view/<? echo $fl2->file_id; ?>">
                                                        <i class="icon-zoom-in "></i>
                                                    </a>
                                                    <a class="btn btn-danger"
                                                       href="<? echo base_url(); ?>index.php/attachments/delete/<? echo $fl2->file_id; ?>/dash">
                                                        <i class="icon-trash "></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <? endforeach;
                                        for ($c = 0; $c < 4; ++$c) : ?>
                                            <tr>
                                                <td>&nbsp;</td>

                                                <td align="center">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <?
                                        endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/col-->

                    </div>
                    <!--/row-->


                </div>
                <!--/col-->

                <div class="col-md-3 visible-md visible-lg" id="feed">

                    <? include('inc/right.blank.php'); ?>

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

<? include('inc/footer.php'); ?>
<script src="<? echo base_url(); ?>assets/js/pages/calendar.js"></script>

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
        })

    })
</script>
</body>
</html>