<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author frubilar
 */
class Usuario extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Usuario_Model');
  }
    public function insertar() {
        $usuario = array(
            'rut' => (int)$this->input->post('rut'),
            'password' => $this->input->post('password')
        );
        $this->load->model('usuario_model');
        if ($this->usuario_model->insertar_usuario($usuario))
            redirect('usuario');
    }

    public function actualizar() {
        $usuario = array(
            'rut' => (int) $this->input->post('rut'),
            'password' => $this->input->post('password')
        );
        $id = (int) $this->input->post('rut');

        $this->load->model('usuario_model');
        if ($this->Usuario_model->actualiza_usuario($id, $usuario))
            redirect('usuario');
    }

    public function eliminar() {
        $id = $this->uri->segment(3);
        $this->load->model('usuario_model');
        if ($this->persona_model->eliminar_usuario($rut))
            redirect('usuario');
    }

}

?>
