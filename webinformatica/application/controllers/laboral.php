<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Laboral extends CI_Controller{	

	public function insertar(){

                    $laboral = array(
			'idlaboral'=> $this->input->post('idlaboral'),
			'fecha_publicacion_ofert' => $this->input->post('fecha_publicacion_ofert'),
			'titulo_oferta' => $this->input->post('titulo_oferta'),
			'cuerpo_oferta' => $this->input->post('cuerpo_oferta')
			);

		$this->load->model('laboral_model');
		if ( $this->laboral_model->insertar_laboral($laboral) )
			redirect('laboral');	 
	}

	public function actualizar(){
		$laboral = array(
			'idlaboral'=> $this->input->post('idlaboral'),
			'fecha_publicacion_ofert' => $this->input->post('fecha_publicacion_ofert'),
			'titulo_oferta' => $this->input->post('titulo_oferta'),
			'cuerpo_oferta' => $this->input->post('cuerpo_oferta'),
                        'idpersona' => $this->input->post('idpersona')
			);
		$id = $this->input->post('idlaboral');

		$this->load->model('laboral_model');
		if( $this->laboral_model->actualiza_laboral($id, $laboral) )
			redirect('laboral');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('laboral_model');
		if( $this->laboral_model->eliminar_laboral($id) )
			redirect('laboral');
	}

	public function index(){		
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';

		$this->load->model('laboral_model');
		$data['laboral'] = $this->laboral_model->leer_laboral();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['laboral_actualizar']	= $this->laboral_model->traer_laboral($id);
		}

		$this->load->view('main_template',$data);
	}		

}


?>
