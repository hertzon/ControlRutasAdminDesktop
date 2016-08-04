<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ccrud_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('mcrud_model');
    }
    public function index(){
        $data['data_get'] = $this->mcrud_model->view();
//        foreach ($data['data_get'] as $row){
//            echo $row->colegio;
//        }
        $this->load->view('header_view');
        $this->load->view('vcrud_view', $data);
        $this->load->view('footer_view');
    }
    function add(){
        $this->load->view('header_view');
        $this->load->view('vcrudnew_view');
        $this->load->view('footer_view');
    }
    function save() {
        if ($this->input->post('mit')) {
            $this->mcrud_model->add();
            redirect('ccrud_controller');
        } else{
            //redirect('ccrud/tambah');
            echo 'error save ccrud_controller';
        }
    }
    function edit() {
        $kd = $this->uri->segment(3);
        if ($kd == NULL) {
         redirect('ccrud_controller');
        }
        $dt = $this->mcrud_model->edit($kd);
        $data['fn'] = $dt->nombre_ruta;
        $data['ln'] = $dt->nombre_administradora;
        $data['ag'] = $dt->colegio;
        //$data['ad'] = $dt->address;
        $data['id'] = $kd;
        
        $data['data_students'] = $this->mcrud_model->view_students($dt->nombre_ruta);
        //echo $kd;
        $this->load->view('header_view');
        
        $this->load->view('vcrudedit_view', $data);
        
        $this->load->view('footer_view');
    }
    function update() {
        if ($this->input->post('mit')) {
         $id = $this->input->post('id');
         $this->mcrud_model->update($id);
         redirect('ccrud_controller');
        } else{
         redirect('ccrud_controller/edit/'.$id);
        }
    }
    function updateEstudiante() {
        //echo 'updateEstudiante';
        if ($this->input->post('mit')) {
         $id = $this->input->post('id');
         $id_ruta = $this->input->post('id_ruta');
         $this->mcrud_model->updateEstudiante($id);
         redirect('ccrud_controller/edit/'.$id_ruta);
        } else{
         //redirect('ccrud_controller/edit/'.$id);
        }
    }
    function delete_controller(){
        $kd = $this->uri->segment(3);
        $this->mcrud_model->delete_ruta($kd);
        redirect('ccrud_controller');
    }
    function delete_student(){
        $kd = $this->uri->segment(3);
        $id_ruta=$this->uri->segment(4);
        $this->mcrud_model->delete_student($kd);
        //echo 'id_ruta: '.$id_ruta;
        redirect('ccrud_controller/edit/'.$id_ruta);
    }
    function salir(){
        //$this->session->sess_destroy();
        redirect('');
    }
    function edit_student() {
        $kd = $this->uri->segment(3);
        $id_ruta=$this->uri->segment(4);
        //echo $kd;
        if ($kd == NULL) {
         redirect('ccrud_controller');
        }
        $dt = $this->mcrud_model->editStudent($kd);
        $data['nombre_estudiante'] = $dt->nombreEstudiante;
        $data['ruta'] = $dt->ruta1;
        $data['nombre_acudiente'] = $dt->nombreAcudiente;
        $data['telefono_acudiente'] = $dt->telefonoAcudiente;
        $data['correo_acudiente'] = $dt->correoAcudiente;
        $data['codigo'] = $dt->codigo;
        $data['curso'] = $dt->curso;
        $data['colegio'] = $dt->colegio;
        $data['paradero_am'] = $dt->paraderoAM;
        $data['paradero_pm'] = $dt->paraderoPM;
        $data['nombre_monitora'] = $dt->nombreMonitora;
        $data['numero'] = $dt->numero;
        
        //echo $dt->nombreEstudiante;
        
        $data['id_ruta'] = $id_ruta;
        $data['id'] = $kd;
        
        //$data['data_students'] = $this->mcrud_model->view_students($dt->nombre_ruta);
        
        $this->load->view('header_view');
        
        $this->load->view('studentsedit_view', $data);
        
        $this->load->view('footer_view');
    }
    function new_student(){
        $this->load->view('header_view');
        $this->load->view('newstudent_view');
        $this->load->view('footer_view');
    }
    function agregaEstudiante(){
        echo 'agregando Estudiante';
        if ($this->input->post('mit')) {
            //$id = $this->input->post('nombre_estudiante');
            $data = array(
                'nombreEstudiante' => $this->input->post('nombre_estudiante'),
                'ruta1' => $this->input->post('ruta'),
                'nombreAcudiente' => $this->input->post('nombre_acudiente'),
                'telefonoAcudiente' => $this->input->post('telefono_acudiente'),
                'correoAcudiente' => $this->input->post('correo_acudiente'),
                'codigo' => $this->input->post('codigo'),
                'curso' => $this->input->post('curso'),
                'colegio' => $this->input->post('colegio'),
                'paraderoAM' => $this->input->post('paradero_am'),
                'paraderoPM' => $this->input->post('paradero_pm'),
                'nombreMonitora' => $this->input->post('nombre_monitora'),
                'numero' => $this->input->post('numero')
            );
            $this->db->insert('estudiantes', $data);

            redirect('ccrud_controller/edit/');
        } else{
            redirect('ccrud_controller/edit/');;
        }
    }
}


