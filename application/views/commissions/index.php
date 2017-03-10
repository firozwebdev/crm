<!DOCTYPE html>
<html lang="en">
<head>

    <? Page::title('Commissions :: SClaim'); ?>
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
        <? echo Page::col_links(); ?>
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
                <li class="active" >Commission</li>
            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h2>Commissions</h2>
                            <div class="box-icon">
                                <a href="<? echo base_url(); ?>index.php/commissions/add/<? echo $this->uri->segment(3); ?>"><i class="icon-plus" id="new_estimation"></i></a>
                            </div>
                        </div>
                        <div class="box-content">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th width="10%" style="text-align:center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                foreach( $rows as $c ) :
                                    ?>
                                    <tr>
                                        <td><h2><? echo $c->percentage; ?></h2></td>
                                        <td style="text-align:center">
                                                <a class="btn btn-cancel" href="<? echo base_url(); ?>index.php/commissions/view/<? echo $c->estimation_id; ?>" title="View Estimation">
                                                    <i class="icon-list "></i>
                                                </a>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for($c=count($rows);$c<=20;++$c) : ?>
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
            <h2>Claim Activity</h2>

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

<? include('inc/footer.php'); ?>

</body>
</html>