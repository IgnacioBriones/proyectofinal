<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cee_model extends CI_Model{

	public function insertar_cee($cee){

		if ( $this->db->insert('idcee', $cee) )
			return true;		
		else
			return false;
	}

	public function leer_cee(){

		$this->db->order_by('idcee DESC');

		$query = $this->db->get('cee');

		return $query->result();
	}

	public function traer_cee($id){

		$this->db->where('idcee', $id);

		$query = $this->db->get('cee');

		return $query->row();
	}

	public function actualiza_cee($id, $cee){

		$this->db->where('idcee', $id);

		if( $this->db->update('cee', $cee) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_cee($id){

		$this->db->where('idcee', $id);

		if( $this->db->delete('cee') )
			return true;		
		else
			return false;		
		
	}

}
