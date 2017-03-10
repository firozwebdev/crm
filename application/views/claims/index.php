<!DOCTYPE html>
<html lang="en">
<head>

    <title>Claims :: SClaim</title>
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
        <? include('inc/sidenav.adjust.php');?>
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
                <li class="active" >Claims</li>
            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box">

                        <div class="box-header">
                            <h2>Claims</h2>
                            <div class="box-icon">
                                <a href="<? echo base_url(); ?>index.php/claims/add"><i class="icon-plus"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div style="float: right; margin-bottom: 10px">
                                <button id="download" class="btn btn-primary" onclick="window.location='/index.php/claims/add'">Add Claim</button>
                            </div>
                            <div class="clearfix"></div>
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Claim</th>
                                    <th>Opened</th>
                                    <th width="10%" style="text-align:center">Updated</th>
                                    <th width="10%" style="text-align:center">Details</th>
                                    <th width="10%" style="text-align:center">Contact</th>
                                    <th width="10%" style="text-align:center">Property</th>
                                    <th width="10%" style="text-align:center">Policy</th>
                                    <th width="10%" style="text-align:center">Summary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                $rcount = count( $this->claims_model->getClaims() );
                                foreach( $this->claims_model->getClaims() as $c ) : ?>
                                    <tr>
                                        <td><h2><? echo $c->claim_number; ?></h2></td>
                                        <td><h2><? echo date('m.d.Y',$c->created_on); ?></h2></td>
                                        <td style="text-align:center"><h2><? echo ( $c->claim_last_update==0 ? 'N/A' : date('m.d.Y',$c->claim_last_update) ); ?></h2></td>
                                        <td class="text-center"><a class="btn btn-success" href="<? echo base_url(); ?>index.php/claims/edit/<? echo $c->claim_id; ?>">View</a></td>
                                        <td style="text-align:center">

                                                <a class="btn btn-success" href="<? echo base_url(); ?>index.php/claims/contacts/<? echo $c->claim_id; ?>"" title="Add Contact">
                                                            <i class="icon-plus "></i>
                                                        </a>
                                        </td>
                                        <td style="text-align:center">
                                            <? if( $c->pcnt>0 ) : ?>
                                                <a class="btn btn-success" href="<? echo base_url(); ?>index.php/property/claim/<? echo $c->claim_id; ?>">
                                                    <i class="icon-zoom-in "></i>
                                                </a>
                                                <a class="btn btn-danger" href="javascript: void(0);" onclick="javascript: confirmdelete('/index.php/property/delete/<? echo $c->claim_id; ?>');">
                                                    <i class="icon-trash "></i>
                                                </a>
                                            <? else : ?>
                                                <a class="btn btn-success" href="<? echo base_url(); ?>index.php/property/claim/<? echo $c->claim_id; ?>" title="Add Property">
                                                    <i class="icon-plus "></i>
                                                </a>
                                            <? endif; ?>
                                        </td>
                                        <td style="text-align:center">
                                            <a class="btn btn-success" href="<? echo base_url(); ?>index.php/claims/policy/<? echo $c->claim_id; ?>">
                                                <i class="icon-zoom-in "></i></a>
                                            </a>
                                        </td>
                                        <td style="text-align:center">
                                            <a class="btn btn-success" href="<? echo base_url(); ?>index.php/claims/view/<? echo $c->claim_id; ?>">
                                                <i class="icon-zoom-in "></i>
                                            </a>
                                        </td>
                                    </tr>
                                <? endforeach;
                                for($c=$rcount;$c<=12;++$c) : ?>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td style="text-align:center">
                                            &nbsp;
                                        </td>
                                        <td style="text-align:center">
                                            &nbsp;
                                        </td>
                                        <td style="text-align:center">
                                            &nbsp;
                                        </td>
                                        <td style="text-align:center">
                                            &nbsp;
                                        </td>
                                        <td style="text-align:center">
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

            <? include('inc/right.blank.php'); ?>

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