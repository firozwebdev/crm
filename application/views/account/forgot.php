<!DOCTYPE html>
<html lang="en">
<head>

    <title>Lost Password :: SClaim</title>
    <? include('inc/header.php'); ?>

</head>

<body>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12 full">
            <div class="row">
                <div class="login-box">

                    <div class="header" style="height:8px">
                    </div>

                    <? echo $this->session->flashdata('msg'); ?>

                    <form class="form-horizontal login" action="<? echo base_url(); ?>index.php/account/login"
                          method="post">
                        <fieldset class="col-sm-12">
                            <div class="form-group">
                                <div class="controls row">
                                    <div class="input-group col-sm-12">
                                        <input type="text" class="form-control" id="username" name="username"
                                               placeholder="Username or E-mail"/>
                                        <span class="input-group-addon"><i class="icon-user"></i></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <button type="submit" class="btn btn-lg btn-primary col-xs-12">Recover Password</button>

                            </div>

                        </fieldset>

                    </form>

                    <a class="pull-left" href="<? echo base_url(); ?>index.php/">Login to Portal</a>

                    <div class="clearfix"></div>

                </div>
            </div>
            <!--/row-->

        </div>


    </div>
    <!--/row-->

</div>
<!--/container-->

<? include('inc/footer.php'); ?>

</body>
</html>