<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
		echo 1;
		
		$test2 = array(
			'key1' => 13454,
			'key2' => 3231
			
		);
		
		
		
		$test = 456;
		$this -> smarty -> assign('zzz', $test);
		$this -> smarty -> assign('zzz2', $test2);
		//	smarty variables
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}
	
	public function lolo() {
		echo 2;
		//	smarty variables
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}
}