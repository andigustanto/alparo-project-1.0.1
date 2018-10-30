<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$inside['content']=$this->load->view('home',$data, TRUE);
		$this->load->view('template',$inside);
	}
}
