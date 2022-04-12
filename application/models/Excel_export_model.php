<?php
class Excel_export_model extends CI_Model
{
    function fetch_data(){   
        $fecha_desde = $this->input->post('txtfecha_desde');
        $fecha_hasta = $this->input->post('txtfecha_hasta');
               
        $this->db->select();
        $this->db->where('fecha_estudio>=',$fecha_desde);
        $this->db->where('fecha_estudio<=',$fecha_hasta);
        
        $query = $this->db->get('estudio');
        $query->result();         
        return $query->result(); 
    }
}