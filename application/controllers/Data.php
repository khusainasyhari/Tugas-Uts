<?php
Class Data extends CI_Controller{
	public function index(){
		$this->load->model("model_data");
		$data['list_mahasiswa'] = $this->model_data->load_mahasiswa();

		$this->load->view("data_mahasiswa",$data);
	}


	public function add(){
		$this->load->model("model_data");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			
			$this->model_data->simpan($_POST);
			redirect("data");
		}

		$this->load->view("form_mahasiswa",$data);
	}

	

	public function edit($nim){
		$this->load->model("model_data");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data->get_default($nim);

		if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $nim);
			redirect("data");
		}

		$this->load->view("form_mahasiswa",$data);
	}


	public function delete($nim){
		$this->load->model("model_data");
		$this->model_data->hapus($nim);
		redirect("data");
	}



}