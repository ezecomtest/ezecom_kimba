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
	<div id="qms" class="container-fluid bg-color-gray">
<div class="container sub-menu-container" style="color: #444; font-size: 14px;">
<h2>Quality Managment System</h2>
<p> <img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo base_url();?>images/our_company/ISO.png" alt="" /></p>
<div class="row">
<div class="col-xm-12 col-sm-12 col-md-5">
<h3 style="color: #58585a; font-weight: 500;">Certification</h3>
<p style="margin-top: 15px;">On June 21, 2011, EZECOM became the first Internet Service Provider (ISP) in Cambodia to receive International Organization for Standardization’s certification (ISO) 9001:2008 status, with a year-long process initiated by the development of an internal documented Quality Management System.</p>
<p style="margin-top: 30px;">“The voluntary certification assures customers of EZECOM's adherence to documented processes and procedures that ensure continued and ongoing improvements in delivering our Services,” said EZECOM CEO Oknha Paul Blanche-Horgan.</p>
<p style="margin-top: 20px;">“Achieving ISO 9001:2008 certification is a milestone for EZECOM," Oknha Paul Blanche-Horgan said. "The certification process has required a lot of dedication and excellence from our staff and demonstrates EZECOM’s continual commitment to our customers and the quality of service."</p>
</div>
<div class="col-xm-12 col-sm-12 col-md-2"> </div>
<div class="col-xm-12 col-sm-12 col-md-5">
<div class="row">
<div class="col-xm-12 col-sm-12 col-md-12">
<h3 style="color: #58585a; font-weight: 500;">Policy Value</h3>
<ul>
<li><strong style="color: #7c5ca8;">Excellence</strong> – What we do – we do well</li>
<li><strong style="color: #7c5ca8;">Partnerships</strong> – We build durable relations</li>
<li><strong style="color: #7c5ca8;">Innovation</strong> – We bring ideas into reality</li>
<li><strong style="color: #7c5ca8;">Integrity</strong> – We do what is right</li>
<li><strong style="color: #7c5ca8;">People</strong> – The core of our business</li>
</ul>
</div>
<div class="col-xm-12 col-sm-12 col-md-12" style="margin-top: -30px;">
<h3 style="color: #58585a; font-weight: 500;">Quality Management System</h3>
<p>As a leader in the market we have always possessed a great drive for improvement. To ensure that this is established a Quality Management System within our company - which measures and improves all areas of our business. By constantly measuring ourselves and constantly aiming higher we ensure that we keep our place as the industry leader.</p>
</div>

<div class="col-xm-12 col-sm-12 col-md-12" style="margin-top: -35px;">
<h3 style="color: #58585a; font-weight: 500;">Our Quality Policy</h3>
<p>EZECOM is committed to meeting or exceeding customers requirements through continual improvement activities, including defining, measuring and acting on objectives and targets.</p>
</div>


</div>
</div>
</div>
</div>
</div></div>

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