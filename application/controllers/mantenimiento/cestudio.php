<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cestudio extends CI_Controller{
    private $permisos;
    function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('login')){
            redirect(base_url()); 
        }
        $this->load->model('mestudio');
    }

    public function index(){
        $data = array(
            'estudioindex' => $this->mestudio->mselectestudio(),
        );
        
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/venviar',$data);
        $this->load->view('layouts/footer');      
    }

    public function cadd(){       

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/vadd');
        $this->load->view('layouts/footer');  
    }

    public function cbuscar(){  
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/vbuscar');
        $this->load->view('layouts/footer');  
    }

    public function cbusqueda(){
        $dni_paciente = $this -> input -> post('txtdni_paciente');
        $data = array(
            'estudioindex' =>$this->mestudio->mbuscarestudio($dni_paciente),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/venviar',$data);
        $this->load->view('layouts/footer');  
    }

    public function cenviar(){    
        $data = array(
            'estudioindex'=> $this->mestudio->mselectestudio(),
        );        
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/venviar',$data);
        $this->load->view('layouts/footer');  
    }

    public function cinsert(){
        
        $dnipaciente        = $this->input->post('txtdni_paciente');
        $fecha_estudio      = $this->input->post('txtfecha_estudio');
        $tipo_estudio       = $this->input->post('txttipo_estudio');
        date_default_timezone_set('America/Argentina/Mendoza');                
        $date               = date('d-m-Y');
        $idusuario_subido   = $this->session->userdata('idusuario');             
        
        $this->form_validation->set_rules('txtdni_paciente','el dni','required');

        $config['upload_path']='./uploads/files/';
        $config['allowed_types']='pdf';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('txtfile')){
           $archivo = $this->upload->data('file_name');    
        }else{
           echo $this->upload->display_errors();
        }
        
        if($this->form_validation->run()){
            $data=array(
                'dni_paciente'      =>      $dnipaciente,
                'fecha_estudio'     =>      $fecha_estudio,
                'tipo_estudio'      =>      $tipo_estudio,
                'estado_envio'      =>      '0',
                'fecha_subida'      =>      $date,
                'fecha_envio'       =>      '00-00-0000',
                'idusuario_subido'  =>      $idusuario_subido,
                'archivo'           =>      $archivo

            );
            $res=$this->mestudio->minsertestudio($data);
                if($res){
                    $this->session->set_flashdata('correcto','Se guardo correctamente');
                    redirect(base_url().'mantenimiento/cestudio');
                }else{
                    $this->session->set_flashdata('error','No se guardo registro');
                    redirect(base_url().'mantenimiento/cestudio/cadd');
                } 
            }else{
                $this->session->set_flashdata('error','No se pudo cargar estudio');
                $this->cadd();
            }
    }

    public function cedit($id_estudio){
        $data = array(
            'estudioedit'=>$this->mestudio->midupdateestudio($id_estudio)
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/estudio/vedit',$data);
        $this->load->view('layouts/footer');
    }

    public function cupdate(){

        $id_estudio         = $this->input->post('txtid_estudio');
        $dni_paciente       = $this->input->post('txtdni_paciente');
        $tipo_estudio       = $this->input->post('txttipo_estudio');
        $fecha_estudio      = $this->input->post('txtfecha_estudio');        

        $estudioActual      = $this->mestudio->midupdateestudio($id_estudio);
        
        if ($id_estudio == $estudioActual -> id_estudio){
            $unique ='';
        }else{
            $unique ='|is_unique[estudio.id_estudio]';
        }
        $this->form_validation->set_rules('txtid_estudio',' el id','required'.$unique);

        if(empty($_FILES['txtfile']['name'])){
             if($this->form_validation->run()){
                $data = array(
                    'id_estudio'        =>$id_estudio,
                    'dni_paciente'      =>$dni_paciente,
                    'tipo_estudio'      =>$tipo_estudio,
                    'fecha_estudio'     =>$fecha_estudio,                    
                );
                $res = $this->mestudio->mupdateestudio($id_estudio,$data);
                if($res){
                    $this->session->set_flashdata('correcto','Se guardo correctamente');
                    redirect(base_url().'mantenimiento/cestudio');
                }else{
                    $this->session->set_flashdata('error','No se pudo actualizar el estudio');
                    redirect(base_url().'mantenimiento/cestudio/cedit'.$id_estudio);
                }                
            }else{
                $this->session->set_flashdata('error','No se pudo guardar el estudio');
                $this->cedit($id_estudio);
            }
        }else{
            $config['upload_path']='./uploads/files/';
            $config['allowed_types']='pdf';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('txtfile')){
                $archivo         = $this->upload->data('file_name');
                $archivoActual   = $this->mestudio->midupdateestudio($id_estudio);
                unlink('./uploads/files/'.$archivoActual->archivo);
            }
            if($this->form_validation->run()){
                $data = array(
                    'id_estudio'        =>$id_estudio,
                    'dni_paciente'      =>$dni_paciente,
                    'tipo_estudio'      =>$tipo_estudio,
                    'fecha_estudio'     =>$fecha_estudio,
                    'archivo'           =>$archivo,                    
                );
                $res = $this->mestudio->mupdateestudio($id_estudio,$data);
                if($res){
                    $this->session->set_flashdata('correcto','Se guardo correctamente');
                    redirect(base_url().'mantenimiento/cestudio');
                }else{
                    $this->session->set_flashdata('error','No se pudo actualizar el estudio');
                    redirect(base_url().'mantenimiento/cestudio/cedit'.$id_estudio);
                }                
            }else{
                $this->session->set_flashdata('error','No se pudo guardar el estudio');
                $this->cedit($id_estudio);
            }  
        }   
    }
}
?>