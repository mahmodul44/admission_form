
<div class="easyui-panel" title="Online Admission Form" style="width:100%;max-width:100%;padding:10px 10px;">
	<div id="toolbar" class="datagrid-toolbar">
		<a href="<?php echo base_url().'index.php/AdmissionController/index'; ?>" class="easyui-linkbutton" iconCls="" plain="true" >User List</a>

	</div>
	<form id="ff" name="admissionform" action="<?php echo base_url('index.php/admissionController/update/'.$studentinfo_edit->id);?>" method="post" enctype="multipart/form-data">
		<div style="margin-bottom:20px;margin-top: 20px">
			<label style="width: 200px;margin-right: 35px">First Name</label>
			<input class="easyui-textbox" name="fname" value="<?php echo $studentinfo_edit->fname;?>" style="width:460px;" data-options="required:true">

			<label style="width:200px;margin-right: 40px;padding-left: 10px">Last Name</label>
			<input class="easyui-textbox" name="lname" value="<?php echo $studentinfo_edit->lname;?>" style="width:460px;" data-options="required:true">
			<small><?php echo form_error('fname');?><?php echo form_error('lname');?></small>
		</div>
		<div style="margin-bottom:20px">

			<label style="width: 200px;margin-right: 10px">Father's Name</label>
			<input class="easyui-textbox" name="fathername" value="<?php echo $studentinfo_edit->fathername;?>" style="width:460px;margin-left: 30px" data-options="required:true">
			<label style="width: 200px;margin-right: 10px;padding-left: 10px">Mother's Name</label>
			<input class="easyui-textbox" name="mname" value="<?php echo $studentinfo_edit->mname;?>" style="width:460px;margin-left: 30px" data-options="required:true">
			<?php echo form_error('fathername');?><?php echo form_error('mname');?>
		</div>
		<div style="margin-bottom:20px">
			<label style="width: 250px;margin-right: 20px">School Name</label>
			<input class="easyui-textbox" name="sname" value="<?php echo $studentinfo_edit->sname;?>" style="width:1055px;" data-options="required:true">
			<?php echo form_error('sname');?>
		</div>
		<div style="margin-bottom:20px">
			<label style="width: 200px;margin-right:75px">Class</label>
			<select class="easyui-combobox" name="class" value="<?php echo $studentinfo_edit->class;?>" style="width:460px;">
				<option value="five">Five</option>
				<option value="six">Six</option>
				<option value="seven">Seven</option>
				<option value="eight">Eight</option>
				<option value="nine">Nine</option>
				<option value="ten">Ten</option>
			</select>
			<label style="width:200px;margin-right: 25px;padding-left: 10px">Village Name</label>
			<input class="easyui-textbox" name="village" value="<?php echo $studentinfo_edit->village;?>" style="width:460px;"  data-options="required:true">
		</div>
		<div style="margin-bottom:20px">
			<label style="width: 200px;margin-right:35px">Post Office</label>
			<input class="easyui-textbox" name="post_office" value="<?php echo $studentinfo_edit->post_office;?>" style="width:460px;" data-options="required:true">
			<label style="width:200px;margin-right:75px;padding-left: 10px">Thana</label>
			<input class="easyui-textbox" name="thana" value="<?php echo $studentinfo_edit->thana;?>" style="width:460px;margin-left: 45px" data-options="required:true">
		</div>
		<div style="margin-bottom:20px">
			<label style="width: 200px;margin-right:60px">District</label>
			<select class="easyui-combobox" name="district" value="<?php echo $studentinfo_edit->district;?>" style="width:460px">
				<option value="five">Rangpur</option>
				<option value="six">Dinajpur</option>
				<option value="seven">Gaibandha</option>
				<option value="eight">Kurigram</option>
				<option value="nine">Panchagar</option>
				<option value="ten">Nilphamari</option>
			</select>
			<label style="width:200px;margin-right: 75px;padding-left: 10px">Phone </label>
			<input class="easyui-textbox" name="phone" value="<?php echo $studentinfo_edit->phone;?>" style="width:460px" data-options="required:true">
		</div>


		<div style="margin-bottom:20px">
			<label style="width: 200px;margin-right: 30px">Pay Method</label>
			<select class="easyui-combobox" name="pay_method" value="<?php echo $studentinfo_edit->pay_method;?>" style="width:460px">
				<option value="Bkash" selected="selected">Bkash</option>
				<option value="Rocket">Rocket</option>
			</select>
			<label style="width: 200px;padding-right:65px;padding-left: 10px">Gender</label>
			Male  <input class="easyui-radiobutton" name="gender" value="1" <?php if($studentinfo_edit->gender==1) {?> checked=checked   <?php } ?>>
			Female  <input class="easyui-radiobutton" name="gender" value="2" <?php if($studentinfo_edit->gender==2) {?> checked=checked   <?php } ?>>


		</div>
		<div style="margin-bottom:20px">
			<label style="width: 200px;margin-right: 10px">Death Of Birth </label>
			<input id="dd" type="text" name="dob" value="<?php echo $studentinfo_edit->dob;?>" class="easyui-datebox" style="width: 460px" >

		</div>
<div>
	<label style="width: 200px;margin-right: 91px;padding-left: 10px">File</label>
	<img width="120px" height="120px" src="<?=  base_url('uploads/'.$studentinfo_edit->userfile);?>">

	<input class="easyui-filebox" name="userfile" value="<?=set_value('userfile')?>" style="width:460px">
</div>

		<div style="text-align:center;padding:5px 0">
			<button type="submit" class="easyui-linkbutton" style="width:80px">Update</button>

		</div>
	</form>
</div>
public function update($id)
{

$this->form_validation->set_rules('fname', 'First Name', 'required|regex_match[/^([a-z ])+$/i]');
$this->form_validation->set_rules('fathername', 'Father Name', 'required|regex_match[/^([a-z ])+$/i]');
$this->form_validation->set_rules('mname', 'Mother Name', 'required|regex_match[/^([a-z ])+$/i]');
$this->form_validation->set_rules('sname', 'School Name', 'required|regex_match[/^([a-z ., ])+$/i]');
$this->form_validation->set_rules('class', 'Class', 'required');
$this->form_validation->set_rules('thana', 'Thana', 'required|regex_match[/^([a-z ])+$/i]');
$this->form_validation->set_rules('district', 'District', 'required');
$this->form_validation->set_rules('dob', 'Death of Birth', 'required');

$this->form_validation->set_rules('phone', 'Mobile Number', "required|exact_length[11]|numeric|callback_check_phone[$id]");

$url_filename = $_FILES['userfile']['name'];
$new_name = time() . "" . str_replace(' ', '.', $url_filename);
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = 5000;
$config['max_width'] = 2024;
$config['max_height'] = 2068;
$config['file_name'] = $new_name;

$this->load->library('upload', $config);


if ($this->form_validation->run()) {


if (!$this->upload->do_upload('userfile')) {

$errormeg = array('error' => $this->upload->display_errors());
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
$this->load->view('layouts/header');
$this->load->view('pages/edit',$errormeg);
$this->load->view('layouts/footer');
} else {

$img = $this->upload->data('file_name');
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
$data['userfile'] = $img;

}
$this->AdmissionModel->updatestudent($data, $id);
$this->session->set_flashdata('status', 'Data Updated successful');
redirect(base_url() . 'index.php/AdmissionController/index');

}else {
$this->edit($id);

}



}

