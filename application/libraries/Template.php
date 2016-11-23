<?php

class Template {
	protected $_ci;

	function __construct() {
		$this->_ci = &get_instance();
	}

	function views($template = null, $data = null) {
		if($template!=null) 
			// $data['body']	= $this->_ci->load->view($template, $data, TRUE);
			$data['body']	= $this->_ci->load->view($template, $data, TRUE);
			$data['header']	= $this->_ci->load->view('blog/header', $data, TRUE);
			$data['index']	= $this->_ci->load->view('blog/awal', $data, TRUE);
			$data['mainbar']= $this->_ci->load->view('blog/mainbar', $data, TRUE);
			$data['sidebar']= $this->_ci->load->view('blog/sidebar', $data, TRUE);
			$data['footer']	= $this->_ci->load->view('blog/footer', $data, TRUE);
			echo $data['template'] = $this->_ci->load->view('blog/template', $data, TRUE);
		
	}
}

?>