  <?php
class Pegawai_model extends CI_Model{

    function get_pegawai_all()
    {
        $query=$this->db->query("SELECT pegawai.nip,pegawai.nm_pegawai,jabatan.nm_jabatan,departemen.nm_departemen from pegawai,jabatan,departemen where pegawai.kd_jabatan=jabatan.kd_jabatan and pegawai.kd_departemen=departemen.kd_departemen");
        return $query->result();
		
    }
	//query dilakukannya pencarian bynama function get_pegawai_by_nama($nama) parameter ($nama) dikirim dari class controller function cari jabatan by nama
	function get_pegawai_by_nama($nama)
    {
        $query=$this->db->query("SELECT pegawai.nip,pegawai.nm_pegawai,jabatan.nm_jabatan,departemen.nm_departemen from pegawai,jabatan,departemen where pegawai.nm_pegawai = '$nama' and pegawai.kd_jabatan=jabatan.kd_jabatan and pegawai.kd_departemen=departemen.kd_departemen ");
        return $query->result();
    }
	
    function select($nip){
        return $this->db->get_where('pegawai', array('nip'=>$nip))->row();
    } 
		function simpan_pegawai()
	    {
			$simpan_data=array(
            'nip'             => $this->input->post('txt_nip'),
            'nm_pegawai'      => $this->input->post('txt_nm_pegawai'),
            'alamat'      	  => $this->input->post('txt_alamat'),
            'tmpt_lahir'      => $this->input->post('txt_tmpt_lahir'),
            'tgl_lahir'       => $this->input->post('txt_tgl_lahir'),
			'kd_jabatan'      => $this->input->post('txt_kd_jabatan'),
			'kd_departemen'   => $this->input->post('txt_kd_departemen')
						 );      
        $simpan = $this->db->insert('pegawai', $simpan_data);
        return $simpan;
		}
		
		function update_pegawai()
		{
				$simpan_data=array(
				'nip'             => $this->input->post('txt_nip'),
				'nm_pegawai'      => $this->input->post('txt_nm_pegawai'),
				'alamat'      	  => $this->input->post('txt_alamat'),
				'tmpt_lahir'      => $this->input->post('txt_tmpt_lahir'),
				'tgl_lahir'       => $this->input->post('txt_tgl_lahir'),
				'kd_jabatan'      => $this->input->post('txt_kd_jabatan'),
				'kd_departemen'   => $this->input->post('txt_kd_departemen')
								  ); 
				 $this->db->where('nip',$this->input->post('txt_nip'));
		   		$this->db->update('pegawai', $simpan_data);   
		}
	
	
	function edit_pegawai($nip)
    {
        $q="SELECT * FROM  pegawai WHERE nip='$nip'";
        $query=$this->db->query($q);
        return $query->row();
    }
	
	function simpan_edit_pegawai($nip, $nm_pegawai, $tmpt_lahir, $tgl_lahir, $kd_jabatan, $kd_departemen)
    {
        $data = array(
            'nip'        => $nip,
            'nm_pegawai' => $nm_pegawai,
            'tmpt_lahir' => $tmpt_lahir,
            'tgl_lahir'  => $tgl_lahir,
            'kd_jabatan' => $kd_jabatan,    
            'kd_departemen' => $kd_departemen
        );
        $this->db->where('nip', $nip);
        $this->db->update('pegawai', $data);  
    }
	
	function delete_pegawai($nip)
    {
        $query=$this->db->query("DELETE FROM pegawai WHERE nip='$nip'");
    }
	
	function departemen_view_to_select()
    {
        $query=$this->db->query("select kd_departemen,nm_departemen from departemen");
        return $query->result();
    }
	
}