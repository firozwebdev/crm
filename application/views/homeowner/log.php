<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Log :: SClaim'); ?>
    <? Page::header(); ?>
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
            <a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="col-lg-10 col-sm-11 ">


            <div class="row">

                <div class="col-sm-12 col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="/index.php/">Dashboard</a></li>
                        <li>Claim</li>
                        <li class="active">New</li>
                    </ol>
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-content">

                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-horizontal" action="<? echo base_url(); ?>index.php/logs/save" method="post">
                                        <fieldset>


                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="user">Employee</label>
                                                <div class="controls">
                                                    <input id="user" name="user" placeholder="" class="input-xlarge" type="text">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="control-group">
                                                <label class="control-label" for="select_title">Title</label>
                                                <div class="controls">
                                                    <select id="select_title" name="select_title" class="input-xlarge">
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="control-group">
                                                <label class="control-label" for="property">Claim</label>
                                                <div class="controls">
                                                    <select id="property" name="property" class="input-xlarge">
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="date01">Date</label>
                                                <div class="controls row">
                                                    <div class="input-group date col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                        <input type="text" class="form-control date-picker" id="date01" data-date-format="mm/dd/yyyy"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="timepicker1">Start</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4 bootstrap-timepicker">
                                                        <span class="input-group-addon"><i class="icon-time"></i></span>
                                                        <input type="text" class="form-control timepicker" id="timepicker1" value="11:30 PM">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="control-label" for="timepicker2">End</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4 bootstrap-timepicker">
                                                        <span class="input-group-addon"><i class="icon-time"></i></span>
                                                        <input type="text" class="form-control timepicker" id="timepicker2" value="11:30 PM">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="control-label" for="timepicker3">Total</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4 bootstrap-timepicker">
                                                        <span class="input-group-addon"><i class="icon-time"></i></span>
                                                        <input type="text" class="form-control timepicker" id="timepicker3" value="11:30 PM" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="travel_point">End Point</label>
                                                <div class="controls">
                                                    <input id="travel_point" name="travel_point" placeholder="" class="input-xlarge" type="text">

                                                </div>
                                            </div>


                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="distance">Distance</label>
                                                <div class="controls">
                                                    <input id="distance" name="distance" placeholder="" class="input-xlarge" type="text">

                                                </div>
                                            </div>

                                            <!-- Multiple Checkboxes (inline) -->
                                            <div class="control-group">
                                                <label class="control-label" for="checkboxes">Include Directions</label>
                                                <div class="controls">
                                                    <label class="checkbox inline" for="checkboxes-0">
                                                        <input name="checkboxes" id="checkboxes-0" value="yes" type="checkbox">
                                                        yes
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Multiple Checkboxes (inline) -->
                                            <div class="control-group">
                                                <label class="control-label" for="checkboxes">Round Trip</label>
                                                <div class="controls">
                                                    <label class="checkbox inline" for="checkboxes-0">
                                                        <input name="checkboxes" id="checkboxes-0" value="yes" type="checkbox">
                                                        yes
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="control-group">
                                                <label class="control-label" for="textarea">Log</label>
                                                <div class="controls">
                                                    <textarea id="textarea" name="textarea"  class="input-xlarge"></textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="control-group">
                                                <label class="control-label" for="submit"></label>
                                                <div class="controls">
                                                    <button id="submit" name="submit" class="btn btn-success">Save Log</button>
                                                    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>


                                </div><!--/col-->

                            </div><!--/row-->

                        </div>
                    </div>
                </div><!--/col-->

                <div class="col-md-3 visible-md visible-lg" id="feed">

                </div><!--/col-->

            </div><!--/row-->







        </div>
        <!-- end: Content -->

    </div><!--/row-->

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

<? include('inc/footer.php'); ?>

</body>
</html>