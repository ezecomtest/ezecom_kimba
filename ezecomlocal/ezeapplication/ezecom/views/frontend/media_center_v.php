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
	  $lang_url = "?lang=".$get_lang;
  }
?>

<!-- saved from url=(0067)https://www.ezecom.com.kh/index.php/en/media-center/news-and-events -->
<html lang="en-gb" dir="ltr" class="com_content view-category layout-t3_bs3_blankxblog itemid-631 j34 no-touch">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async=""
 src="<?php echo base_url()?>assets/js/analytics.js"></script><script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  

<link href="<?php echo base_url()?>assets/css/css.css" rel="stylesheet">


<script>
 .h5{
    font-family: "'Kantumruy','Raleway', sans-serif,'Bayon', cursive'";
}
</script>

  <title>News &amp; Events</title>
  <link href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0">
  <link href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0">
  <link href="https://www.ezecom.com.kh/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  
  <?php 
    $this->load->view('header/frontend_header');
  ?>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
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
	        <style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu,.t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {transition-duration: 400ms !important;-webkit-transition-duration: 400ms !important;}@-webkit-keyframes marqueeAnimation-1524024  { 100%  {margin-left:-1580px}}</style></head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  
<!-- HEADER -->
<?php $this->load->view("header/header_all");?> 
<!-- //HEADER -->

  
<!-- MAIN NAVIGATION -->
<?php $this->load->view("header/main_nav_user_v");?> 
<!-- //MAIN NAVIGATION -->
<div class="home">


		<!-- //HOME SL 1 -->
<div class="custom">

<div id="news_&_events" class="&quot;container-fluid">
<div id="t3-mainbody" class="container t3-mainbody">




	<div class="row">


			
		<?php if($this->uri->segment(3) == NULL){ ?>


			<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
						<div class="blog" itemscope="" >

			<h2 style="text-align: center;">
			
		</h2><br>
		<div class="blog-items clearfix">
				
		
						<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10" itemprop="blogPost" itemscope="" >
						
	<!-- Article -->
	<article>

		<!-- Intro image -->
			<div class="row">
			<!-- <div class="col-md-1"></div> -->
		      		<div class="col-md-6" id="firstrecord">
		      			<div class="pull-left item-image"> 
		      				<a href="<?php echo base_url(); ?>newsdetail/<?php echo  $firsttitle_events['short_url'].$lang_url;?>">
		      				<img src="<?php echo base_url('elFindermaster/files/post/image_feature/').$firsttitle_events['content_image_feature']?>" alt="" itemprop="thumbnailUrl"> </a>
		      			</div>
		      		
		      		</div> 

		      		<div class="col-md-6">
		<a href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events/734-ezecom-supported-cambodia-ict-awards-2017-launching-ceremony-in-calling-for-the-best-ict-acheivement-this-year" itemprop="url">		       
		</a>
				<header class="article-header clearfix">
					<a href="<?php echo base_url(); ?>newsdetail/<?php echo  $firsttitle_events['short_url'].$lang_url;?>">
						<!-- Lang English -->
						<?php if($lang == 1){ ?>
							<h5 class="article-title" itemprop="name"><?php echo $firsttitle_events['content_title_en']?></h5>
						<?php } ?>
						<!-- Lang Khmer -->
						<?php if($lang == 2){ ?>
							<h5 class="article-title" itemprop="name"><?php echo $firsttitle_events['content_title_kh']?></h5>
						<?php } ?>
						<!-- Lang Chinese -->
						<?php if($lang == 3){ ?>
							<h5 class="article-title" itemprop="name"><?php echo $firsttitle_events['content_title_ch']?></h5>
						<?php } ?>
	
						<?php if($lang == ""){ ?>
							<h5 class="article-title" itemprop="name"><?php echo $firsttitle_events['content_title_en']?></h5>
						<?php } ?>
					</a>

				</header>
					    <section class="article-intro clearfix">
																						
							
							<p style="font-size: 14px;">

							<?php
							if($lang == 1){
								$string = strip_tags($firsttitle_events['content_description_en']);
							}
							if($lang == 2){
								$string = strip_tags($firsttitle_events['content_description_kh']);
							}
							if($lang == 3){
								$string = strip_tags($firsttitle_events['content_description_ch']);
							}
							if($lang == ""){
								$string = strip_tags($firsttitle_events['content_description_en']);
							}
							
							
							if (strlen($string) > 350) {

							    $stringCut = substr($string, 0, 350);
							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <br/><a href="'.base_url().'newsdetail/'.$firsttitle_events['short_url'].'>Read More</a>'; 
							}
							echo $string;
							?></p>
						
						</section>
		      		</div>
			</div>
		<br>
	</article>
	</div>
		<div class="col-sm-1"></div>
		</div>		
</div>
</div>


		<?php }?>





