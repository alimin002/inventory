<?php
class barang_model extends CI_Model{

  
	function cari_barang($param){
		try {
		    $query=$this->db->query("SELECT a.kode_barang,b.nama_produk,a.nama_barang,a.satuan,a.harga_beli,a.harga_jual,a.stock FROM barang a
			left join produk b 
			on a.kode_produk=b.kode_produk 
			where a.nama_barang ilike '%'||'$param'||'%'
			order by id") ;
			return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}
	
	
	
	function detail_barang($param){
		try {
		    $query=$this->db->query("SELECT a.kode_barang,b.nama_produk,a.nama_barang,a.satuan,a.harga_beli,a.harga_jual,a.stock FROM barang a
			left join produk b 
			on a.kode_produk=b.kode_produk 
			where a.kode_barang ='$param'
			order by id") ;
			return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}
	
	
	
	
	
	
	
	
	
	
	
	function login($username,$password){
	 $query=$this->db->query("select * from tblmasterpengguna where namauser='$username' and katakunci='$password'");
        return $query->num_rows();
	}
	
	public function gettotalrecord(){
	
		try {
		    $query=$this->db->query("select count(*) as totalrecord from barang") ;
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }	
	}
	
	 public function getbarangall()
    {
       try {
	   $totalrecord = $this->gettotalrecord();
		    $query=$this->db->query("SELECT a.kode_barang,b.nama_produk,a.nama_barang,a.satuan,a.harga_beli,a.harga_jual,a.stock FROM barang a
			left join produk b 
			on a.kode_produk=b.kode_produk
			order by id limit 4") ;
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
	
	public function pindahpage($pagestart){
	
		try {
		    $query=$this->db->query("SELECT a.kode_barang,b.nama_produk,a.nama_barang,a.satuan,a.harga_beli,a.harga_jual,a.stock FROM barang a
			left join produk b 
			on a.kode_produk=b.kode_produk order by id   limit 4 offset(4 * '$pagestart')") ;
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }	
	
	}
	
	
}