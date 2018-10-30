<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact';
		$inside['content']=$this->load->view('contact',$data, TRUE);
		$this->load->view('template',$inside);
	}
}
