<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class carrera_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertar_carrera($carrera) {

        if ($this->db->insert('carrera', $carrera))
            return true;
        else
            return false;
    }
    public function leer_carrera() {

        $this->db->order_by('idcarrera DESC');

        $query = $this->db->get('carrera');

        return $query->result();
    }
    public function eliminar_carrera($carrera) {
        $this->db->where('codigo', $carrera);

        if ($this->db->delete('carrera'))
            return true;
        else
            return false;
    }
        public function actualiza_carrera($id, $carrera){

		$this->db->where('idcarrera', $id);

		if( $this->db->update('carrera', $id) )
			return true;		
		else
			return false;
		
	}

}

?>
