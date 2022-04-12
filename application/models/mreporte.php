<?php
class mreporte extends CI_Model{     
    public function buscar_fechas(){

        $fecha_desde = $this->input->post('txtfecha_desde');
        $fecha_hasta = $this->input->post('txtfecha_hasta');
                
        $this->db->select();
        $this->db->where('fecha_estudio>=',$fecha_desde);
        $this->db->where('fecha_estudio<=',$fecha_hasta);       

        
        $resultado = $this->db->get('estudio');
        $resultado->result(); 
        
        return $resultado->result(); 
    }       
}
?>
