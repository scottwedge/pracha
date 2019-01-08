<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
        $this->load->database("default");
    }
    public function check_department_type($name){

        $this->db->select('1')->from('department_tab')->where('department_name',$name)->where('status !=',0)
        ;
        return $this->db->get()->result()?1:0;
    }
    public function save_department($data){
        $this->db->insert('department_tab',$data);
        return $this->db->affected_rows()?1:0;

    }
    public  function department_list(){
        $this->db->select('*')->from('department_tab')->where('status !=0')->order_by('updated_at','desc');
        return $this->db->get()->result();

    }
    public function get_department_by_id($id){
        $this->db->select('*')->from('department_tab')->where('department_id',$id)->where('status !=',0);
        return $this->db->get()->row();

    }
    public function check_edit_department($name,$department_id){
        $this->db->select('*')->from('department_tab')->where('department_id !=',$department_id)->where('department_name',$name)
            ->where('status !=',0);;
        $res= $this->db->get()->result_array();

        $list = array_column($res, 'department_name');


        if(in_array($name,$list)){

            return 1;
        }
        else{
            return 0;
        }


    }
    public function save_edit_department($data,$department_id){
        $this->db->where('department_id',$department_id);
        $this->db->update('department_tab',$data);
        return  $this->db->affected_rows()?1:0;


    }
    public function change_status($data,$id){
        $this->db->where('department_id',$id);
        $this->db->update('department_tab',$data);
        return  $this->db->affected_rows()?1:0;

    }
}