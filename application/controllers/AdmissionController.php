<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdmissionController extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('AdmissionModel');
	}
	public function index(){
		$this->load->view('layouts/header');

		$data['admissionlist']= $this->AdmissionModel->getadmisisonlist();

		$this->load->view('pages/index',$data);
		$this->load->view('layouts/footer');
	}
	public function create(){
		$this->form_validation->set_rules('fname', 'First Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('fathername', 'Father Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('mname', 'Mother Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('sname', 'School Name', 'required|regex_match[/^([a-z ., ])+$/i]');
		$this->form_validation->set_rules('class', 'Class', 'required');
		$this->form_validation->set_rules('thana', 'Thana', 'required|regex_match[/^([a-z ])+$/i]');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('phone', 'Mobile Number ', 'required|exact_length[11]|numeric|is_unique[admission_form.phone]');
		$this->form_validation->set_rules('pay_method', 'Payment Method', 'required');
		$this->form_validation->set_rules('dob', 'Death of Birth', 'required');
//		$this->form_validation->set_rules('userfile', 'Photo', 'required');



		if ($this->form_validation->run()){
			$url_filename=$_FILES['userfile']['name'];
			$new_name=time()."".str_replace(' ','.',$url_filename);
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 5000;
			$config['max_width']            = 2024;
			$config['max_height']           = 2068;
			$config['file_name']=$new_name;
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('layouts/header');
				$this->load->view('pages/create',$error);
				$this->load->view('layouts/footer');
			}else{

				$img =  $this->upload->data('file_name');
				$data['fname']=$this->input->post('fname');
				$data['lname']=$this->input->post('lname');
				$data['fathername']=$this->input->post('fathername');
				$data['mname']=$this->input->post('mname');
				$data['sname']=$this->input->post('sname');
				$data['class']=$this->input->post('class');
				$data['section']=$this->input->post('section');
				$data['post_office']=$this->input->post('post_office');
				$data['thana']=$this->input->post('thana');
				$data['village']=$this->input->post('village');
				$data['district']=$this->input->post('district');
				$data['gender']=$this->input->post('gender');
				$data['phone']=$this->input->post('phone');
				$data['pay_method']=$this->input->post('pay_method');
				$data['dob']=date('Y-m-d',strtotime($this->input->post('dob')));
				$data['userfile']=  $img;

				$this->AdmissionModel->insertdata($data);
				$this->session->set_flashdata('status','Record added successful');
				redirect(base_url().'index.php/AdmissionController/index');
			}

		}else{
			$this->load->view('layouts/header');
			$this->load->view('pages/create');
			$this->load->view('layouts/footer');
		}

	}


public function edit($id,$error=''){

	$this->load->view('layouts/header');
	$data['studentinfo_edit']= $this->AdmissionModel->editstudent($id);
	$data['error']=$error;
	$this->load->view('pages/edit',$data);
	$this->load->view('layouts/footer');

}

	public function check_phone($phone,$id) {

		$result = $this->AdmissionModel->check_unique_phone($id, $phone);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_phone', 'Mobile Number must be unique');
			$response = false;
		}
		return $response;
	}
	public function update($id)
	{
		$error='';
		$this->form_validation->set_rules('fname', 'First Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('fathername', 'Father Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('mname', 'Mother Name', 'required|regex_match[/^([a-z .])+$/i]');
		$this->form_validation->set_rules('sname', 'School Name', 'required|regex_match[/^([a-z ., ])+$/i]');
		$this->form_validation->set_rules('class', 'Class', 'required');
		$this->form_validation->set_rules('thana', 'Thana', 'required|regex_match[/^([a-z ])+$/i]');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('dob', 'Death of Birth', 'required');

		$this->form_validation->set_rules('phone', 'Mobile Number', "required|exact_length[11]|numeric|callback_check_phone[$id]");

		if ($this->form_validation->run()) {
			if(!empty($_FILES['userfile']['name'])){
				$url_filename =$_FILES['userfile']['name'];
				$new_name = time() . "" . str_replace(' ', '.', $url_filename);
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 5000;
				$config['max_width'] = 2024;
				$config['max_height'] = 2068;
				$config['file_name'] = $new_name;
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('userfile')) {
					$img = $this->upload->data('file_name');
					$data['userfile'] = $img;

				}else{
					$error =  $this->upload->display_errors();

				}
			}
			if(empty($error)){

				$data['fname'] = $this->input->post('fname');
				$data['lname'] = $this->input->post('lname');
				$data['fathername'] = $this->input->post('fathername');
				$data['mname'] = $this->input->post('mname');
				$data['sname'] = $this->input->post('sname');
				$data['class'] = $this->input->post('class');
				$data['section'] = $this->input->post('section');
				$data['post_office'] = $this->input->post('post_office');
				$data['thana'] = $this->input->post('thana');
				$data['village'] = $this->input->post('village');
				$data['district'] = $this->input->post('district');
				$data['gender'] = $this->input->post('gender');
				$data['phone'] = $this->input->post('phone');
				$data['pay_method'] = $this->input->post('pay_method');
				$data['dob'] = date('Y-m-d', strtotime($this->input->post('dob')));

				$update = $this->AdmissionModel->updatestudent($data, $id);

				if($update){

					$this->session->set_flashdata('status', 'Data Updated successful');
					redirect(base_url() . 'index.php/AdmissionController/index');
				}
			}


		}
		$this->edit($id,$error);
	}


	public function view($id){
		$this->load->view('layouts/header');
		$data['studentinfo_view']= $this->AdmissionModel->viewstudent($id);
		$this->load->view('pages/view',$data);
		$this->load->view('layouts/footer');

	}
public function delete($id){
	$this->AdmissionModel->deletestudent($id);
	$this->session->set_flashdata('status', 'Data Deleted successful');
	redirect(base_url().'index.php/AdmissionController/index');
}
}
?>
