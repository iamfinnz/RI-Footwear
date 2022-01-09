<?php 
defined('BASEPATH') or exit('No direct script allowed');

class Sepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		is_logged_in();
        $this->load->model('Sepatu_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Sepatu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sepatu'] = $this->Sepatu_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("Sepatu/vw_sepatu", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
	{
		$data['judul'] = "Halaman Tambah Sepatu";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Sepatu', 'required', [
			'required' => 'Nama Sepatu Wajib di isi'
		]);
		$this->form_validation->set_rules('merk', 'Merk', 'required', [
			'required' => 'Merk Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
			'required' => 'Ukuran Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("sepatu/vw_tambah_sepatu", $data);
			$this->load->view("layout/footer");
		} else {

			$data = [
				'nama' => $this->input->post('nama'),
				'merk' => $this->input->post('merk'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
                'ukuran' => $this->input->post('ukuran'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/dist/img/sepatu/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Sepatu_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sepatu Berhasil Ditambah!</div>');
			redirect('Sepatu');
		}
	}
	function hapus($id)
	{
		$this->Sepatu_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Sepatu tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Sepatu Berhasil Dihapus!</div>');
		}
		redirect('Sepatu');
	}
    //Function Mengambil Id data untuk diarahkan kedalam form ubah data
    function edit($id)
    {
        $data['judul'] = "Halaman Edit Sepatu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sepatu'] = $this->Sepatu_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Sepatu', 'required', [
			'required' => 'Nama Sepatu Wajib di isi'
		]);
		$this->form_validation->set_rules('merk', 'Merk', 'required', [
			'required' => 'Merk Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
			'required' => 'Ukuran Wajib di isi'
		]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("sepatu/vw_ubah_sepatu", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
				'nama' => $this->input->post('nama'),
				'merk' => $this->input->post('merk'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
                'ukuran' => $this->input->post('ukuran'),
            ];
            $upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/dist/img/sepatu/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
					$query = $this->db->set('gambar', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('sepatu', ['id' => $id])->row();
						unlink(FCPATH . 'assets/dist/img/sepatu/' . $old_image->gambar);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
            $id = $this->input->post('id');
            $this->Sepatu_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sepatu Berhasil DiUbah!</div>');
            redirect('Sepatu');
        }
    }
}