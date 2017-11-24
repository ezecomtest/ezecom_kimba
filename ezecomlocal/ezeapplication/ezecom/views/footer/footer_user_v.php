<?php 
  $get_lang = $this->input->get("lang");
  if($get_lang=="en"){
	  $lang = 1;
	  $lang_url = "?lang=".$get_lang;
  }
   if($get_lang=="kh"){
	  $lang = 2;
	  $lang_url = "?lang=".$get_lang;
  }
   if($get_lang=="ch"){
	  $lang = 3;
	  $lang_url = "?lang=".$get_lang;
  }
  if($get_lang==""){
	  $lang = "";
	  $lang_url = "?lang=en";
  }
?>

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">
    <section class="t3-sub-footer">
         <!-- FOOT NAVIGATION -->
            <div class="container">
            <!-- SPOTLIGHT -->
	<div class="t3-spotlight t3-footnav  row">
		<div class=" col-lg-2 col-md-2 col-sm-4 col-xs-6">
				<div class="t3-module module " id="Mod91">
					<div class="module-inner">
					<h3 class="module-title "><span>Internet Access</span></h3>
						<div class="module-ct" style="padding-left:5px">
							<div class="custom">
								<ul>
									<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access<?php echo $lang_url ?>">Dedicated Internet Access</a></li>
									<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz<?php echo $lang_url ?>">EzeBiz</a></li>
									<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf<?php echo $lang_url ?>">EzeSurf</a>&nbsp;</li>
								</ul>
							</div>
						</div>
						
						<h3 class="module-title" style="padding-top:10px"><span>Enterprise Network</span></h3>
						<div class="module-ct" style="padding-left:5px">
							<div class="custom">
								<ul>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit<?php echo $lang_url ?>">IPLC</a></li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit<?php echo $lang_url ?>">DPLC</a></li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls<?php echo $lang_url ?>">MPLS</a>&nbsp;</li>
									<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls<?php echo $lang_url ?>">VPLS</a>&nbsp;</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
		</div>


<div class=" col-lg-2 col-md-2 col-sm-4 col-xs-6">
		<div class="t3-module module " id="Mod91">
			<div class="module-inner">
			
				<h3 class="module-title" ><span>Cloud Service</span></h3>
				<div class="module-ct" style="padding-left:5px">
					<div class="custom">
						<ul>
							<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service<?php echo $lang_url ?>">Microsoft Cloud Service</a></li>
							<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service<?php echo $lang_url ?>">Amazon Web Service</a></li>
						</ul>
					</div>
				</div>
				
				<h3 class="module-title" style="padding-top:35px"><span>Hosting</span></h3>
				<div class="module-ct" style="padding-left:5px">
					<div class="custom">
						<ul>
							<li><a href="<?php echo base_url();?>our-services/hosting/colocation<?php echo $lang_url ?>">Colocation</a></li>
							<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center<?php echo $lang_url ?>">DRC</a></li>
							<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting<?php echo $lang_url ?>">Web Hosting</a></li>
							<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx<?php echo $lang_url ?>">VPBX</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
</div>

<div class=" col-lg-2 col-md-2 col-sm-4 col-xs-6">
		<div class="t3-module module " id="Mod91">
			<div class="module-inner">
				<h3 class="module-title"><span>Cyber Security</span></h3>
				<div class="module-ct" style="padding-left:5px">
					<div class="custom">
						<ul>
							<li><a href="<?php echo base_url();?>ddos-mitigation-service<?php echo $lang_url ?>">DDoS Mitigation Service</a></li>
							<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall<?php echo $lang_url ?>">Web Application Firewall</a></li>
							<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security<?php echo $lang_url ?>">Managed Network Security</a></li>
						</ul>
					</div>
				</div>
				
				<h3 class="module-title" style="padding-top:10px"><span>VAS</span></h3>
				<div class="module-ct" style="padding-left:5px">
					<div class="custom">
						<ul>
							<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip<?php echo $lang_url ?>">Voice over Internet Protocol (VoIP)</a></li>
							<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV<?php echo $lang_url ?>">EzeTV</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
</div>




		
<div class=" col-lg-2 col-md-2 col-sm-4 col-xs-6">
	<div class="t3-module module " id="Mod91"><div class="module-inner"><h3 class="module-title "><span>Media Center</span></h3><div class="module-ct">

<div class="custom" style="padding-left:5px">
	<ul>
<li><a href="<?php echo base_url();?>media-center/news-events<?php echo $lang_url ?>">News & Events</a></li>
<li><a href="<?php echo base_url();?>media-center/live-cambodia-radio<?php echo $lang_url ?>">Live Cambodia Radio</a></li>
<li><a href="<?php echo base_url();?>media-center/live-traffic-camera<?php echo $lang_url ?>">Live traffic camera</a>&nbsp;</li>

</ul></div>
</div></div></div>
</div>
	<div class=" col-lg-2 col-md-2 col-sm-4 col-xs-6">
		<div class="t3-module module " id="Mod92"><div class="module-inner"><h3 class="module-title "><span>Support</span></h3><div class="module-ct">

<div class="custom" style="padding-left:5px">
	<ul>
<li><a href="<?php echo base_url();?>support/faq <?php echo $lang_url ?>" target="_new">FAQ’s</a></li>
<li><a href="<?php echo base_url();?>support/customer-service<?php echo $lang_url ?>" target="_new">Customer Service</a></li>
<li><a href="<?php echo base_url();?>support/payment<?php echo $lang_url ?>" target="_new">Payment Options</a></li>
<li><a href="<?php echo base_url();?>setup-email<?php echo $lang_url ?>" target="_new">EzeMail Setup</a></li>
<li><a href="https://webmail.ezecom.com.kh/" target="_new">EzeMail</a></li>
<li><a href="http://ezecom.speedtest.net/" target="_new">Speed Test</a></li>
<li><a href="https://csm.ezecom.com.kh/uam/" target="_new">User Account Management</a></li>

</ul></div>
</div></div></div>
</div>
	<div class=" col-lg-2 col-md-2 col-sm-6 col-xs-6">
		<div class="t3-module module " id="Mod93"><div class="module-inner"><h3 class="module-title "><span>Follow Us</span></h3><div class="module-ct">

<div class="custom">
	<ul>
<li><a href="https://www.facebook.com/ezecom.com.kh" target="_new"><img src="<?php echo base_url()?>images/facebook.png" alt="">&nbsp;Facebook</a></li>
<li><a href="http://www.linkedin.com/company/ezecom" target="_new"><img src="<?php echo base_url()?>images/linkined.png" alt="">&nbsp;LinkedIn</a></li>
<li><a href="http://instagram.com/ezecommedias" target="_new"><img src="<?php echo base_url()?>images/instagram.png" alt="">&nbsp;Instagram</a></li>
<li><a href="http://www.youtube.com/user/EZECOMCambodiaISP" target="_new"><img src="<?php echo base_url()?>images/youtube.png" alt="">&nbsp;Youtube</a></li>
<li><a href="https://plus.google.com/115186895941247360863" target="_new"><img src="<?php echo base_url()?>images/google.png" alt="">&nbsp;Google+</a></li>
</ul></div>
</div></div></div>
</div>


			</div>
<!-- SPOTLIGHT -->            </div>
            <!-- //FOOT NAVIGATION -->
        </section>
            <section class="t3-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 copyright ">
                          <div class="custom">
	                         <p>© 2016 Ezecom Co., Ltd. All Rights Reserved</p></div>
                        </div>
                    </div>
                </div>
            </section>
</footer>
<!-- //FOOTER -->