<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library("pagination");
	}
	
	public function index(){
	    
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}

	public function add_mark() {
	    
	    $errors = array();
	    $errors['mark'] = "";
	    $messageSend = "";
	    $this->load->library('session');
	    $editMessage = $this->session->flashdata('editMarque');
	    $deleteMessage = $this->session->flashdata('deleteMarque');

	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	        
	        $newMark = trim($_POST['add-marque']);
	        date_default_timezone_set('Europe/Sofia');
	        
	        $isExistMark = $this->model_marques->checkMarkExists($newMark);
	        if (!$isExistMark && !empty($newMark)) {
	            $data = array(
	                'marque_name' => $newMark,
	                'marque_date_created' => Date('Y-m-d h:i:s'),
	                'marque_date_modified' => Date('Y-m-d h:i:s'),
	                'marque_status' => 1
	            );
	            $this->model_marques->addMarque($data);
	            $messageSend = 'This marque "' . $newMark . '" is save in database successfully!';
	        } else {
	            if (empty($newMark)) {
	               $errors['mark'] = 'This field can`t be empty!';
	            } else {
	               $errors['mark'] = 'This marque "' . $newMark . '" is exist in DB';
	            }
	        } 
	    }
	    $marks = $this->model_marques->getALlMarque();
	    
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_mark";
	    $config["total_rows"] = count($marks);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	    
	    $this->pagination->initialize($config);
	    
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getALlMarque($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	    
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageSend', $messageSend );
	    $this -> smarty -> assign('marks', $marks );
	    $this -> smarty -> assign('editMessage', $editMessage );
	    $this -> smarty -> assign('deleteMessage', $deleteMessage );
	    $this -> smarty -> assign('data', $data );
	    
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_mark($id) {
	    
	    $mark = $this->model_marques->fetchMarkId($id);
	    $errors = array();
	    $errors['mark'] = "";
	    
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	        
	        $newMark = trim($_POST['add-marque']);
	        $mark[0]['marque_name'] = $newMark;
	        date_default_timezone_set('Europe/Sofia');
	         
	        $isExistMark = $this->model_marques->checkMarkExists($newMark, $id);
	        if (!$isExistMark && !empty($newMark)) {
	            $data = array(
	                'marque_name' => $newMark,
	                'marque_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateMarque($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editMarque', 'This marque ' . $newMark . ' is edited!');
	            redirect('/admin_panel/add_mark');
	        } else {
	            if (empty($newMark)) {
	               $errors['mark'] = 'This field can`t be empty!';
	            } else {
	               $errors['mark'] = 'This marque "' . $newMark . '" is exist in DB';
	            }
	        }
	    }
	     
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('mark', $mark[0] );
	    
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_mark($id) {
	    $mark = $this->model_marques->deleteMarkId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteMarque', 'This marque id: ' . $id . ' is deleted!');
	    
	    redirect('/admin_panel/add_mark');
	}
	
	/*
	 * ADD COLOR
	 */
	public function add_color() {
	     
	    $errors = array('color' => "");
	    $messageColor = array('update' => "");
	    $this->load->library('session');
	    $messageColor['edit'] = $this->session->flashdata('editColor');
	    $messageColor['delete'] = $this->session->flashdata('deleteColor');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	         
	        $newColor = trim($_POST['add-color']);
	        date_default_timezone_set('Europe/Sofia');
	         
	        $checkColorExists = $this->model_marques->checkColorExists($newColor);
	        if (!$checkColorExists && !empty($newColor)) {
	            $data = array(
	                'couleur_name' => $newColor,
	                'couleur_date_created' => Date('Y-m-d h:i:s'),
	                'couleur_date_modified' => Date('Y-m-d h:i:s'),
	                'couleur_status' => 1
	            );
	            $this->model_marques->addColor($data);
	            $messageColor['update'] = 'This couleur "' . $newColor . '" is save in database successfully!';
	        } else {
	            if (empty($newColor)) {
	                $errors['color'] = 'This field can`t be empty!';
	            } else {
	                $errors['color'] = 'This couleur "' . $newColor . '" is exist in DB';
	            }
	        }
	    }
	    $colors = $this->model_marques->getAllcolors();
	    
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_color";
	    $config["total_rows"] = count($colors);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	     
	    $this->pagination->initialize($config);
	     
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getAllColors($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	     
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageColor', $messageColor );
	    $this -> smarty -> assign('colors', $colors );
	    $this -> smarty -> assign('data', $data );
	     
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_color($id) {
	     
	    $color = $this->model_marques->fetchColorId($id);
	    $errors = array();
	    $errors['color'] = "";
	     
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	         
	        $newColor = trim($_POST['add-color']);
	        $color[0]['couleur_name'] = $newColor;
	        date_default_timezone_set('Europe/Sofia');
	
	        $isExistColor = $this->model_marques->checkColorExists($newColor, $id);
	        if (!$isExistColor && !empty($newColor)) {
	            $data = array(
	                'couleur_name' => $newColor,
	                'couleur_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateColor($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editColor', 'This couleur ' . $newColor . ' is edited!');
	            redirect('/admin_panel/add_color');
	        } else {
	            if (empty($newColor)) {
	                $errors['color'] = 'This field can`t be empty!';
	            } else {
	                $errors['color'] = 'This couleur "' . $newColor . '" is exist in DB';
	            }
	        }
	    }
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('color', $color[0] );
	     
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_color($id) {
	    $mark = $this->model_marques->deleteColorId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteColor', 'This couleur id: ' . $id . ' is deleted!');
	     
	    redirect('/admin_panel/add_color');
	}
	
	
	
	/*
	 * ADD model
	 */
	public function add_model() {
	
	    $errors = array('model' => "", 'marque' => "");
	    $messageModel = array('update' => "");
	    $this->load->library('session');
	    $messageModel['edit'] = $this->session->flashdata('editModel');
	    $messageModel['delete'] = $this->session->flashdata('deleteModel');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $marqueId = (int)$this->input->post("marques");
	        $newModel = $this->input->post("add-model");
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkModelExists = $this->model_marques->checkModelExists($newModel);
	        if (!$checkModelExists && !empty($newModel) && $marqueId > 0) {
	            $data = array(
	                'modele_name' => $newModel,
	                'marque_id' => (int)$marqueId,
	                'modele_date_created' => Date('Y-m-d h:i:s'),
	                'modele_date_modified' => Date('Y-m-d h:i:s'),
	                'modele_status' => 1
	            );
	            $this->model_marques->addModel($data);
	            $messageModel['update'] = 'This modele "' . $newModel . '" is save in database successfully!';
	        } else {
	           if ($checkModelExists) {
	                $errors['model'] = 'This modele "' . $newModel . '" is exist in DB';
	            }
	            if (empty($newModel)) {
	                $errors['model'] = 'This field can`t be empty!';
	            }
	            if ($marqueId < 1) {
	                $errors['marque'] = 'Choose marque please!';
	            }
	        }
	    }
	    $marques = $this->model_marques->getALlMarque();
	    $models = $this->model_marques->getAllModels();
	    
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_model";
	    $config["total_rows"] = count($models);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	    
	    $this->pagination->initialize($config);
	    
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getAllModels($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageModel', $messageModel );
	    $this -> smarty -> assign('marques', $marques );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_model($id) {
	
	    $model = $this->model_marques->fetchModelId($id);
	    $marques = $this->model_marques->getALlMarque();
	    $marqueId = $this->model_marques->fetchMarkId($model[0]['marque_id']);
	    $errors = array('model' => "", 'marque' => "");
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $marqueIdFromPost = (int)$this->input->post("marques");

	        var_dump($marqueIdFromPost);
	        $newModel = $this->input->post("add-model");
	        $model[0]['modele_name'] = $newModel;
	        date_default_timezone_set('Europe/Sofia');
	
	        $isExistModel = $this->model_marques->checkModelExists($newModel, $id);
	        if (!$isExistModel && !empty($newModel) && $marqueIdFromPost > 0) {
	            $data = array(
	                'modele_name' => $newModel,
	                'marque_id' => (int)$marqueIdFromPost,
	                'modele_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateModel($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editModel', 'This modele ' . $newModel . ' is edited!');
	            redirect('/admin_panel/add_model');
	        }
	            if ($isExistModel) {
	                $errors['model'] = 'This modele "' . $newModel . '" is exist in DB';
	            }
	            if (empty($newModel)) {
	                $errors['model'] = 'This field can`t be empty!';
	            }
	            if ($marqueIdFromPost < 1) {
	                $errors['marque'] = 'Choose marque please!';
	            }
	        }
	    
	

	    
	    
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('model', $model[0] );
	    $this -> smarty -> assign('marques', $marques );
	    $this -> smarty -> assign('marqueId', $marqueId );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_model($id) {
	    $model = $this->model_marques->deleteModelrId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteModel', 'This modele id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_model');
	}
	
	/*
	 * ADD BOITE
	 */
	public function add_boite() {
	
	    $errors = array('boite' => "");
	    $messageBoite = array('update' => "");
	    $this->load->library('session');
	    $messageBoite['edit'] = $this->session->flashdata('editBoite');
	    $messageBoite['delete'] = $this->session->flashdata('deleteBoite');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newBoite = trim($_POST['add-boite']);
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkBoiteExists = $this->model_marques->checkBoiteExists($newBoite);
	        if (!$checkBoiteExists && !empty($newBoite)) {
	            $data = array(
	                'boite_name' => $newBoite,
	                'boite_date_created' => Date('Y-m-d h:i:s'),
	                'boite_date_modified' => Date('Y-m-d h:i:s'),
	                'boite_status' => 1
	            );
	            $this->model_marques->addBoite($data);
	            $messageBoite['update'] = 'This boite "' . $newBoite . '" is save in database successfully!';
	        } else {
	            if (empty($newBoite)) {
	                $errors['boite'] = 'This field can`t be empty!';
	            } else {
	                $errors['boite'] = 'This boite "' . $newBoite . '" is exist in DB';
	            }
	        }
	    }
	    $boites = $this->model_marques->getAllBoites();
	     
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_boite";
	    $config["total_rows"] = count($boites);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	
	    $this->pagination->initialize($config);
	
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getAllBoites($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageBoite', $messageBoite );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_boite($id) {
	
	    $boite = $this->model_marques->fetchBoiteId($id);
	    $errors = array();
	    $errors['boite'] = "";
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newBoite = trim($_POST['add-boite']);
	        $boite[0]['boite_name'] = $newBoite;
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkBoiteExists = $this->model_marques->checkBoiteExists($newBoite, $id);
	        if (!$checkBoiteExists && !empty($newBoite)) {
	            $data = array(
	                'boite_name' => $newBoite,
	                'boite_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateBoite($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editBoite', 'This boite ' . $newBoite . ' is edited!');
	            redirect('/admin_panel/add_boite');
	        } else {
	            if (empty($newBoite)) {
	                $errors['boite'] = 'This field can`t be empty!';
	            } else {
	                $errors['boite'] = 'This boite "' . $newBoite . '" is exist in DB';
	            }
	        }
	    }
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('boite', $boite[0] );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_boite($id) {
	    $mark = $this->model_marques->deleteBoiteId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteBoite', 'This boite id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_boite');
	}
	
	/*
	 * ADD CARROSSERIE
	 */
	public function add_carrosserie() {
	
	    $errors = array('carrosserie' => "");
	    $messageCarrosserie = array('update' => "");
	    $this->load->library('session');
	    $messageCarrosserie['edit'] = $this->session->flashdata('editCarrosserie');
	    $messageCarrosserie['delete'] = $this->session->flashdata('deleteCarrosserie');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newCarrosserie = trim($_POST['add-carrosserie']);
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkCarrosserieExists = $this->model_marques->checkCarrosserieExists($newCarrosserie);
	        if (!$checkCarrosserieExists && !empty($newCarrosserie)) {
	            $data = array(
	                'carrosserie_name' => $newCarrosserie,
	                'carrosserie_date_created' => Date('Y-m-d h:i:s'),
	                'carrosserie_date_modified' => Date('Y-m-d h:i:s'),
	                'carrosserie_status' => 1
	            );
	            $this->model_marques->addCarrosserie($data);
	            $messageCarrosserie['update'] = 'This carrosserie "' . $newCarrosserie . '" is save in database successfully!';
	        } else {
	            if (empty($newCarrosserie)) {
	                $errors['carrosserie'] = 'This field can`t be empty!';
	            } else {
	                $errors['carrosserie'] = 'This carrosserie "' . $newCarrosserie . '" is exist in DB';
	            }
	        }
	    }
	    $carrosseries = $this->model_marques->getAllCarrosseries();
	
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_carrosserie";
	    $config["total_rows"] = count($carrosseries);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	
	    $this->pagination->initialize($config);
	
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getAllCarrosseries($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageCarrosserie', $messageCarrosserie );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_carrosserie($id) {
	
	    $carrosserie = $this->model_marques->fetchCarrosserieId($id);
	    $errors = array();
	    $errors['carrosserie'] = "";
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newCarrosserie = trim($_POST['add-carrosserie']);
	        $carrosserie[0]['carrosserie_name'] = $newCarrosserie;
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkCarrosserieExists = $this->model_marques->checkCarrosserieExists($newCarrosserie, $id);
	        if (!$checkCarrosserieExists && !empty($newCarrosserie)) {
	            $data = array(
	                'carrosserie_name' => $newCarrosserie,
	                'carrosserie_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateCarrosserie($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editCarrosserie', 'This carrosserie ' . $newCarrosserie . ' is edited!');
	            redirect('/admin_panel/add_carrosserie');
	        } else {
	            if (empty($newCarrosserie)) {
	                $errors['carrosserie'] = 'This field can`t be empty!';
	            } else {
	                $errors['carrosserie'] = 'This carrosserie "' . $newCarrosserie . '" is exist in DB';
	            }
	        }
	    }
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('carrosserie', $carrosserie[0] );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_carrosserie($id) {
	    $mark = $this->model_marques->deleteCarrosserieId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteCarrosserie', 'This carrosserie id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_carrosserie');
	}
	
	/*
	 * ADD ENERGIE
	 */
	public function add_energie() {
	
	    $errors = array('energie' => "");
	    $messageEnergie = array('update' => "");
	    $this->load->library('session');
	    $messageEnergie['edit'] = $this->session->flashdata('editEnergie');
	    $messageEnergie['delete'] = $this->session->flashdata('deleteEnergie');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newEnergie = trim($_POST['add-energie']);
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkEnergieExists = $this->model_marques->checkEnergieExists($newEnergie);
	        if (!$checkEnergieExists && !empty($newEnergie)) {
	            $data = array(
	                'energie_name' => $newEnergie,
	                'energie_date_created' => Date('Y-m-d h:i:s'),
	                'energie_date_modified' => Date('Y-m-d h:i:s'),
	                'energie_status' => 1
	            );
	            $this->model_marques->addEnergie($data);
	            $messageEnergie['update'] = 'This energie "' . $newEnergie . '" is save in database successfully!';
	        } else {
	            if (empty($newEnergie)) {
	                $errors['energie'] = 'This field can`t be empty!';
	            } else {
	                $errors['energie'] = 'This energie "' . $newEnergie . '" is exist in DB';
	            }
	        }
	    }
	    $energies = $this->model_marques->getAllEnergies();
	
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_energie";
	    $config["total_rows"] = count($energies);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	
	    $this->pagination->initialize($config);
	
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_marques->getAllEnergies($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageEnergie', $messageEnergie );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_energie($id) {
	
	    $energie = $this->model_marques->fetchEnergieId($id);
	   // $errors = array();
	   // $errors['energie'] = "";
	
		if ( $energie ) {
			
			$post = $this->input->post();
			
			$response = $this->model_marques->update_energie($post, $id);
			$this -> smarty -> assign('response', $response );
			// $response = array('status'=true,'message'=>'updte ok');
		}
	    /*if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newEnergie = trim($_POST['add-energie']);
	        $energie[0]['energie_name'] = $newEnergie;
	        date_default_timezone_set('Europe/Sofia');
	
	        $checkEnergieExists = $this->model_marques->checkEnergieExists($newEnergie, $id);
	        if (!$checkEnergieExists && !empty($newEnergie)) {
	            $data = array(
	                'energie_name' => $newEnergie,
	                'energie_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_marques->updateEnergie($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editEnergie', 'This energie ' . $newEnergie . ' is edited!');
	            redirect('/admin_panel/add_energie');
	        } else {
	            if (empty($newEnergie)) {
	                $errors['energie'] = 'This field can`t be empty!';
	            } else {
	                $errors['energie'] = 'This energie "' . $newEnergie . '" is exist in DB';
	            }
	        }
	    }*/
	
	   // $this -> smarty -> assign('errors', $errors );
	   // $this -> smarty -> assign('energie', $energie[0] );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_energie($id) {
	    $mark = $this->model_marques->deleteEnergieId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteEnergie', 'This energie id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_energie');
	}
	
}