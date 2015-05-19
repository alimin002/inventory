<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		class barang_controller extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url'); 
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper(array('url', 'form'));
			$this->load->helper(array('form', 'url'));
		}
		
		public function getbarangall(){
		$this->load->model('barang_model');
		$databarang=$this->barang_model->getbarangall();
		echo json_encode($databarang);	
		}
		
		public function get_product(){
		$this->load->model('barang_model');
		$dataproduct=$this->barang_model->get_product();
		echo json_encode($dataproduct);	
		}
		
		function gettotalrecord(){
		
		$this->load->model('barang_model');
		$totalrecord=$this->barang_model->gettotalrecord();
		echo json_encode($totalrecord);	
		
		}
		
		function pindahpage(){
		
		$this->load->model('barang_model');
		$databarang=$this->barang_model->pindahpage($_POST['page']);
		echo json_encode($databarang);
		//echo $_POST['page'].'nilai ini berasal dari server';
		//echo 'ajax sukses';
		}
		
		
		public function cari_barang(){
			$this->load->model('barang_model');
			$databarang=$this->barang_model->cari_barang($_POST['param']);
			echo json_encode($databarang);
		}
		
		function hapus_data(){
			$this->load->model('barang_model');
			$databarang=$this->barang_model->hapus_data($_POST['kode_barang']);
			$databarang=$this->barang_model->getbarangall();
			echo json_encode($databarang);
		}
		
		function edit_data(){
			$this->load->model('barang_model');
			$this->barang_model->edit_data(
			$_POST['kode_barang'],
			$_POST['nama_barang'],
			$_POST['kode_produk'],
			$_POST['satuan'],
			$_POST['harga_beli'],
			$_POST['harga_jual'],
			$_POST['stock']
			);
			$databarang=$this->barang_model->getbarangall();
			echo json_encode($databarang);
		}
		
		
		function upload_barang($pagename,$username,$id,$kode_barang){
			$this->load->model('barang_model');
			$databarang=$this->barang_model->detail_barang($kode_barang);
			    //jika data bukan dalam bentuk json
			//echo $databarang[0]->kode_barang; 
				//jika data dalam bentuk json
			//$x=json_encode($databarang);
			//$c=json_decode($x, true);
			//echo $c[0]['kode_barang'];
			//die();
			$data = array(
				'title'     =>   'Sistem Inventory',
				'username'  =>    $username,
				'pagename'  =>    $pagename,
				'databarang'=>	  $databarang,
				'content'   =>   'This is the content',
				'id'		=>		$id,
				'posts'     =>   array('Post 1', 'Post 2', 'Post 3')
		);
		
		$this->load->view('header',$data);
	    $this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('breadcrumbs',$pagename);
        $this->load->view('pagecontent',$pagename);
		//content web
		
		  $this->load->view($pagename,$data);
		//content web
		
		$this->load->view('footercontent');
		$this->load->view('footer');
		
		
		
		}
		
		function login(){
		$this->load->model('login_model');
		$logresult=$this->login_model->login($_POST['username'],$_POST['password']);
		echo $logresult;
		}
		function tampilmenuutama()
		{
			$this->load->view('home');
		}
		public function index()
		{
			$this->view_login();
		}
		function view_login()
		{
			$this->load->view('login_view');
		}
		
		
		function do_upload(){
		$path = "uploads/foto_barang/".$_POST['dirfile'];
		if(!is_dir($path)) //create the folder if it's not already exists
        {
				mkdir($path,0755,TRUE);
				$config['upload_path'] ='./uploads/foto_barang/'.$_POST['dirfile'];
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				$config['file_name'] = 'foto.jpg';
				try
					{
						$this->load->library('upload', $config);
						$data = array('upload_data' => $this->upload->data());
					}
					 catch(Exception $e)
					{
					  echo 'Message Kesalahan: ' .$e->getMessage(); die();
					}
				 
				
				if ( ! $this->upload->do_upload())
					{
						$error = array('error' => $this->upload->display_errors());
						echo "upload gagal"; die();
					}
					else
					{
						$new_name = 'foto.jpg';
						$config['file_name'] = $new_name;
						$data = array('upload_data' => $this->upload->data());
						
					}
		   
        } else{
				$this-> deleteDir($path);
				 mkdir($path,0755,TRUE);
				//
				
				
				$config['upload_path'] ='./uploads/foto_barang/'.$_POST['dirfile'];
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				$config['file_name'] = 'foto.jpg';
				try
				{
				$this->load->library('upload', $config);
				$data = array('upload_data' => $this->upload->data());
				}
				 catch(Exception $e)
				 {
				  echo 'Message Kesalahan: ' .$e->getMessage(); die();
				 }
				 
				
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$new_name = 'foto.jpg';
					$config['file_name'] = $new_name;
					$data = array('upload_data' => $this->upload->data());
			
					
				}
				
		
		
		}
		echo "<h2>Loading image please wait a few second...</h2 style='color='red''><br>";
		echo "<img src=".base_url()."loading.gif>";
		//header("Location: ".base_url()."index.php/menu/editfoto?id=".$_POST['dirfile']);
		
		header("Refresh:0; url=".base_url()."index.php/barang_controller/upload_barang/barang_upload/admin/".$_POST['id']."/".$_POST['dirfile']);
 
	}
	

public static function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
	
	
	}

	function buat_kode_barang(){
		$this->load->model('barang_model');
		$kode_barang=$this->barang_model->buat_kode_barang();
		$barang_count=$this->barang_model->gettotalrecord();
		if($barang_count[0]->totalrecord <=0){
		echo $barang_count[0]->totalrecord;
		}else{
		echo $kode_barang[0]->kode_barang; 
		}
		}
	
	function simpan_data(){
	//echo $_POST['kode_barang'].$_POST['nama_barang'].$_POST['kode_produk'].$_POST['satuan'].$_POST['harga_beli'].$_POST['kode_barang'].$_POST['harga_jual'].$_POST['stock'];
	$this->load->model('barang_model');
	$this->barang_model->simpan_data(
	$_POST['kode_barang'],
	$_POST['nama_barang'],
	$_POST['kode_produk'],
	$_POST['satuan'],
	$_POST['harga_beli'],
	$_POST['harga_jual'],
	$_POST['stock']
	);
	$databarang=$this->barang_model->getbarangall();
	echo json_encode($databarang);
	}
	
	}