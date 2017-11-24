<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_service_c extends CI_Controller {
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
		$this->customer_services();
	}

	public function customer_services(){
		if($this->lang==1){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_v',$data);
		}
		if($this->lang==2){
			$data['title'] = "សេវាអតិថិជន";
			$data['active'] = "Customer Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_kh_v ',$data);
		}
		if($this->lang==3){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_ch_v',$data);
		}
		if($this->lang==""){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_v',$data);
		}
	}
	
	public function service_faq(){
		if($this->lang==1){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_v',$data);
		}
		if($this->lang==2){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_kh_v',$data);
			}
		if($this->lang==3){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_ch_v',$data);
		}
		if($this->lang==""){
			$data['title'] = " FAQ'S ";
			$data['active'] = "FAQ'S";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_v',$data);
		}
	}
	
	public function service_payment_options(){
		if($this->lang==1){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_v',$data);
		}
		if($this->lang==2){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_kh_v',$data);
			}
		if($this->lang==3){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_ch_v',$data);
		}
		if($this->lang==""){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_v',$data);
		}
	}
}
