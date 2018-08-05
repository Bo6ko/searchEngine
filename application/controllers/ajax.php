<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function modeles(){

		$html	= '<option value=""> Select Modele </option>';
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

			$modeles = $this->model_modeles->getModelByMarqueId($post);
			
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
