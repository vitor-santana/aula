<?php
  
        class RefeicaoDAO extends CI_Model{
        public function insert(Refeicao $ref){
            $this->db->insert('Refeicao',$ref);
        }
    }