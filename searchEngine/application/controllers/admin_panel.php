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
	
	/*
	 * ADD Car
	 */
	
	public function add_car() {
	
	    $errors = array('model' => "", 'marque' => "", 'carrosserie' => "", 'engine' => "", 'boite' => "", 'color' => "");
	    $messageModel = array('update' => "");
	    $this->load->library('session');
	    $messageModel['edit'] = $this->session->flashdata('editModel');
	    $messageModel['delete'] = $this->session->flashdata('deleteModel');
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $marqueId = (int)$this->input->post("add-marque");
	        $newModel = $this->input->post("add-model");
	        $newCarrosserie = $this->input->post("add-carrosserie");
	        $newEngine = $this->input->post("add-engine");
	        $newBoite = $this->input->post("add-boite");
	        $newColor = $this->input->post("add-color");
	        date_default_timezone_set('Europe/Sofia');     
	        
            $data = array(
                'modele_id' => (int)$newModel,
                'marque_id' => (int)$marqueId,
                'carrosserie_id' => (int)$newCarrosserie,
                'energie_id' => (int)$newEngine,
                'boite_id' => (int)$newBoite,
                'couleur_id' => (int)$newColor,
                'vehicule_date_created' => Date('Y-m-d h:i:s'),
                'vehicule_date_modified' => Date('Y-m-d h:i:s'),
                'vehicule_status' => 1
            );
            var_dump($data);
            $this->model_cars->addCar($data);
            
            $messageModel['update'] = 'This car is save in database successfully!';
        
	        if ($marqueId < 1) {
                $errors['marque'] = 'Choose marque please!';
            }
            if ($newModel < 1) {
                $errors['model'] = 'Choose model please!';
            }
            if ($newCarrosserie < 1) {
                $errors['carrosserie'] = 'Choose carrosserie please!';
            }
	        if ($newEngine < 1) {
                $errors['engine'] = 'Choose engine please!';
            }
            if ($newBoite < 1) {
                $errors['boite'] = 'Choose boite please!';
            }
            if ($newColor < 1) {
                $errors['color'] = 'Choose color please!';
            }
	        
	    }
	    $cars = $this->model_cars->getALlCars();
	    $marques = $this->model_marques->getALlMarque();
	    $models = $this->model_modeles->getAllModels();
	    $carrosseries = $this->model_carrosseries->getAllCarrosseries();
	    $engines = $this->model_engines->getAllEnergies();
	    $boites = $this->model_boites->getAllBoites();
	    $colors = $this->model_cars->getAllColors();

	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_car";
	    $config["total_rows"] = count($cars);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	     
	    $this->pagination->initialize($config);
	     
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_cars->getAllCars($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator

	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageModel', $messageModel );
	    $this -> smarty -> assign('marques', $marques );
	    $this -> smarty -> assign('models', $models );
	    $this -> smarty -> assign('carrosseries', $carrosseries );
	    $this -> smarty -> assign('engines', $engines );
	    $this -> smarty -> assign('boites', $boites );
	    $this -> smarty -> assign('colors', $colors );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_car($id) {
	    
	    $car = $this->model_cars->fetchCarId($id);
	    $marques = $this->model_marques->getALlMarque();
	    $models = $this->model_modeles->getAllModels();
	    $carrosseries = $this->model_carrosseries->getAllCarrosseries();
	    $engines = $this->model_engines->getAllEnergies();
	    $boites = $this->model_boites->getAllBoites();
	    $colors = $this->model_cars->getAllColors();
	    
	    $errors = array('model' => "", 'marque' => "", 'carrosserie' => "", 'engine' => "", 'boite' => "", 'color' => "");
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $marqueIdFromPost = (int)$this->input->post("add-marque");	        
	        $modelIdFromPost = $this->input->post("add-model");
	        $carrosserieIdFromPost = $this->input->post("add-carrosserie");
	        $engineIdFromPost = $this->input->post("add-engine");
	        $boiteIdFromPost = $this->input->post("add-boite");
	        $colorIdFromPost = $this->input->post("add-color");
	        date_default_timezone_set('Europe/Sofia');
	
	       
            $data = array(
                'modele_id' => (int)$modelIdFromPost,
                'marque_id' => (int)$marqueIdFromPost,
                'carrosserie_id' => (int)$carrosserieIdFromPost,
                'energie_id' => (int)$engineIdFromPost,                
                'boite_id' => (int)$boiteIdFromPost,
                'couleur_id' => (int)$colorIdFromPost,
                'vehicule_date_modified' => Date('Y-m-d h:i:s'),
            );
            
            $this->model_cars->updateCar($data, $id);
            $this->load->library('session');
            $this->session->set_flashdata('editModel', 'This modele ' . $modelIdFromPost . ' is edited!');
            redirect('/admin_panel/add_car');
	        

	        if ($marqueIdFromPost < 1) {
                $errors['marque'] = 'Choose marque please!';
            }
            if ($modelIdFromPost < 1) {
                $errors['model'] = 'Choose model please!';
            }
            if ($carrosserieIdFromPost < 1) {
                $errors['carrosserie'] = 'Choose carrosserie please!';
            }
            if ($engineIdFromPost < 1) {
                $errors['engine'] = 'Choose engine please!';
            }
            if ($boiteIdFromPost < 1) {
                $errors['boite'] = 'Choose boite please!';
            }
            if ($colorIdFromPost < 1) {
                $errors['color'] = 'Choose color please!';
            }
	    }
	    
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('car', $car[0] );
	    $this -> smarty -> assign('marques', $marques );
	    $this -> smarty -> assign('models', $models );
	    $this -> smarty -> assign('carrosseries', $carrosseries );
	    $this -> smarty -> assign('engines', $engines );
	    $this -> smarty -> assign('boites', $boites );
	    $this -> smarty -> assign('colors', $colors );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_car($id) {
	    $model = $this->model_cars->deleteCarId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteCar', 'This car id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_car');
	}
	

	/*
	 * Add Mark
	 */
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
	
	        $checkModelExists = $this->model_modeles->checkModelExists($newModel);
	        if (!$checkModelExists && !empty($newModel) && $marqueId > 0) {
	            $data = array(
	                'modele_name' => $newModel,
	                'marque_id' => (int)$marqueId,
	                'modele_date_created' => Date('Y-m-d h:i:s'),
	                'modele_date_modified' => Date('Y-m-d h:i:s'),
	                'modele_status' => 1
	            );
	            $this->model_modeles->addModel($data);
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
	    $models = $this->model_modeles->getAllModels();
	    
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_model";
	    $config["total_rows"] = count($models);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	    
	    $this->pagination->initialize($config);
	    
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_modeles->getAllModels($config["per_page"], $page);
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
	
	    $model = $this->model_modeles->fetchModelId($id);
	    $marques = $this->model_marques->getALlMarque();
	    $marqueId = $this->model_marques->fetchMarkId($model[0]['marque_id']);
	    $errors = array('model' => "", 'marque' => "");
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $marqueIdFromPost = (int)$this->input->post("marques");

	        var_dump($marqueIdFromPost);
	        $newModel = $this->input->post("add-model");
	        $model[0]['modele_name'] = $newModel;
	        date_default_timezone_set('Europe/Sofia');
	
	        $isExistModel = $this->model_modeles->checkModelExists($newModel, $id);
	        if (!$isExistModel && !empty($newModel) && $marqueIdFromPost > 0) {
	            $data = array(
	                'modele_name' => $newModel,
	                'marque_id' => (int)$marqueIdFromPost,
	                'modele_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_modeles->updateModel($data, $id);
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
	    $model = $this->model_modeles->deleteModelrId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteModel', 'This modele id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_model');
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
	
	        $checkCarrosserieExists = $this->model_carrosseries->checkCarrosserieExists($newCarrosserie);
	        if (!$checkCarrosserieExists && !empty($newCarrosserie)) {
	            $data = array(
	                'carrosserie_name' => $newCarrosserie,
	                'carrosserie_date_created' => Date('Y-m-d h:i:s'),
	                'carrosserie_date_modified' => Date('Y-m-d h:i:s'),
	                'carrosserie_status' => 1
	            );
	            $this->model_carrosseries->addCarrosserie($data);
	            $messageCarrosserie['update'] = 'This carrosserie "' . $newCarrosserie . '" is save in database successfully!';
	        } else {
	            if (empty($newCarrosserie)) {
	                $errors['carrosserie'] = 'This field can`t be empty!';
	            } else {
	                $errors['carrosserie'] = 'This carrosserie "' . $newCarrosserie . '" is exist in DB';
	            }
	        }
	    }
	    $carrosseries = $this->model_carrosseries->getAllCarrosseries();
	
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_carrosserie";
	    $config["total_rows"] = count($carrosseries);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	
	    $this->pagination->initialize($config);
	
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_carrosseries->getAllCarrosseries($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageCarrosserie', $messageCarrosserie );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_carrosserie($id) {
	
	    $carrosserie = $this->model_carrosseries->fetchCarrosserieId($id);
	    $errors = array();
	    $errors['carrosserie'] = "";
	
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newCarrosserie = $this->input->post("add-carrosserie"); 
	        $carrosserie[0]['carrosserie_name'] = $newCarrosserie;
	        date_default_timezone_set('Europe/Sofia');
	        
	        $checkCarrosserieExists = $this->model_carrosseries->checkCarrosserieExists($newCarrosserie, $id);
	        if (!$checkCarrosserieExists && !empty($newCarrosserie)) {
	            $data = array(
	                'carrosserie_name' => $newCarrosserie,
	                'carrosserie_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_carrosseries->updateCarrosseries($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editCarrosserie', 'This carrosserie ' .$id .' '. $newCarrosserie . ' is edited!');
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
	    $mark = $this->model_carrosseries->deleteCarrosserieId($id);
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
	
	        $checkEnergieExists = $this->model_engines->checkEnergieExists($newEnergie);
	        if (!$checkEnergieExists && !empty($newEnergie)) {
	            $data = array(
	                'energie_name' => $newEnergie,
	                'energie_date_created' => Date('Y-m-d h:i:s'),
	                'energie_date_modified' => Date('Y-m-d h:i:s'),
	                'energie_status' => 1
	            );
	            $this->model_engines->addEnergie($data);
	            $messageEnergie['update'] = 'This energie "' . $newEnergie . '" is save in database successfully!';
	        } else {
	            if (empty($newEnergie)) {
	                $errors['energie'] = 'This field can`t be empty!';
	            } else {
	                $errors['energie'] = 'This energie "' . $newEnergie . '" is exist in DB';
	            }
	        }
	    }
	    $energies = $this->model_engines->getAllEnergies();
	
	    //paginator
	    $config["base_url"] = base_url() . "admin_panel/add_energie";
	    $config["total_rows"] = count($energies);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	
	    $this->pagination->initialize($config);
	
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data["results"] = $this->model_engines->getAllEnergies($config["per_page"], $page);
	    $data["links"] = $this->pagination->create_links();
	    //end paginator
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('messageEnergie', $messageEnergie );
	    $this -> smarty -> assign('data', $data );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/add/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function edit_energie($id) {
	
	    $energie = $this->model_engines->fetchEnergieId($id);
	    $errors = array();
	    $errors['energie'] = "";
	
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
	
	        $newEnergie = $this->input->post("add-energie"); 
	        $carrosserie[0]['energie_name'] = $newEnergie;
	        date_default_timezone_set('Europe/Sofia');
	        
	        $checkCarrosserieExists = $this->model_engines->checkEnergieExists($newEnergie, $id);
	        if (!$checkCarrosserieExists && !empty($newEnergie)) {
	            $data = array(
	                'energie_name' => $newEnergie,
	                'energie_date_modified' => Date('Y-m-d h:i:s'),
	            );
	            $this->model_engines->updateEnergie($data, $id);
	            $this->load->library('session');
	            $this->session->set_flashdata('editEnergie', 'This energie ' .$id .' '. $newEnergie . ' is edited!');
	            redirect('/admin_panel/add_energie');
	        } else {
	            if (empty($newEnergie)) {
	                $errors['energie'] = 'This field can`t be empty!';
	            } else {
	                $errors['energie'] = 'This energie "' . $newEnergie . '" is exist in DB';
	            }
	        }
	    }
	
	    $this -> smarty -> assign('errors', $errors );
	    $this -> smarty -> assign('energie', $energie[0] );
	
	    $this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/edit/' . $this -> router -> fetch_method() . '.htm'));
	    $this -> smarty -> display('main.htm');
	}
	
	public function delete_energie($id) {
	    $mark = $this->model_engines->deleteEnergieId($id);
	    $this->load->library('session');
	    $this->session->set_flashdata('deleteEnergie', 'This energie id: ' . $id . ' is deleted!');
	
	    redirect('/admin_panel/add_energie');
	}
	
}