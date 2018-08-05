<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function statistic(){

		$status	= false;
		if ( $this->input->get() && $this->input->is_ajax_request() )
		{
			$get	= $this->input->get("year");


			//extract($post);

			if ( isset($post) && !empty($post) ) {
				$post = intval($post);
			}else{
				$post = 0;
			}
			
			$yearStat = $this->model_statistic->getMonthByYearId($get); 
      $yearStatPrevent = $this->model_statistic->getMonthByYearId($get-1); 
            
			/*
			tova ti e funkciqta v model_modeles - >   getByMarqueId ....
			public function getMonthByYearId( $marque_id ) {

				$this->db->select( '*' );
				$this->db->from( tablica s modelite );
				$this->db->where( 'marque_id' , $marque_id );
				$this->ibest->order_by( 'modele_name' , 'asc' );
				$result = $this->db->get();
				return ( $result->num_rows() > 0 ) ? $result->result_array() : FALSE;
			}
			*/
			if ( isset($yearStat) && count($yearStat) > 0 ) {
				
				// se dobavq v html - a az iskam v javascripta ...
				//mai ima6e o6te edin fail koito vzema tozi $html
				$status = true;
			}
		}

		$json = array('yearStat'=>$yearStat, 'yearStatPrevetn'=>$yearStatPrevent ,'status'=>$status);
		print_r(json_encode($json));exit;
	}
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
