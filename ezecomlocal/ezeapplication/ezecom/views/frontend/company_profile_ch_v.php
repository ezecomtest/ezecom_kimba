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
<h2 style="font-family: 'Bayon', cursive;text-align: left;">公司简介</h2>
</div>
<div class="col-xs-12 col-sm-12 col-md-7 ">
<p>EZECOM旨在为柬埔寨迅速扩张的商业和家庭用户市场提供服务。自2007年成立以来，EZECOM已成为各种创新型通讯服务供应商的领军者。EZECOM的使命是“成为柬埔寨独家且一流的服务提供商”。</p>
<h3 style="color: #58585a; font-weight: 400; font-family: 'Kantumruy', sans-serif;">技术</h3>
<p>我公司包含光导纤维业务、网络语音电话业务、 虚拟私人网络业务和世界级自定义数据中心。EZECOM意识到市场对高质量、简便易行、可信赖的互联网服务的需求，因此投资了大量高质量的基础设施。这些创新方案加之EZECOM为企业、办公室和家庭用户提供的整套服务使我们成为这一领域的领跑者。</p>
<h3 style="color: #58585a; font-weight: 400;font-family: 'Kantumruy', sans-serif;">企业社会责任</h3>
<p>除了我们强大的技术基础，EZECOM也在积极刺激柬埔寨社区发展。EZECOM坚信，不仅我们的公司员工会有所成长，我们开展业务的整个社区也会有所发展。这就是为什么EZECOM选择通过各种赞助广告成为柬埔寨社区活跃的合作伙伴。</p>
<p>了解EZECOM合作关系的最新概况，请访问我们的网站。</p>
</div>
<div class="col-xs-12 col-sm-12 col-md-5 "><img style="float: right; width: 85%;" src="<?php echo base_url();?>images/our_company/Lady-002.png" alt="" /></div>
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