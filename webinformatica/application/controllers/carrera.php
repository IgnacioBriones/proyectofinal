<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class carrera extends CI_Controller{
    	public function insertar(){

		$carrera = array(
			'codigo'=> $this->input->post('codigo'),
			'nombre_carrera' => $this->input->post('nombre_carrera')
			);

		$this->load->model('carrera_model');
		if ( $this->persona_model->insertar_carrera($carrera) )
			redirect('carrera');	 
	}
        	public function actualizar(){
		$carrera = array(
			'codigo'=>$this->input->post('codigo'),
			'nombre_carrera' => $this->input->post('nombre_carrera')
			);
		$id = $this->input->post('codigo');

		$this->load->model('carrera_model');
		if( $this->persona_model->actualiza_carrera($id, $carrera) )
			redirect('persona');		
	}
        	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('carrera_model');
		if( $this->persona_model->eliminar_carrera($id) )
			redirect('persona');
	}
    
}

?>
