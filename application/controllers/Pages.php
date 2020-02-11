<?php
class Pages extends CI_Controller{
	public function view($page = 'home'){
		//die('ggg');
		//print_r(APPPATH."views/pages/".$page.'.php');
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			//die('notf');
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
?>