<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_boites extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

#	============================================================================
#	
	
	
    public function getALlBoites($limit = null, $start = null){
	    if ($limit != 0) {
	        $this->db->limit($limit, $start);
	    }
	    $query = $this->db->get('vehicule_boites');
	    return $query->result_array();
	    
	}
	
	
    

	
	

#	============================================================================
#	CREATE

    
    
    
	

#	============================================================================
#	UPDATE

	

#	============================================================================
#	DELETE

	
	
	

#	============================================================================
#	GET

	




#	============================================================================
#	CHECK

	

#	============================================================================
#	LOAD
	
}