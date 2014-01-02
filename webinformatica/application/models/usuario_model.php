<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario_model
 *
 * @author frubilar
 */
class Usuario_model extends CI_Model {
      public function __construct() {
    parent::__construct();
    $this->load->database();
  }

    public function insertar_usuario($usuario) {

        if ($this->db->insert('usuario', $usuario))
            return true;
        else
            return false;
    }

    public function leer_usuario() {

        $this->db->order_by('rut DESC');

        $query = $this->db->get('usuario');

        return $query->result();
    }
    public function actualiza_usuario($rut, $usuario){

		$this->db->where('rut', $rut);

		if( $this->db->update('usuario', $rut) )
			return true;		
		else
			return false;
		
	}
        	public function eliminar_usuario($rut){

		$this->db->where('rut', $rut);

		if( $this->db->delete('usuario') )
			return true;		
		else
			return false;		
		
	}

}

?>
