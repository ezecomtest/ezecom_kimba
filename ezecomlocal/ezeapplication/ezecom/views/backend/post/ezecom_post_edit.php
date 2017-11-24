<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <?php $this->load->view("header/header_link");?>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
       
        <?php $this->load->view("header/menu");?>
            <div class="right_col" role="main">

                        <!-- top tiles -->
                        <div class="row tile_count">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?=$this->session->flashdata('message')?>
                            

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit Post <!-- <small>different form elements</small> --></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
								<form class="form-horizontal form-label-left" action="<?php echo site_url('updatepost'); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="contentid" value="<?php echo $editpost['contentid']; ?>">
									
									<!-- block global -->
									<h2>Global Setting</h2>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Link News & Event:</label>
											<label class="col-md-6 col-sm-6 col-xs-12" style="padding-top:10px;">
												<?php echo base_url()."newsdetail/" ?>
												<label id="link_url"><?php echo $editpost['short_url'] ?></label>
											</label>
											
										</div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Short url<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" class="form-control border" name="permalink" id="permalink" required="required" value="<?php echo $editpost['short_url'] ?>" placeholder="<?php echo base_url()."newsdetail/"?>" oninput="check_short_url()">
												<label id="result"></label>
												<input type="hidden" name="short-url-before-update" value="<?php echo $editpost['short_url'] ?>">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Post Date</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="date" class="form-control col-md-7 col-xs-12 parsley-success" name="content_date" value="<?php echo $editpost['content_date']; ?>">
                                            </div>
											<input type="hidden" name="content_modified_date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										 <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Image Feature <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" style="line-height: 1px" name="content_image_feature" class="form-control">
                                            </div>
                                        </div>	

									<!-- End block global -->

									
									
										<h2>English Content</h2>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" name="content_title_en" required="required" value="<?= $editpost['content_title_en'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                         
											   <?php
													$content_intro_en = $editpost['content_intro_en'];
													echo $this->ckeditor->editor("content_intro_en",$content_intro_en);
											   ?>
                                            </div>
                                        </div>

                                          <?php foreach($language as $rowlan){ ?>
                                            <?php if($editpost['content_language_id'] == $rowlan->lang_id){ ?>
                                               
												<input type="hidden" name="content_language_id" value="<?php echo $rowlan->lang_id ?>">
											
											<?php }
											  }
											?>
                                        
                                       
                                        
                                                
										<?php foreach($categories as $rowcat){ ?>
											<input type="hidden" name="content_categories_id" value="<?php echo $rowcat->categoriesid ?>">
										
										<?php }?>
                                          
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
												
												<?php
													$description_en = $editpost['content_description_en'];
													echo $this->ckeditor->editor("content_description_en",$description_en);
												?>
                                            </div>
                                        </div>
										
										<h2>Khmer Content</h2>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" name="content_title_kh"  value="<?= $editpostkh['content_title_kh'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                         
											   <?php	
												 $content_intro_kh = $editpostkh['content_intro_kh'];
												 echo $this->ckeditor->editor("content_intro_kh",$content_intro_kh);
											   ?>
                                            </div>
                                        </div>

                                          <?php foreach($language as $rowlan){ ?>
                                            <?php if($editpostkh['content_language_id'] == $rowlan->lang_id){ ?>
                                               
												<input type="hidden" name="content_language_kh" value="<?php echo $rowlan->lang_id ?>">
											
											<?php }
											  }
											?>
                                        
                                       
                                        
                                                
										<?php foreach($categories as $rowcat){ ?>
											<input type="hidden" name="content_categories_id" value="<?php echo $rowcat->categoriesid ?>">
										
										<?php }?>
                                          
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
												<?php
													$description_kh = $editpostkh['content_description_kh'];
													echo $this->ckeditor->editor("content_description_kh",$description_kh);
												?>
                                            </div>
                                        </div>
										
										<h2>Chinese Content</h2>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Content Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" name="content_title_ch"  value="<?= $editpostch['content_title_ch'] ?>" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="6073"><ul class="parsley-errors-list" id="parsley-id-6073"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Introduction <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
											   <?php
													$content_intro_ch = $editpostch['content_intro_ch'];
													echo $this->ckeditor->editor("content_intro_ch",$content_intro_ch);
											   ?>
                                            </div>
                                        </div>

                                          <?php foreach($language as $rowlan){ ?>
                                            <?php if($editpostch['content_language_id'] == $rowlan->lang_id){ ?>
                                               
												<input type="hidden" name="content_language_ch" value="<?php echo $rowlan->lang_id ?>">
											
											<?php }
											  }
											?>
                                        
                                       
                                        
                                                
										<?php foreach($categories as $rowcat){ ?>
											<input type="hidden" name="content_categories_id" value="<?php echo $rowcat->categoriesid ?>">
										
										<?php }?>
                                          
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="con_password">Content Description <span class="required" id="message">*</span>
                                            </label>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
												<?php
													$description_ch = $editpostch['content_description_ch'];
													echo $this->ckeditor->editor("content_description_ch",$description_ch);
												?>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" id="Add" class="btn btn-success">Add</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                
                        </div>
                        <!-- footer content -->

                       <?php $this->load->view("footer/footer"); ?>
                        <!-- /footer content -->
            </div>
        </div>
    </div>
    <?php $this->load->view("header/script");?>
</body>
</html>
<script type="text/javascript">
document.getElementById("result").style.display = "none";
function check_short_url(){
	var base_url= "<?php echo base_url()?>";
	var string_val = document.getElementById("permalink").value;
	var replaced = string_val.split(' ').join('-');
	var re = new RegExp("^[a-z0-9 -]*$");
	if (re.test(string_val)) {
		// add string after replaced space with hyphen.
		document.getElementById("permalink").value = replaced;
		//add string shourt url to label Link news and Event.
		document.getElementById("link_url").innerHTML = "";
		document.getElementById("link_url").innerHTML = replaced;
		
		$.ajax({
                type:"POST",
                url: base_url+"shortUrlCheck",
                data:({string_val:string_val}),
                success:function(data)
                {
					if(data == true){
						document.getElementById("permalink").style.borderColor = "red";
						document.getElementById("result").style.display = "block";
						$("#result").html("Short url already exist");
						document.getElementById("result").style.color = "red";
						document.getElementById('Add').disabled = true;
						
					}else{
						document.getElementById("permalink").style.borderColor = "";
						document.getElementById("result").style.display = "none";
						document.getElementById('Add').disabled = false;
					}
                }
            });
		// accept reqular expression	
		document.getElementById("permalink").style.borderColor = "";
		document.getElementById("result").style.display = "none";
		document.getElementById("permalink").style.borderColor = "";
		document.getElementById('Add').disabled = false;
		
	}else{
		// not accept reqular expression
		document.getElementById('Add').disabled = true;
		document.getElementById("permalink").style.borderColor = "red";
		document.getElementById("result").style.display = "block";
		$("#result").html("Accept only hyphen, characters and number ");
		document.getElementById("result").style.color = "red";
	}
}
	
</script>