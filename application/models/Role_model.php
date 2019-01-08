<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
        $this->load->database("default");
    }
    public function check_role_type($name){

        $this->db->select('1')->from('roles_tab')->where('role_name',$name)
          ;
        return $this->db->get()->result()?1:0;
    }
    public function save_role($data){
        $this->db->insert('roles_tab',$data);
        return $this->db->affected_rows()?1:0;

    }
    public  function role_list(){
        $this->db->select('*')->from('roles_tab')->where('status !=0')->order_by('updated_at','desc');
        return $this->db->get()->result();

    }
    public function get_role_by_id($id){
        $this->db->select('*')->from('roles_tab')->where('role_id',$id);
        return $this->db->get()->row();

    }
    public function check_edit_role($name,$role_id){
        $this->db->select('*')->from('roles_tab')->where('role_id !=',$role_id)->where('role_name',$name);
        $res= $this->db->get()->result_array();

        $list = array_column($res, 'role_name');


        if(in_array($name,$list)){

            return 1;
        }
        else{
            return 0;
        }


    }
    public function save_edit_role($data,$role_id){
        $this->db->where('role_id',$role_id);
        $this->db->update('roles_tab',$data);
        return  $this->db->affected_rows()?1:0;


    }
    public function change_status($data,$id){
        $this->db->where('role_id',$id);
        $this->db->update('roles_tab',$data);
        return  $this->db->affected_rows()?1:0;

    }
}