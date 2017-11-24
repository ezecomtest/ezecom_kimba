<!-- MAIN NAVIGATION -->
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<?php
	$lang = $this->input->get("lang");
?>
  
<?php if($lang == "en") {?>
<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level4">
<li >
<a href="<?php echo base_url();?>homepage?lang=en">Home</a>
</li>
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=en">Our Company</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="spanicondown_partnership" aria-hidden="true"></span></a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
	  </ul>
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
		 <a data-target="#">Our Services</a>
		  <ul class="dropdown-menu">
			<li>
				<li class="partnerships">
				<a style="cursor:pointer">Internet Access <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></a>
					<ul id="internet_access_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=en">Dedicated Internet Access</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=en">EzeBiz</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=en">EzeSurf</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Enterprise Network<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="enterprise_network_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=en">IPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=en">DPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=en">MPLS</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=en">VPLS</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cloud Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cloud_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=en">Microsoft Cloud Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=en">Amazon Web Service</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Data Center & Hosting <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="data_center_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=en">Colocation</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=en">DRC</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=en">Web Hosting</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=en">VPBX</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cyber Security<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cyber_security_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=en">DDoS Mitigation Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=en">Web Application Firewall</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=en">Managed Network Security</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Value Added Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="add_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=en">VoIP</a></li>
						<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=en">EzeTV</a></li>
					</ul>
				</li>
			</li>
		  </ul>
	</li>
</li>
<li class="current active">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>
</li>

<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li>
	<a href="<?php echo base_url();?>contact-us?lang=en">Contact Us </a>
</li>
<li>
	<a class="collection" style="cursor:pointer"><img src="<?php echo base_url()?>images/toogle.png"/></a>
</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level4">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=en" data-target="#">Home </a>
</li>
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=en" data-target="#">Internet Access </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=en">Dedicated Internet Access</a></li>
		<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=en">EzeBiz</a></li>
		<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=en">EzeSurf</a></li>
	  </ul>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-services?lang=en" data-target="#">Enterprise Network</a>
	  <ul class="dropdown-menu">
		<li ><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=en">IPLC</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=en">DPLC</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=en">MPLS</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=en">VPLS</a></li>
	  </ul>
	</li>
</li>

<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
	<li class="dropdown1">
		  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Cloud Services</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=en">Microsoft Cloud Service</a></li>
			<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=en">Amazon Web Service</a></li>
		  </ul>
	</li>
</li>

<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
	<li class="dropdown1">
		  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
			<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
			<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
			<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
			<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
			<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
			<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
		  </ul>
	</li>
</li>


<li class="<?=($active=='Contact Us')?'current active':null?>">
	<a class="" href="<?php echo base_url();?>contact-us?lang=en" data-target="#">Contact Us </a>
</li>
<li>
	<a class="collection" style="cursor:pointer"><img src="<?php echo base_url()?>images/toogle.png"/></a>
</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->

<?php } ?>

