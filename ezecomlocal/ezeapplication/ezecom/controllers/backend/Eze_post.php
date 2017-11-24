<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eze_post extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/post/post_model');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        if($this->session->userdata('level') !== 'superuser'){
        	redirect('administrator');
        }
    }


	public function lists_content(){
		$data['allpost'] = $this->post_model->list_all_content();
		$data['title'] = "All POST";
		$this->load->view('backend/post/ezecom_post',$data);
	}

	public function delete_content($id){
		$result = $this->post_model->do_delete_content($id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Delete Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Deleting Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}

	}


	public function do_published_content($pub,$id){
		$result = $this->post_model->published_content($pub,$id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Action Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Action Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}

	}

	public function add_content_feature($feature,$id){
		$result = $this->post_model->feature_content($feature,$id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Action Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Action Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}
	}

	public function add_content(){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';

		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();
		$data['title'] = "ADD POST";
		$this->load->view('backend/post/ezecom_post_add',$data);
	}

	public function saving_content(){
				
				$config['upload_path']          = './elFindermaster/files/post/image_feature/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['encrypt_name']         = TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('content_image_feature'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       	print_r($error);
                       }
                else
                {
                        $data = $this->upload->data();
                        //data English
                        $alldata_en = array(
						'content_title_en'=>$this->input->post('content_title'),
						'content_intro_en'=>$this->input->post('content_intro'),
						'content_image_feature'=>$data['file_name'],
						'content_language_id'=>$this->input->post('content_language_id'),
						'content_categories_id'=>$this->input->post('content_categories_id'),
						'content_date'=>$this->input->post('content_date'),
						'content_description_en'=>$this->input->post('content_description'),
						'short_url'=> trim($this->input->post('permalink'))
						);
						
						// data Khmer
						$kh_title = $this->input->post('content_title_kh');
						if($kh_title==""){
							$content_publish = 0;
						}else{
							$content_publish = 1;
						}
						$alldata_khmer = array(
						'content_title_kh'=>$this->input->post('content_title_kh'),
						'content_intro_kh'=>$this->input->post('content_intro_kh'),
						'content_image_feature'=>$data['file_name'],
						'content_language_id'=>$this->input->post('content_language_kh'),
						'content_categories_id'=>$this->input->post('content_categories_kh'),
						'content_date'=>$this->input->post('content_date_kh'),
						'content_description_kh'=>$this->input->post('content_description_kh'),
						'content_published' => $content_publish,
						'short_url'=> trim($this->input->post('permalink'))
						);
						
						// data Chinese
						$ch_title = $this->input->post('content_title_ch');
						if($ch_title==""){
							$content_publish = 0;
						}else{
							$content_publish = 1;
						}
						$alldata_chinese = array(
						'content_title_ch'=>$this->input->post('content_title_ch'),
						'content_intro_ch'=>$this->input->post('content_intro_ch'),
						'content_image_feature'=>$data['file_name'],
						'content_language_id'=>$this->input->post('content_language_ch'),
						'content_categories_id'=>$this->input->post('content_categories_ch'),
						'content_date'=>$this->input->post('content_date_kh'),
						'content_description_ch'=>$this->input->post('content_description_ch'),
						'content_published' => $content_publish,
						'short_url'=> trim($this->input->post('permalink'))
						);
						
                        $result = $this->post_model->do_saving_content($alldata_en,$alldata_khmer,$alldata_chinese);

                        if($result == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Adding Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/addpost');

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Adding Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/addpost');
						}

                }

        


	}

	public function edit_content($id){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';
		//en
		$data['editpost'] = $this->post_model->do_edit_content($id);
		//kh
		$data['editpostkh'] = $this->post_model->do_edit_content_kh($id);
		//ch
		$data['editpostch'] = $this->post_model->do_edit_content_ch($id);
		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();
		$data['title'] = "EDIT POST";
		$this->load->view('backend/post/ezecom_post_edit',$data);
	}

	public function update_content(){
		$id = $this->input->post('contentid');
		$shurl_be_update = $this->input->post('short-url-before-update');
		
		if (empty($_FILES['content_image_feature']['name'])) {
					$img = FALSE;
					$alldata_en = array(
								'content_title_en'=>$this->input->post('content_title_en'),
								'content_intro_en'=>$this->input->post('content_intro_en'),
								'content_language_id'=>$this->input->post('content_language_id'),
								'content_categories_id'=>$this->input->post('content_categories_id'),
								'content_date'=>$this->input->post('content_date'),
								'content_description_en'=>$this->input->post('content_description_en'),
								'short_url'=> trim($this->input->post('permalink'))
								);
								
                    $result_en = $this->post_model->do_update_content_en($alldata_en,$id,$img,$shurl_be_update);
					
					$kh_title = $this->input->post('content_title_kh');
					if($kh_title==""){
						$content_published = 0;
					}else{
						$content_published = 1;
					}
					$alldata_kh = array(
								'content_title_kh'=>$this->input->post('content_title_kh'),
								'content_intro_kh'=>$this->input->post('content_intro_kh'),
								'content_language_id'=>$this->input->post('content_language_kh'),
								'content_categories_id'=>$this->input->post('content_categories_id'),
								'content_date'=>$this->input->post('content_date'),
								'content_description_kh'=>$this->input->post('content_description_kh'),
								'content_published' => $content_published,
								'short_url'=> trim($this->input->post('permalink'))
								);
								
                    $result_kh = $this->post_model->do_update_content_kh($alldata_kh,$id,$img,$shurl_be_update);
					
					$ch_title = $this->input->post('content_title_ch');
					if($ch_title==""){
						$content_published = 0;
					}else{
						$content_published = 1;
					}
					
					$alldata_ch = array(
								'content_title_ch'=>$this->input->post('content_title_ch'),
								'content_intro_ch'=>$this->input->post('content_intro_ch'),
								'content_language_id'=>$this->input->post('content_language_ch'),
								'content_categories_id'=>$this->input->post('content_categories_id'),
								'content_date'=>$this->input->post('content_date'),
								'content_description_ch'=>$this->input->post('content_description_ch'),
								'content_published' => $content_published,
								'short_url'=> trim($this->input->post('permalink'))
								);
								
                    $result_ch = $this->post_model->do_update_content_ch($alldata_ch,$id,$img,$shurl_be_update);
				
		
                        if($result_en == true AND $result_kh == true AND $result_ch == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Update Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Update Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);
						}

		}else{
				$config['upload_path']          = './elFindermaster/files/post/image_feature/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['encrypt_name']         = TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('content_image_feature'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       	print_r($error);
                       }
                else
                {
                        $data = $this->upload->data();
                        $img = TRUE;
						
							$alldata_en = array(
										'content_title_en'=>$this->input->post('content_title_en'),
										'content_intro_en'=>$this->input->post('content_intro_en'),
										'content_image_feature'=>$data['file_name'],
										'content_language_id'=>$this->input->post('content_language_id'),
										'content_categories_id'=>$this->input->post('content_categories_id'),
										'content_date'=>$this->input->post('content_date'),
										'content_description_en'=>$this->input->post('content_description_en'),
										'short_url'=> trim($this->input->post('permalink'))
										);
							
							$result_en = $this->post_model->do_update_content_en($alldata_en,$id,$img,$shurl_be_update);
							
							$kh_title = $this->input->post('content_title_kh');
							if($kh_title==""){
								$content_published = 0;
							}else{
								$content_published = 1;
							}
							$alldata_kh = array(
										'content_title_kh'=>$this->input->post('content_title_kh'),
										'content_intro_kh'=>$this->input->post('content_intro_kh'),
										'content_image_feature'=>$data['file_name'],
										'content_language_id'=>$this->input->post('content_language_kh'),
										'content_categories_id'=>$this->input->post('content_categories_id'),
										'content_date'=>$this->input->post('content_date'),
										'content_description_kh'=>$this->input->post('content_description_kh'),
										'content_published' => $content_published,
										'short_url'=> trim($this->input->post('permalink'))
										);
							
							$result_kh = $this->post_model->do_update_content_kh($alldata_kh,$id,$img,$shurl_be_update);
							
							$ch_title = $this->input->post('content_title_ch');
							if($ch_title==""){
								$content_published = 0;
							}else{
								$content_published = 1;
							}
							$alldata_ch = array(
										'content_title_ch'=>$this->input->post('content_title_ch'),
										'content_intro_ch'=>$this->input->post('content_intro_ch'),
										'content_image_feature'=>$data['file_name'],
										'content_language_id'=>$this->input->post('content_language_ch'),
										'content_categories_id'=>$this->input->post('content_categories_id'),
										'content_date'=>$this->input->post('content_date'),
										'content_description_ch'=>$this->input->post('content_description_ch'),
										'content_published' => $content_published,
										'short_url'=> trim($this->input->post('permalink'))
										);
							
							$result_ch = $this->post_model->do_update_content_ch($alldata_ch,$id,$img,$shurl_be_update);
						}
						
					
                        if($result_en == true AND $result_kh == true AND $result_ch == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Update Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Update Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);
						}

                }

		}
	



	public function copy_content($id){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';

		$data['copypost'] = $this->post_model->do_edit_content($id);
		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();

		$data['title'] = "COPY POST";
		$this->load->view('backend/post/ezecom_post_copy',$data);
	}
	
	public function check_short_url(){
		$short_url= trim($this->input->post("string_val"));
		$result= $this->post_model->short_url_search($short_url);
		echo $result;
	}


}
