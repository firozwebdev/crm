<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Home Owner :: SClaim'); ?>
    <? Page::header(); ?>

</head>

<body>
<!-- start: Header -->
<header class="navbar">
    <div class="container">

        <? Page::top_links(); ?>

    </div>
</header>
<!-- end: Header -->

<div class="container">
<div class="row">

<!-- start: Main Menu -->
<div id="sidebar-left" class="col-lg-2 col-sm-1 ">

    <div class="sidebar-nav nav-collapse collapse navbar-collapse">
        <? include('inc/sidenav.home.php'); ?>
    </div>
    <a href="<? echo base_url(); ?>#" id="main-menu-min" class="full visible-md visible-lg"></a>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11 ">



<div class="row">

<div class="col-sm-12 col-md-9">
<ol class="breadcrumb">
    <li class="active" >Dashboard</li> /
</ol>
<div class="row">

<div class="col-lg-12 col-md-12">
<div class="box">
<div class="box-header">
    <h2><i class="icon-list"></i>Recent</h2>
    <ul class="nav nav-tabs" id="recent">
        <li class="active"><a href="<? echo base_url(); ?>#tickets">Tickets</a></li>
        <li><a href="<? echo base_url(); ?>#users">Users</a></li>
        <li><a href="<? echo base_url(); ?>#comments">Comments</a></li>
    </ul>
</div>
<div class="box-content no-padding">

