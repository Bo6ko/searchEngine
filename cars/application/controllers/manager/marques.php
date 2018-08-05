<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class marques extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		
		
	}

	public function index() {
		
		$filter_marque_name = ( isset($_GET['marque_name']) && !empty($_GET['marque_name']) ) ? mysql_real_escape_string($_GET['marque_name']) : false;
		$filter_marque_status = ( isset($_GET['marque_status']))  ? $_GET['marque_status'] : "";
		$filter_date_created_from = ( isset($_GET['date_created_from'])) ? $_GET['date_created_from'] : false ;
		$filter_date_created_to = ( isset($_GET['date_created_to'])) ? $_GET['date_created_to'] :false ;
		
		/*
		if ( isset($_GET['date_created_from'])) {
			$filter_start_date = $_GET['date_created_from'];
		}else{
			$filter_start_date = false;
		}
		 */
		 
		//var_dump($filter_marque_name);
		//var_dump($filter_marque_status);
		//var_dump($filter_start_date);
		
		$filters = array(
			'marque_name' => $filter_marque_name ,
			'marque_status' => $filter_marque_status,
			'date_created_from' => $filter_date_created_from,
			'date_created_to' => $filter_date_created_to
			
		);
		//var_dump($filters);
		//die('x');
		
		$marques = $this->model_marques->getAll( $filters);
		
		//var_dump($marques);
		$this -> smarty -> assign('marques', $marques );
		$this -> smarty -> assign('content', $this -> smarty -> fetch( 'manager/'.$this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('manager.htm');
	}
	
	
	
	
	public function create() {
		
		//	check post
		if ($this->input->post()) {
			
			$response = $this->model_marques->create($this->input->post());
			
			if ( $response['status'] ) {
				//	 preprashta kam update stranicata direktno ...
				redirect( '/manager/marques/update/'.$response['id'] , 'refresh' );
			}
			
			$this -> smarty -> assign('response', $response );
			
		}
		
		$this -> smarty -> assign('content', $this -> smarty -> fetch( 'manager/'.$this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('manager.htm');
	}
	
	public function update( $id = 0 ) {
		//var_dump($id);
		if ( !$this->model_marques->checkById($id) )
		{
			redirect('/manager/marques/', 'refresh');
		}
		
		//	smarty variables
		$this->smarty->assign( 'data' , $this->model_marques->getById($id) );
		$this -> smarty -> assign('content', $this -> smarty -> fetch( 'manager/'.$this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this->smarty->display( 'manager.htm' );
		
	}
	
	
	
	public function ajax() {
		
		$json = array('status'=>false,'message'=>'<p>No POST detected.</p>');
		
		if ( $this->input->post() && $this->input->is_ajax_request() ) {
			
			$post	= $this->input->post();
			
			$json = $this->model_marques->update_details( $post );
			
		}
		
		print_r(json_encode($json));exit;
		
	}
}