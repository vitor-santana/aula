<?php
  
        class ClienteDAO extends CI_Model{
        public function insert(Cliente $cli){
            $this->db->insert('Cliente',$cli);
        }
    }
    