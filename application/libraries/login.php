<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('phpass-0.3/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

/**
 * SimpleLoginSecure Class
 */
class Login
{
	var $CI;
	var $user_table = 'users';

	/**
	 * Create a user account
	 */
	function create()
	{
        $user_email = $_POST['contact_email'];
        $user_pass = $_POST['password'];
		$this->CI =& get_instance();
		


		//Make sure account info was sent
		if($user_email == '' OR $user_pass == '')
			return false;

		//Check against user table
		$this->CI->db->where('user_email', $user_email); 
		$query = $this->CI->db->get_where($this->user_table);
		
		if ($query->num_rows() > 0) //user_email already exists
			return false;

		//Hash user_pass using phpass
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		$user_pass_hashed = $hasher->HashPassword($user_pass);

		//Insert account into the database
		$data = array(
					'user_email' => $user_email,
					'user_pass' => $user_pass_hashed,
					'user_date' => date('c'),
					'user_modified' => date('c'),
				);

		$this->CI->db->set($data); 

		if(!$this->CI->db->insert($this->user_table)) //There was a problem! 
			return false;						
				
		$this->login($user_email, $user_pass);
		
		return true;
	}

	/**
	 * Update a user account
	 *
	 * Only updates the email, just here for you can 
	 * extend / use it in your own class.
	 *
	 * @access	public
	 * @param integer
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function update($user_id = null, $user_email = '', $auto_login = true) 
	{
		$this->CI =& get_instance();

		//Make sure account info was sent
		if($user_id == null OR $user_email == '') {
			return false;
		}
		
		//Check against user table
		$this->CI->db->where('user_id', $user_id);
		$query = $this->CI->db->get_where($this->user_table);
		
		if ($query->num_rows() == 0){ // user don't exists
			return false;
		}
		
		//Update account into the database
		$data = array(
					'user_email' => $user_email,
					'user_modified' => date('c'),
				);
 
		$this->CI->db->where('user_id', $user_id);

		if(!$this->CI->db->update($this->user_table, $data)) //There was a problem! 
			return false;						
				
		if($auto_login){
			$user_data['user_email'] = $user_email;
			$user_data['user'] = $user_data['user_email']; // for compatibility with Simplelogin
			
			$this->CI->session->set_userdata($user_data);
			}
		return true;
	}

	/**
	 * Login and sets session variables
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function login()
	{
        $user_email = $_POST['username'];
        $user_pass = $_POST['password'];
		$this->CI =& get_instance();

		if($user_email == '' OR $user_pass == '')
			return false;

        $user_tbl=dbpre('users');
        $con_tbl=dbpre('contacts');

		$query = $this->CI->db->query("SELECT ".$user_tbl.".email,
			".$user_tbl.".username,
			".$user_tbl.".`name`,
			".$user_tbl.".`id` as user_id,
			".$con_tbl.".contact_id,
			".$con_tbl.".contact_id,
			".$con_tbl.".client_id
		FROM ".$user_tbl." INNER JOIN ".$con_tbl." ON ".$user_tbl.".id = ".$con_tbl.".user_id
		WHERE email='".mysql_escape_string( $user_email )."' OR username='".mysql_escape_string( $user_email )."'");

		if ($query->num_rows() > 0) 
		{
            $user_data = $query->row_array();


            //Set session data
			unset($user_data['password']);
			$user_data['user_id'] = $user_data['user_id'];
			$user_data['client_id'] = $user_data['client_id'];
			$user_data['email'] = $user_data['email'];
			$user_data['user'] = $user_data['email']; // for compatibility with Simplelogin
			$user_data['logged_in'] = true;

            return $user_data;
		} 
		else 
		{
            return array();
		}	

	}

	/**
	 * Logout user
	 *
	 * @access	public
	 * @return	void
	 */
	function logout() {
		$this->CI =& get_instance();

		$this->CI->session->sess_destroy();
	}

	/**
	 * Delete user
	 *
	 * @access	public
	 * @param integer
	 * @return	bool
	 */
	function delete($user_id) 
	{
		$this->CI =& get_instance();

		if(!is_numeric($user_id))
			return false;			

		return $this->CI->db->delete($this->user_table, array('user_id' => $user_id));
	}
	
	
	/**
	* Edit a user password
	* @author    Stéphane Bourzeix, Pixelmio <stephane[at]bourzeix.com>
	* @author    Diego Castro <castroc.diego[at]gmail.com>
	*
	* @access  public
	* @param  string
	* @param  string
	* @param  string
	* @return  bool
	*/
	function edit_password($user_email = '', $old_pass = '', $new_pass = '')
	{
		$this->CI =& get_instance();
		// Check if the password is the same as the old one
		$this->CI->db->select('user_pass');
		$query = $this->CI->db->get_where($this->user_table, array('user_email' => $user_email));
		$user_data = $query->row_array();

		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);	
		if (!$hasher->CheckPassword($old_pass, $user_data['user_pass'])){ //old_pass is the same
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Password Problem
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
            exit;
		}
		
		// Hash new_pass using phpass
		$user_pass_hashed = $hasher->HashPassword($new_pass);
		// Insert new password into the database
		$data = array(
			'user_pass' => $user_pass_hashed,
			'user_modified' => date('c')
		);
		
		$this->CI->db->set($data);
		$this->CI->db->where('user_email', $user_email);
		if(!$this->CI->db->update($this->user_table, $data)){ // There was a problem!
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
}
?>
