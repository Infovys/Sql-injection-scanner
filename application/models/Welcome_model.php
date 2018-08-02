<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Welcome_Model extends CI_Model
  {

   
  

    
    
    
    function get_domain_search($search)
    {   

      $this->db->select('domain_name');
      $this->db->from('domain');   
      $this->db->where("domain_name LIKE '%$search%'");
      $data = $this->db->get();
      $domain = $data->result_array();
      return $domain;
      
    }

    function add_domain($data)
    {
      $this->db->insert('request_for_subdomains',$data);      
      return $this->db->insert_id();
    }

    
 
 }



  

