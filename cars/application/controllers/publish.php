<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class publish extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
		
		//	smarty variables
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}	

}