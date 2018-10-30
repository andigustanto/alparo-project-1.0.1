<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'About';
		$inside['content']=$this->load->view('about',$data, TRUE);
		$this->load->view('template',$inside);
	}
}
