<?php

class Media_center_m extends CI_Model{
  // can be declaration variable here
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //==== Start location install====
 

    public function title_events($per_page,$page){
          $first = $this->first_title_events();
          $getfirst = $first['contentid'];
        if($this->lang == 1){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->limit($per_page,$page);
            $this->db->order_by('con.content_date',"desc");
            $this->db->where("con.content_language_id",1);
            //$this->db->where("con.contentid !=",$getfirst);
            $sql = $this->db->get();
            return $sql->result();
        }
         if($this->lang == 2){
            $this->db->select("*")->from("tbl_content_kh con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->limit($per_page,$page);
            $this->db->order_by('con.content_date',"desc");
            $this->db->where("con.content_language_id",2);
			//$this->db->where("con.contentid !=",$getfirst);
            $sql = $this->db->get();
            return $sql->result();
        }
         if($this->lang == 3){
            $this->db->select("*")->from("tbl_content_ch con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->limit($per_page,$page);
            $this->db->order_by('con.content_date',"desc");
            $this->db->where("con.content_language_id",3);
			//$this->db->where("con.contentid !=",$getfirst);
            $sql = $this->db->get();
            return $sql->result();
        }
         if($this->lang == ""){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->limit($per_page,$page);
            $this->db->order_by('con.content_date',"desc");
            $this->db->where("con.content_language_id",1);
			//$this->db->where("con.contentid !=",$getfirst);
            $sql = $this->db->get();
            return $sql->result();
        }
       

    }

    public function first_title_events(){
        if($this->lang == 1){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",1);
            $this->db->limit(1);
            $this->db->order_by('con.content_date',"desc");
            $sql = $this->db->get();
            return $sql->row_array();
        }
        if($this->lang == 2){
            $this->db->select("*")->from("tbl_content_kh con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",2);
            $this->db->limit(1);
            $this->db->order_by('con.content_date',"desc");
            $sql = $this->db->get();
            return $sql->row_array();
        }
        if($this->lang == 3){
            $this->db->select("*")->from("tbl_content_ch con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",3);
            $this->db->limit(1);
            $this->db->order_by('con.content_date',"desc");
            $sql = $this->db->get();
            return $sql->row_array();
        }
         if($this->lang == ""){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",1);
            $this->db->limit(1);
            $this->db->order_by('con.content_date',"desc");
            $sql = $this->db->get();
            return $sql->row_array();
        }
        

    }



    public function get_all_events(){
        if($this->lang == 1){
            $first = $this->first_title_events();
            $getfirst = $first['contentid'];
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",1);
            $this->db->where("con.contentid !=",$getfirst);
            $this->db->order_by("content_modified_date", "asc");
            $sql = $this->db->get();
            return $sql->num_rows();
        }

        if($this->lang == 2){
            $first = $this->first_title_events();
            $getfirst = $first['contentid'];
            $this->db->select("*")->from("tbl_content_kh con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",2);
            $this->db->where("con.contentid !=",$getfirst);
            $this->db->order_by("content_modified_date", "asc");
            $sql = $this->db->get();
            return $sql->num_rows();
        }
        if($this->lang == 3){
            $first = $this->first_title_events();
            $getfirst = $first['contentid'];
            $this->db->select("*")->from("tbl_content_ch con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",3);
            $this->db->where("con.contentid !=",$getfirst);
            $this->db->order_by("content_modified_date", "asc");
            $sql = $this->db->get();
            return $sql->num_rows();
        }
        if($this->lang == ""){
            $first = $this->first_title_events();
            $getfirst = $first['contentid'];
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.content_language_id",1);
            $this->db->where("con.contentid !=",$getfirst);
            $this->db->order_by("content_modified_date", "asc");
            $sql = $this->db->get();
            return $sql->num_rows();
        }


    }

    public function get_news_detail($short_url){
		
        if($this->lang == 1){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.short_url",$short_url);
            $this->db->where("con.content_language_id",1);
            $sql = $this->db->get();
            return $sql->row_array();
        }
		
        if($this->lang == 2){
            $this->db->select("*")->from("tbl_content_kh con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.short_url",$short_url);
            $this->db->where("con.content_language_id",2);
            $sql = $this->db->get();
			
			if($sql->row_array()!= null){
				return $sql->row_array();
			}else{
				
				// if no kh caugh en
				$this->db->select("*")->from("tbl_content_en con");
				$this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
				$this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
				$this->db->where("con.content_published",1);
				$this->db->where("con.short_url",$short_url);
				$this->db->where("con.content_language_id",1);
				$sql = $this->db->get();
				return $sql->row_array();
			}
        }
		
        if($this->lang == 3){
            $this->db->select("*")->from("tbl_content_ch con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.short_url",$short_url);
            $this->db->where("con.content_language_id",3);
            $sql = $this->db->get();
			
            if($sql->row_array()!= null){
				return $sql->row_array();
			}else{
				// if no kh caugh en
				$this->db->select("*")->from("tbl_content_en con");
				$this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
				$this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
				$this->db->where("con.content_published",1);
				$this->db->where("con.short_url",$short_url);
				$this->db->where("con.content_language_id",1);
				$sql = $this->db->get();
				return $sql->row_array();
			}
        }
		
        if($this->lang == ""){
            $this->db->select("*")->from("tbl_content_en con");
            $this->db->join("tbl_categories cat","con.content_categories_id = cat.categoriesid");
            $this->db->join("tbl_languages lan","con.content_language_id = lan.lang_id");
            $this->db->where("con.content_published",1);
            $this->db->where("con.short_url",$short_url);
            $this->db->where("con.content_language_id",1);
            $sql = $this->db->get();
			return $sql->row_array();
           
        }

    }
}
?>
