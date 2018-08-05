<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
	          
    $years = $this->model_statistic->getYear();
    $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
    
    $data = array(
      'choiceYear' => $this->input->get('year'),
      'choiceMonth' => $this->input->get('month'),
      'currMonthName' => date('F', mktime(0, 0, 0, $this->input->get('month'), 10)),
      'maxCountMonth' => 0,
      'maxCountYear' => array_sum($this->model_statistic->getMonthByYearId($this->input->get('year'))),
      'maxCountYearPrevent' => array_sum($this->model_statistic->getMonthByYearId($this->input->get('year')-1)),
      'maxCountYearPercent' => 0,
      'currCountYearStat' => $this->model_statistic->getMonthByYearId($this->input->get('year')),
      'lastDayOfMonth' => 0,
    );
    if($data['choiceYear'] == '') {
      $data['choiceYear'] = $years[0]['year'];
      $data['currCountYearStat'] = $this->model_statistic->getMonthByYearId($years[0]['year']);
    }
    
    $data['lastDayOfMonth'] = date("d", strtotime('last day of ' . $data['currMonthName']));
    if($data['choiceMonth'] == '') {
      $data['choiceMonth'] = date("m");
      $data['currMonthName'] = date("M");
      //$data['lastDayOfMonth'] = date("d", strtotime('last day of ' . $data['choiceMonth']));
    }
    
    if ($data['maxCountYearPrevent'] > 0) {
      $data['maxCountYearPercent'] = number_format((float)($data['maxCountYear'] / $data['maxCountYearPrevent'] * 100), 2);
    }
    
    $monthStat = $this->model_statistic->getStatForMonth($data['choiceYear'], $data['lastDayOfMonth'], intval($data['choiceMonth']));  
    $data['maxCountMonth'] = array_sum($this->model_statistic->getStatForMonth($data['choiceYear'], $data['lastDayOfMonth'], intval($data['choiceMonth'])));
    
    
	
    $this -> smarty -> assign('data', $data );
		$this -> smarty -> assign('years', $years );
    $this -> smarty -> assign('months', $months );
    $this -> smarty -> assign('monthStat', $monthStat );
		
		$this -> smarty -> assign('content', $this -> smarty -> fetch( $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		$this -> smarty -> display('main.htm');
    
	}

}