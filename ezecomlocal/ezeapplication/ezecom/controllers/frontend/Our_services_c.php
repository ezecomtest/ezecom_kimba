<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_services_c extends CI_Controller {
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
		$this->our_services();
	}

	public function our_services(){
		if($this->lang==1){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
		if($this->lang==2){
		$data['title'] = "អាជីវកម្ម";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_kh_v',$data);
		}
		if($this->lang==3){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_ch_v',$data);
		}

		if($this->lang== ""){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
	}

	public function enterprise_solutions(){
		if($this->lang ==1){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}
	if($this->lang==2){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_kh_v',$data);
		}
	if($this->lang==3){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_ch_v',$data);
		}
	if($this->lang == ""){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}

}

	public function beedoo_could_service_by_ezecom(){
		$data['title'] = "BeeDoo Could Service by Ezecom_ Don't just back up move forward!";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/beedoo_could_service_by_ezecom_v',$data);
	}
	
	public function iplc(){
		if($this->lang ==1){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}
		if($this->lang==2){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "IPLC";
			$data['active'] = "Our Services";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}

	}
	
	public function dplc(){
		if($this->lang ==1){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
		if($this->lang==2){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
	}
	
	public function mpls(){
		if($this->lang ==1){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
		if($this->lang==2){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
	}
	
	public function vpls(){
		if($this->lang ==1){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
		if($this->lang==2){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
	}
	
	public function dedicate(){
		if($this->lang ==1){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate',$data);
		}
		if($this->lang==2){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate',$data);
		}
	}
	
	public function ezebiz(){
		if($this->lang ==1){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
		if($this->lang==2){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
	}
	
	public function ezesurf(){
		if($this->lang ==1){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf',$data);
		}
		if($this->lang==2){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf',$data);
		}
	}
	
	public function microsoft_cloud_service(){
		if($this->lang ==1){
			$data['title'] = "Microsoft Cloud Service";
			$data['active'] = "Microsoft Cloud Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/micro_cloud_service',$data);
		}
		if($this->lang==2){
			$data['title'] = "Microsoft Cloud Service";
			$data['active'] = "Microsoft Cloud Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/micro_cloud_service_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Microsoft Cloud Service";
			$data['active'] = "Microsoft Cloud Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/micro_cloud_service_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Microsoft Cloud Service";
			$data['active'] = "Microsoft Cloud Service";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/micro_cloud_service',$data);
		}
	}
	
	public function amazon_web_service(){
		if($this->lang ==1){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice',$data);
		}
		if($this->lang==2){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice',$data);
		}
	}
	
	public function colocation(){
		if($this->lang ==1){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation',$data);
		}
		if($this->lang==2){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation',$data);
		}
		
	}
	
	public function drc(){
		if($this->lang ==1){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc',$data);
		}
		if($this->lang==2){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc',$data);
		}
		
	}
	
	public function web_hosting(){
		if($this->lang ==1){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting',$data);
		}
		if($this->lang==2){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting',$data);
		}
	}
	
	public function vpbx(){
		if($this->lang ==1){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx',$data);
		}
		if($this->lang==2){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx',$data);
		}
	}
	
	public function voip(){
		if($this->lang ==1){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip',$data);
		}
		if($this->lang==2){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip',$data);
		}
	}
	
	public function ezetv(){
		if($this->lang ==1){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv',$data);
		}
		if($this->lang==2){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv',$data);
		}
	}
	
	public function manage_network_security(){
		if($this->lang ==1){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security',$data);
		}
		if($this->lang==2){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security',$data);
		}
	}
	
	public function web_appl_firewall(){
		if($this->lang ==1){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall',$data);
		}
		if($this->lang==2){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall',$data);
		}
	}
	
	
}