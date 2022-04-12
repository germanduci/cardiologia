<?php
class Mestudio extends CI_Model{
    ///BUSCA TODOS LOS RESULTADOS PENDIENTES DE ENVIO O ENTREGA
    public function mselectestudio(){
        $sql='SELECT e.* FROM estudio e WHERE e.estado_envio=0;';
        $resultado=$this->db->query($sql);        
        $resultado->result();
        return $resultado->result();       
    }
    ///BUSCA TODOS LOS RESULTADOS
    public function mselectestudiotodos(){
        $sql='SELECT e.* FROM estudio e group by id_estudio';
        $resultado=$this->db->query($sql);        
        $resultado->result();
        return $resultado->result();
    }
    ///BUSCA RESULTADO POR DNI
    public function mbuscarestudio($dni_paciente){
        $sql='SELECT e.* FROM estudio e WHERE dni_paciente=? GROUP BY id_estudio';
        $resultado=$this->db->query($sql,$dni_paciente);  
        $resultado->result();
        return $resultado->result();
    }    
    ///INSERTA
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
    ///BUSCA EMAIL DE PACIENTE EN DB SALUTTE
    public function buscarEmail($dni_paciente){
        $this->salutte = $this->load->database("salutte",TRUE);
        
        $this->salutte->select('e.email');
        $this->salutte->from('persona e');
        $this->salutte->where('e.documento=',$dni_paciente);
        $this->salutte->limit(1);
        $resultado = $this->salutte->get('persona');
        return $resultado -> result();
    }

    ///CUENTA RESULTADOS ENVIADOS POR MAIL
    public function informesEnviados(){        
        $sql1='SELECT id_estudio FROM estudio WHERE estado_envio=1;';
        $enviados=$this->db->query($sql1);        
        $enviados->result();        
        
        $sql2='SELECT id_estudio FROM estudio WHERE estado_envio=2;';
        $entregados=$this->db->query($sql2);        
        $entregados->result();        
        
        $sql3='SELECT id_estudio FROM estudio WHERE estado_envio=0;';
        $noenviados=$this->db->query($sql3);        
        $noenviados->result();        

        $resultado = array (
            'enviados'      => $enviados->num_rows(),
            'entregados'    => $entregados->num_rows(),
            'noenviados'    => $noenviados->num_rows(),
        );
        return $resultado;   
    }

}
?>
