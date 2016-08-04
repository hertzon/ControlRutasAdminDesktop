<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mcrud_model extends CI_Model {

    function view() {
        $ambil = $this->db->order_by('nombre_ruta','ASC')->get('rutas');
        if ($ambil->num_rows() > 0) {
            foreach ($ambil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function view_students($ruta) {
        $ambil=$this->db->order_by('numero','ASC')->get_where('estudiantes',array('ruta1'=>$ruta));
        if ($ambil->num_rows() > 0) {
            foreach ($ambil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
        
    }

    function add() {
        $fn = $this->input->post('fn');
        $ln = $this->input->post('ln');
        $ag = $this->input->post('ag');

        $data = array(
            'nombre_ruta' => $fn,
            'nombre_administradora' => $ln,
            'colegio' => $ag,
        );
        $this->db->insert('rutas', $data);
    }

    function edit($a) {
        $d = $this->db->get_where('rutas', array('id' => $a))->row();
        return $d;
    }
    function editStudent($b) {
        $de = $this->db->get_where('estudiantes', array('id' => $b))->row();
        return $de;
    }

    function update($id) {
        $fn = $this->input->post('fn');
        $ln = $this->input->post('ln');
        $ag = $this->input->post('ag');
        $ad = $this->input->post('ad');
        $data = array(
            'nombre_ruta' => $fn,
            'nombre_administradora' => $ln,
            'colegio' => $ag,
                //'address' => $ad
        );
        $this->db->where('id', $id);
        $this->db->update('rutas', $data);
    }
    function updateEstudiante($id) {
        $nombre_estudiante = $this->input->post('nombre_estudiante');
        $ruta = $this->input->post('ruta');
        $nombre_acudiente = $this->input->post('nombre_acudiente');
        $telefono_acudiente = $this->input->post('telefono_acudiente');
        $correo_acudiente = $this->input->post('correo_acudiente');
        
        $codigo = $this->input->post('codigo');
        $curso = $this->input->post('curso');
        $colegio = $this->input->post('colegio');
        $paradero_am = $this->input->post('paradero_am');
        $paradero_pm = $this->input->post('paradero_pm');
        $nombre_monitora = $this->input->post('nombre_monitora');
        $numero= $this->input->post('numero');
        
        $data = array(
            'nombreEstudiante' => $nombre_estudiante,
            'ruta1' => $ruta,
            'nombreAcudiente' => $nombre_acudiente,
            'telefonoAcudiente' => $telefono_acudiente,
            'correoAcudiente' => $correo_acudiente,
            'codigo' => $codigo,
            'curso' => $curso,
            'colegio' => $colegio,
            'paraderoAM' => $paradero_am,
            'paraderoPM' => $paradero_pm,
            'nombreMonitora' => $nombre_monitora,
            'numero' => $numero
        );
        $this->db->where('id', $id);
        $this->db->update('estudiantes', $data);
    }
    function delete_ruta($id){
        $this->db->delete('rutas', array('id' => $id));
        return;
    }
    function delete_student($id){
        $this->db->delete('estudiantes', array('id' => $id));
        return;
    }

}
