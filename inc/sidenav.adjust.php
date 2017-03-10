<ul class="nav main-menu">
    <li><a href=" <? echo base_url(); ?>index.php"><i class="icon-bar-chart"></i><span class="hidden-sm text"> Dashboard</span></a></li>
   <!-- <li>
        <a class="dropmenu" href=" <? echo base_url(); ?>index.php/reports"><i class="icon-list-alt"></i><span class="hidden-sm text"> Claims</span> <span class="chevron closed"></span></a>
        <ul>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/claims/add"><i class="icon-chevron-right"></i><span class="hidden-sm text"> New</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/claims"><i class="icon-chevron-right"></i><span class="hidden-sm text"> List</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/property"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Properties</span></a></li>
        </ul>

    </li>-->
    <li>
        <a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-sm text"> Appointments</span> <span class="chevron closed"></span></a>
        <ul>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/events/"><i class="icon-plus"></i><span class="hidden-sm text"> Events</span></a></li>
            <!--<li><a class="submenu" href=" <? echo base_url(); ?>index.php/tasks/"><i class="icon-plus"></i><span class="hidden-sm text"> Tasks</span></a></li>-->
            <li>
                <a href=" <? echo base_url(); ?>index.php/calendar/"><i class="icon-calendar"></i><span class="hidden-sm text"> Calendar</span></a>
            <!--<li><a class="submenu" href=" <? echo base_url(); ?>index.php/calendar/overview"><i class="icon-search"></i><span class="hidden-sm text"> Overview</span></a></li>-->
        </ul>
    <li>
       <!-- <a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-sm text"> Log</span> <span class="chevron closed"></span></a>
        <ul>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/logs/create"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Create</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/logs/"><i class="icon-chevron-right"></i><span class="hidden-sm text"> List</span></a></li>
        </ul>

    </li>
<!--    <li>
        <a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-sm text"> Reports</span> <span class="chevron closed"></span></a>
        <ul>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/reports/property"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Property</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/reports/activity"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Activity</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/reports/summary"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Summary</span></a></li>
        </ul>

    </li>-->
    <li>
        <a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-sm text"> To Do</span> <span class="chevron closed"></span></a>
        <ul>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/todo/create"><i class="icon-chevron-right"></i><span class="hidden-sm text"> Create</span></a></li>
            <li><a class="submenu" href=" <? echo base_url(); ?>index.php/todo"><i class="icon-chevron-right"></i><span class="hidden-sm text">List</span></a></li>

        </ul>

    </li>
<!--    <li>
        <a href=" <? echo base_url(); ?>index.php/insurers"><i class="icon-calendar"></i><span class="hidden-sm text"> Insurers</span></a>
    </li>-->

    <li>
        <a href=" <? echo base_url(); ?>index.php/contacts"><i class="icon-calendar"></i><span class="hidden-sm text"> Contacts</span></a>
    </li>


    <li>
        <a href=" <? echo base_url(); ?>index.php/map"><i class="icon-calendar"></i><span class="hidden-sm text"> Map</span></a>
    </li>

    <li>
        <a class="dropmenu" href="#"><i class="icon-calendar"></i><span class="hidden-sm text"> Administration</span><span class="chevron closed"></span></a>
        <ul>
            <!--<li><a class="submenu" href=" <? echo base_url(); ?>index.php/admin/lists"><i class="icon-plus"></i><span class="hidden-sm text"> Lists / Values</span></a></li>-->
            <? if( $this->session->userdata('usertype')=='9' ) : ?>
                <li><a class="submenu" href=" <? echo base_url(); ?>index.php/admin/users"><i class="icon-plus"></i><span class="hidden-sm text"> Staff</span></a></li>
            <? endif; ?>
        </ul>
    </li>

</ul>
