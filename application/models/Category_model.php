<?php
Class Category_model extends CI_Model{
	public function getCategories(){
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function getProperties($category)
	{
		$query = $this->db->select('categories.*, category_properties.*')
			->from('categories')
			->join('category_properties', 'categories.id = category_properties.id_category', 'left')
			->where(array('categories.name' => $category))
			->get();
		return $query->result_array();
	}	
}
?>