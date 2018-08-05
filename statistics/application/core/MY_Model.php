<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model Extends CI_Model {

	protected $compte		= false;
	
	public $primary_id;
	public $primary_table;

	public function __construct() {
		
		parent::__construct();
		
		$this->load->driver('cache');
		
	#	===========================================================================================
	#	SESSION	functionality
		if ( isset($_SESSION['compte']) && !empty($_SESSION['compte']) ) {
			
			$this->compte	= $_SESSION['compte'];
			
			$this->smarty->assign('compte', $this->compte);
		}
	}
	
	public function preparePagination ( $url = "" , $per_page = 0 , $cur_page = 1 , $uri_segment = 5 ) {
		
		extract($_GET);
		
		if( isset( $status ) && $status != '' ) {
			$this->db->where( $this->table . '.'.$this->column_status , $status );
		}
		
		if ( isset($this->prefix) && !empty($this->prefix)) {
			if( isset( $dc_from ) && !empty($dc_from) ) {
				$this->db->where( $this->prefix.'_date_creation >=' , convertDate($dc_from) . ' 00:00:00' );
			}
			if( isset( $dc_to ) && !empty($dc_to) ) {
				$this->db->where( $this->prefix.'_date_creation <=' , convertDate($dc_to) . ' 00:00:00' );
			}
			if( isset( $dm_from ) && !empty($dm_from) ) {
				$this->db->where( $this->prefix.'_date_modification >=' , convertDate($dm_from) . ' 00:00:00' );
			}
			if( isset( $dm_to ) && !empty($dm_to) ) {
				$this->db->where( $this->prefix.'_date_modification <=' , convertDate($dm_to) . ' 00:00:00' );
			}
		}
	#	limit, offset
		$this->db->limit($per_page, $cur_page);
		
	#	result
		$result		= $this->db->get();
		$rows		= ( $result->num_rows() > 0 ) ? $result->result_array() : false;
		$total_rows	= $this->dbTotal();
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		$config['base_url']		= base_url().$url;
		$config['total_rows']	= $total_rows;
		$config['per_page']		= $per_page;
		$config['cur_page']		= $cur_page;
		$config['uri_segment']	= $uri_segment;
		$config['num_links']	= 3;
		$config['first_url']	= $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize( $config );
		$pagination = $this->pagination->create_links();
		
		#	--------------------------
		if ( $total_rows > 0 ) {
			
			$cur_page		= ( !isset($cur_page) || empty($cur_page) ) ? 0 : intval($cur_page);
			if ( $rows ) {
				return  array('total'=>$total_rows,'pagination'=>$pagination,'data'=>$rows);
			}else{
				return  array('total'=>$total_rows,'pagination'=>$pagination,'data'=>false);
			}
		}
		
		return  array('total'=>$total_rows,'pagination'=>false,'data'=>false);
	}

#	===========================================================================================
#	GET helpers
	public function getById( $id ) {
		$this->db->select( '*' );
		$this->db->from( $this->table );
		$this->db->where( $this->table.'.'.$this->column_primary , $id );
		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : false;
	}
	
	public function getAll() {
		$this->db->select( '*' );
		$this->db->from( $this->table );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->result_array() : false;
	}

#	===========================================================================================
#	DATABASE helpers
	public function dbInsert( $table , $insert) {
		
		$this->db->insert( $table , $insert );
		
		if ( $this->db->affected_rows() > 0 ) {
			
			$insert_id = $this->db->insert_id();
			
			return array( 'id' => $insert_id , 'message' => 'success' );
			
		}
		
		return array( 'id' => FALSE , 'message' => FALSE );
	}
	
	public function dbTotal(){
		$result = $this->db->query('SELECT FOUND_ROWS() as `total`;');
		$row = $result->row_array();
		
		return ( isset($row['total']) ) ? $row['total'] : 0;
	}
	
	public function dbDelete( $id = false ){
		
		$response = $this->db->delete( $this->table , array( $this->column_primary  => $id ) );
		
		if (is_array($response) ) {
			return $response;
		}else{
			return array('status'=>true,'message'=>'<p>'.MSG_DELETE_SUCCESS.'</p>');
		}
	}
	
	public function flag ( $table , $primary_id_column , $id , $flag , $value ) {
		
		if ( !isset($table) || empty($table) ) {
			return false;
		}
		
		if ( !isset($primary_id_column) || empty($primary_id_column) ) {
			return false;
		}
		
		if ( !isset($id) || empty($id) ) {
			return false;
		}
		
		if ( !isset($flag) || empty($flag) ) {
			return false;
		}
		
		if ( !isset($value) || $value === false ) {
			return false;
		}
		
	#	update
		$update = array( $flag => $value );
		$where	= array( $primary_id_column => $id );
		$this->db->update( $table , $update , $where );
		return array('status'=>true,'message'=>'<p>'.MSG_UPDATE_SUCCESS.'</p>');
	}
	
	public function exists( $table , $column_value = FALSE, $column_name = FALSE ) {
		$this->db->select( "*" );
		$this->db->from( $table );
		$this->db->where( $column_name , $column_value );
		$result = $this->db->get();
		return( $result->num_rows() > 0 ) ? TRUE : FALSE;
	}
}