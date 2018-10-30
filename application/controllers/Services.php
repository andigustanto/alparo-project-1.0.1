<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Services';
		$inside['content']=$this->load->view('services',$data, TRUE);
		$this->load->view('template',$inside);
	}
}
