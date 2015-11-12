<?php
    class Model extends CI_Model {
        public function insert(Usuario $usu) {
            //Inserir no banco
            $this->db->insert('Usuario', $usu);
        }
        
        public function searchAll() {
            //Seleciona os usuários
            $query = $this->db->query("select * from Usuario");
            //Envia resultado da query para o controller
            return $query->result();
        }
        
        public function getUser($nome, $senha){
            $this->db->where('nome',$nome);  //SELECT * from User WHERE nome = $nome and senha = &senha
            $this->db->where('senha', $senha);
            $a = $this->db->get('Usuario');
            if ($a->num_rows()>0){
                if($a->row()->nome === "root"){
                    return "admin";
                }else{
                    return "comum";
                }
            }else{
                return false;
            }
        }
    }