<?php if($lang == "kh") {?>

<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level1">
<li >
<a href="<?php echo base_url();?>homepage?lang=kh">ទំព័រដើម</a>
</li>
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=kh">អំពីក្រុមហ៊ុន</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=kh">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=kh">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=kh">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="spanicondown_partnership" aria-hidden="true"></span></a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=kh">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=kh">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=kh">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=kh">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=kh">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=kh">Career Opportunities</a></li>
	  </ul>
</li>

<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
		 <a data-target="#">អាជីវកម្ម</a>
		  <ul class="dropdown-menu">
			<li>
				<li class="partnerships">
				<a style="cursor:pointer">Internet Access <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></a>
					<ul id="internet_access_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=kh">Dedicated Internet Access</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=kh">EzeBiz</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=kh">EzeSurf</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Enterprise Network<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="enterprise_network_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=kh">IPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=kh">DPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=kh">MPLS</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=kh">VPLS</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cloud Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cloud_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=kh">Microsoft Cloud Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=kh">Amazon Web Service</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Data Center & Hosting <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="data_center_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=kh">Colocation</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=kh">DRC</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=kh">Web Hosting</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=kh">VPBX</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cyber Security<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cyber_security_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=kh">DDoS Mitigation Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=kh">Web Application Firewall</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=kh">Managed Network Security</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Value Added Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="add_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=kh">VoIP</a></li>
						<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=kh">EzeTV</a></li>
					</ul>
				</li>
			</li>
		  </ul>
	</li>
</li>
<li class="current active">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=kh">សេវា​អតិថិជន  </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=kh">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=kh">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=kh">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=kh">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events?lang=kh">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=kh">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=kh">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=kh">ទំនាក់ទំនង </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level1">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=kh" data-target="#">ទំព័រដើម </a>
</li>
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=kh" data-target="#">អំពីក្រុមហ៊ុន</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=kh">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=kh">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=kh">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="spanicondown_partnership" aria-hidden="true"></span></a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=kh">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=kh">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=kh">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=kh">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=kh">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=kh">Career Opportunities</a></li>
	  </ul>
</li>

<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-services?lang=kh" data-target="#">អាជីវកម្ម</a>
	  <ul class="dropdown-menu">
		<li>
			<li class="partnerships">
			<a style="cursor:pointer">Internet Access <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="internet_access" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=kh">Dedicated Internet Access</a></li>
					<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=kh">EzeBiz</a></li>
					<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=kh">EzeSurf</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Enterprise Network<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="enterprise_network" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=kh">IPLC</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=kh">DPLC</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=kh">MPLS</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=kh">VPLS</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Cloud Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="cloud_services" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=kh">Microsoft Cloud Service</a></li>
					<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=kh">Amazon Web Service</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Data Center & Hosting <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="data_center" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=kh">Colocation</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=kh">DRC</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=kh">Web Hosting</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=kh">VPBX</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Cyber Security<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="cyber_security" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=kh">DDoS Mitigation Service</a></li>
					<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=kh">Web Application Firewall</a></li>
					<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=kh">Managed Network Security</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Value Added Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="add_services" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=kh">VoIP</a></li>
					<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=kh">EzeTV</a></li>
				</ul>
			</li>
		</li>
	  </ul>
	</li>
</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<li class="dropdown1">
	  <a href="<?php echo base_url();?>support/customer-service?lang=kh">សេវា​អតិថិជន  </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=kh">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=kh">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=kh">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=kh">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=kh" data-target="#">ទំព័រព័ត៌មាន</a>
  <ul class="dropdown-menu">
	<li><a href="<?php echo base_url();?>media-center/news-events?lang=kh">ព័ត៌មាន  និង ព្រិត្តិការណ៍</a></li>
	<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=kh">វិទ្យុ  ផ្សាយផ្ទាល់ </a></li>
	<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=kh">កាមេរ៉ា  ផ្សាយផ្ទាល់ </a></li>
  </ul>
</li>

</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=kh" data-target="#">ទំនាក់ទំនង </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>


<?php } ?>

