<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function blog_default()
	{
		$this->load->view('blog-default');
	}
	public function blog_single()
	{
		$this->load->view('blog-single');

	}
}
