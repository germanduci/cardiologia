<?php
    class Musuario extends CI_Model{
        public function mlogeo($user,$pass){

            $this->salutte = $this->load->database("salutte",TRUE);

            $pass=md5($pass);
            $sql="SELECT u.username as user, u.password AS pass ,u.id AS user_id,p.perfil_id AS perfil_id
            FROM usuario as u 
            JOIN perfil_usuario AS p ON u.id=p.usuario_id
            WHERE u.username = '$user' AND u.password='$pass'";
            
            $resultado = $this->salutte->query($sql);            
            if($resultado->num_rows()>0){
                return $resultado->row();
            } 
            else{
                return false;
            }
        }      

    }
?>

