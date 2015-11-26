<?php
  
        class PedidoDAO extends CI_Model{
        public function insert(Pedido $ped){
            $this->db->insert('Pedido',$ped);
        }
    }