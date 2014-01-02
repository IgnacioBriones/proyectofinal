<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona_model extends CI_Model{

	public function insertar_persona($persona){

		if ( $this->db->insert('persona', $persona) )
			return true;		
		else
			return false;

	}

	public function leer_persona(){

		$this->db->order_by('id DESC');

		$query = $this->db->get('persona');

		return $query->result();
	}

	public function traer_persona($id){

		$this->db->where('rut', $id);

		$query = $this->db->get('persona');

		return $query->row();
	}

	public function actualiza_persona($id, $persona){

		$this->db->where('rut', $id);

		if( $this->db->update('persona', $persona) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_persona($id){

		$this->db->where('id', $id);

		if( $this->db->delete('persona') )
			return true;		
		else
			return false;		
		
	}

}
