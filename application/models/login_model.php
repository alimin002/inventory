  <?php
class Login_model extends CI_Model{

  
	
	function login($username,$password){
	 $query=$this->db->query("select * from tblmasterpengguna where namauser='$username' and katakunci='$password'");
        return $query->num_rows();
	}
	
	 public function getloginall()
    {
       try {
		    $query=$this->db->query("SELECT * FROM tblmasterpengguna");
            return $query->result();
        
        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
	
}