<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
						
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
    
	}
	
	public function offers() {
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( 'publish/index' . '.htm'));
	    $this -> smarty -> display('main.htm');
	}

}