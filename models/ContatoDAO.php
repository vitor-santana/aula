<?php
  
        class ContatoDAO extends CI_Model{
        public function insert(Contato $cont){
            $this->db->insert('Contato',$cont);
        }
    }