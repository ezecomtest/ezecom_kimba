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
	<div id="career-opportunities" class="container-fluid">
<div class="container module-content-container">
<h2>Careers</h2>
<img style="display: block; margin-left: auto; margin-right: auto; width: 80%;" src="<?php echo base_url();?>images/our_company/career_photo.png" alt="" />
<div class="container module-content-container" style="color: #444; font-size: 14px;">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
<p>អ៊ីហ្ស៊ីខម ក្រុមហ៊ុនផ្គត់ផ្គង់សេវាអ៊ីនធឺណិតលំដាប់ខ្ពស់នៅកម្ពុជា អ៊ីហ្ស៊ីខមត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ២០០៧ ដើម្បីបម្រើដល់ការរីកដុះដាលយ៉ាងឆាប់ រហ័សរបស់ពាណិជ្ជកម្ម និងទីផ្សារក្នុងប្រទេសកម្ពុជា។ ក្រុមហ៊ុនរបស់យើងបានដាក់បញ្ចូលខ្សែកាបិ៍្លអុបទិកផ្ទាល់ខ្លួន មជ្ឈមណ្ឌលទិន្នន័យលំដាប់ពិភពលោក, VoIP, VPN, សេវាកម្មCloud និងសេវាបន្ថែមទៀតសម្រាប់មធ្យោបាយសហគ្រាសជាមួយការគាំទ្រផ្នែកបច្ចេកទេស ២៤/៧។</p>
<p>ឥឡូវនេះយើងកំពុងស្វែងរក បេក្ខជនដែលមានសមត្ថភាព ស្វាហាប់ ហើយនឹងប្តេជ្ញា ដើម្បី បំពេញកន្លែងដែលនៅទំនេរដូចខាងក្រោម៖</p>
</div>
</div>
</div>
</div>
</div></div>
 <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script> -->

<div class="evofrontpage-tabbed-fade-in-out" id="evofrontpage-634">
<div style="display:table;table-layout:fixed;width:60%;padding:0 !important; margin:0 auto;background: #E7E7E8; border-radius: 20px;" class="evofrontpageid panel-body">
	<div class="anim">
	<div class="anim-div" style="position:relative;">
	<table class="table" id="example">
		  <thead>
		    <tr>
		      <th>&nbsp;&nbsp;&nbsp;Position</th>
		      <th>End Date</th>
		      <th></th>
		    </tr>
		  </thead>
		  <tbody>
          <?php
            foreach ($career as $careers) {?>
                <tr>
                  <td><a href="<?php echo base_url()?>career/<?php echo strtolower( str_replace(' ', '-', $careers->career_title));?>?lang=<?php echo $this->get_lang ?>" target="_new"><div class="title">
                  <?php echo ucwords(strtolower($careers->career_title));?></div></a></td>
                  <td><?php echo $careers->career_end_date;?></td>
                  <td><a class="btn-xs" href="<?php echo base_url()?>career/<?php echo strtolower( str_replace(' ', '-', $careers->career_title));?>?lang=<?php echo $this->get_lang ?>" target="_new">Read more</a></td>
                </tr>                                                     
          <?php }?>
          <input type="hidden" value="<?php echo $careers->career_id;?>" name="career_id">
        </tr>
			</tbody>
		</table>
	</div>
	</div>
</div><br/>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').dataTable( {
  "pageLength": 5
} );
} );
</script>
<style type="text/css">
	.dataTables_length,.dataTables_filter{
		display: none;
	}
	.dataTables_info,.col-sm-5{
		display: none;
	}
	/*table tr th {
		visibility: hidden;
	}*/
	.col-sm-7{
		margin-left:30%;
		padding:20px;
	}
	.pagination > li > a, .pagination > li > span{
		    padding: 0px 5px;
		    font-size:15px;
	}
	table.dataTable thead .sorting:after{
		display: none;
	}
	table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after{
		display:none !important;
	}
	table tr th{
		padding:18px;
	}
</style>
		</div>
		<!-- //HOME SL 1 -->
	
	

<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
						<div class="item-page clearfix">


<!-- Article -->
<article itemscope itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />


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