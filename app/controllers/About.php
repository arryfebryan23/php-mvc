<?php 

class About extends Controller{

	public function index($nama = "Arry", $pekerjaan = "Mahasiswa")
	{
		$data['judul'] = 'About me';
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page', $data);
		$this->view('templates/footer');
	}



}

 ?>