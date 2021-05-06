<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontcontroller extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function index()
	 {
		
		 $this->load->view('front/include/header');
		 $this->load->view('front/home');
		 $this->load->view('front/include/footer');
		
	 }
	 public function dsshistory()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/history');
		 $this->load->view('front/include/footer');
		
	 }
	 public function spiritualmasters1()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/spiritualmasters1');
		 $this->load->view('front/include/footer');
	 }
	 public function spiritualmasters2()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/spiritualmasters2');
		 $this->load->view('front/include/footer');
	 }
	 public function spiritualmasters3()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/spiritualmasters3');
		 $this->load->view('front/include/footer');
	 }
	 public function principle()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/principles');
		 $this->load->view('front/include/footer');
	 }
	 public function jaameinsan()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/jaameinsan');
		 $this->load->view('front/include/footer');
	 }
	 public function meditation()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/meditation');
		 $this->load->view('front/include/footer');
	 }
	 public function vegetarianism()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/vegetarianism');
		 $this->load->view('front/include/footer');
	 }
	 
	 public function de_addiction()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/de_addiction');
		 $this->load->view('front/include/footer');
	 }
	 public function healthtips()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/healthtips');
		 $this->load->view('front/include/footer');
	 }
	 public function dietchartforobese()
	 {

		 $this->load->view('front/include/header');
		 $this->load->view('front/dietchartforobese');
		 $this->load->view('front/include/footer');
	 }
	 
	 
}
