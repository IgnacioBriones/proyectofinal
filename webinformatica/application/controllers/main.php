<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        die();
    }

    public function persona()
    {
        $crud = new grocery_crud_model_Postgre();
 
        $crud->set_table('persona');
        $output = $crud->render();
 
        $this->_example_output($output);                
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
 
