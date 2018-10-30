<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public function index()
	{
		$data['title'] = '404';
		$inside['content']=$this->load->view('404',$data, TRUE);
		$this->load->view('template',$inside);
	}
}
