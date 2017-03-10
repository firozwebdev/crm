<div id="search" class="col-sm-5 col-xs-8 col-lg-3">
    <form action="<? echo base_url(); ?>index.pbp/search/all" method="post">
        <input type="text" placeholder="search" />
        <i class="icon-search"></i>
    </form>
</div>
<!-- start: Header Menu -->
<div class="nav-no-collapse header-nav">
    <ul class="nav navbar-nav pull-right">
        <!-- start: User Dropdown -->
        <li class="dropdown" style="width:160px">
            <a class="btn account dropdown-toggle" data-toggle="dropdown" href="/index.php#">
                <div class="user">
                    <span class="hello">@<? echo $this->session->userdata('username'); ?></span>
<!--                    <span class="name">active: <?
                        $difference = time() - $this->session->userdata('logged_in');
                        $past = get_time_difference($difference, time());

                        if( $past['hours']!='0' ) $hours = $past['hours'] . "h ".':';
                        else $hours='';

                        echo $hours.$past['minutes'].'m'; ?>
                        </span>-->
                </div>
            </a>
            <ul class="dropdown-menu">
                <!--<li><a href="<? echo base_url(); ?>index.php/account/profile"><i class="icon-user"></i> Profile</a></li>-->
                <!--<li><a href="<? echo base_url(); ?>index.php/account/settings"><i class="icon-cog"></i> Settings</a></li>-->
                <li><a href="<? echo base_url(); ?>index.php/account/logout"><i class="icon-off"></i> Logout</a></li>
            </ul>
        </li>
        <!-- end: User Dropdown -->
    </ul>
</div>
<?
function get_time_difference($start, $end)
{
    $uts['start']      =    strtotime($start);
    $uts['end']        =    strtotime($end);
    if ($uts['start'] !==-1 && $uts['end'] !==-1)
    {
        if( $uts['end'] >= $uts['start'] )
        {
            return getdate($uts['end'] - $uts['start']);
        }
        else
        {
            trigger_error("Ending date/time is earlier than the start date/time", E_USER_WARNING);
        }
    }
    else
    {
        trigger_error("Invalid date/time data detected", E_USER_WARNING);
    }
    return(false);
} ?>