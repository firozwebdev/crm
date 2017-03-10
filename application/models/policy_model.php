<?php
class Policy_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }

    function save()
    {
        $var = new stdClass();
        $var->policy_display = $this->input->post('policy_display');
        $var->policy_number = $this->input->post('policy_number');
        $var->policy_loss_number = $this->input->post('policy_loss_number');
        $var->policy_type_label = $this->input->post('policy_type_label');
        $var->policy_carrier_name = $this->input->post('policy_carrier_name');
        $var->policy_address_1 = $this->input->post('policy_address_1');
        $var->policy_address_2 = $this->input->post('policy_address_2');
        $var->policy_city = $this->input->post('policy_city');
        $var->policy_phone = $this->input->post('policy_phone');
        $var->policy_fax = $this->input->post('policy_fax');
        $var->policy_email = $this->input->post('policy_email');
        $var->policy_state = $this->input->post('policy_state');
        $var->policy_zip = $this->input->post('policy_zip');
        $var->policy_effective_date = $this->input->post('policy_effective_date');
        $var->policy_estimation_date = $this->input->post('policy_estimation_date');
        $var->policy_coverage_A = $this->input->post('policy_coverage_A');
        $var->policy_coverage_A_acvrcv = $this->input->post('policy_coverage_A_acvrcv');
        $var->policy_coverage_B = $this->input->post('policy_coverage_B');
        $var->policy_coverage_B_acvrcv = $this->input->post('policy_coverage_B_acvrcv');
        $var->policy_coverage_C = $this->input->post('policy_coverage_C');
        $var->policy_coverage_C_acvrcv = $this->input->post('policy_coverage_C_acvrcv');
        $var->policy_coverage_D = $this->input->post('policy_coverage_D');
        $var->policy_coverage_D_acvrcv = $this->input->post('policy_coverage_D_acvrcv');
        $var->policy_coverage_E = $this->input->post('policy_coverage_E');
        $var->policy_coverage_E_acvrcv = $this->input->post('policy_coverage_E_acvrcv');
        $var->policy_coverage_F = $this->input->post('policy_coverage_F');
        $var->policy_coverage_F_acvrcv = $this->input->post('policy_coverage_F_acvrcv');

        $var->policy_loss_amount = $this->input->post('policy_loss_amount');
        $var->policy_ordinance_law = $this->input->post('policy_ordinance_law');
        $var->policy_building = $this->input->post('policy_building');
        $var->policy_contents = $this->input->post('policy_contents');
        $var->policy_scheduled_property = $this->input->post('policy_scheduled_property');
        $var->policy_deductibles = $this->input->post('policy_deductibles');
        $var->policy_fire_deductible = $this->input->post('policy_fire_deductible');
        $var->policy_fire_acvrcv = $this->input->post('policy_fire_acvrcv');
        $var->policy_wind_deductible = $this->input->post('policy_wind_deductible');
        $var->policy_wind_acvrcv = $this->input->post('policy_wind_acvrcv');
        $var->policy_flood_deductible = $this->input->post('policy_flood_deductible');
        $var->policy_flood_acvrcv = $this->input->post('policy_flood_acvrcv');
        $var->policy_earthquake_deductible = $this->input->post('policy_earthquake_deductible');
        $var->policy_earthquake_acvrcv = $this->input->post('policy_earthquake_acvrcv');
        $var->policy_spec = $this->input->post('policy_spec');
        $var->policy_general_liability = $this->input->post('policy_general_liability');
        $var->claim_id = $this->input->post('claim_id');
        $var->client_id = $this->account_model->client_id();

        if( !$this->input->post('policy_id') ) :
            $this->db->insert(dbpre('claim_policies'),$var);
            $policy_id = $this->db->insert_id();
        else:
            $this->db->where('policy_id',$this->input->post('policy_id'));
            $this->db->update(dbpre('claim_policies'),$var);
            $policy_id = $this->input->post('policy_id');
        endif;
        return $policy_id;
    }

    function get()
    {
        $conQ = $this->db->query("SELECT * FROM ".dbpre('claim_policies')." WHERE claim_id='".mysql_real_escape_string($this->uri->segment(3))."'" );
        return $conQ->row();
    }
}
?>