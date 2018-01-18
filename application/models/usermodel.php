<?php 
class usermodel extends CI_Model {

	public function getAlluser() {
		$query = $this->db->get('member', 10);
		return $query->result();
	}

	public function addUser($user) {
		return $this->db->insert('member', $user);

	}

	public function show($show_user) {
		return $this->db->get('member', $show_user);

	}

	public function delete($idUser = 0) {
		$this->db->delete('member', array('id' => $idUser));

	}

	public function getUser($id) {
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('id', $id);
		$query= $this->db->get();
		return $query->result();
	}

	public function update($idUser = 0, $data) {
		$this->db->where('id', $idUser);
		$this->db->update('member', $data);
	}
}

?>
