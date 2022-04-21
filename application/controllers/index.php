<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

    function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('login')){
          redirect(base_url().'clogin');         
        }
        $this->load->model('mestudio');
    }

	public function index(){

        $data = array(
        'resultado' => $this->mestudio->informesEnviados() 
        );  
        
        if($this->session->userdata('id_rol')==8){
            $this->load->view('layouts/header');
            $this->load->view('layouts/asideMedico');
            $this->load->view('admin/vdashboard',$data);
            $this->load->view('layouts/footer');
            }
        elseif($this->session->userdata('id_rol')==1){
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/vdashboard',$data);
            $this->load->view('layouts/footer');
            }
        else{
            $this->load->view('layouts/header');
            $this->load->view('layouts/asideAdministrativo');
            $this->load->view('admin/vdashboard',$data);
            $this->load->view('layouts/footer');
            } 
		     	
	}    
}

?>
