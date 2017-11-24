<!-- saved from url=(0059)https://www.ezecom.com.kh/index.php/en/enterprise-solutions -->
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-1725 j34 no-touch">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async="" src="<?php echo base_url()?>assets/js/analytics.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  

<link href="<?php echo base_url()?>assets/css/css.css" rel="stylesheet">


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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="YES">
<!-- //META FOR IOS & HANDHELD -->




<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="/plugins/system/t3/base-bs3/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
	        <style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu,.t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {transition-duration: 400ms !important;-webkit-transition-duration: 400ms !important;}@-webkit-keyframes marqueeAnimation-6975525  { 100%  {margin-left:-1580px}}</style></head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
	<?php
		$this->load->view('header/header_all');
	?>
<!-- //HEADER -->
<!-- MAIN NAVIGATION -->
<?php $this->load->view("header/main_nav_user_v")?> 
<!-- //MAIN NAVIGATION -->

<div class="home">
<!-- HOME SL 1 -->
<div class="wrap t3-sl t3-sl-1 ">


<div class="custom">
	<div id="dedicated -package" class="container module-content-container" style="color: #444; font-size: 14px;">
<h2>Web Application Firewall</h2>
<div class="row">
<div class="col-sm-2">&nbsp;</div>
<div class="col-xs-12 col-sm-12 col-md-8">
<p style="font-size: 14px;">Web Application Firewall Packages are designed to support business critical functions and offer high speed connectivity and reliable access.</p>
<p style="font-size: 14px;">Web Application Firewall Packages allow you to send and receive large amount of data, conduct video conferences, run web based applications, stream video and any mission critical applications.</p>
<p style="font-size: 14px;">Web Application Firewall packages give you the highest level of performance delivered over our highly dependable and redundant infrastructure with 24-hour network monitoring and customer support included.</p>
<div style="color: #7961a9; width: 70%; margin: 10px 0 0px 0;">Please contact us today for more information.
<p style="font-size: 22px; color: #000;">+855(0)23 888 181</p>
</div>
<p>&nbsp;</p>
</div>
<div class="col-sm-2">&nbsp;</div>
</div>
</div></div>



		</div>
		<!-- //HOME SL 1 -->
	
	

<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
						<div class="item-page clearfix">


<!-- Article -->
<article itemscope="" itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB">

<!-- Aside -->
<!-- //Aside -->
	<section class="article-content clearfix" itemprop="articleBody">
			</section>
  <!-- footer -->
    <!-- //footer -->	
</article>
<!-- //Article -->
</div>
		</div>
		<!-- //MAIN CONTENT -->
	</div>
</div> 
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
<?php $this->load->view("footer/footer_user_v")?> 
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
</body></html>