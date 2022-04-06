<?php

    class Clogin extends CI_Controller{
        function __construct(){
            parent:: __construct();
            $this->load->model('musuario');
        }

        public function index(){
            if($this->session->userdata('login')){
                redirect(base_url().'cdashboard');
            }else{ 
            $this->load->view('admin/vlogin');
            }
        }

        public function clogeo(){
            $txtnombre  = $this->input->post('txtnombre');
            $txtpass    = $this->input->post('txtpass');
            $res        = $this->musuario->mlogeo($txtnombre,$txtpass);
            //var_dump($res);
            if(!$res){
                $this->session->set_flashdata('error','El Usuario y/o contraseña son incorrectas');
                redirect(base_url().'clogin');
            }else{
                $data = array(
                    'idusuario' =>  $res->id_usuario,
                    'nombre'    =>  $res->nombre.' '.$res->apellido,
                    'idrol'     =>  $res->idrol,
                    'login'     =>  TRUE,
                    'user_name' =>  $res->user
                );
                echo $this->session->set_userdata($data);
                redirect(base_url().'cdashboard');
            }
        }
        
        public function clogout(){
            $this->session->sess_destroy();
            redirect(base_url().'clogin');
        }
    }
?>