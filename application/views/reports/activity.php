<!DOCTYPE html>
<html lang="en">
<head>

    <title>Activity :: SClaim</title>
    <?php include( 'inc/header.php' ); ?>
    <style>
        .form-horizontal .controls {
            margin-left: 180px;
        }
    </style>
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

                <div class="col-sm-12 col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/index.php/">Dashboard</a></li>
                        <li>Activity Report</li>



                    </ol>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2></h2>

                                </div>
                                <div class="box-content">

                                    <div style="float: right; margin-bottom: 10px">
                                        <button id="download" class="btn btn-default" onclick="window.location='/index.php/reports/export/property'">Save to Excel</button>
                                    </div>
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                        <thead>
                                        <tr>
                                            <th axis="string">Insured's Name</th>
                                            <th axis="string">Type</th>
                                            <th axis="string">Address</th>
                                            <th axis="string">City</th>
                                            <th axis="string">State</th>
                                            <th axis="string">Zip</th>
                                            <th axis="string">Construction</th>
                                            <th axis="string">Telephone</th>
                                            <th axis="string">Total Sqft</th>
                                            <th axis="string">Built</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <?php
                                        $r=1;
                                        foreach($rows as $i)
                                        {
                                            print
                                                '<tr class=""  id="'.$r.'">
												<td>'.stripslashes($i->property_name).'&nbsp;</td>
												<td>'.stripslashes( '' ).'&nbsp;</td> 
												<td>'.stripslashes($i->property_address_1).'&nbsp;</td> 
												<td>'.stripslashes($i->property_city).'&nbsp;</td>
												<td>'.stripslashes($i->property_state).'&nbsp;</td> 
												<td>'.stripslashes($i->property_zip).'&nbsp;</td> 
												<td>'.stripslashes($i->property_telephone).'&nbsp;</td>
												<td>'.stripslashes($i->property_construction).'&nbsp;</td> 
												<td>'.stripslashes($i->property_total_sqft).'&nbsp;</td>
												<td>'.stripslashes($i->property_year_built).'&nbsp;</td> 
												</tr>';
                                        }
                                        for($c=count($rows);$c<12;++$c):
                                            print
                                                '<tr class=""  id="'.$r.'">
												<td>&nbsp;</td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												<td>
												</tr>';
                                        endfor; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--/col-->

                    </div><!--/row-->





                </div><!--/col-->


            </div><!--/row-->


        </div>
        <!-- end: Content -->

    </div><!--/row-->

</div><!--/container-->



<div class="clearfix"></div>


<? include('inc/footer.php');?>

<!-- inline scripts related to this page -->
<script src="/assets/js/pages/index.js"></script>

<!-- end: JavaScript-->

</body>
</html>