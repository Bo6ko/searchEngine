<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class results extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library("pagination");
	}

	public function index() {
		
	    //select box info
	    $marques = $this->model_marques->getALlMarque();
	    $models = $this->model_marques->getAllModels();
	    
	    
        //search
        $results = array();
        if (isset($_GET['marques']) || isset($_GET['models']) || isset($_GET['year-from']) || isset($_GET['year-to']) ||
            isset($_GET['price-from']) || isset($_GET['price-to']) || isset($_GET['mileage-from']) || 
            isset($_GET['mileage-to'])) 
            {
                $resultOptions = array(
                    'vehicules.marque_id' => $this->input->get('marques'),
                    'vehicule_modeles.modele_id' => $this->input->get('models'),
                    'vehicules.vehicule_annee >=' => $this->input->get('year-from'),
                    'vehicules.vehicule_annee <=' => $this->input->get('year-to'),
                    'vehicules.vehicule_price >=' => $this->input->get('price-from'),
                    'vehicules.vehicule_price <=' => $this->input->get('price-to'),
                    'vehicules.vehicule_kilometrage >=' => $this->input->get('mileage-from'),
                    'vehicules.vehicule_kilometrage <=' => $this->input->get('mileage-to'),
                    
                );
                $results = $this->model_marques->searchVehicles($resultOptions);
                //echo '<pre>' . print_r($result, 1) . '</pre>';
                
                //paginator
                $config["base_url"] = base_url() . "results/index";
                $config["total_rows"] = count($results);
                $config["per_page"] = 8;
                $config["uri_segment"] = 3;
                 
                $this->pagination->initialize($config);
                 
                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $data["results"] = $this->model_marques->searchVehicles($resultOptions, $config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();
                //end paginator
                
            }       
        
        $data['car'] = $this->getOptionFromDb('marques', 'marque', $this->model_marques->getALlMarque());
        $data['model'] = $this->getOptionFromDb('models', 'modele', $this->model_marques->getAllModels());

        $data['yearFrom'] = $this->getOptionForm('year-from', 'From');
        $data['yearTo'] = $this->getOptionForm('year-to', 'To');
        $data['priceFrom'] = $this->getOptionForm('price-from', 'From');
        $data['priceTo'] = $this->getOptionForm('price-to', 'To');
        $data['mileageFrom'] = $this->getOptionForm('mileage-from', 'From');
        $data['mileageTo'] = $this->getOptionForm('mileage-to', 'To');
	    
	    $this -> smarty -> assign('data', $data );
	    $this -> smarty -> assign('config', $config );
		$this -> smarty -> assign('marques', $marques );
		$this -> smarty -> assign('models', $models );
		$this -> smarty -> assign('results', $results );
		
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}

	function getOptionFromDb($optionName, $marque, $db) {
	    if (isset($_GET[$optionName]) && $_GET[$optionName] > 0) {
	        $marqueName = $marque . '_name';
	        $marqueId = $marque . '_id';
	        $cars = $db;
	        $car['id'] = $cars[$_GET[$optionName]-1][$marqueId];
	        $car['name'] = $cars[$_GET[$optionName]-1][$marqueName];
	    } else {
	        $car['id'] = ' - choose - ';
	        $car['name'] = ' - choose - ';
	    }
	    return $car;
	}
	
	function getOptionForm($optionName, $default) {
	    if (isset($_GET[$optionName])) {
	        $yearFrom = $_GET[$optionName];
	    } else {
	        $yearFrom = $default;
	    } 
	    return $yearFrom;
	}
	
}
