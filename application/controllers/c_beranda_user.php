<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_user');
		}elseif($this->session->userData('status')!== 'user'){
			echo "<script>;history.go(-1);</script>";
		}
	}

	public function index(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$ids = $this->session->userdata('id_kota');
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil_beranda_user($ids);
		$this->load->view('/after_login/user/halaman_beranda_user',array('provinsi' => $provinsi,'mobil' => $mobil));//halaman beranda user setelah login
	}

	public function getDataByKota(){
		$kota = $_GET['val-kota'];
		$tgl_mulai	= $_GET['val-tglMulai'];
		$tgl_kembali = $_GET['val-tglKembali'];
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_MobilByKota($kota, $tgl_mulai, $tgl_kembali);
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_pencarian',array('mobil' => $mobil,'provinsi' => $provinsi));
	}

	public function orderMobil($id){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_OrderMobil($id);
		$this->load->view('/after_login/user/halaman_order_user',array('mobil' => $mobil,'provinsi' => $provinsi));
	}

	public function buatOrder($id,$idp){
		$tgl_mulai	= $_POST['val-tglMulai'];
		$tgl_kembali = $_POST['val-tglKembali'];
		$data_insert = array(
			'tgl_rental' => $tgl_mulai,
			'tgl_pengembalian' => $tgl_kembali,
			'id_mobil' => $id,
			'id_pengguna' => $idp
		);
		$res = $this->m_mobil->get_buatOrder('tb_pemesanan',$data_insert);
		if($res>0){
			// echo "<pre>";
			// print_r($data_insert);
			// echo "</pre>";
			$this->session->set_flashdata('success_msg', 'Pesanan berhasil dibuat, silahkan lihat halaman pesanan untuk melihat status pesanan Anda');
			redirect(base_url('c_beranda_user'));
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Pesanan');
			redirect(base_url('c_beranda_user'));
		}
	}

	public function dataPesanan($id){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$order= $this->m_mobil->get_DataPesanan($id);
		$this->load->view('/after_login/user/halaman_pesanan_user',array('provinsi' => $provinsi, 'order' => $order));
	}

	public function riwayatPesanan($id){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$order= $this->m_mobil->get_RiwayatPesanan($id);
		$this->load->view('/after_login/user/halaman_riwayat_pesanan',array('provinsi' => $provinsi, 'order' => $order));
	}

	public function det_riwayatPesanan($id){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$driwayat= $this->m_mobil->get_detRiwayatPesanan($id);
		$this->load->view('/after_login/user/halaman_det_riwayat',array('provinsi' => $provinsi, 'driwayat' => $driwayat));
	}

	public function deleteDataPesanan($id){
		$this->load->model('m_mobil');
		$res = $this->m_mobil->deletePesanan($id);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menghapus Data');
		}
		redirect(base_url('c_beranda_user/dataPesanan/'.$this->session->userdata('id')));
	}

	public function hlm_bantuan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_bantuan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_about(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_about',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_syarat(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_syarat',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_kebijakan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_kebijakan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_cara(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_cara',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}


}
?>
