<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Property Summary :: SClaim'); 
    /*
     *     [property_id] => 23
    [property_folder_id] => 529
    [property_name] => Miner's Shack
    [property_type] => 79
    [property_address_1] => 10110 Flume street
    [property_address_2] => 
    [property_city] => North San Juan
    [property_state] => 0
    [property_zip] => 
    [property_telephone] => 
    [property_other] => 
    [property_other_label] => 0
    [property_structure] => 
    [property_year_built] => 0
    [property_total_sqft] => 0
    [property_construction] => 0
    [property_insured_value] => 0
    [property_lon] => -121.1065368
    [property_lat] => 39.3716131
    [property_create_tstamp] => 1404852477
    [property_lastmod_tstamp] => 1404852477
    [property_description] => 
    [property_mailing_address] => 0
    [property_create_userid] => 104
    [property_lastmod_userid] => 104
    [client_id] => 104
    [property_deductible] => 
    [number_structures] => 1
    [property_claim_id] => 
    [claim_id] => 16
     */?>
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

        <? include('inc/sidenav.adjust.php'); ?>
    </div>
    <a href="page-profile.html#" id="main-menu-min" class="full visible-md visible-lg"></a>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11 ">


<ol class="breadcrumb">
    <li><a href="/">Dashboard</a></li>
    <li><a href="/index.php/properties">Properties</a></li>
    <li class="active">Summary</li>
</ol>

<div class="row profile">

<div class="col-sm-3">

    <div class="row">
        <div class="col-xs-7 col-sm-12">

        </div>
        <div class="col-xs-5 col-sm-12">
            <h3>Property Information</h3>

            <ul class="profile-details">
                <li>
                    <div><i class="icon-home"></i> address</div>
                    <? echo $row->property_name; ?><br />
                    <? echo $row->property_address_1; ?><br />
                    <? echo ( $row->property_address_2 ? $row->property_address_2.'<br />' : '' ) ?>
                    <? echo $row->property_city; ?>, <? echo $row->property_state; ?> <? echo $row->property_zip; ?>
                </li>
                <li>
                    <div><i class="icon-user"></i> name</div>
                    <? echo $con->contact_first_name; ?> <? echo $con->contact_last_name; ?>
                </li>
                <li>
                    <div><i class="icon-phone"></i> phone</div>
                    <? echo $con->contact_primary_phone; ?>
                </li>
                <li>
                    <div><i class="icon-tablet"></i> secondary phone</div>
                    <? echo $con->contact_secondary_phone; ?>
                </li>
                <li>
                    <div><i class="icon-envelope"></i> e-mail</div>
                    <? echo $con->contact_primary_email; ?>
                </li>
                <li>
                    <div><i class="icon-map-marker"></i> address</div>
                    <? echo $con->contact_address_1; ?><br/>
                    <? echo $con->contact_address_2; ?><br/>
                    <? echo $con->contact_city; ?>, <? echo $con->contact_state; ?> <? echo $con->contact_zip; ?>
                </li>
            </ul>

            <!-- Button-->
            <div class="control-group text-center">
                <form class="pull-center" action="<? echo base_url(); ?>index.php/property/delete/" id="delete<? echo $this->uri->segment(3); ?>" method="post" style="display:inline">
                    <input type="hidden" name="property_id" value="<? echo $this->uri->segment(3); ?>">
                    <a class="btn btn-danger" href="javascript: void(0);"
                       onclick="javascript: delete<? echo $this->uri->segment(3); ?>.submit();">
                        Delete Property
                    </a>
                </form>
            </div>

        </div>

    </div><!--/row-->

</div><!--/col-->

<div class="col-sm-9">


<div class="tab-content">
<div class="tab-pane active" id="claims">

    <div class="row">

        <div class="col-sm-7">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <h2>Bio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <h2>Job</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <h2>Languages</h2>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="skill-bar">
                        <li>
                            <h5>Web Design</h5>
                            <div class="meter"><span class="lightBlue">40%</span></div>
                        </li>
                        <li>
                            <h5>Wordpress</h5>
                            <div class="meter"><span class="green">80%</span></div>
                        </li>
                        <li>
                            <h5>Branding</h5>
                            <div class="meter"><span class="red">100%</span></div>
                        </li>
                        <li>
                            <h5>SEO Optmization</h5>
                            <div class="meter"><span class="lightOrange">60%</span></div>
                        </li>

                    </ul>
                </div><!--/col-->
            </div><!--/row-->

        </div><!--/col-->
        <style>.fc-header-right{ display: none; }</style>
        <div class="col-sm-5">

            <div id="calendar"></div>


            <h2>Other Skills</h2>
            <canvas id="canvas" class="chartjs" height="450" width="450"></canvas>

        </div><!--/col-->
    </div><!--/row-->



</div>

<div class="tab-pane" id="tasks">

    <div class="page-todo">

        <div class="col-sm-12">

            <div class="task-list">

                <div class="priority high"><span>high priority</span></div>

                <div class="task high">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task high">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div>1 day</div>
                    </div>
                </div>
                <div class="task high">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task high last">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div>1 day</div>
                    </div>
                </div>

                <div class="priority medium"><span>medium priority</span></div>

                <div class="task medium">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task medium last">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>

                <div class="priority low"><span>low priority</span></div>

                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>
                <div class="task low">
                    <div class="desc">
                        <div class="title">Lorem Ipsum</div>
                        <div>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
                    </div>
                    <div class="time">
                        <div class="date">Jun 1, 2012</div>
                        <div> 1 day</div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>

        </div><!--/col-->


    </div>
</div>
<!-- end: Content -->

</div><!--/row-->

</div>

</div><!--/col-->

</div><!--/profile-->



</div>
<!-- end: Content -->

</div><!--/row-->


<div class="col-sm-1">

</div>
</div><!--/container-->


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="clearfix"></div>

<footer>
    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">BootstrapMaster.com</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/" alt="Bootstrap Admin Template">Genius</a></span>
    </p>

</footer>


<!-- start: JavaScript-->
<!--[if !IE]>-->

<script src="/assets/js/jquery-2.0.3.min.js"></script>

<!--<![endif]-->

<!--[if IE]>

<script src="/assets/js/jquery-1.10.2.min.js"></script>

<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>

<![endif]-->
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>




<!-- page scripts -->
<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="/assets/js/excanvas.min.js"></script><![endif]-->
<script src="/assets/js/Chart.min.js"></script>
<script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/assets/js/fullcalendar.min.js"></script>

<!-- theme scripts -->
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/core.min.js"></script>

<!-- inline scripts related to this page -->
<script src="/assets/js/pages/page-profile.js"></script>
<!-- inline scripts related to this page -->
<script src="/assets/js/pages/calendar.js"></script>
<script>


</script>
<!-- end: JavaScript-->

</body>
</html>