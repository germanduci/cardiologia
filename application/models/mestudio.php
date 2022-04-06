<?php
class Mestudio extends CI_Model{
    public function mselectestudio(){  
        
        $this->db->select('e.*,us.id_usuario idusuario, us.user username_usuario');
        $this->db->from('estudio e');
        $this->db->join('usuario us','e.idusuario_subido=us.id_usuario');        
        $this->db->where('e.estado_envio=','0');
        $this->db->group_by('e.id_estudio');
        $resultado= $this->db->get('estudio');
        $resultado->result();
        return $resultado->result();
    }

    public function mbuscarestudio($dni_paciente){
        $this->db->select('e.*');
        $this->db->from('estudio e');       
        $this->db->where('e.dni_paciente =',$dni_paciente);
        $this->db->limit(1);
        $resultado = $this->db->get('estudio');
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
}
?>
