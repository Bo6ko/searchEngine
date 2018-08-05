<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_cars extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

#	============================================================================
#	
	
	public function searchVehicles($resultOptions, $carRangeResult, $limit = null, $start = null){
	    
	    $this->db->select('*');
	    $this->db->from('vehicules');
	    $this->db->join('vehicule_marques', 'vehicule_marques.marque_id = vehicules.marque_id');
	    $this->db->join('vehicule_modeles', 'vehicule_modeles.modele_id = vehicules.modele_id');
	    $this->db->join('vehicule_energies', 'vehicule_energies.energie_id = vehicules.energie_id');
	    $this->db->join('vehicule_carrosseries', 'vehicule_carrosseries.carrosserie_id = vehicules.carrosserie_id');
	    $this->db->where('vehicules.vehicule_price >=', (int)$carRangeResult['carRange1']);
	    $this->db->where('vehicules.vehicule_price <=', (int)$carRangeResult['carRange2']);

	    
	    foreach ($resultOptions as $key => $result) {
	        if ((int)$result > 0) {
	            $this->db->where($key, (int)$result);
	        }
	    }
	    if ($limit != 0) {
	        $this->db->limit($limit, $start);
	    }
	    
	    $query = $this->db->get();
	    
	    return $query->result_array();
	     
	}
	
	public function getAllCars($limit = null, $start = null){
	    $this->db->select('*');
	    $this->db->from('vehicules');
	    $this->db->join('vehicule_marques', 'vehicule_marques.marque_id = vehicules.marque_id');
	    $this->db->join('vehicule_modeles', 'vehicule_modeles.modele_id = vehicules.modele_id');
	    $this->db->join('vehicule_energies', 'vehicule_energies.energie_id = vehicules.energie_id');
	    $this->db->join('vehicule_carrosseries', 'vehicule_carrosseries.carrosserie_id = vehicules.carrosserie_id');
	    $this->db->join('vehicule_boites', 'vehicule_boites.boite_id = vehicules.boite_id');
	    $this->db->join('vehicule_couleurs', 'vehicule_couleurs.couleur_id = vehicules.couleur_id');
	    $this->db->order_by("vehicule_id asc");
	    
	    if ($limit != 0) {
	        $this->db->limit($limit, $start);
	    }
	    
	    $query = $this->db->get();
	    return $query->result_array();
	}
	
	public function getAllColors($limit = null, $start = null){
	    if ($limit != 0) {
	        $this->db->limit($limit, $start);
	    }
	    $query = $this->db->get('vehicule_couleurs');
	    return $query->result_array();
	}
	
    public function fetchCarId($id) {
        $this->db->select('*');
        $this->db->from('vehicules');
        $this->db->join('vehicule_marques', 'vehicule_marques.marque_id = vehicules.marque_id');
        $this->db->join('vehicule_modeles', 'vehicule_modeles.marque_id = vehicules.marque_id');
        $this->db->join('vehicule_energies', 'vehicule_energies.energie_id = vehicules.energie_id');
        $this->db->join('vehicule_carrosseries', 'vehicule_carrosseries.carrosserie_id = vehicules.carrosserie_id');
        $this->db->join('vehicule_boites', 'vehicule_boites.boite_id = vehicules.boite_id');
        $this->db->join('vehicule_couleurs', 'vehicule_couleurs.couleur_id = vehicules.couleur_id');
        $this->db->where('vehicules.vehicule_id', $id);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function fetchRecentlyCars() {
        $this->db->select('*');
        $this->db->from('vehicules');
        $this->db->join('vehicule_modeles', 'vehicule_modeles.marque_id = vehicules.marque_id');
        $this->db->limit('4');
        $this->db->order_by('vehicules.vehicule_date_created', 'ASC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function fetchBestPriceCars() {
        $this->db->select('*');
        $this->db->from('vehicules');
        $this->db->join('vehicule_marques', 'vehicule_marques.marque_id = vehicules.marque_id');
        $this->db->join('vehicule_modeles', 'vehicule_modeles.marque_id = vehicules.marque_id');
        $this->db->join('vehicule_energies', 'vehicule_energies.energie_id = vehicules.energie_id');
        $this->db->limit('5');
        $this->db->order_by('vehicules.vehicule_price', 'DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    

    

	
	

#	============================================================================
#	CREATE

    public function addCar($data) {
        $this->db->set($data);
        $this->db->insert('vehicules');
    }
    
	public function create( $post = array() ) {
		
		
	#	Convert POST array to variables:
		extract( $post );
		
		$marque_name = trim($marque_name);
		
	#	Validation ( marque name )
		if ( $this->existsByName( $marque_name , false ) ) {
			return array('status'=>false,'message'=>'This <b>'.$marque_name.'</b> already exists.');
		}
		
		if ( !isset($marque_name) || empty($marque_name)) {
			return array('status'=>false,'message'=>'You must enter a marque.');
		}
		
		
		
	#	Insert
		$insert = array(
			'marque_name'				=> $marque_name,
			'marque_date_created'		=> date( 'Y-m-d H-i-s' )
		);
		$this->db->insert( TABLE_VEHICULE_MARQUES , $insert );
		
		if ( $this->db->affected_rows() > 0 ) {
			//	Get inserted ID
			$marque_id = $this->db->insert_id();
			return array('status'=>true,'message'=>'SUCCESS.','id'=>$marque_id);
		}
		return array('status'=>false,'message'=>'insert marque error.');
	}

#	============================================================================
#	UPDATE

	public function updateCar($data, $id) {
	    $this->db->where('vehicule_id', $id);
	    $this->db->update('vehicules', $data);
	}
	
	
	public function update_details( $post )
	{
	#	Convert POST array to variables:
		extract( $post );
		//var_dump($_POST);
		#1
		if ( !isset($marque_id) || empty($marque_id)) {
			return array('status'=>false,'message'=>'missing POST marque id.');
		}else{
			$marque_id = intval($marque_id);
			
		if ( !$this->checkById($marque_id) ) 
			{
				return array('status'=>false,'message'=>'marque id not found in db.');
			}
		}
		
		#2
		if ( !isset($marque_name) || empty($marque_name)) {
			return array('status'=>false,'message'=>'You must enter a marque.');
		}else{
			$marque_name 	= trim($marque_name);
			$marque_name	= mysql_real_escape_string($marque_name);
		}
		
		#2.1
		if ( $this->existsByName($marque_name, $marque_id) ) {
			
			return array('status'=>false,'message'=>'<p>The brand <b>'.$marque_name.'</b> already exists</p>');
		}
		
		#3
		if ( !isset($marque_status) || $marque_status == "" ) {
			return array('status'=>false,'message'=>'choose status.');
		}else{
			$marque_status	= intval($marque_status);
		}
		
		#4
		$update	= array(
			'marque_name'			=> $marque_name,
			'marque_status'			=> $marque_status
		);
		
		$this->db->update( TABLE_VEHICULE_MARQUES, $update , array( 'marque_id' => $marque_id )  );
		
		return array('status'=>true,'message'=>'<p>Update successful!</p>');
	}


#	============================================================================
#	DELETE

	public function deleteCarId($id) {
	    $this->db->delete('vehicules', array('vehicule_id' => $id));
	}
	

#	============================================================================
#	GET

	public function getById( $marque_id )
	{
		if ( empty( $marque_id ) ) {
			return FALSE;
		}
		
		$this->db->select( '*' );
		$this->db->from( TABLE_VEHICULE_MARQUES );
		$this->db->where( TABLE_VEHICULE_MARQUES.'.marque_id' , $marque_id );
		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
	}

	public function getAll( $filters = false )
	{
		
		extract( $filters );
		//var_dump($filters);
		
		$this->db->select( '*' );
		$this->db->from( TABLE_VEHICULE_MARQUES );
		
		if( isset( $marque_name ) && $marque_name != '' ) {
			$this->db->like( 'marque_name' , $marque_name );
		}
		
		//var_dump($marque_status);
		// kogato e inactive status e nula i zatova maham != ''
		var_dump($marque_status);
		if( isset( $marque_status ) && $marque_status  != "" ) {
			$this->db->where( 'marque_status' , $marque_status );
			//var_dump($marque_status);
		}
		
		if ( isset( $date_created_from ) && $date_created_from != '' ){
			//var_dump($start_date); //	string(10) "09/16/2017"
			$start_date_array = explode('/', $date_created_from);
			//var_dump($start_date_array); 	array(3) { [0]=> string(2) "09" [1]=> string(2) "16" [2]=> string(4) "2017" 
			$new_start_date = $start_date_array[2].'-'.$start_date_array[0].'-'.$start_date_array[1];
			//$new_start_date = '2017-09-17';
			$this->db->where( 'marque_date_created >=' , $new_start_date . ' 00:00:00' );
		}
		
		if ( isset( $date_created_to ) && $date_created_to != '' ){
		
			$end_date_array = explode('/', $date_created_to);
			
			$new_end_date = $end_date_array[2].'-'.$end_date_array[0].'-'.$end_date_array[1];
		
			$this->db->where( 'marque_date_created <=' , $new_end_date . ' 23:59:59 ' );
		}
		
		
		$result = $this->db->get(); 
		echo'<hr/>';
		//echo $this->db->last_query();
		echo'<hr/>';
		return ( $result->num_rows() > 0 ) ? $result->result_array() : FALSE;
	}

	public function existsByName( $marque_name ,$marque_id = false)
	{
		if ( !isset($marque_name) || empty( $marque_name ) ) {
			return FALSE;
		}
		
		$marque_name = trim($marque_name);
		
		$this->db->select( '*' );
		$this->db->from( TABLE_VEHICULE_MARQUES );
		$this->db->where( TABLE_VEHICULE_MARQUES.'.marque_name' , $marque_name );
		if($marque_id > 0) {
			$this->db->where( TABLE_VEHICULE_MARQUES.'.marque_id !=' , $marque_id );
		}
		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
	}




#	============================================================================
#	CHECK

	public function checkById( $id )
	{
		$marque_id = ( isset($id) && !empty($id) && is_numeric( $id ) ) ? $id : 0;
		return $this->db->where( 'marque_id' , $marque_id )->count_all_results( TABLE_VEHICULE_MARQUES ) > 0;
	}
	
	

#	============================================================================
#	LOAD
	public function loadById( $marque_id = 0 )
	{
		if ( empty( $marque_id ) ) {
			return FALSE;
		}
		
		$this->db->select( '*' );
		$this->db->from( TABLE_VEHICULE_MARQUES );
		$this->db->where( TABLE_VEHICULE_MARQUES.'.marque_id' , $marque_id );
		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
	}
}