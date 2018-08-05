<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_statistic extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
  
  
  
  
  public function getMonthByYearId( $yearId ) {

	$arr = [];
	for($i=1; $i<=12; $i++) 
	{
		
		$this->db->select( 'count(EXTRACT(MONTH FROM contact_date_creation)) as month' );
		$this->db->from( 'contacts' );
		$this->db->where( 'EXTRACT(MONTH FROM contact_date_creation)=', $i );
		$this->db->where( 'EXTRACT(YEAR FROM contact_date_creation)=', $yearId );
		//$this->ibest->order_by( 'modele_name' , 'asc' );
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
			$row = $query->row();
			array_push($arr, intval($row->month));
		} else {
			array_push($arr, 0);	
		}
		
	}
	return $arr;

}

  public function getStatForMonth( $yearId, $days, $monthId ) {

	$arr = [];
	for($i=1; $i<=$days; $i++) 
	{
		
		$this->db->select( 'count(EXTRACT(DAY FROM contact_date_creation)) as day' );
		$this->db->from( 'contacts' );
		$this->db->where( 'EXTRACT(DAY FROM contact_date_creation)=', $i );
		$this->db->where( 'EXTRACT(MONTH FROM contact_date_creation)=', $monthId );
    $this->db->where( 'EXTRACT(YEAR FROM contact_date_creation)=', $yearId );
		//$this->ibest->order_by( 'modele_name' , 'asc' );
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
			$row = $query->row();
			array_push($arr, intval($row->day));
		} else {
			array_push($arr, 0);	
		}
		
	}
	return $arr;

}
  
  
  public function getYear()
   {
      $this->db->select( 'distinct(EXTRACT(YEAR FROM contact_date_creation)) as year' );
	    $this->db->from('contacts');
      $this->db->order_by("year", "desc");
	
	    $query = $this->db->get();
	
	    return $query->result_array();
   }
   
  
  
  
  
}