<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bayon|Kantumruy|Raleway" rel="stylesheet">


<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class='com_content view-article itemid-571 j34'>
	<head>
  
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title><?php echo $title;?></title>
  <link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <?php
    $this->load->view('header/frontend_header');
  ?>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
</script>

	
<!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<!-- //META FOR IOS & HANDHELD -->



<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="/plugins/system/t3/base-bs3/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
	</head>
	
	<body>
 
		<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
  <?php
    $this->load->view('header/header_all');
  ?>
<!-- //HEADER -->

  
<!-- MAIN NAVIGATION -->
  <?php $this->load->view('header/main_nav_user_v');?>
<!-- //MAIN NAVIGATION -->

  
<div class="home">

			<!-- HOME SL 1 -->
		<div class="wrap t3-sl t3-sl-1 ">
			

<div class="custom"  >
	<div id="company-profile" class="&quot;container-fluid">
<div class="container module-content-container" style="color: #444; font-size: 14px;">
<div class="col-xs-12 col-sm-12 col-md-12 ">
<h2 style="text-align: left;">Profile</h2>
</div>
<div class="col-xs-12 col-sm-12 col-md-7 ">
<p>EZECOM was founded to serve the rapidly expanding enterprises and Residence users market in Cambodia. Launched in 2007, EZECOM has since become a leading provider for a wide variety of innovative communication services. EZECOM’s mission is “To be Cambodia’s premium Solutions provider of communications services through constant innovation &amp; improvement while contribute to society”.</p>
<h3 style="color: #58585a; font-weight: 400;">Technology</h3>
<p>Our company has incorporated its own fibre optic, VoIP, VPN and a custom built world class Data Centre. Recognising the need for high quality, hassle free, reliable internet services, EZECOM invested in a multitude of high quality infrastructures. These innovative solutions along with the complete package of services EZECOM offers corporations, office and home users, has made us the leader in our field.</p>
<h3 style="color: #58585a; font-weight: 400;">Corporate Social Responsibility</h3>
<p>Besides our strong technical foundation, EZECOM is actively stimulating the growth of the Cambodian community. EZECOM believes in growth, not only within our company and for our staff but also for the entire community in which we do business. That is why EZECOM has chosen to be an active partner in the Cambodian community, through a variety of sponsorships. Please visit our website for an up to date overview of EZECOM's partnerships.</p>
</div>
<div class="col-xs-12 col-sm-12 col-md-5 "><img style="float: right; width: 85%;" src="<?php echo base_url();?>images/our_company/Lady-002.png" alt="" /></div>
</div>
</div></div>


		</div>
		<!-- //HOME SL 1 -->
	
	
			<!-- HOME SL 5 -->
    <div class="wrap t3-sl t3-sl-5 ">
      <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="12">
        <?php foreach($feature_content as $feature){ ?>
          <a target="_blank" href="<?php echo base_url('newsdetail/').$feature->content_title ?>"><?php echo $feature->content_title.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?></a>
        <?php } ?>
      </marquee>

    </div>
    <!-- //HOME SL 5 -->
	
</div>
<!-- FOOTER -->
  <?php
    $this->load->view('footer/footer_user_v');
  ?>
<!-- //FOOTER -->
<!-- BACK TOP TOP BUTTON -->
 
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
 
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
 
</div>
 
<script type="text/javascript">
 
(function($) {
 
	// Back to top
 
	$('#back-to-top').on('click', function(){
 
		$("html, body").animate({scrollTop: 0}, 500);
 
		return false;
 
	});
 
})(jQuery);
 
</script>
 
<!-- BACK TO TOP BUTTON -->




</div>

	</body>
</html>