<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_up_email_c extends CI_Controller {
	public $lang="", $get_lang ="";
	 public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/homepage_m');
		// get language from url
		$this->get_lang = $this->input->get("lang");
		  if($this->get_lang=="en"){
			  $this->lang = 1;
		  }
		   if($this->get_lang=="kh"){
			  $this->lang = 2;
		  }
		   if($this->get_lang=="ch"){
			  $this->lang = 3;
		  }
		  if($this->get_lang==""){
			  $this->lang = "";
		  }
    }

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
		$this->set_up_email();
	}

	public function set_up_email(){
		$data['title'] = "EzeMail Setup";
		$data['active'] = " ";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/set_up_email_v',$data);
	}
}
