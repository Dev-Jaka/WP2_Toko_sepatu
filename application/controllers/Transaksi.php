<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{



	public function proses()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Tidak boleh kosong nama']);
		if ($this->form_validation->run() == false) {

			$data['judul'] = "Sepatu Muda 33";
			$h['kirim'] = [
				'Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'
			];
			$this->load->view('template\header', $data);
			$this->load->view('home', $h);
			$this->load->view('template\footer');
		} else {

			$data = [
				'nama' => $this->input->post('nama'),
				'telephone' => $this->input->post('telephone'),
				'ukuran' => $this->input->post('ukuran'),
				'merk' => $this->input->post('merk'),
				'harga' => $this->Mtransaksi->proses($this->input->post('merk')),
			];
			$kirim['judul'] = "Sepatu Muda 33 : Keranjang";
			$this->load->view('template\header', $kirim);
			$this->load->view('print', $data);
			$this->load->view('template\footer');
		}
	}
}
