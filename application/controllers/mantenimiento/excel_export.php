<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class excel_export extends CI_Controller {

    public function index(){
        $this->load->model('excel_export_model');    

        $data["estudio"] = $this->excel_export_model->fetch_data();
        $data["fecha_desde"] = $this->input->post('txtfecha_desde');
        $data["fecha_hasta"] = $this->input->post('txtfecha_hasta'); 

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/vexport',$data);
        $this->load->view('layouts/footer');
    }

    public function export(){
        $this->load->model('excel_export_model');    

        $data["estudio"] = $this->excel_export_model->fetch_data();
        $data["fecha_desde"] = $this->input->post('txtfecha_desde');
        $data["fecha_hasta"] = $this->input->post('txtfecha_hasta');
        $this->load->view('admin/estudio/vexport_file', $data);
    }
}
