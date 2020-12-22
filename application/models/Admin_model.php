<?php
    class Admin_model extends CI_model{
        function all(){
            return $users=$this->db->get('users')->result_array();
        }
        function getUser($_id){
            $this->db->where('_id',$_id);
            return $user=$this->db->get('users')->row_array();
        }
        function updateUser($id,$formArray){
            $this->db->where('_id',$id);
            $this->db->update('users',$formArray);
        }
        function deleteUser($id){
            $this->db->where('_id',$id);
            $this->db->delete('users');
        }
    }
?>