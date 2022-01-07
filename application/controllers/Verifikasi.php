<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi extends CI_Controller
{


    public function index()
    {
        $token['kirim'] = mt_rand(1000, 9999);
        $data['judul'] = "Sepatu Muda 33";
        $this->load->view('template\header', $data);
        $this->load->view('verifikasi-view', $token);
    }

    public function cek()
    {

        $sendtoken = $this->input->post('sendtoken');
        $retoken = $this->input->post('m');
        if ($sendtoken == $retoken) {
            $this->load->library('form_validation');
            if ($this->form_validation->run() == false) {
                redirect('transaksi/proses');
            } else {

                $data['judul'] = "Sepatu Muda 33";
                $h['kirim'] = [
                    'Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'
                ];
                $this->load->view('template\header', $data);
                $this->load->view('home', $h);
                $this->load->view('template\footer');
            }
        } else {
            redirect('verifikasi');
        }
    }
}
