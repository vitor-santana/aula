<?php
  
        class EntregaDAO extends CI_Model{
        public function insert(Entrega $entr){
            $this->db->insert('Entrega',$entr);
        }
    }