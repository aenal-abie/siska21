<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends Admin_Controller {

	function __construct()	{
		parent::__construct();
		$this->load->model('MAutocomplete', null, true);
		//$this->load->model('');
	}
	
	function index(){
		$this->load->view('autocomplete/show');
	}
	
	function lookup(){
		// process posted form data (the requested items like province)
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response
        
                $data['message'][] = array( 
                                        'id'=>"Mataram",
                                        'value' => "NTB",
										'gbr' => "Saya",
                                        ''
                                     );  //Add a row to array
            
        
        if('IS_AJAX')
        {
            echo json_encode($data); //echo json string if ajax request
            
        }
        else
        {
            $this->load->view('autocomplete/index',$data); //Load html view of search results
        }
	}

}
