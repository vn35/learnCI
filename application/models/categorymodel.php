<?php 
class categorymodel extends CI_Model {

	public function getAllcategory() {
		$query = $this->db->get('category', 10);
		return $query->result();
	}

	public function addCategory($category) {
		return $this->db->insert('category', $category);

	}

	public function showCategory($show_category) {
		return $this->db->get('category', $show_category);

	}

	public function deleteCategory($idCategory) {
		$this->db->delete('category', array('id' => $idCategory));

	}

	public function getCategory($id) {
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('id', $id);
		$query= $this->db->get();
		return $query->result();
	}

	public function updateCategory($idCategory, $data) {
		$this->db->where('id', $idCategory);
		$this->db->update('category', $data);
	}
}

?>
