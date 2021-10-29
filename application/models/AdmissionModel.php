<?php
class AdmissionModel extends CI_Model{
	public function insertdata($data){
		return $this->db->insert('admission_form',$data);
	}
	public function getadmisisonlist(){
		$this->db->order_by("id","desc");
		$query=$this->db->get('admission_form');
//		print_r($query->result());
		return $query->result();

	}
	public function editstudent($id){
		$query = $this->db->get_where('admission_form', array('id' => $id));
		return $query->row();
	}
	public function updatestudent($data,$id){
		return $this->db->update('admission_form', $data, array('id' => $id));
	}
	public function deletestudent($id){
		return $this->db->delete('admission_form', array('id' => $id));
	}
	public function viewstudent($id){
		$query = $this->db->get_where('admission_form', array('id' => $id));
		return $query->row();
	}
	function check_unique_phone($id = '', $phone) {
		$this->db->where('phone', $phone);
		if($id) {
			$this->db->where_not_in('id', $id);
		}
		return $this->db->get('admission_form')->num_rows();
	}
}
?>
