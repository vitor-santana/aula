<?php
  
        class ReservaDAO extends CI_Model{
        public function insert(Reserva $res){
            $this->db->insert('Reserva',$res);
        }
    }