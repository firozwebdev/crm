<?php
require_once('application/libraries/phpass-0.3/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

class Account_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function create()
    {
        $user_email=$this->input->post('email');
        $user_pass=$this->input->post('password');
        $username=$this->input->post('username');


        if($user_email == '' OR $user_pass == ''):
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Check username or password
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header('location: '.base_url().'index.php/admin/add_user');
            exit;
        endif;

        $this->db->where('email', $user_email);
        $query = $this->db->get_where(dbpre('users'));

        if ($query->num_rows() > 0) :
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Email is associated with another account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header('location: '.base_url().'index.php/admin/add_user');
            exit;
        endif;

        $hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
        //$user_pass_hashed = $hasher->HashPassword($user_pass);
        $user_pass_hashed = md5($user_pass);

        $data = array(
            'first_name'=> $this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'telephone_one'=>$this->input->post('telephone_one'),
            'telephone_two'=>$this->input->post('telephone_two'),
            'fax'=>$this->input->post('fax'),
            'address_one'=>$this->input->post('address_one'),
            'address_two'=>$this->input->post('address_two'),
            'city'=>$this->input->post('city'),
            'state'=>$this->input->post('state'),
            'zip'=>$this->input->post('zip'),


            'email' => $user_email,
            'username' => $username,
            'password' => $user_pass_hashed,
            'usertype' => $this->input->post('user_type'),
            'activation' => 1,
            'registerDate' => date('c'),
        );

        $this->db->set($data);

        $this->db->insert(dbpre('users'));
        $user_id = $this->db->insert_id();
        //$this->map($user_id, $_POST['contact_type']);

        return $user_id;
    }

    /**
     * Update a user account
     */
    function update($user_id = null)
    {
        if($user_id == null)
            return false;

        //Check against user table
        $this->db->where('id', $user_id);
        $query = $this->db->get_where(dbpre('users'));

        if ($query->num_rows() == 0)
            return false;

        $user_pass = $_POST['password'];

       // $hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
       // $user_pass_hashed = $hasher->HashPassword($user_pass);
        $user_pass_hashed = md5($user_pass) ;


        //Update account into the database

        if($user_pass){
            $data = array(
                'first_name'=> $this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'telephone_one'=>$this->input->post('telephone_one'),
                'telephone_two'=>$this->input->post('telephone_two'),
                'fax'=>$this->input->post('fax'),
                'address_one'=>$this->input->post('address_one'),
                'address_two'=>$this->input->post('address_two'),
                'city'=>$this->input->post('city'),
                'state'=>$this->input->post('state'),
                'zip'=>$this->input->post('zip'),

                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $user_pass_hashed,
                'usertype' => $this->input->post('user_type'),
            );

        }
        if(!$user_pass){
            $data = array(
                'first_name'=> $this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'telephone_one'=>$this->input->post('telephone_one'),
                'telephone_two'=>$this->input->post('telephone_two'),
                'fax'=>$this->input->post('fax'),
                'address_one'=>$this->input->post('address_one'),
                'address_two'=>$this->input->post('address_two'),
                'city'=>$this->input->post('city'),
                'state'=>$this->input->post('state'),
                'zip'=>$this->input->post('zip'),

                'username' => $_POST['username'],
                'email' => $_POST['email'],
                //'password' => $user_pass_hashed,
                'usertype' => $this->input->post('user_type'),
            );

         }
        $this->db->where('id', $user_id);
        $this->db->update(dbpre('users'), $data);

        return true;


    }

    /**
     * Login and sets session variables
     */

    //just working on smskushtia@gmail.com
function login()
    {

        $user_email=$this->input->post('email');
        $user_pass=md5($this->input->post('password'));


        if($user_email == '' OR $user_pass == '') :
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Check Login
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        endif;

        $user_tbl=dbpre('users');
        $con_tbl=dbpre('contacts');

       /* $query = $this->db->query("SELECT ".$user_tbl.".email,
			".$user_tbl.".username,
			".$user_tbl.".usertype,
			".$user_tbl.".`id` as user_id,
			".$con_tbl.".contact_id,
			".$con_tbl.".contact_type,
			".$con_tbl.".client_id
		FROM ".$user_tbl." INNER JOIN ".$con_tbl." ON ".$user_tbl.".id = ".$con_tbl.".user_id
		WHERE email='".mysql_escape_string( $user_email )."' OR username='".mysql_escape_string( $user_email )."'");
    */



        $query = $this->db->query("SELECT * from live_users where email='$user_email' and password='$user_pass'") ;
        //echo '<pre>';
        //print_r($query->row());
        //die();

        if ($query->num_rows() > 0)
        {
            $user_data = $query->row_array();
            //Set session data
            unset($user_data['password']);
            $user_data['user_id'] = $user_data['id'];
            $user_data['client_id'] = $user_data['client_id'];
            $user_data['email'] = $user_data['email'];
            $user_data['usertype'] = $user_data['usertype'];
            $user_data['username'] = $user_data['username'];
            $user_data['user'] = $user_data['email']; // for compatibility with Simplelogin
            $user_data['logged_in'] = time();

            $this->session->set_userdata($user_data);
             
           header( 'location: '.base_url() );
           exit;
        }
        else
        {
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Problem Accessing Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        }

    }



//currently working

  /* function login()
    {
        $user_email = $_POST['email'];
        $user_pass = md5($_POST['password']);

        if($user_email == '' OR $user_pass == '') :
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Check Login
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        endif;

        $user_tbl=dbpre('users');
        $con_tbl=dbpre('contacts');


        $query = $this->db->query("SELECT * from live_users where email='$user_email' and password='$user_pass'");
        $row = $query->row();


        if ($query->num_rows() > 0)
        {
            $user_data = $query->row();
            //Set session data
            unset($user_data['password']);
            $user_data['user_id'] = $user_data['user_id'];
            $user_data['client_id'] = $user_data['client_id'];
            $user_data['email'] = $user_data['email'];
            $user_data['usertype'] = $user_data['usertype'];
            $user_data['username'] = $user_data['username'];
            $user_data['user'] = $user_data['email']; // for compatibility with Simplelogin
            $user_data['logged_in'] = time();

            $this->session->set_userdata($user_data);
    echo 'hello';
            die();
            header( 'location: '.base_url() );
            exit;
        }
        else
        {
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Problem Accessing Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        }

    }

*/

//myfile
 /* function login()
    {
        $user_email =$this->input->post('email');
        $user_pass =  md5($this->input->post('password')) ;


        if($user_email == '' OR $user_pass == '') :
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Check Login
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        endif;



        $query = $this->db->query("SELECT * from live_users where email='$user_email' and password='$user_pass'");
       // $row = $query->row();
        //echo $query->num_rows;
       // die();

        if ($query->num_rows >0)
        {

            $logged_user = $query->row();
            $user_data=[];
            $user_data['user_id'] = $logged_user->id;
            $user_data['email'] = $logged_user->email;
            $user_data['usertype'] = $logged_user->usertype;
            $user_data['username'] = $logged_user->username;
            $user_data['logged_in'] = 1;

           // echo $user_data['user_id'];
            //die();

            //$user_data['email'] = $user_data['email'];
           // $user_data['usertype'] = $user_data['usertype'];

            //$user_data['username'] = $user_data['username'];

           // $user_data['logged_in'] = time();

            $this->session->set_userdata($user_data);

            header( 'location: '.base_url() );
            exit;
        }
        else
        {
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Problem Accessing Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
        }

    }
    /**
     * Check Session
     */
    function logged()
    {
        if( !$this->session->userdata('client_id') ) :
            header('location: /');
            exit;
        endif;
    }

    /**
     * Logout user
     */
    function logout() {

        $this->session->sess_destroy();
    }

    /**
     * Delete user
     */
    function delete($user_id)
    {
        if(!is_numeric($user_id))
            return false;

        return $this->db->delete(dbpre('users'), array('id' => $user_id));
    }


    /**
     * Edit a user password
     */
    function edit_password($user_email = '', $old_pass = '', $new_pass = '')
    {
        $this->db->select('user_pass');
        $query = $this->db->get_where($this->user_table, array('user_email' => $user_email));
        $user_data = $query->row_array();

        $hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
        if (!$hasher->CheckPassword($old_pass, $user_data['user_pass'])){ //old_pass is the same
            return FALSE;
        }

        // Hash new_pass using phpass
        $user_pass_hashed = $hasher->HashPassword($new_pass);
        // Insert new password into the database
        $data = array(
            'user_pass' => $user_pass_hashed,
            'user_modified' => date('c')
        );

        $this->db->set($data);
        $this->db->where('email', $user_email);
        if(!$this->db->update(dbpre('users'), $data)){ // There was a problem!
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function active()
    {
        $user_id = mysql_real_escape_string( $this->uri->segment(3) );
        $add = new stdclass;
        $add->id = $user_id;
        $add->activation = 0;
        $this->db->where('id',$user_id);
        $this->db->update(dbpre('users'),$add);
        echo '0';
        exit;
    }
    function suspend()
    {
        $user_id = mysql_real_escape_string( $this->uri->segment(3) );
        $add = new stdclass;
        $add->id = $user_id;
        $add->activation = 1;
        $this->db->where('id',$user_id);
        $this->db->update(dbpre('users'),$add);
        echo '1';
        exit;
    }
    /**
     * Edit a user password
     */
    function map($user_id,$group_id)
    {
        $add = new stdclass;
        $add->user_id = $user_id;
        $add->group_id = $group_id;
        $this->db->insert(dbpre('user_usergroup_map'),$add);
    }
    function client_id()
    {

        if( $this->session->userdata('client_id')=='' )
        {
            header('location: /');
            exit;
        }
        else
            return $this->session->userdata('client_id');
    }
    function staff_reps($type)
    {

        $conQ = $this->db->query("SELECT ".dbpre('contacts').".contact_id,
			".dbpre('contacts').".contact_first_name,
			".dbpre('contacts').".contact_primary_phone,
			".dbpre('contacts').".contact_last_name
	    FROM ".dbpre('contacts')."
		WHERE ".dbpre('contacts').".contact_type='".$type."' AND ".dbpre('contacts').".client_id=".$this->session->userdata('client_id') );

        return $conQ->result();
    }
    function role($user)
    {
        $conQ = $this->db->query("SELECT ".dbpre('usergroups').".title
FROM ".dbpre('users')." INNER JOIN ".dbpre('usergroups')." ON ".dbpre('users').".usertype = ".dbpre('usergroups').".id
WHERE ".dbpre('users').".id='".$user."'");

        $data = $conQ->row();
        return $data->title;
    }
    function states()
    {
        return array('AL'=>"Alabama",
            'AK'=>"Alaska",
            'AZ'=>"Arizona",
            'AR'=>"Arkansas",
            'CA'=>"California",
            'CO'=>"Colorado",
            'CT'=>"Connecticut",
            'DE'=>"Delaware",
            'DC'=>"District Of Columbia",
            'FL'=>"Florida",
            'GA'=>"Georgia",
            'HI'=>"Hawaii",
            'ID'=>"Idaho",
            'IL'=>"Illinois",
            'IN'=>"Indiana",
            'IA'=>"Iowa",
            'KS'=>"Kansas",
            'KY'=>"Kentucky",
            'LA'=>"Louisiana",
            'ME'=>"Maine",
            'MD'=>"Maryland",
            'MA'=>"Massachusetts",
            'MI'=>"Michigan",
            'MN'=>"Minnesota",
            'MS'=>"Mississippi",
            'MO'=>"Missouri",
            'MT'=>"Montana",
            'NE'=>"Nebraska",
            'NV'=>"Nevada",
            'NH'=>"New Hampshire",
            'NJ'=>"New Jersey",
            'NM'=>"New Mexico",
            'NY'=>"New York",
            'NC'=>"North Carolina",
            'ND'=>"North Dakota",
            'OH'=>"Ohio",
            'OK'=>"Oklahoma",
            'OR'=>"Oregon",
            'PA'=>"Pennsylvania",
            'RI'=>"Rhode Island",
            'SC'=>"South Carolina",
            'SD'=>"South Dakota",
            'TN'=>"Tennessee",
            'TX'=>"Texas",
            'UT'=>"Utah",
            'VT'=>"Vermont",
            'VA'=>"Virginia",
            'WA'=>"Washington",
            'WV'=>"West Virginia",
            'WI'=>"Wisconsin",
            'WY'=>"Wyoming");

    }
}
?>