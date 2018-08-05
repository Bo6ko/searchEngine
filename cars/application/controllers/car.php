<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class car extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index($id) {
		
	    $car = $this->model_marques->fetchCarId($id);
	    $recently_cars = $this->model_marques->fetchRecentlyCars();
	    //echo '<pre>' . print_r($recently_car, 1) . '</pre>';

		$this -> smarty -> assign('car', $car[0] );
		$this -> smarty -> assign('recently_cars', $recently_cars );
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}

}