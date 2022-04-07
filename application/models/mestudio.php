<?php
class Mestudio extends CI_Model{
    public function mselectestudio(){
        $sql='SELECT e.*, us.user user_upload FROM estudio e JOIN usuario us ON e.idusuario_subido=us.id_usuario WHERE e.estado_envio=0;';
        $resultado=$this->db->query($sql);        
        $resultado->result();
        return $resultado->result();  
        //AND e.idusuario_envio=us.id_usuario
        //SELECT e.*, us.user user_upload, us.user user_send FROM estudio e JOIN usuario us ON e.idusuario_subido=us.id_usuario AND e.idusuario_envio=us.id_usuario WHERE estado_envio=0;


    }

    public function mbuscarestudio($dni_paciente){
        
        /*$this->db->select('e.*');
        $this->db->from('estudio e');       
        $this->db->where('e.dni_paciente =',$dni_paciente);        
        $resultado = $this->db->get('estudio');
        return $resultado->result();*/

        $sql='SELECT e.*, us.user user_upload, us.user user_send 
        FROM estudio e 
        JOIN usuario us ON e.idusuario_subido=us.id_usuario 
        AND e.idusuario_envio=us.id_usuario 
        WHERE dni_paciente=? GROUP BY id_estudio';
        $resultado=$this->db->query($sql,$dni_paciente);  
        $resultado->result();
        return $resultado->result();
    }    

    public function minsertestudio($data){
        return $this->db->insert('estudio',$data);
    }
    ///OBTIENE LOS DATOS
    public function midupdateestudio($id_estudio){
        $this->db->where('id_estudio',$id_estudio);
        $resultado = $this->db->get('estudio');
        return $resultado->row();
    }
    ///MODIFICA
    public function mupdateestudio($id_estudio,$data){
        $this->db->where('id_estudio',$id_estudio);
        return $this->db->update('estudio',$data);
    }

    public function buscarEmail($dni_paciente){
        $this->salutte = $this->load->database("salutte",TRUE);
        
        $this->salutte->select('e.email');
        $this->salutte->from('persona e');
        $this->salutte->where('e.documento=',$dni_paciente);
        $this->salutte->limit(1);
        $resultado = $this->salutte->get('persona');
        return $resultado -> result();
    }
}
?>
