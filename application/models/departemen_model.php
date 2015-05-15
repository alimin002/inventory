    <?php
    class Departemen_model extends CI_Model{

    function get_departemen_all()
    {
        $query=$this->db->query("SELECT * FROM departemen");
        return $query->result();
    }
	 function select($kd_departemen){
        return $this->db->get_where('departemen', array('kd_departemen'=>$kd_departemen))->row();
    } 
	function get_departemen_by_nama($nama)
    {
        $query=$this->db->query("select * from departemen where nm_departemen='$nama'");
        return $query->result();
    }
	    function simpan_departemen()
	    {
			$simpan_data=array(
            'kd_departemen'   => $this->input->post('txt_kd_departemen'),
           	'nm_departemen'   => $this->input->post('txt_nm_departemen')
						      );      
        $simpan = $this->db->insert('departemen', $simpan_data);
        return $simpan;
		}
		
		    function simpan_edit_departemen($kd_departemen, $nm_departemen)
			{
				$data = array(
				'kd_departemen' => $kd_departemen,
				'nm_departemen' => $nm_departemen
							);
				$this->db->where('kd_departemen', $kd_departemen);
				$this->db->update('departemen', $data);  
			}
			
			//parameter function delete_jabatan($kd_jabatan) dikirim dari class kontroller function dele_jabatan
			function delete_departemen($kd_departemen)
			{
				$query=$this->db->query("DELETE FROM departemen WHERE kd_departemen='$kd_departemen'");
			}
		
}