<?php foreach ($title_events as $title) { ?>
	<div class="row">
		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
						<div class="blog" itemscope="" >

			<h2 style="text-align: center;">
			
		</h2><br>
		<div class="blog-items clearfix">
				<div class="col-sm-1"></div>
		
						<div class="row">
				
						<div class="col-sm-10" itemprop="blogPost" itemscope="" >
						
	<!-- Article -->
	<article>

		<!-- Intro image -->
			<div class="row">
		
		      		<div class="col-md-2" id="firstrecord" style="min-width:19.66%">
						<div class="pull-left item-image"><a href="<?php echo base_url(); ?>newsdetail/<?php echo $title->short_url .$lang_url;?>"> 
							<img src="<?php echo base_url()?>elFindermaster/files/post/image_feature/<?php echo $title->content_image_feature;  ?>" alt="" itemprop="thumbnailUrl"></a> 
						</div>
		      		</div> 

		      		<div class="col-md-8">
		<a href="https://www.ezecom.com.kh/index.php/en/media-center/news-and-events/734-ezecom-supported-cambodia-ict-awards-2017-launching-ceremony-in-calling-for-the-best-ict-acheivement-this-year" itemprop="url">		       
		</a>
				<header class="article-header clearfix">
					<a href="<?php echo base_url(); ?>newsdetail/<?php echo $title->short_url . $lang_url;?>">
						<h5 class="article-title" itemprop="name">
							<?php 
								if($lang == 1){
									echo $title->content_title_en ;
								}
								if($lang == 2){
									echo $title->content_title_kh ;
								}
								if($lang == 3){
									echo $title->content_title_ch ;
								}
								if($lang == ""){
									echo $title->content_title_en ;
								}
								
							?>
						</h5>
					</a>

				</header>
					    <section class="article-intro clearfix">
																						
							
							<p style="font-size: 14px;">

							<?php
							if($lang == 1){
								$string = strip_tags($firsttitle_events['content_description_en']);
							}
							if($lang == 2){
								$string = strip_tags($firsttitle_events['content_description_kh']);
							}
							if($lang == 3){
								$string = strip_tags($firsttitle_events['content_description_ch']);
							}
							if($lang == ""){
								$string = strip_tags($firsttitle_events['content_description_en']);
							}
							
							if (strlen($string) > 200) {

							    $stringCut = substr($string, 0, 200);
							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <br/><a href="'.base_url().'newsdetail/'.$title->short_url .'">Read More</a>'; 
							}
							echo $string;
							?></p>
						
						</section>
		      		</div>
			</div>
		<br>
	</article>
	</div>
		<div class="col-sm-1"></div>
		</div>		
</div>
</div>
</div>
</div>
<?php } ?>  

	
		<div class="row">
		
		<div class="col-sm-12" style="padding-left: 15%;padding-right: 15%;">

			<div class="pagination">
			 <?php echo $pagination; ?>
								
			</div>
		</div>
		</div>
		

	</div>
		</div>
		<!-- //MAIN CONTENT -->

	</div>
</div> 
<!-- </div> -->
			<!-- HOME SL 5 -->

</div>
		<!-- HOME SL 5 -->
		<div class="wrap">
			<div style="max-width:100%;max-height:7%;background-color:#E2E3E4">
				<marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="12">
					<?php foreach($feature_content as $feature){ ?>
						<a target="_blank" href="<?php echo base_url('newsdetail/').strtolower(str_replace(' ', '-' ,$feature->content_title)) ?>"><?php echo $feature->content_title.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?></a>
					<?php } ?>
				</marquee>
			</div>
		</div>
		<!-- //HOME SL 5 -->
</div>


<!-- FOOTER -->
	<?php $this->load->view('footer/footer_user_v');?>
<!-- //FOOT NAVIGATION -->
       


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