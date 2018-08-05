<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
				


	    //$models = $this->model_marques->getALlMarque();
		
		$year = 33;
		 
	    $marques = $this->model_marques->getALlMarque();
	    $models = $this->model_marques->getAllModels();
	    $best_price_cars = $this->model_marques->fetchBestPriceCars();
	    $recently_cars = $this->model_marques->fetchRecentlyCars();		
		
		
		$this -> smarty -> assign('year', $year );
		$this -> smarty -> assign('marques', $marques );
		$this -> smarty -> assign('models', $models );
		$this -> smarty -> assign('recently_cars', $recently_cars );
		$this -> smarty -> assign('best_price_cars', $best_price_cars );
		
		
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
    
	}
	
	public function offers() {
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( 'publish/index' . '.htm'));
	    $this -> smarty -> display('main.htm');
	}

}