<?php if($lang== "ch") {?>
<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level2">
<li >
<a href="<?php echo base_url();?>homepage?lang=ch">Home</a>
</li>
<li class="dropdown1">
	  <a href="<?php echo base_url();?>our-company?lang=ch">Our Company</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=ch">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=ch">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=ch">Childsafe Certification</a></li>
		<li>
			<li class="partnerships_mobile">
			<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="spanicondown_partnership" aria-hidden="true"></span></a>
				<ul id="partnerships_mobile" class="dropdown-menu-partnerships-mobile">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=ch">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=ch">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=ch">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=ch">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=ch">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=ch">Career Opportunities</a></li>
	  </ul>
</li>
<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
		 <a data-target="#">Our Services</a>
		  <ul class="dropdown-menu">
			<li>
				<li class="partnerships">
				<a style="cursor:pointer">Internet Access <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></a>
					<ul id="internet_access_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=ch">Dedicated Internet Access</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=ch">EzeBiz</a></li>
						<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=ch">EzeSurf</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Enterprise Network<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="enterprise_network_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=ch">IPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=ch">DPLC</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=ch">MPLS</a></li>
						<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=ch">VPLS</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cloud Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cloud_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=ch">Microsoft Cloud Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=ch">Amazon Web Service</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Data Center & Hosting <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="data_center_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=ch">Colocation</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=ch">DRC</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=ch">Web Hosting</a></li>
						<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=ch">VPBX</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Cyber Security<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="cyber_security_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=ch">DDoS Mitigation Service</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=ch">Web Application Firewall</a></li>
						<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=ch">Managed Network Security</a></li>
					</ul>
				</li>
			</li>
			<li>
				<li class="partnerships">
				<a style="cursor:pointer;">Value Added Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
					<ul id="add_services_mobile" class="dropdown-menu-partnerships">
						<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=ch">VoIP</a></li>
						<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=ch">EzeTV</a></li>
					</ul>
				</li>
			</li>
		  </ul>
	</li>

</li>
<li class="current active">
<li class="dropdown1">
	 <a class="" href="<?php echo base_url()?>support/customer-service?lang=ch" data-target="#">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=ch">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=ch">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=ch">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=ch">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=ch">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=ch">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=ch">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=ch">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li>
<a href="<?php echo base_url();?>contact-us?lang=ch">Contact Us </a>

</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level2">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=ch" data-target="#">Home </a>
</li>
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=ch" data-target="#">Our Company </a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-company/company-profile?lang=ch">Company Profile</a></li>
		<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=ch">Quality Management System</a></li>
		<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=ch">Childsafe Certification</a></li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="spanicondown_partnership" aria-hidden="true"></span></a>
				<ul id="partnerships_id" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=ch">Good Will Partners</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=ch">EzeCampus</a></li>
					<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=ch">Student Discount</a></li>
				</ul>
			</li>
		</li>
		<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=ch">Corporate Social Responsibility</a></li>
		<li><a href="<?php echo base_url();?>our-company/community?lang=ch">Community</a></li>
		<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=ch">Career Opportunities</a></li>
	  </ul>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	
	<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-services?lang=ch" data-target="#">Our Services</a>
	  <ul class="dropdown-menu">
		<li>
			<li class="partnerships">
			<a style="cursor:pointer">Internet Access <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="internet_access" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=ch">Dedicated Internet Access</a></li>
					<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=ch">EzeBiz</a></li>
					<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=ch">EzeSurf</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Enterprise Network<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="enterprise_network" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=ch">IPLC</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=ch">DPLC</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=ch">MPLS</a></li>
					<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=ch">VPLS</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Cloud Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="cloud_services" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=ch">Microsoft Cloud Service</a></li>
					<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=ch">Amazon Web Service</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Data Center & Hosting <span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="data_center" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=ch">Colocation</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=ch">DRC</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=ch">Web Hosting</a></li>
					<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=ch">VPBX</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Cyber Security<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="cyber_security" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=en">DDoS Mitigation Service</a></li>
					<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=ch">Web Application Firewall</a></li>
					<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=ch">Managed Network Security</a></li>
				</ul>
			</li>
		</li>
		<li>
			<li class="partnerships">
			<a style="cursor:pointer;">Value Added Services<span class="fa fa-chevron-down" id="spanicondown" aria-hidden="true"></span></a>
				<ul id="add_services" class="dropdown-menu-partnerships">
					<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=ch">VoIP</a></li>
					<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=ch">EzeTV</a></li>
				</ul>
			</li>
		</li>
	  </ul>
	</li>
	
</li>
<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
<li class="dropdown1">
	 <a class="" href="<?php echo base_url()?>support/customer-service?lang=ch" data-target="#">Support</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>support/faq?lang=ch">FAQ'S</a></li>
		<li><a href="<?php echo base_url();?>support/customer-service?lang=ch">Customer Service</a></li>
		<li><a href="<?php echo base_url();?>support/payment?lang=ch">Payment Options</a></li>
		<li><a href="<?php echo base_url();?>setup-email?lang=ch">EzeMail Setup</a></li>
		<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
		<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
		<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=ch">Media Center</a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>media-center/news-events?lang=ch">News and Events</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=ch">Radio Live Stream</a></li>
		<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=ch">Traffic Live Camera</a></li>
	  </ul>
</li>

</li>
<li class="<?=($active=='Contact Us')?'current active':null?>">
<a class="" href="<?php echo base_url();?>contact-us?lang=ch" data-target="#">Contact Us </a>

</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->

<?php } ?>

