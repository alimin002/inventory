
		<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		class main extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url'); 
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper(array('url', 'form'));
		}
		
		public function index()
		{
			$this->load->view('main_view');
		}
			
		
	
		
	}
	
	 