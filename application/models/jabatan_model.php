  <?php
class Jabatan_model extends CI_Model{

		function get_jabatan_all()
		{
			$query=$this->db->query("SELECT * FROM jabatan");
			return $query->result();
		}
		//?
		function select($kd_jabatan){
			return $this->db->get_where('jabatan', array('kd_jabatan'=>$kd_jabatan))->row();
		}
	
		function simpan_jabatan()
	    {
			$simpan_data=array(
            'kd_jabatan'   => $this->input->post('txt_kd_jabatan'),
           	'nm_jabatan'   => $this->input->post('txt_nm_jabatan')
						 );      
        $simpan = $this->db->insert('jabatan', $simpan_data);
        return $simpan;
		}
		//parameter $kd_jabatan, $nm_jabatan diisi nilai dari kelas pegawai controller function simpan edit jabatan
		function simpan_edit_jabatan($kd_jabatan, $nm_jabatan)
			{
					       $data = array(
					'kd_jabatan' => $kd_jabatan,
					'nm_jabatan' => $nm_jabatan
							);
				$this->db->where('kd_jabatan', $kd_jabatan);
				$this->db->update('jabatan', $data);  
			}
			//parameter function delete_jabatan($kd_jabatan) dikirim dari class kontroller function dele_jabatan
			function delete_jabatan($kd_jabatan)
			{
				$query=$this->db->query("DELETE FROM jabatan WHERE kd_jabatan='$kd_jabatan'");
			}
			//
			function get_jabatan_by_nama($nama)
			{
				$query=$this->db->query("select * from jabatan where nm_jabatan = '$nama'");
				return $query->result();
			}
	
	
}