<?php if($lang == "") {?>
	<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
		</div>
	<div class="t3-navbar-collapse navbar-collapse collapse"><ul class="nav navbar-nav level3">
<li >
<a href="<?php echo base_url();?>homepage?lang=en">Home</a>
</li>

<li>
	<li class="dropdown1">
		  <a href="<?php echo base_url();?>our-company?lang=en">Internet Access</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=en">Dedicated Internet Access</a></li>
			<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=en">EzeBiz</a></li>
			<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=en">EzeSurf</a></li>
		  </ul>
	</li>
</li>

<li class="sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
		 <a data-target="#">Enterprise Network</a>
		 <ul class="dropdown-menu">
			<li ><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=en">IPLC</a></li>
			<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=en">DPLC</a></li>
			<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=en">MPLS</a></li>
			<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=en">VPLS</a></li>
		</ul>
	</li>
</li>

<li class="<?php if($this->uri->segment(1) == 'cameralive'){echo 'current active';}else{echo 'inactive';} ?>">
	<li class="dropdown1">
	  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Cloud Services</a>
	   <ul class="dropdown-menu">
		 <li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=en">Microsoft Cloud Service</a></li>
		 <li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=en">Amazon Web Service</a></li>
	   </ul>
	</li>
</li>

<li class="current active">
	<li class="dropdown1">
		  <a href="<?php echo base_url();?>support/customer-service?lang=en">Support</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
			<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
			<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
			<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
			<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
			<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
			<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
		  </ul>
	</li>
</li>

<li>
	<a href="<?php echo base_url();?>contact-us?lang=en">Contact Us </a>
</li>
<li>
	<a class="collection" style="cursor:pointer" data-toggle="dropdown"><img src="<?php echo base_url()?>images/toogle.png"/></a>
</li>
</ul></div>
		
<div class="t3-navbar navbar-collapse collapse">
<div class="t3-megamenu" data-duration="400" data-responsive="true">
<ul class="nav navbar-nav level3">
<li class="<?=($active=='Home')?'current active':null?>" mega-align-left sub-hidden-collapse data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
<a class="" href="<?php echo base_url()?>homepage?lang=en" data-target="#">Home </a>
</li>
<li class="<?=($active=='Our Company')?'current active':null?>" mega-align-left data-id="571" data-level="1" data-alignsub="left" data-hidesub="1">
<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-company?lang=en" data-target="#">Internet Access </a>
	 <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=en">Dedicated Internet Access</a></li>
		<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=en">EzeBiz</a></li>
		<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=en">EzeSurf</a></li>
	 </ul>
</li>
</li>
<li class="<?=($active=='Our Services')?'current active':null?> mega-align-left sub-hidden-collapse" data-id="545" data-level="1" data-alignsub="left" data-hidesub="1" data-hidewcol="1">
	<li class="dropdown1">
	 <a href="<?php echo base_url();?>our-services?lang=en" data-target="#">Enterprise Network</a>
	 <ul class="dropdown-menu">
		<li ><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=en">IPLC</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=en">DPLC</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=en">MPLS</a></li>
		<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=en">VPLS</a></li>
	 </ul>
</li>
</li>

<li class="<?=($active=='Media Center' || $this->uri->segment(1) == 'cameralive' || $this->uri->segment(1) == 'live_radio')?'current active':null?>">
	<li class="dropdown1">
		  <a class="" href="<?php echo base_url();?>media-center/news-events?lang=en">Cloud Services</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=en">Microsoft Cloud Service</a></li>
			<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=en">Amazon Web Service</a></li>
		  </ul>
	</li>
</li>

<li class="<?=($active=='Support')?'current active':null?>" data-id="533" data-level="1" data-hidesub="1">
	<li class="dropdown1">
		 <a class="" href="<?php echo base_url()?>support/customer-service?lang=en" data-target="#">Support</a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
			<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
			<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
			<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
			<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
			<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>
			<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
		  </ul>
	</li>
</li>

<li class="<?=($active=='Contact Us')?'current active':null?>">
	<a class="" href="<?php echo base_url();?>contact-us?lang=en" data-target="#">Contact Us </a>
</li>
<li>
	<a class="collection" style="cursor:pointer"><img src="<?php echo base_url()?>images/toogle.png"/></a>
</li>
</ul>
</div>

		</div>

	</div>
</nav>
<!-- //MAIN NAVIGATION -->
<?php } ?>

