<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	 public function __construct()
    {
        parent::__construct();

    }


    public function list_all_content(){
		if($this->session->userdata("language") == 1){
			$this->db->select('*');
			$this->db->from('tbl_content_en');
			$this->db->join('tbl_categories', 'tbl_content_en.content_categories_id = tbl_categories.categoriesid');
			$this->db->join('tbl_languages', 'tbl_content_en.content_language_id = tbl_languages.lang_id');
			$this->db->order_by('tbl_content_en.contentid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
		if($this->session->userdata("language") == 2){
			$this->db->select('*');
			$this->db->from('tbl_content_kh');
			$this->db->join('tbl_categories', 'tbl_content_kh.content_categories_id = tbl_categories.categoriesid');
			$this->db->join('tbl_languages', 'tbl_content_kh.content_language_id = tbl_languages.lang_id');
			$this->db->order_by('tbl_content_kh.contentid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
		if($this->session->userdata("language") == 3){
			$this->db->select('*');
			$this->db->from('tbl_content_ch');
			$this->db->join('tbl_categories', 'tbl_content_ch.content_categories_id = tbl_categories.categoriesid');
			$this->db->join('tbl_languages', 'tbl_content_ch.content_language_id = tbl_languages.lang_id');
			$this->db->order_by('tbl_content_ch.contentid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
		if($this->session->userdata("language") == ""){
			$this->db->select('*');
			$this->db->from('tbl_content_en');
			$this->db->join('tbl_categories', 'tbl_content_en.content_categories_id = tbl_categories.categoriesid');
			$this->db->join('tbl_languages', 'tbl_content_en.content_language_id = tbl_languages.lang_id');
			$this->db->order_by('tbl_content_en.contentid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
    	
    }

    public function do_delete_content($id){
		
		$delete_img = $this->do_delete_content_image_feature($id);
		//unlink('upload/post/'.$delete_img['content_image_feature']);
		$this->db->delete('tbl_content_en', array('contentid' => $id));
		$this->db->delete('tbl_content_kh', array('contentid' => $id));
		$this->db->delete('tbl_content_ch', array('contentid' => $id));
   		$result = $this->db->affected_rows();
   		return $result;
    }

    public function published_content($pub,$id){
        $alldata = array('content_published'=> $pub);
        $this->db->where('contentid',$id);
        $this->db->update('tbl_content', $alldata);
        $result = $this->db->affected_rows();
        return $result;
    }

     public function feature_content($feature,$id){
        $alldata = array('content_feature'=> $feature);
        $this->db->where('contentid',$id);
        $this->db->update('tbl_content', $alldata);
        $result = $this->db->affected_rows();
        return $result;
    }


    public function get_language(){
    	$query = $this->db->get('tbl_languages');
    	return $query->result();
    }

    public function get_categories(){
    	$query = $this->db->get('tbl_categories');
    	return $query->result();
    }

    public function do_saving_content($alldata_en,$alldata_khmer,$alldata_chinese){
    	$this->db->insert('tbl_content_en',$alldata_en);
		$this->db->insert('tbl_content_kh',$alldata_khmer);
		$this->db->insert('tbl_content_ch',$alldata_chinese);
    	$result = $this->db->affected_rows();
    	return $result;
    }

    public function do_edit_content($id){
		$query = $this->db->get_where('tbl_content_en',array('contentid'=>$id));
		return $query->row_array();
    }
	public function do_edit_content_kh($id){
		$query = $this->db->get_where('tbl_content_kh',array('contentid'=>$id));
		return $query->row_array();
	}
	public function do_edit_content_ch($id){
		$query = $this->db->get_where('tbl_content_ch',array('contentid'=>$id));
		return $query->row_array();
	}

	
    public function do_update_content_en($alldata,$id,$img,$shurl_be_update){
    	if($img == TRUE){
    		$delete_img = $this->do_delete_content_image_feature($id);
    		unlink('/elFindermaster/files/post/'.$delete_img['content_image_feature']);
    	}
		
		$original_url = $shurl_be_update;
		$update_url = $alldata['short_url'];
		$this->update_short_url_kh($original_url,$update_url);
		$this->update_short_url_ch($original_url,$update_url);
		
		$this->db->where('contentid', $id);
		$this->db->update('tbl_content_en', $alldata);
		$result = $this->db->affected_rows();
		return $result;
    }
	
	public function do_update_content_kh($alldata,$id,$img,$shurl_be_update){
		if($img == TRUE){
    		$delete_img = $this->do_delete_content_image_feature($id);
    		unlink('/elFindermaster/files/post/'.$delete_img['content_image_feature']);
    	}
		
		$original_url = $shurl_be_update;
		$update_url = $alldata['short_url'];
		$this->update_short_url_en($original_url,$update_url);
		$this->update_short_url_ch($original_url,$update_url);
		
		$this->db->where('contentid', $id);
		$this->db->update('tbl_content_kh', $alldata);
		$result = $this->db->affected_rows();
		return $result;
	}
	
	public function do_update_content_ch($alldata,$id,$img,$shurl_be_update){
		if($img == TRUE){
    		$delete_img = $this->do_delete_content_image_feature($id);
    		unlink('/elFindermaster/files/post/'.$delete_img['content_image_feature']);
    	}
		
		$original_url = $shurl_be_update;
		$update_url = $alldata['short_url'];
		$this->update_short_url_kh($original_url,$update_url);
		$this->update_short_url_en($original_url,$update_url);
		
		$this->db->where('contentid', $id);
		$this->db->update('tbl_content_ch', $alldata);
		$result = $this->db->affected_rows();
		return $result;
	}
	
	// function update short url en
	public function update_short_url_en($original_url,$update_url){
			$data_short_url = array('short_url'=>$update_url);
			$this->db->where('short_url', $original_url);
			$this->db->update('tbl_content_en', $data_short_url);
			$this->db->affected_rows();
	}
	
	// function update short url kh
	public function update_short_url_kh($original_url,$update_url){
			$data_short_url = array('short_url'=>$update_url);
			$this->db->where('short_url', $original_url);
			$this->db->update('tbl_content_kh', $data_short_url);
			$this->db->affected_rows();
	}
	
	// function update short url ch
	public function update_short_url_ch($original_url,$update_url){
			$data_short_url = array('short_url'=>$update_url);
			$this->db->where('short_url', $original_url);
			$this->db->update('tbl_content_ch', $data_short_url);
			$this->db->affected_rows();
	}
	
    public function do_delete_content_image_feature($id){
		if($this->session->userdata("language")==1){
			$query = $this->db->get_where('tbl_content_en',array('contentid'=>$id));
			return $query->row_array();
		}
		if($this->session->userdata("language")==2){
			$query = $this->db->get_where('tbl_content_kh',array('contentid'=>$id));
			return $query->row_array();
		}
		if($this->session->userdata("language")==3){
			$query = $this->db->get_where('tbl_content_ch',array('contentid'=>$id));
			return $query->row_array();
		}
		if($this->session->userdata("language")==""){
			$query = $this->db->get_where('tbl_content_en',array('contentid'=>$id));
			return $query->row_array();
		}
		
    }
	
	public function short_url_search($short_url){
			$query = $this->db->get_where('tbl_content_en',array('short_url'=>$short_url));
			return $query->num_rows();
	}

    
}
