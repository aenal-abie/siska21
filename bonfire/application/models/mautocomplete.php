<?php
class MAutocomplete extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function lookup($keyword){
		$this->db->select('*')->from('propinsi');
        $this->db->like('propinsi',$keyword,'after');
        $query = $this->db->get();    
        
        return $query->result();
	}
}
