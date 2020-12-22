<?php
    class User_model extends CI_model{
        function create($formArray){
            $this->db->insert('users',$formArray);
        }
        function getUser($email, $password){
            $this->db->where('email',$email);
            $user=$this->db->get('users')->row_array(); 
            if($user['password']==md5($password))
                return $user;
            else
                return false;
        }
        function checkUser($email){
            $this->db->where('email',$email);
            $user=$this->db->get('users')->row_array();
            if($user)
                return 1;
            else
                return 0;
        }
    }
?>