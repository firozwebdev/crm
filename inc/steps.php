<!--<div id="MyWizard" class="wizard">
    <ul class="steps">
        <li data-target="#step1" <? if( $this->uri->segment(1)!='property' ) echo ( $this->uri->segment(2)=='add' || $this->uri->segment(2)=='edit' ? 'class="active"' : '' ) ?> >
            <span class="badge <? if( $this->uri->segment(1)!='property' ) echo ( $this->uri->segment(2)=='add' || $this->uri->segment(2)=='edit' ? 'badge-info' : '' ) ?>">1</span>
            <span class="chevron"></span><? if( $this->uri->segment(2)!='add' && $this->uri->segment(3) ) : ?>
            <a href="<? echo base_url();?>index.php/claims/edit/<? echo $this->uri->segment(3); ?>"><? endif; ?>Claim</li>

        <li data-target="#step2" <? echo ( $this->uri->segment(2)=='contact' || $this->uri->segment(2)=='contacts' ? 'class="active"' : '' ) ?> >
            <span class="badge <? echo ( $this->uri->segment(2)=='contact' || $this->uri->segment(2)=='contacts' ? 'badge-info' : '' ) ?> ">2</span>
            <span class="chevron"></span><? if( $this->uri->segment(2)!='add' && $this->uri->segment(3) ) : ?>
            <a href="<? echo base_url();?>index.php/claims/contacts/<? echo $this->uri->segment(3); ?>"><? endif; ?>Contacts</a></li>

        <li data-target="#step3" <? echo ( $this->uri->segment(1)=='property' ? 'class="active"' : '' ) ?> >
            <span class="badge <? echo ( $this->uri->segment(1)=='property' ? 'badge-info' : '' ) ?> ">3</span>
            <span class="chevron"></span><? if( $this->uri->segment(2)!='add' && $this->uri->segment(3) ) : ?>
            <a href="<? echo base_url();?>index.php/property/claim/<? echo $this->uri->segment(3); ?>"><? endif; ?>Property</a></li>

        <li data-target="#step4" <? echo ( $this->uri->segment(2)=='policy' ? 'class="active"' : '' ) ?> >
            <span class="badge  <? echo ( $this->uri->segment(2)=='policy' ? 'badge-info' : '' ) ?> "">4</span>
            <span class="chevron"></span><? if( $this->uri->segment(2)!='add' && $this->uri->segment(3) ) : ?>
            <a href="<? echo base_url();?>index.php/claims/policy/<? echo $this->uri->segment(3); ?>"><? endif; ?>Policy</a></li>

        <li data-target="#step5" <? echo ( $this->uri->segment(2)!='add' && $this->uri->segment(2)=='loss' ? 'class="active"' : '' ) ?> ><span class="badge">5</span>
            <? if( $this->uri->segment(2)!='add' && $this->uri->segment(3) ) : ?>
            <a href="<? echo base_url();?>index.php/claims/loss/<? echo $this->uri->segment(3); ?>"><? endif; ?>Loss</a></li>
    </ul>
</div>-->

<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#contact_details" data-toggle="tab">Contact Details</a></li>
    <li><a href="#event_history" data-toggle="tab">Event History</a></li>

    <!--<li><a href="#order_history" data-toggle="tab">Order History</a></li>-->
    <li><a href="#log" data-toggle="tab">Log</a></li>
    <? echo $this->session->flashdata('msg'); ?>
</ul>
<div id="my-tab-content" class="tab-content">
     <div class="tab-pane active" id="contact_details">
         <table class="table table-hover table-striped" >
             <tr>
                 <th>Company Name :</th>
                 <td><?php echo $single_contact->contact_company; ?></td>
             </tr>
             <tr>
                 <th>Name :</th>
                 <td><?php echo $single_contact->contact_first_name.' '. $single_contact->contact_last_name; ?></td>
             </tr>
             <tr>
                 <th>Address :</th>
                 <td>
                     <address>
                         <?php echo $single_contact->contact_address_1; ?><br/>
                         <?php echo $single_contact->contact_address_2; ?><br/>
                         <?php echo $single_contact->contact_state.' '.$single_contact->contact_city.' '.$single_contact->contact_zip; ?>

                     </address>
                 </td>
             </tr>
             <tr>
                 <th>Email :</th>
                 <td><?php echo $single_contact->contact_email; ?></td>
             </tr>
             <tr>
                 <th>Primary Phone No. :</th>
                 <td><?php echo $single_contact->contact_primary_phone; ?></td>
             </tr>
             <tr>
                 <th>Secondary Phone No. :</th>
                 <td><?php echo $single_contact->contact_secondary_phone; ?></td>
             </tr>


         </table>
    </div>
    <div class="tab-pane " id="event_history">
        <div style="float: right; margin: 20px 0">
            <button id="download" class="btn btn-danger" onclick='window.location="<?php echo base_url(); ?>index.php/contacts/create_event_by_contact_id/<? echo $contact_id; ?>"'>Create Event</button>
        </div>
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>

                    <th  class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?
            foreach( $event_rows as $c ) :
                ?>
                <tr>
                    <td><a href="/index.php/contacts/view/<? echo $c->contact_id ?>"><? echo $c->calendar_title; ?></a></td>
                    <td>
                        <?php if($c->status ==0){
                            echo 'Pending';
                        }?>

                        <?php if($c->status ==1){
                            echo 'Done';
                        }?>

                        <?php if($c->status ==2){
                            echo 'Cancel';
                        }?>
                    </td>
                    <td class="text-center" style="width:20%">
                        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/contacts/contact_details_edit/<? echo $c->calendar_id ?>">
                            <i class="icon-edit "></i>
                        </a>

                       <!-- <a class="btn btn-danger" href="javascript: void(0);" onclick='javascript: confirmdelete("<?php echo base_url(); ?>index.php/contacts/delete/<? echo $c->calendar_id ?>");'>
                            <i class="icon-trash "></i>
                        </a>-->
                    </td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div>

<!--    <div class="tab-pane" id="order_history">
        <h1>Yellow</h1>
        <p>yellow yellow yellow yellow yellow</p>
    </div>-->
    <div class="tab-pane" id="log">
        <div style="float: right; margin: 20px 0">
           <!-- <button id="download" class="btn btn-danger" onclick='window.location="<?php echo base_url(); ?>index.php/contacts/create_log_by_contact_id/<? echo $contact_id; ?>"'>Add New Log</button>-->
            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/contacts/create_log_by_contact_id/<? echo $contact_id; ?>">Add New Log</a>
        </div>
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
            <tr>
                <th>Title</th>


                <th  class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?
            foreach( $log_rows as $c ) :
                ?>
                <tr>
                    <td><a href="/index.php/contacts/view/<? echo $c->contact_id ?>"><? echo $c->log_title; ?></a></td>

                    <td class="text-center" style="width:20%">
                        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/contacts/log_details_edit/<? echo $c->log_id ?>">
                            <i class="icon-edit "></i>
                        </a>

                        <!-- <a class="btn btn-danger" href="javascript: void(0);" onclick='javascript: confirmdelete("<?php echo base_url(); ?>index.php/contacts/delete/<? echo $c->calendar_id ?>");'>
                            <i class="icon-trash "></i>
                        </a>-->
                    </td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>

