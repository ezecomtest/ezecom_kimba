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
<h2 style="font-family: 'Bayon', cursive;">质量管理系统</h2>
<p> <img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo base_url();?>images/our_company/ISO.png" alt="" /></p>
<div class="row">
<div class="col-xm-12 col-sm-12 col-md-5">
<h3 style="color: #58585a; font-weight: 500; font-family: 'Kantumruy', sans-serif;">认证</h3>
<p>2011年6月21日，在内部成文的质量管理系统开发进行一年后，EZECOM成为柬埔寨首家获得国际标准化组织（ISO）9001：2008认证的互联网服务供应商（ISP） 。</p>
<p>EZECOM首席执行官Oknha Paul Blanche-Horgan表示：“自愿认证确保EZECOM客户遵守成文的流程和程序，从而确保我们的服务不断改进。</p>
<p>Schaeffer 还表示：“获得ISO 9001：2008认证是EZECOM的一个里程碑，认证过程需要我们员工的竭诚奉献和精益求精，展示了EZECOM对我们的客户和服务质量的持续性承诺。”</p>
</div>
<div class="col-xm-12 col-sm-12 col-md-2"> </div>
<div class="col-xm-12 col-sm-12 col-md-5">
<div class="row">
<div class="col-xm-12 col-sm-12 col-md-12">
<h3 style="color: #58585a; font-weight: 500;font-family: 'Kantumruy', sans-serif;">
质量政策</h3>
<ul>
<li><strong style="color: #7c5ca8;">卓越</strong> – 我们的服务-我们做得好</li>
<li><strong style="color: #7c5ca8;">合作关系</strong> – 我们建立持久合作关系</li>
<li><strong style="color: #7c5ca8;">创新</strong> – 我们将创意变为现实</li>
<li><strong style="color: #7c5ca8;">诚信</strong> – 我们做正确的事</li>
<li><strong style="color: #7c5ca8;">人 </strong> – 我们业务的核心</li>
</ul>
</div>
<div class="col-xm-12 col-sm-12 col-md-12">
<h3 style="color: #58585a; font-weight: 500;font-family: 'Kantumruy', sans-serif;">质量管理系统</h3>
<p>作为市场的领跑者，我们一直有很大的改进动力。为确保这一点，我们公司内部建立了一套质量管理系统，以权衡和改进我们各个业务领域。通过不断权衡自身和不断追求进步，我们一直保持着行业领跑者的地位。</p>
</div><br>

</div>
</div>
</div>
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