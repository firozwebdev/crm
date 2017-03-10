<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo ( $this->uri->segment(2)=='add' ? 'Add' : 'Edit' ); ?> Claim :: SClaim</title>

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

                <a href="<? echo base_url(); ?>index.php#" id="main-menu-min" class="full visible-md visible-lg"></a>
			</div>
			<!-- end: Main Menu -->

			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">

        		<div class="row">

					<div class="col-sm-12 col-md-9">

                        <ol class="breadcrumb">
							<li><a href="<? echo base_url(); ?>index.php/">Dashboard</a></li>
							<li><a href="<? echo base_url(); ?>index.php/claims">Claims</a></li>
                            <? if( $row->claim_number ) : ?>
                                <li><a href="<? echo base_url(); ?>index.php/claims/view/<? echo $row->claim_id; ?>">Claim</a></li>
							<? endif;?>
                            <li class="active"><? echo ( $this->uri->segment(2)=='add' ? 'Add' : 'Edit' ); ?></li>
						</ol>

                        <div class="box">
                            <div class="box-header">
                                <h2></h2>
                                <div class="box-icon">
                                    <i class="icon-folder-close"></i>
                                </div>
                            </div>
							<div class="box-content">

                                        <? include('inc/steps.php');?>
                                        <? if( $this->uri->segment(2)=='edit' && $this->uri->segment(3)): ?>
                                            <div style="float: right; margin-bottom: 10px">
                                                <button id="download" class="btn btn-danger" onclick="window.location='/index.php/claims/delete/<? echo $row->claim_id; ?>'">Delete</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        <? endif; ?>
										<div class="row">
											<div class="col-lg-12">
												<form class="form-horizontal" action="<? echo base_url(); ?>index.php/claims/save" method="post">


													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_number">Claim Number:</label>
													  <div class="controls">
													    <input id="claim_number" name="claim_number" placeholder="Unique Identifier" class="input-xlarge" type="text" value="<? echo $row->claim_number; ?>">

													  </div>
													</div>

                                                    <div class="form-group">
                                                        <label class="control-label" for="date01">Claim Date</label>
                                                        <div class="controls row">
                                                            <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon">
                                                                <i class="icon-calendar"></i>
                                                                </span>
                                                                <input id="date01" class="form-control date-picker" type="text" name="claim_date_taken" data-date-format="mm/dd/yyyy" value="<? echo ( $row->claim_date_taken=='0000-00-00' ?  '' : $row->claim_date_taken ); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Select Basic -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="claim_folder_id">Folder:</label>
                                                        <div class="controls">
                                                            <select id="claim_folder_id" name="claim_folder_id" class="input-xlarge">
                                                                <option value="0"></option><?
                                                                foreach( $this->folders_model->total() as $fl ) : ?>
                                                                <option value="<? echo $fl->folder_id; ?>" <? echo ( $row->claim_folder_id==$fl->folder_id || $folder==$fl->folder_id ? ' selected ' : '' ); ?> ><? echo $fl->folder_name; ?></option>
                                                                <?
                                                                endforeach; ?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group" style="display: none" id="new_folder">
                                                        <label class="control-label" for="folder_name">Folder Name</label>
                                                        <div class="controls">
                                                            <input id="folder_name" name="folder_name" placeholder="" class="input-xlarge" type="text">

                                                        </div>
                                                    </div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="loss_type">Type of Loss:</label>
													  <div class="controls">
                                                          <select id="loss_type" name="loss_type" class="input-xlarge">
                                                              <option value="0"></option>
                                                              <? foreach( $this->forms_model->val_list( $this->forms_model->val_list_id('claim') ) as $opt ) : ?>
                                                                  <option value="<? echo $opt->value_id; ?>" <? echo ( $row->claim_ctype == $opt->value_id ? 'selected' : '' ); ?> ><? echo $opt->value_label; ?></option>
                                                              <? endforeach; ?>
                                                          </select>
													  </div>
													</div>


                                                    <!-- Text input-->
                                                    <div class="control-group" style="display: none" id="new_type">
                                                        <label class="control-label" for="add_type">New Type</label>
                                                        <div class="controls">
                                                            <input id="add_type" name="add_type" placeholder="" class="input-xlarge" type="text">

                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="claim_deduct">Deductible</label>
                                                        <div class="controls">
                                                            <input id="claim_deduct" name="claim_deduct" placeholder="$0.00" class="input-xlarge" type="text" value="$<? echo number_format($row->claim_deduct,2); ?>">

                                                        </div>
                                                    </div>


                                                    <!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_policy_carrier">Insurer</label>
													  <div class="controls">
                                                          <select id="claim_policy_carrier" name="claim_policy_carrier" class="input-xlarge">
                                                              <option value="0"></option>
                                                              <? foreach( $this->insurers_model->all() as $insrs ) : ?>
                                                                  <option value="<? echo $insrs->insurer_id; ?>"  <? echo ( $row->claim_policy_carrier == $insrs->insurer_id ? 'selected' : '' ); ?> ><? echo $insrs->insurer_name; ?></option>
                                                              <? endforeach; ?>
                                                          </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_carrier_adjuster">Adjuster</label>
													  <div class="controls">
													    <select id="claim_carrier_adjuster" name="claim_carrier_adjuster" class="input-xlarge" <? echo ( $row->claim_policy_carrier ? '' : ' readonly' ); ?> >
                                                            <option value="0"></option>
                                                            <? if( $row->claim_policy_carrier ) :
                                                                foreach( $this->insurers_model->insurer_reps(13,$row->claim_policy_carrier) as $insrs ) : ?>
                                                                    <option value="<? echo $insrs->contact_id; ?>"  <? echo ( $row->claim_carrier_adjuster == $insrs->contact_id ? 'selected' : '' ); ?> ><? echo $insrs->contact_first_name; ?></option>
                                                            <? endforeach;
                                                            endif; ?>
                                                        </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_carrier_estimator">Estimator</label>
													  <div class="controls">
													    <select id="claim_carrier_estimator" name="claim_carrier_estimator" class="input-xlarge"<? echo ( $row->claim_policy_carrier ? '' : ' readonly' ); ?>>
                                                            <option value="0"></option>
                                                            <? if( $row->claim_policy_carrier ) :
                                                                foreach( $this->insurers_model->insurer_reps(12,$row->claim_policy_carrier) as $insrs ) : ?>
                                                                    <option value="<? echo $insrs->contact_id; ?>"  <? echo ( $row->claim_carrier_estimator == $insrs->contact_id ? 'selected' : '' ); ?> ><? echo $insrs->contact_first_name; ?></option>
                                                            <? endforeach;
                                                            endif; ?>
                                                        </select>
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_value">Loss Value</label>
													  <div class="controls">
													    <input id="claim_loss_value" name="claim_loss_value" placeholder="$0.00" class="input-xlarge" type="text" value="$<? echo number_format($row->claim_loss_value,2); ?>">

													  </div>
													</div>



                                                    <div class="form-group">
                                                        <label class="control-label" for="date01">Date of Loss</label>
                                                        <div class="controls row">
                                                            <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon">
                                                                <i class="icon-calendar"></i>
                                                                </span>
                                                                <input id="date01" class="form-control date-picker" type="text" name="claim_loss_date" data-date-format="mm/dd/yyyy" value="<? echo ( $row->claim_loss_date=='0000-00-00' ?  '' : $row->claim_loss_date ); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="claim_policy_amount">Policy Amount</label>
                                                        <div class="controls">
                                                            <input id="claim_policy_amount" name="claim_policy_amount" placeholder="$0.00" class="input-xlarge" type="text" value="$<? echo number_format($row->claim_policy_amount,2); ?>">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label" for="date01">Date of Policy</label>
                                                        <div class="controls row">
                                                            <div class="input-group date col-sm-4">
                                                                <span class="input-group-addon">
                                                                <i class="icon-calendar"></i>
                                                                </span>
                                                                <input id="date01" class="form-control date-picker" type="text" name="claim_policy_date" data-date-format="mm/dd/yyyy" value="<? echo ( $row->claim_policy_date=='0000-00-00' ?  '' : $row->claim_policy_date ); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="claim_loss_sqft">Loss SqFt</label>
													  <div class="controls">
													    <input id="claim_loss_sqft" name="claim_loss_sqft" placeholder="" type="text" value="<? echo $row->claim_loss_sqft; ?>">

													  </div>
													</div>

													<!-- Textarea -->
													<div class="control-group">
													  <label class="control-label" for="claim_note">Note</label>
													  <div class="controls">
													    <textarea id="claim_note" name="claim_note" class="cleditor"><? echo $row->claim_note; ?></textarea>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_adjuster">Staff Adjuster</label>
													  <div class="controls">
													    <select id="claim_adjuster" name="claim_adjuster" class="input-xlarge">
                                                            <option value="0"></option>
                                                            <? foreach( $this->account_model->staff_reps(13) as $insrs ) : ?>
                                                                <option value="<? echo $insrs->contact_id; ?>"  <? echo ( $row->claim_adjuster == $insrs->contact_id ? 'selected' : '' ); ?>  ><? echo $insrs->contact_first_name; ?></option>
                                                            <? endforeach; ?>
                                                        </select>
													  </div>
													</div>

													<!-- Select Basic -->
													<div class="control-group">
													  <label class="control-label" for="claim_estimator">Staff Estimator</label>
													  <div class="controls">
													    <select id="claim_estimator" name="claim_estimator" class="input-xlarge">
                                                            <option value="0"></option>
                                                            <? foreach( $this->account_model->staff_reps(12) as $insrs ) : ?>
                                                                <option value="<? echo $insrs->contact_id; ?>"  <? echo ( $row->claim_estimator == $insrs->contact_id ? 'selected' : '' ); ?>  ><? echo $insrs->contact_first_name; ?></option>
                                                            <? endforeach; ?>
													    </select>
													  </div>
													</div>

													<!-- Select Multiple -->
													<div class="control-group">
													  <label class="control-label" for="assigned_staff[]">Assigned Staff</label>
													  <div class="controls">
													    <select id="assigned_staff[]" name="assigned_staff[]" class="input-xlarge" multiple="multiple">
                                                            <?php
                                                            foreach( $this->users_model->all() as $a ) : ?>
                                                                <option value="<? echo $a->user_id; ?>" <?
                                                                if( $this->session->userdata('user_id')==$a->user_id
                                                                    || $row->created_for==$a->user_id) echo 'selected'; ?>
                                                                    ><? echo $a->contact_first_name; ?></option>
                                                            <? endforeach; ?>
													    </select>
													  </div>
													</div>
													<!-- Button (Double) -->
													<div class="control-group text-center">
                                                          <input type="hidden" name="claim_id" value="<? echo $row->claim_id; ?>">
													      <button type="button" onclick="javascript: window.location='/index.php/claims';" id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                                                          <button id="button1id" name="button1id" class="btn btn-success"  onclick="javascript:
												if( !$('#claim_number').val() ) { $('#claim_number').css('border','1px red solid'); no_err = false; }
													else { $('#claim_number').css('border','');  }


												if( !$('#date01').val() ) { $('#date01').css('border','1px red solid'); no_err = false; }
													else { $('#date01').css('border',''); }

												if( $('#claim_folder_id').val()==0 ) { $('#claim_folder_id').css('border','1px red solid'); no_err = false; }
													else { $('#claim_folder_id').css('border','');  }
												if( $('#loss_type').val()==0 ) { $('#loss_type').css('border','1px red solid'); no_err = false; }
													else { $('#loss_type').css('border','');  }
												if( no_err==false )
													return false;
											 ">Save Claim</button>

													</div>

													</form>


                                                <? include('inc/debug.php') ?>


											</div><!--/col-->

										</div><!--/row-->

							</div>
						</div>
					</div><!--/col-->

					<div class="col-md-3 visible-md visible-lg" id="feed">

                        <? include('inc/right.claim.php');?>

                    </div><!--/col-->

				</div><!--/row-->







				</div>
				<!-- end: Content -->

				</div><!--/row-->

	</div><!--/container-->

        <div class="clearfix"></div>

        <? include('inc/footer.php');?>

        <script src="/assets/js/jquery.sparkline.min.js"></script>
        <script src="/assets/js/jquery.chosen.min.js"></script>
        <script src="/assets/js/jquery.cleditor.min.js"></script>
        <script src="/assets/js/jquery.autosize.min.js"></script>
        <script src="/assets/js/jquery.placeholder.min.js"></script>
        <script src="/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/assets/js/bootstrap-datepicker.min.js"></script>
        <script src="/assets/js/bootstrap-timepicker.min.js"></script>
        <script src="/assets/js/moment.min.js"></script>
        <script src="/assets/js/daterangepicker.min.js"></script>
        <script src="/assets/js/jquery.hotkeys.min.js"></script>
        <script src="/assets/js/bootstrap-wysiwyg.min.js"></script>
        <script src="/assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="/assets/js/fullcalendar.min.js"></script>

        <!-- inline scripts related to this page -->
        <script src="<? echo base_url(); ?>assets/js/pages/form-elements.js"></script>

        <!-- end: JavaScript-->
        <script>

            $(document).ready(function(){
                $('#claim_policy_carrier').change(function(){
                    $.ajax({
                        type: "GET",
                        url: "<? echo base_url(); ?>index.php/reps/ajax/adjuster/"+$(this).val(),
                        success: function(data){
                            $('#carrier_adjuster').prop('disabled', false);
                            $('#carrier_adjuster').html(data);
                        }
                    });
                    $.ajax({
                        type: "GET",
                        url: "<? echo base_url(); ?>index.php/reps/ajax/estimator/"+$(this).val(),
                        success: function(data){
                            $('#carrier_estimator').prop('disabled', false);
                            $('#carrier_estimator').html(data);
                        }
                    });
                });
            });</script>

</body>
</html>