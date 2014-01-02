<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona extends CI_Controller{	

	public function insertar(){

		$persona = array(
			'rut'=> $this->input->post('rut'),
			'nombre' => $this->input->post('nombre'),
			'mail' => $this->input->post('mail'),
			'telefono' => $this->input->post('telefono')
			);

		$this->load->model('persona_model');
		if ( $this->persona_model->insertar_persona($persona) )
			redirect('persona');	 
	}

	public function actualizar(){
		$persona = array(
			'rut'=>$this->input->post('rut'),
			'nombre' => $this->input->post('nombre'),
			'mail' => $this->input->post('mail'),
			'telefono' => $this->input->post('telefono')
			);
		$id = $this->input->post('id');

		$this->load->model('persona_model');
		if( $this->persona_model->actualiza_persona($id, $persona) )
			redirect('persona');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('persona_model');
		if( $this->persona_model->eliminar_persona($id) )
			redirect('persona');
	}

	public function index(){		
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';

		$this->load->model('persona_model');
		$data['personas'] = $this->persona_model->leer_persona();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['persona_actualizar']	= $this->persona_model->traer_persona($id);
		}

		$this->load->view('main_template',$data);
	}		

}
