  <?php
class barang_model extends CI_Model{

  
	
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
		    $query=$this->db->query("SELECT kode_barang,kode_produk,nama_barang,satuan,harga_beli,harga_jual,stock FROM barang order by id limit 4") ;
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
	
	public function pindahpage($pagestart){
	
		try {
		    $query=$this->db->query("SELECT kode_barang,kode_produk,nama_barang,satuan,harga_beli,harga_jual,stock FROM barang order by id   limit 4 offset(4 * '$pagestart')") ;
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }	
	
	}
	
	
}