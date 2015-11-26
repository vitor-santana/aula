<?php
  
        class LoginDAO extends CI_Model{
        public function insert(Login $log){
            $this->db->insert('Login',$log);
        }
    }