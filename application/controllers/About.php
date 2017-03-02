<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Erwin Heriana",
			'kampus' => "Politeknik Negeri Malang",
			'jurusan' => "Teknologi Informasi",
			'nim' => "1541180102",
			'kelas' => "TI-2C",
			'alamat' => "Kepanjen, Malang",
			'nomer' => "085704311257",
			'email' => "herianaerwin@gmail.com",
			'hobby1' => "Futsal",
			'hobby2' => "Bermain Piano",
			);
		$this->load->view('about', $data);	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

?>