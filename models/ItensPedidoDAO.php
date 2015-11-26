<?php
  
        class ItensPedidoDAO extends CI_Model{
        public function insert(ItensPedido $intped){
            $this->db->insert('ItensPedido',$intped);
        }
    }