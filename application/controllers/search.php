<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library("pagination");
	}

	public function index() {
		
	    //search
        $marques = $this->model_marques->getALlMarque();
        $models = $this->model_modeles->getAllModels();
        $engines = $this->model_engines->getAllEnergies();
        
        $this -> smarty -> assign('marques', $marques );
        $this -> smarty -> assign('models', $models );
        $this -> smarty -> assign('engines', $engines );
        
        if (isset($_GET['marques']) || isset($_GET['models']) || isset($_GET['engines']))
        {
            
            $carRangeResult = $this->input->get('car-range');
            $carRangeExplode = explode(",", $this->input->get('car-range'));
            
            $resultOptions = array(
                'vehicule_marques.marque_id' => $this->input->get('marques'),
                'vehicule_modeles.modele_id' => $this->input->get('models'),
                'vehicule_energies.energie_id' => $this->input->get('engines'),        
            );        
            $carRangeResult = array(
                'carRange1' => $carRangeExplode[0],
                'carRange2' => $carRangeExplode[1],
            );
            $data['sectionResultShow'] = 1;
            
            $results = $this->model_cars->searchVehicles($resultOptions, $carRangeResult);
            //echo '<pre>' . print_r($results, 1) . '</pre>';
            
            /* нещо не става при гет метод
            //paginator
            $config["base_url"] = base_url() . "search/index";
            $config["total_rows"] = count($results);
            $config["per_page"] = 2;
            $config["uri_segment"] = 3;
             
            $this->pagination->initialize($config);
             
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["results"] = $this->model_cars->searchVehicles($resultOptions, $carRangeResult, $config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();
            //end paginator
            */
        }  
        else {
            $carRangeResult = array(
                'carRange1' => 10000,
                'carRange2' => 70000,
            );
            $results=0;
            //$data['sectionResultShow'] = 0; //vav view to moga da proverqvam dali e null - za drugite da go napravq taka na kraq
        }
        
        $data['car'] = $this->getOptionFromDb('marques', 'marque', $this->model_marques->getALlMarque());
        $data['model'] = $this->getOptionFromDb('models', 'modele', $this->model_modeles->getAllModels());
        $data['engine'] = $this->getOptionFromDb('engines', 'energie', $this->model_engines->getAllEnergies());
        
        //$this -> smarty -> assign('config', $config );
        $this -> smarty -> assign('data', $data );
        $this -> smarty -> assign('marques', $marques );
        $this -> smarty -> assign('models', $models );
        $this -> smarty -> assign('results', $results );
        $this -> smarty -> assign('carRangeResult', $carRangeResult );
	    
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
	}
	
	function getOptionFromDb($optionName, $ColNameVal, $db) {
	    if (isset($_GET[$optionName]) && $_GET[$optionName] > 0) {
	        $ColName = $ColNameVal . '_name';
	        $ColId = $ColNameVal . '_id';
	        $cars = $db;
	        $car['id'] = $cars[$_GET[$optionName]-1][$ColId];
	        $car['name'] = $cars[$_GET[$optionName]-1][$ColName];
	    } else {
	        $car['id'] = 'select';
	        $car['name'] = 'Select ' . ucfirst($ColNameVal);
	    }
	    return $car;
	}
	

	
}