<div class="tab-content">
    <div class="tab-pane active" id="tickets">
        <table class="table bootstrap-datatable datatable small-font">
            <thead>
            <tr>
                <th>Status</th>
                <th>Date</th>
                <th>Description</th>
                <th>User</th>
                <th>Number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span class="label label-success">Complete</span></td>
                <td><a href="<? echo base_url(); ?>index.php/homeowner/log">Jul 25, 2012 11:09</a></td>
                <td>Server problem</td>
                <td>Ashley Tan</td>
                <td><b>[#199278]</b></td>
            </tr>
            <tr>
                <td><span class="label label-warning">Suspended</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>Mobile App Problem</td>
                <td>Ann Kovalsky</td>
                <td><b>[#199277]</b></td>
            </tr>
            <tr>
                <td><span class="label label-info">In progress</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>Paypal Issue</td>
                <td>Chris Dan</td>
                <td><b>[#199276]</b></td>
            </tr>
            <tr>
                <td><span class="label label-important">Rejected</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>IE7 Problem</td>
                <td>John Grand</td>
                <td><b>[#199275]</b></td>
            </tr>
            <tr>
                <td><span class="label label-success">Complete</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>Mobile App Problem</td>
                <td>Agnes Young</td>
                <td><b>[#199274]</b></td>
            </tr>
            <tr>
                <td><span class="label label-warning">Suspended</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>Mobile App Problem</td>
                <td>Patricia Doyle</td>
                <td><b>[#199273]</b></td>
            </tr>
            <tr>
                <td><span class="label label-info">In progress</span></td>
                <td>Jul 25, 2012 11:09</td>
                <td>Mobile App Problem</td>
                <td>Melanie Brown</td>
                <td><b>[#199272]</b></td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="tab-pane" id="users">
        <ul class="users-list">
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Lucas" src="/assets/img/avatar.jpg">
                </a>
                <div class="name">Łukasz Holeczek
                    <div class="dropdown pull-right">
                        <a class="icon-cogs" data-toggle="dropdown" href="<? echo base_url(); ?>#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-ok"></i> Accept</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-remove"></i>Reject</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-minus-sign-alt"></i>Block</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
                <span class="place"><i class="icon-map-marker"></i>Mikolow, POLAND</span>
                <span class="job"><i class="icon-briefcase"></i>Founder, BootstrapMaster.com</span>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Bill" src="/assets/img/avatar9.jpg">
                </a>
                <div class="name">Bill Cole
                    <div class="dropdown pull-right">
                        <a class="icon-cogs" data-toggle="dropdown" href="<? echo base_url(); ?>#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-ok"></i> Accept</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-remove"></i>Reject</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-minus-sign-alt"></i>Block</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
                <span class="place"><i class="icon-map-marker"></i>London, ENGLAND</span>
                <span class="job"><i class="icon-briefcase"></i>CEO, Rainbow INC</span>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Jane" src="/assets/img/avatar5.jpg">
                </a>
                <div class="name">Jane Sanchez
                    <div class="dropdown pull-right">
                        <a class="icon-cogs" data-toggle="dropdown" href="<? echo base_url(); ?>#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-ok"></i> Accept</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-remove"></i>Reject</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-minus-sign-alt"></i>Block</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
                <span class="place"><i class="icon-map-marker"></i>Berlin, GERMANY</span>
                <span class="job"><i class="icon-briefcase"></i>Head of Stars Group</span>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Kate" src="/assets/img/avatar6.jpg">
                </a>
                <div class="name">Kate Presley
                    <div class="dropdown pull-right">
                        <a class="icon-cogs" data-toggle="dropdown" href="<? echo base_url(); ?>#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-ok"></i> Accept</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-remove"></i>Reject</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-minus-sign-alt"></i>Block</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
                <span class="place"><i class="icon-map-marker"></i>Madrid, SPAIN</span>
                <span class="job"><i class="icon-briefcase"></i>Creative Director, IdeaLab LTD</span>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Lucas" src="/assets/img/avatar7.jpg">
                </a>
                <div class="name">Anna Holmes
                    <div class="dropdown pull-right">
                        <a class="icon-cogs" data-toggle="dropdown" href="<? echo base_url(); ?>#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="'<? echo base_url(); ?>"><i class="icon-ok"></i> Accept</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-remove"></i>Reject</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-minus-sign-alt"></i>Block</a></li>
                            <li><a href="<? echo base_url(); ?>#"><i class="icon-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
                <span class="place"><i class="icon-map-marker"></i>Paris, FRANCE</span>
                <span class="job"><i class="icon-briefcase"></i>Co-Founder, ArtStudio</span>
            </li>
        </ul>
    </div>
    <div class="tab-pane" id="comments">
        <ul class="comments-list">
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Lucas" src="/assets/img/avatar.jpg">
                </a>
                <div>
                    <strong>Łukasz Holeczek</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <div class="date">4 minutes ago</div>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Bill" src="/assets/img/avatar9.jpg">
                </a>
                <div>
                    <strong>Bill Cole</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <div class="date">22 hours ago</div>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Jane" src="/assets/img/avatar5.jpg">
                </a>
                <div>
                    <strong>Jane Sanchez</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <div class="date">2 days ago</div>
            </li>
            <li>
                <a href="<? echo base_url(); ?>#">
                    <img class="avatar" alt="Kate" src="/assets/img/avatar6.jpg">
                </a>
                <div>
                    <strong>Kate Presley</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <div class="date">10 days ago</div>
            </li>
        </ul>
    </div>
</div>

</div>
</div>
</div><!--/col-->


</div><!--/row-->

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <h2>Attachments</h2>
                <div class="box-icon">
                    <a href="<? echo base_url(); ?>index.php/attachments"  id="new_folder_close"><i class="icon-plus"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Name</th>

                        <th width="21%" style="text-align: center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? $fl2q = $this->db->query('SELECT * FROM '.dbpre('files').'  WHERE '.dbpre('files').'.client_id="'.$this->session->userdata('client_id').'" LIMIT 0,5');
                    foreach( $fl2q->result() as $fl2 ) : ?>
                        <tr>
                            <td><? echo $fl2->file_title; ?></td>

                            <td align="center">
                                <a class="btn btn-success" href="/index.php/folders">
                                    <i class="icon-zoom-in "></i>
                                </a>
                                <a class="btn btn-info" href="table.html#">
                                    <i class="icon-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="/index.php/file/delete/<? echo $fl2->file_id; ?>">
                                    <i class="icon-trash "></i>
                                </a>
                            </td>
                        </tr>
                    <? endforeach;
                    for( $c=0;$c<4;++$c) : ?>
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
    </div><!--/col-->

</div><!--/row-->

</div><!--/col-->

<div class="col-md-3 visible-md visible-lg" id="feed">

    <h2>Activity Feed <a class="icon-repeat"></a></h2>

    <ul id="filter">
        <li><a class="green" href="<? echo base_url(); ?>#" data-option-value="task">Tasks</a></li>
        <li><a class="red" href="<? echo base_url(); ?>#" data-option-value="comment">Comments</a></li>
        <li><a class="blue" href="<? echo base_url(); ?>#" data-option-value="message">Messages</a></li>
        <li><a href="<? echo base_url(); ?>#" data-option-value="all">All</a></li>
    </ul>

    <ul id="timeline">

        <li class="task">
            <i class="icon-check-sign green"></i>
            <div class="title">New website - A/B Tests</div>
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <span class="date">3 seconds ago</span>
            <span class="separator">•</span>
            <span class="name">Megan Abbott</span>
        </li>

        <li class="comment">
            <i class="icon-comments red"></i>
            <div class="title">Sales increase</div>
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            <span class="date">15 minutes ago</span>
            <span class="separator">•</span>
            <span class="name">Ashley Tan</span>
        </li>

        <li class="comment">
            <i class="icon-comments red"></i>
            <div class="title">New Bootstrap Theme</div>
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            <span class="date">Today</span>
            <span class="separator">•</span>
            <span class="name">Ashley Tan</span>
        </li>

        <li class="message">
            <i class="icon-edit-sign blue"></i>
            <div class="title">Job offer</div>
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
            <span class="date">Yesterday</span>
            <span class="separator">•</span>
            <span class="name">James Doe</span>
        </li>

        <li class="task">
            <i class="icon-check-sign green"></i>
            <div class="title">Custom Design</div>
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <span class="date">5 days ago</span>
            <span class="separator">•</span>
            <span class="name">Megan Abbott</span>
        </li>

    </ul>
    <a href="<? echo base_url(); ?>#" id="load-more">•••</a>


</div><!--/col-->

</div><!--/row-->







</div>
<!-- end: Content -->

</div><!--/row-->

</div><!--/container-->


<div class="clearfix"></div>

<footer>
    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">BootstrapMaster.com</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/" alt="Bootstrap Admin Template">Genius</a></span>
    </p>

</footer>
<? include('inc/footer.php');?>



<!-- inline scripts related to this page -->

<script src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0/src/markerclusterer.js"></script>

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
            url: "/index.php/folders/ajax/"+$(this).html(),
            error: function(data){
                alert("There was a problem");
            },
            success: function(data){
                $('#folder_list').html(data);
            }
        })

    })
</script>
</body>
</html>