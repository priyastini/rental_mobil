<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_mitra extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_mitra');
		}elseif($this->session->userData('status') == 'user'){
			echo "<script>;history.go(-1);</script>";
		}elseif($this->session->userData('status') == 'admin'){
			echo "<script>;history.go(-1);</script>";
		}
	}
	
	public function index(){
		$this->load->view('/after_login/mitra/halaman_beranda_mitra'); //halaman beranda mitra
	}

	public function dataMobil($id){
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil($id);
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));  //halaman data mobil mitra
	}

	public function tambahMobil(){
		$this->load->model('m_merk');
		$merk= $this->m_merk->get_merk_query();
		$this->load->view('/after_login/mitra/halaman_tambahMobil_mitra', array('merk' => $merk));
	}

	public function editMobil($id){
		$this->load->model('m_merk');
		$this->load->model('m_mobil');
		$mobils= $this->m_mobil->getMobilById($id);
		$this->load->view('/after_login/mitra/halaman_editMobil_mitra',  array('mobils' => $mobils));
	}

	public function updateMobil($id){
		$config['upload_path']          = './uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('val-gambarMobil')) //jika gagal upload
      	{
        	$error = $this->upload->display_errors();
			echo "<script>alert('$error');history.go(-1);</script>";
      	} else{
      		$upload_data = $this->upload->data();
      		$image = $upload_data['file_name'];
      		$data = array(
      			"gbr_mobil" => $this->input->post('val-gambarMobil'),
      			"gbr_mobil" =>$image,
      			"biaya" => $this->input->post('val-biayaSewa')
      		);
      	}
		$this->load->model('m_mobil');
		$this->m_mobil->m_update($id, $data);
		
		redirect(base_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id')));
	}

	public function deleteMobil($id){
		$this->load->model('m_mobil');
		$res = $this->m_mobil->delete($id);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menghapus Data');
		}
		redirect(base_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id')));
	}

	public function dataValOrder($id){ // halaman validasi order mengambil data yang berstatus menunggu
		$this->load->model('m_mitra');
		$dvalid= $this->m_mitra->get_dataValOrder($id);
		$this->load->view('/after_login/mitra/halaman_validasi_order', array('dvalid' => $dvalid)); 
	}

	public function detailValidOrder($id){
		$this->load->model('m_mitra');
		$valid= $this->m_mitra->get_detDataOrder($id);
		$this->load->view('/after_login/mitra/halaman_detail_order', array('valid' => $valid)); //halaman data mobil mitra
	}

	public function validasiOrder1($id){ //agree
		$pesan = $_POST['pesan'];
		$this->load->model('m_mitra');
		$this->m_mitra->get_validasiAgree($id, $pesan);
		redirect(base_url('c_beranda_mitra/dataValOrder/'.$this->session->userdata('id')));
	}

	public function validasiOrder2($id){ //disagree
		$pesan = $_POST['pesan'];
		$this->load->model('m_mitra');
		$this->m_mitra->get_validasiDisagree($id, $pesan);
		redirect(base_url('c_beranda_mitra/dataValOrder/'.$this->session->userdata('id')));
	}

	public function dataOrder($id){ //halaman validasi order mengambil data yang berstatus berhasil
		$this->load->model('m_mitra');
		$order= $this->m_mitra->get_dataOrder($id);
		$this->load->view('/after_login/mitra/halaman_data_order', array('order' => $order)); 
	}

	public function detailDataOrder($id){
		$this->load->model('m_mitra');
		$valid= $this->m_mitra->get_detDataOrder($id);
		$this->load->view('/after_login/mitra/halaman_detail_order', array('valid' => $valid)); //halaman data mobil mitra
	}

	public function editProfil($id){
		$this->load->model('m_mitra'); 	 	 	
		$profils = $this->m_mitra->getProfilMitraById($id);
		$this->load->view('/after_login/mitra/halaman_editProfil_mitra',array('profils' => $profils));
	}


	public function updateProfil(){
		$this ->load->model('m_mitra');
		$this->m_mitra->m_updateProfil();
		// if($result){
		// 	$this->session->set_flashdata('success_msg', 'Data Berhasil Di Update');
		// }else{
		// 	$this->session->set_flashdata('error_msg', 'Gagal Mengupdate Data');
		// }
		redirect(base_url('c_beranda_mitra/index/'.$this->session->userdata('id')));
	}

	public function hlm_bantuan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/mitra/halaman_bantuan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_about(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/mitra/halaman_about',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_syarat(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/mitra/halaman_syarat',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_kebijakan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/mitra/halaman_kebijakan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_cara(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/mitra/halaman_cara',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

}
