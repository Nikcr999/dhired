<?php
class Admin_model extends CI_Model
{
    //get
    public function get_data($table)
    {
        return $this->db->get($table)->result_array();
    }
    //get where
    public function get_data_where($table, $condition)
    {
        return $this->db->get_where($table, $condition)->result_array();
    }
    //  insert
    public function insert_data($table, $val)
    {
        $this->db->insert($table, $val);
        if($this->db->affected_rows()){
            return True;
        }
        return false;
    }
    public function get_country()
    {
        return $this->get_data('country');
    }
    public function add_country($val)
    {
        $this->insert_data('country', $val);
    }
    public function get_state()
    {
        $this->db->select('s.id,s.name as s_name,c.name as c_name');
        $this->db->from('state as s');
        $this->db->join('country as c','c.id = s.country_id','left');
        $this->db->order_by('s.id');
        return $this->db->get()->result_array();
    }
    public function fetch_state($val)
    {
        $this->db->select('s.id,s.name');
        $this->db->from('state as s');
        $this->db->join('country as c','c.id = s.country_id','left');
        $this->db->order_by('s.id');
        $this->db->where('c.id',$val);
        return $this->db->get()->result_array();
    }
    public function add_state($val)
    {
        return $this->insert_data('state', $val);

    }
    public function get_city()
    {
        $this->db->select('ci.id,ci.name as ci_name,s.name as s_name,c.name as c_name');
        $this->db->from('city as ci');
        $this->db->join('country as c','c.id = ci.country_id','left');
        $this->db->join('state as s','s.id = ci.state_id','left');
        $this->db->order_by('ci.id');
        return $this->db->get()->result_array();
    }
    public function fetch_city($val)
    {
        $this->db->select('ci.id,ci.name');
        $this->db->from('city as ci');
        $this->db->join('state as s','s.id = ci.state_id','left');
        $this->db->order_by('ci.id');
        $this->db->where('s.id',$val);
        return $this->db->get()->result_array();
    }
    public function add_city($val)
    {
        return $this->insert_data('city', $val);

    }
    public function get_interest()
    {
        return $this->get_data('interest');
    }
    public function add_interest($val)
    {
        return  $this->insert_data('interest', $val);
    }
    public function get_category()
    {
        $this->db->select('cat.id,i.title as i_title,cat.logo,cat.title as cat_title,cat.description,cat.status');
        $this->db->from('category as cat');
        $this->db->join('interest as i','i.id = cat.interest_id','left');
        $this->db->order_by('cat.id');
        return $this->db->get()->result_array();
    }
    public function fetch_category($val)
    {
        $this->db->select('cat.id,cat.title');
        $this->db->from('category as cat');
        $this->db->join('interest as i','i.id = cat.interest_id','left');
        $this->db->order_by('cat.id');
        $this->db->where('i.id',$val);
        return $this->db->get()->result_array();
       
    }
    public function add_category($val)
    {
        return  $this->insert_data('category', $val);
    }
    public function fetch_subcategory($val)
    {
        $this->db->select('subcat.id,subcat.title');
        $this->db->from('subcategory as subcat');
        $this->db->join('category as cat','cat.id = subcat.category_id','left');
        $this->db->order_by('subcat.id');
        $this->db->where('cat.id',$val);
        return $this->db->get()->result_array();
       
    }
    public function get_subcategory()
    {
        $this->db->select('subcat.id,i.title as i_title , cat.title as cat_title , subcat.title as subcat_title , subcat.description');
        $this->db->from('subcategory as subcat');
        $this->db->join('category as cat','cat.id = subcat.category_id','left');
        $this->db->join('interest as i','i.id = subcat.interest_id','left');
        $this->db->order_by('subcat.id');
        return $this->db->get()->result_array();
    }
    public function add_subcategory($val)
    {
        return  $this->insert_data('subcategory', $val);

    }
    public function get_socialmedia()
    {
        return $this->get_data('socialmedia');
    }
    public function add_socialmedia($val)
    {
        return  $this->insert_data('socialmedia', $val);
    }
    public function get_community()
    {
        $this->db->select('com.id,com.title as com_title,com.description,c.name as c_name,s.name as s_name,ci.name as ci_name,i.title as i_title, cat.title as cat_title, subcat.title as subcat_title');
        $this->db->from('community as com');
        $this->db->join('country as c','c.id = com.country_id','left');
        $this->db->join('state as s','s.id = com.state_id','left');
        $this->db->join('city as ci','ci.id = com.city_id','left');
        $this->db->join('interest as i','i.id = com.interest_id','left');
        $this->db->join('category as cat','cat.id = com.category_id','left');
        $this->db->join('subcategory as subcat','subcat.id = com.subcategory_id','left');
        $this->db->order_by('com.id');
        return $this->db->get()->result_array();
    }
    public function add_community($val)
    {
        return  $this->insert_data('community', $val);
    }
    public function get_group()
    {
        $this->db->select('gr.id ,gr.name,gr.url,gr.description,gr.type,gr.fees,gr.status,com.title as c_title,soc.name as s_name');
        $this->db->from('group as gr');
        $this->db->join('community as com','com.id = gr.community_id','left');
        $this->db->join('socialmedia as soc','soc.id = gr.social_id','left');
        return $this->db->get()->result_array();

    }
    public function add_group($val)
    {
        return  $this->insert_data('group', $val);
    }
    public function count_interest()
    {
        return count($this->get_data('interest'));
    }
    public function count_category()
    {
        return count($this->get_data('category'));
    }
    public function count_subcategory()
    {
        return count($this->get_data('subcategory'));
    }
}
