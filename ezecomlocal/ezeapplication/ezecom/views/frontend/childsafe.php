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
			
<div class="custom">
	<div id="childsafe-certification" class="container-fluid">
<div class="container module-content-container" style="color: #444; font-size: 14px;">
<h2>Childsafe Certification</h2>

<p>
<img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo base_url();?>images/our_company/child_safe.png" alt="" />
</p>


<div class="col-sm-2"> </div>
<div class="col-xs-12 colo-sm-12 col-md-8">

<p>On November 18th, 2014 EZECOM became the first company to receive Childsafe Bussines 7 certification in the world. ChildSafe Business 7 certification was developed by the ChildSafe Network, an international child protection program founded and powered by Friends-International.</p>
<p>The certification builds the 7 ChildSafe principles in to a company’s operations through staff training, internal policy review, assessment of CSR portfolios, and advice to ensure company communication plans are considerate to children. “EZECOM is proud to partner with Friends-International and become the first ChildSafe Business to meet the 7 principles and be certified in Cambodia,” said EZECOM CEO Oknha Paul Blanche-Horgan. “After weeks of ChildSafe training, our staffs are happy to receive the certificates.”</p>
<h3>More Information</h3>
<p>If you would like more information on the Childsafe programme visit <a href="http://thinkchildsafe.org/">www.childsafe-international.org</a> or if you would like more information about the work of Friends International visit <a href="https://friends-international.org/">www.friends-international.org</a></p>
<p><img style="display: block; margin-left: auto; margin-right: auto; width: 98%;" src="<?php echo base_url();?>images/our_company/family_for_childsafe.png" alt="" /></p>
</div>
<div class="col-sm-2"> </div>
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