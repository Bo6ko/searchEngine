<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeles extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
		
		//	smarty variables
		//	$this -> smarty -> assign('data', $data );
		$this -> smarty -> assign('content', $this -> smarty -> fetch( 'manager/'.$this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('manager.htm');
	}

}