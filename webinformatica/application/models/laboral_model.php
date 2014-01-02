<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona_model extends CI_Model{

	public function insertar_laboral($laboral){

		if ( $this->db->insert('laboral', $laboral) )
			return true;		
		else
			return false;
	}

	public function leer_laboral(){

		$this->db->order_by('idlaboral');

		$query = $this->db->get('laboral');

		return $query->result();
	}

	public function traer_laboral($id){

		$this->db->where('idlaboral', $id);

		$query = $this->db->get('laboral');

		return $query->row();
	}

	public function actualiza_laboral($id, $laboral){

		$this->db->where('laboral', $id);

		if( $this->db->update('laboral', $laboral) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_laboral($id){

		$this->db->where('idlaboral', $id);

		if( $this->db->delete('laboral') )
			return true;		
		else
			return false;		
		
	}

}