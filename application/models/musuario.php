<?php
    class Musuario extends CI_Model{
        public function mlogeo($user,$pass){
            $this->db->where('user',$user);
            $this->db->where('pass',$pass);
            $resultado = $this->db->get('usuario');
            if($resultado->num_rows()>0){
                return $resultado->row();
            } 
            else{
                return false;
            }
        }
    }
?>