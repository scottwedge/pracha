<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
        $this->load->database("default");
    }
    public function check_project_type($name,$apptype){

        $this->db->select('1')->from('project_type_tab')->where('project_type',$name)
            ->where('application_type',$apptype);
        return $this->db->get()->result()?1:0;
    }
    public function save_project_type($data){
        $this->db->insert('project_type_tab',$data);
        return $this->db->affected_rows()?1:0;

    }
    public  function get_project_type_list(){
        $this->db->select('*')->from('project_type_tab')->where('status !=0')->order_by('updated_at','desc');
        return $this->db->get()->result();

    }
    public function get_type_by_id($id){
        $this->db->select('*')->from('project_type_tab')->where('type_id',$id);
        return $this->db->get()->row();

    }
    public function check_project_edit_type($name,$apptype,$type_id){
        $this->db->select('*')->from('project_type_tab')->where('type_id !=',$type_id)->
        where('application_type',$apptype)->where('project_type',$name);
        $res= $this->db->get()->result_array();

        $list = array_column($res, 'project_type');


        if(in_array($name,$list)){

            return 1;
        }
        else{
            return 0;
        }


    }
    public function save_project_edit_type($data,$type_id){
        $this->db->where('type_id',$type_id);
        $this->db->update('project_type_tab',$data);
      return  $this->db->affected_rows()?1:0;


    }
    public function change_status($data,$type_id){
        $this->db->where('type_id',$type_id);
        $this->db->update('project_type_tab',$data);
        return  $this->db->affected_rows()?1:0;

    }
    public function get_roles(){
        $this->db->select('role_id,role_name')->from('roles_tab')->where('status !=',0);
        return $this->db->get()->result();

    }
    public function get_ptypes(){
        $this->db->select('type_id,project_type')->from('project_type_tab')->where('status !=',0);
        return $this->db->get()->result();

    }
    public function save_project_details($data){

        $this->db->insert('project_tab',$data);
        return  $this->db->affected_rows()?1:0;


    }
    public function save_project_type_details($data1){
        $this->db->insert_batch('type_of_project_tab',$data1);
        if ($this->db->affected_rows() == 0)
        {
            $this->db->trans_rollback();
            return 0;
        }
        else
        {
            return 1;
        }


    }
    public function save_team_details($data2){
        $this->db->insert_batch('ppl_in_project_tab',$data2);
        if ($this->db->affected_rows() == 0)
        {
            $this->db->trans_rollback();
            return 0;
        }
        else
        {
            $this->db->trans_commit();
            return 1;
        }



    }
    public function get_projects(){
        $this->db->select('*')->from('project_tab')->where('status !=',0);
        return $this->db->get()->result();


    }
}