
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ccee extends CI_Controller{	

	public function insertar(){

		$cee = array(
			'idcee'=> $this->input->post('idcee'),
			'periodo' => $this->input->post('periodo'),
                        'cargo'=> $this->input->post('cargo'),
                        'idpersona'=> $this->input->post('idpersona'),
			'idcarrera' => $this->input->post('idcarrera')
			);

		$this->load->model('cee_model');
		if ( $this->cee_model->insertar_cee($cee) )
			redirect('cee');	 
	}

	public function actualizar(){
		$cee = array(
			'idcee'=> $this->input->post('idcee'),
			'periodo' => $this->input->post('periodo'),
                        'cargo'=> $this->input->post('cargo'),
                        'idpersona'=> $this->input->post('idpersona'),
			'idcarrera' => $this->input->post('idcarrera')
			);
		$id = $this->input->post('idcee');

		$this->load->model('cee_model');
		if( $this->cee_model->actualiza_cee($id, $cee) )
			redirect('cee');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('cee_model');
		if( $this->cee_model->eliminar_cee($id) )
			redirect('cee');
	}

	public function index(){		
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';

		$this->load->model('cee_model');
		$data['personas'] = $this->cee_model->leer_cee();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['cee_actualizar']	= $this->cee_model->traer_cee($id);
		}

		$this->load->view('main_template',$data);
	}		

}

?>
