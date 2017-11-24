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
	<div id="childsafe-certification" class="container-fluid">
<div class="container module-content-container" style="color: #444; font-size: 14px;">
<h2 style="font-family: 'Bayon', cursive;">儿童上网行为控制认证</h2>
<div class="col-sm-2"> </div>
<div class="col-xs-12 colo-sm-12 col-md-8">
<p>
<img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo base_url();?>images/our_company/child_safe.png" alt="" />
</p>

<p>2014年11月18日，EZECOM成为全球首家获得儿童上网行为控制业务7认证的公司。儿童上网行为控制业务7认证由ChildSafe Network项目开发，该项目是Friends-International创立并运营的国际儿童保护计划。该认证通过员工培训、内部政策审查、CSR组合评估及建议，将7项儿童上网行为控制原则构建到公司运营中以确保公司传播计划对儿童有利。</p>
<p>EZECOM首席执行官Oknha Paul Blanche-Horgan表示：“EZECOM很荣幸与Friends-International合作并成为首家符合7项原则可开展儿童上网行为控制业务并在柬埔寨获得认证的公司。经过几个星期的儿童上网行为控制培训，我们的员工开心的获得了证书。”</p>
<h3 style="font-family: 'Bayon', cursive;">更多信息</h3>
<p>如果您想了解有关儿童上网行为控制计划的更多信息，请访问 <a style="color: #0000cc; text-decoration: underline;" href="https://friends-international.org/">  www.childsafe-international.org </a> 或者如果您想了解有关Friends International工作内容的更多信息，请访问 <a style="color: #0000cc; text-decoration: underline;" href="https://friends-international.org/"> www.friends-international.org</a></p>
<p><img style="display: block; margin-left: auto; margin-right: auto; width: 98%;" src="<?php echo base_url();?>images/our_company/family_for_childsafe.png" alt="" /></p>
</div>
<div class="col-sm-2"> </div>
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