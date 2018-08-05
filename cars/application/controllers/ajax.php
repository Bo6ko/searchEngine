<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function modeles(){

		$html	= '<option value=""> - choose - </option>';
		$status	= false;
		if ( $this->input->post() && $this->input->is_ajax_request() )
		{
			$post	= $this->input->post("marque_id");

			//extract($post);

			if ( isset($post) && !empty($post) ) {
				$post = intval($post);
			}else{
				$post = 0;
			}

			$modeles = $this->model_marques->getModelByMarqueId($post);
			/*
			tova ti e funkciqta v model_modeles - >   getByMarqueId ....
			public function getByMarqueId( $marque_id ) {

				$this->db->select( '*' );
				$this->db->from( tablica s modelite );
				$this->db->where( 'marque_id' , $marque_id );
				$this->ibest->order_by( 'modele_name' , 'asc' );
				$result = $this->db->get();
				return ( $result->num_rows() > 0 ) ? $result->result_array() : FALSE;
			}
			*/
			if ( isset($modeles) && is_array($modeles) && count($modeles) > 0 ) {
				foreach ($modeles as $modele) {
					$html .= '<option value="'.$modele['modele_id'].'">'.$modele['modele_name'].'</option>';
				}
				$status = true;
			}
		}

		$json = array('html'=>$html,'status'=>$status);
		print_r(json_encode($json));exit;
	}
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