<!--<div id="show_theway">
	<div id="block_theway">
		<?php 
			/* if($this->uri->segment(1)=="homepage" OR $this->uri->segment(1)==""){
				echo "<a href='".base_url()."homepage?lang=en' >Home</a>";
			}elseif($this->uri->segment(1)=="our-company"){
				$our_company = "<a href='".base_url()."our-company?lang=en'>Our Company </a>";
				
				if($this->uri->segment(2)=="company-profile"){
					$company_profile = "<a href='".base_url()."our-company/company-profile?lang=en'> Company Profile </a>";
					echo $our_company.'> '.$company_profile;
				}elseif($this->uri->segment(2)=="quality-management-system"){
					$quality_management_system = "<a href='".base_url()."our-company/quality-management-system?lang=en' > Quality Management System</a>";
					echo $our_company.'> '.$quality_management_system;
				}elseif($this->uri->segment(2)=="childsafe-certification"){
					$childsafe_certification = "<a href='".base_url()."our-company/childsafe-certification?lang=en' >Childsafe Certification</a>";
					echo $our_company.'> '.$childsafe_certification;
				}else{
					echo "<a href='".base_url()."our-company?lang=en'>Our Company </a>";
				}
			} */
		?>
	</div>
</div>-->

<!-- menu collection -->
<div id="menu-collection" style="display:none">
	<ul>
					
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Our Company</li>
							<li><a href="<?php echo base_url();?>our-company/company-profile?lang=en">Company Profile</a></li>
							<li><a href="<?php echo base_url();?>our-company/quality-management-system?lang=en">Quality Management System</a></li>
							<li><a href="<?php echo base_url();?>our-company/childsafe-certification?lang=en">Childsafe Certification</a></li>
							<li class="partnerships">
								<a style="cursor:pointer">Our Partnerships<span class="fa fa-chevron-down" id="collection_partnershipt" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url()?>our-company/our-partnerships/goodwill-partners?lang=en">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships/ezecampus?lang=en">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships/student-discount?lang=en">Student Discount</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility?lang=en">Corporate Social Responsibility</a></li>
							<li><a href="<?php echo base_url();?>our-company/community?lang=en">Community</a></li>
							<li><a href="<?php echo base_url();?>our-company/career-opportunities?lang=en">Career Opportunities</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Our Services</li>
							<li class="partnerships">
								<a style="cursor:pointer">Internet Access<span class="fa fa-chevron-down" id="collection_internet_acc" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access?lang=en">Dedicated Internet Access</a></li>
									<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz?lang=en">EzeBiz</a></li>
									<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf?lang=en">EzeSurf</a></li>
								</ul>
							</li>
							<li class="partnerships">
								<a  style="cursor:pointer">Enterprise Network<span class="fa fa-chevron-down" id="collection_enter_net" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit?lang=en">IPLC</a></li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit?lang=en">DPLC</a></li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls?lang=en">MPLS</a></li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls?lang=en">VPLS</a></li>
								</ul>
							</li>
							<li class="partnerships">
								<a style="cursor:pointer">Cloud Services<span class="fa fa-chevron-down" id="collection_cloud_ser" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service?lang=en">Microsoft Cloud Service</a></li>
									<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service?lang=en">Amazon Web Service</a></li>
								</ul>
							</li>
							<li class="partnerships">
								<a style="cursor:pointer">Data Center & Hosting<span class="fa fa-chevron-down" id="collection_data_cent" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>our-services/hosting/colocation?lang=en">Colocation</a></li>
									<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center?lang=en">DRC</a></li>
									<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting?lang=en">Web Hosting</a></li>
									<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx?lang=en">VPBX</a></li>
								</ul>
							</li>
							<li class="partnerships">
								<a style="cursor:pointer">Cyber Security<span class="fa fa-chevron-down" id="collection_cyber" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>ddos-mitigation-service?lang=en">DDoS Mitigation Service</a></li>
									<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall?lang=en">Web Application Firewall</a></li>
									<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security?lang=en">Managed Network Security</a></li>
								</ul>
							</li>
							<li class="partnerships">
								<a style="cursor:pointer">Value Added Services<span class="fa fa-chevron-down" id="collection_value_add" aria-hidden="true"></span></a>
								<ul class="dropdown-menu-partnerships" id="colle_menu_main">
									<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip?lang=en">VoIP</a></li>
									<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV?lang=en">EzeTV</a></li>
								</ul>
							</li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Support</li>
							<li><a href="<?php echo base_url();?>support/faq?lang=en">FAQ'S</a></li>
							<li><a href="<?php echo base_url();?>support/customer-service?lang=en">Customer Service</a></li>
							<li><a href="<?php echo base_url();?>support/payment?lang=en">Payment Options</a></li>
							<li><a href="<?php echo base_url();?>setup-email?lang=en">EzeMail Setup</a></li>
							<li><a href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
							<li><a href="http://ezecom.speedtest.net/">Speed Test</a></li>	
							<li><a href="https://csm.ezecom.com.kh/uam/">User Account Management</a></li>
							<li class="divider"></li>                                                     
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Media Center</li>
							<li><a href="<?php echo base_url();?>media-center/news-events?lang=en">News and Events</a></li>
							<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio?lang=en">Radio Live Stream</a></li>
							<li><a href="<?php echo base_url();?>media-center/live-traffic-camera?lang=en">Traffic Live Camera</a></li>							
							<li class="divider"></li>                                                     
						</ul>
					</li>
				</ul>
