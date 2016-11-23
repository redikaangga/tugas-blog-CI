<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kretek extends CI_Controller {

	public function index()
	{
		redirect('Kretek/awal');
	}

	public function awal()
	{
		$this->template->views('blog/awal');
	}

	public function konten()
	{
		$this->template->views('blog/mainbar');
	}

}

/* End of file Kretek.php */
/* Location: ./application/controllers/Kretek.php */