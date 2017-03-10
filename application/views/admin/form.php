<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contacts :: SClaim</title>
    <? include('inc/header.php'); ?>

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
    <a href="/index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div id="content" class="col-lg-10 col-sm-11 ">


    <div class="row">

        <div class="col-sm-12 col-md-12">
            <ol class="breadcrumb">
                <li><a href="/index.php/">Dashboard</a></li>
                <li class="/index.php/contacts">Contacts</li>


            </ol>

            <div class="row">
                <div class="col-lg-12">

                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Form Name</legend>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_first_name">First name</label>

                                <div class="controls">
                                    <input id="contact_first_name" name="contact_first_name" placeholder=""
                                           class="input-xlarge" required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_last_name">Last Name</label>

                                <div class="controls">
                                    <input id="contact_last_name" name="contact_last_name" placeholder=""
                                           class="input-xlarge" required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_title">Title</label>

                                <div class="controls">
                                    <input id="contact_title" name="contact_title"
                                           placeholder="Example: Owner, Manager, or Tenant" class="input-xlarge"
                                           type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_company">Company</label>

                                <div class="controls">
                                    <input id="contact_company" name="contact_company"
                                           placeholder="Example: Business Name" class="input-xlarge" required=""
                                           type="text">

                                </div>
                            </div>

                            <!-- Multiple Checkboxes (inline) -->
                            <div class="control-group">
                                <label class="control-label" for="checkboxes"></label>

                                <div class="controls">
                                    <label class="checkbox inline" for="checkboxes-0">
                                        <input name="checkboxes" id="checkboxes-0" value="Primary Contact"
                                               type="checkbox">
                                        Primary Contact
                                    </label>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_email">eMail</label>

                                <div class="controls">
                                    <input id="contact_email" name="contact_email" placeholder="" class="input-xlarge"
                                           type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_primary_phone">Telephone</label>

                                <div class="controls">
                                    <input id="contact_primary_phone" name="contact_primary_phone" placeholder="Primary"
                                           class="input-xlarge" required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_secondary_phone">Telephone</label>

                                <div class="controls">
                                    <input id="contact_secondary_phone" name="contact_secondary_phone"
                                           placeholder="Secondary" class="input-xlarge" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_fax">Fax</label>

                                <div class="controls">
                                    <input id="contact_fax" name="contact_fax" placeholder="" class="input-xlarge"
                                           type="text">

                                </div>
                            </div>

                            <!-- Multiple Checkboxes (inline) -->
                            <div class="control-group">
                                <label class="control-label" for=""></label>

                                <div class="controls">
                                    <label class="checkbox inline" for="-0">
                                        <input name="" id="-0" value="Use Property Address" type="checkbox">
                                        Use Property Address
                                    </label>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_address_1">Address</label>

                                <div class="controls">
                                    <input id="contact_address_1" name="contact_address_1"
                                           placeholder="Property Number &amp; Street" class="input-xlarge" required=""
                                           type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_address_2">Address</label>

                                <div class="controls">
                                    <input id="contact_address_2" name="contact_address_2" placeholder="Unit Number"
                                           class="input-xlarge" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_city">City</label>

                                <div class="controls">
                                    <input id="contact_city" name="contact_city" placeholder="" class="input-xlarge"
                                           required="" type="text">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="control-group">
                                <label class="control-label" for="contact_state">State</label>

                                <div class="controls">
                                    <select id="contact_state" name="contact_state" class="input-xlarge">
                                        <option>Option one</option>
                                        <option>Option two</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="contact_zip">Zip</label>

                                <div class="controls">
                                    <input id="contact_zip" name="contact_zip" placeholder="XXXXX" class="input-xlarge"
                                           type="text">

                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="control-group">
                                <label class="control-label" for="button1id"></label>

                                <div class="controls">
                                    <button id="button1id" name="button1id" class="btn btn-success">Save Contact
                                    </button>
                                    <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>


                </div>
                <!--/col-->

            </div>
            <!--/row-->


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

<? include('inc/footer.php');?>

<!-- inline scripts related to this page -->
<script src="/assets/js/pages/index.js"></script>

<!-- end: JavaScript-->

</body>
</html>