</div> <!-- end of menu collection -->

<script type="text/javascript">
$(document).ready(function(){
$(".dropdown1").hover(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("2000");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("2000");
            $(this).toggleClass('open');       
        }
    );
	
});


$(document).ready(function(){	
//document.getElementById('partnerships_id').style.display = 'none';

// drop menu our services desktop
/* document.getElementById('internet_access').style.display = 'none';
document.getElementById('enterprise_network').style.display = 'none';
document.getElementById('cloud_services').style.display = 'none';
document.getElementById('data_center').style.display = 'none';
document.getElementById('cyber_security').style.display = 'none';
document.getElementById('add_services').style.display = 'none'; */

// drop menu our services mobile 
/* document.getElementById('internet_access_mobile').style.display = 'none';
document.getElementById('enterprise_network_mobile').style.display = 'none';
document.getElementById('cloud_services_mobile').style.display = 'none';
document.getElementById('data_center_mobile').style.display = 'none';
document.getElementById('cyber_security_mobile').style.display = 'none';
document.getElementById('add_services_mobile').style.display = 'none'; */ 

/*document.getElementById('partnerships_mobile').style.display = 'none';*/

$(".partnerships").click(
        function() {
            $('.dropdown-menu-partnerships', this).not('.in .dropdown-menu-partnerships').stop(true,true).slideToggle("slow");
            $(this).toggleClass('open'); 
        }
    );
	
	
});



/* menu collection */
$(document).ready(function(){	
	$(".collection").click(
        function() {
            $('#menu-collection').slideToggle("slow");
            $(this).toggleClass('open'); 
        }
    );
});

</script>

