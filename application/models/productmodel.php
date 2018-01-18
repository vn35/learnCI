<?php 
class productmodel extends CI_Model {

	public function getAllproduct() {
		$query = $this->db->get('product', 10);
		return $query->result();
	}

	public function addproduct($product) {
		return $this->db->insert('product', $product);

	}

	public function showproduct($show_product) {
		return $this->db->get('product', $show_product);

	}

	public function deleteproduct($idproduct) {
		$this->db->delete('product', array('id' => $idproduct));

	}

	public function getproduct($id) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('id', $id);
		$query= $this->db->get();
		return $query->result();
	}

	public function updateproduct($idproduct, $data) {
		$this->db->where('id', $idproduct);
		$this->db->update('product', $data);
	}
}

?>
