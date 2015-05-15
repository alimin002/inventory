<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class base extends CI_Controller {
     function __construct(){
			parent::__construct();
			$this->load->helper('url'); 
			$this->load->helper('form');
			$this->load->library('form_validation');
	
	//$this->load->helper(array('url', 'form'));
		}
    public function index($username)
    {
	 $this->load->view('header');
	    $this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('breadcrumbs');
        $this->load->view('pagecontent');
		//content web
		// $this->load->view('barang');
		//content web
		
		$this->load->view('footercontent');
		$this->load->view('footer');
    }
	
	
	 public function login($username)
    {
	
	$data = array(
 
    'title'     =>   'Sistem Inventory',
	 'username'     =>  $username,
    'content'   =>   'This is the content',
    'posts'     =>   array('Post 1', 'Post 2', 'Post 3')
 
		);
	
	 $this->load->view('header',$data);
	    $this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('breadcrumbs');
        $this->load->view('pagecontent');
		//content web
		// $this->load->view('barang');
		//content web
		
		$this->load->view('footercontent');
		$this->load->view('footer');
    }
	
	function getpage($pagename,$username){
	
	$data = array(
 
    'title'     =>   'Sistem Inventory',
	'username'     =>  $username,
	'pagename'     =>  $pagename,
    'content'   =>   'This is the content',
    'posts'     =>   array('Post 1', 'Post 2', 'Post 3')
 
		);
	
	
		$this->load->view('header',$data);
	    $this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('breadcrumbs',$pagename);
        $this->load->view('pagecontent');
		//content web
		if($pagename=="barang"){
		 $this->load->view('barang');
		 }else if( $pagename=="supplier"){
		  $this->load->view('supplier');
		 }
		 else if( $pagename=="dashboard"){
		  $this->load->view('dashboard');
		 }
		//content web
		
		$this->load->view('footercontent');
		$this->load->view('footer');
	
	}
}