<style type="text/css">
	#partnerships_id li{
		list-style-type:none;
		color:#444;
	}
	#partnerships_id li a{
		color:#444;
		font-size:15px;
	}
	#partnerships_id li a:hover{
		color:#7961a9;
	}
	.dropdown-menu li a:hover{
		color:#7961a9;
	}
	
	#partnerships_mobile li{
		list-style-type:none;
		color:#444;
	}

  /* Our services internet_access */
  
	#internet_access{
		list-style-type:none;
		color:#444;
	}
	#internet_access li a{
		color:#444;
		font-size:15px;
		cursor:pointer;
	}
	#internet_access li a:hover{
		color:#7961a9;
		cursor:pointer;
	}
	
	/* Our services enterprise_network */
	
	#enterprise_network{
		list-style-type:none;
		color:#444;
	}
	#enterprise_network li a{
		color:#444;
		font-size:15px;
	}
	#enterprise_network li a:hover{
		color:#7961a9;
	}
	
	/* Our services clound_service */
	
	#cloud_services{
		list-style-type:none;
		color:#444;
	}
	#cloud_services li a{
		color:#444;
		font-size:15px;
	}
	#cloud_services li a:hover{
		color:#7961a9;
	}
	
	/* Our services data_center */
	
	#data_center{
		list-style-type:none;
		color:#444;
	}
	#data_center li a{
		color:#444;
		font-size:15px;
	}
	#data_center li a:hover{
		color:#7961a9;
	}
	
	/* Our services cyber_security */
	
	#cyber_security{
		list-style-type:none;
		color:#444;
	}
	#cyber_security li a{
		color:#444;
		font-size:15px;
	}
	#cyber_security li a:hover{
		color:#7961a9;
	}
	
	/* Our services add_services*/
	
	#add_services{
		list-style-type:none;
		color:#444;
	}
	#add_services li a{
		color:#444;
		font-size:15px;
	}
	#add_services li a:hover{
		color:#7961a9;
	}
	
	/* span icon rowdown menu */
	#spanicondown{
		padding-top:8px;
		position:absolute;
		left:190px;
		font-size:10px;
	}
	
	#spanicondown_partnership{
		padding-top:8px;
		position:absolute;
		left:250px;
		font-size:10px;
	}
	
	/* internet_access_mobile */
	
	#internet_access_mobile,#enterprise_network_mobile,#cloud_services_mobile,
	#cloud_services_mobile,#data_center_mobile,#cyber_security_mobile,#add_services_mobile
	li{
		list-style-type:none;
	}
	

</style>

<style type="text/css">
	/* collection menu */
	#menu-collection{
		width:100%;
		height:auto;
		background-color:#ffffff;
	}
	
	#menu-collection ul li{
		list-style-type:none;
		padding:5px 0px;
	}
	
	#menu-collection ul li .dropdown-header{
		font-weight:bold;
		color:#7961a9;
	}
	
	#colle_menu_main{
		display:none;
		margin-left:-21px;
		font-size:15px;
	}
	
	#collection_internet_acc{
		position:relative;
		left:60px;
		font-size:13px;
	}
	
	#collection_enter_net{
		position:relative;
		left:31px;
		font-size:13px;
	}
	
	#collection_cloud_ser{
		position:relative;
		left:63px;
		font-size:13px;
	}
	
	#collection_data_cent{
		position:relative;
		left:10px;
		font-size:13px;
	}
	
	#collection_cyber{
		position:relative;
		left:65px;
		font-size:13px;
	}
	
	#collection_value_add{
		position:relative;
		left:10px;
		font-size:13px;
	}
	
	#collection_partnershipt{
		position:relative;
		left:10px;
		font-size:13px;
	}
	
  /* -------------------------------- */
	#show_theway{
		width:100%;
		height:30px;
		background-color:#7961a9;
		position:fix;
	}
	
	#show_theway #block_theway{
		max-width:980px;
		max-height:30px;
		margin:0 auto;
		background-color:#7961a9;
		color:white;
	}		
	
	#show_theway #block_theway a {
		color:white;
		font-size:12px;
	}
	
	
	
	
</style>