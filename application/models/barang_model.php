  <?php
class barang_model extends CI_Model{

  
	
	function login($username,$password){
	 $query=$this->db->query("select * from tblmasterpengguna where namauser='$username' and katakunci='$password'");
        return $query->num_rows();
	}
	
	 public function getbarangall()
    {
       try {
		    $query=$this->db->query("SELECT * FROM barang");
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
	
}