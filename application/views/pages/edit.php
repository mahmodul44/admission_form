<style>
	td{
		vertical-align:text-bottom;
		padding-bottom: 10px;
	}
	small{
		color: red;
	}
</style>
<div class="easyui-panel" title="Online Admission Form" style="width:100%;max-width:100%;">
	<div id="toolbar" class="datagrid-toolbar">
		<a href="<?php echo base_url().'index.php/admissionController/index';?>" class="easyui-linkbutton c6" iconCls="" plain="false" >Student List</a>

	</div>
	<div style="padding: 20px">
		<form id="ff" name="admissionform" action="<?php echo base_url('index.php/admissionController/update/'.$studentinfo_edit->id);?>" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label style="width: 200px;margin-right: 35px">First Name<span style="color: red">*</span></label></td>
					<td><input class="easyui-textbox" name="fname" value="<?php echo $studentinfo_edit->fname;?>" style="width:460px;" data-options="required:true">
						<small><?php echo form_error('fname');?></small>
					</td>
					<td><label style="width:200px;margin-right: 40px;padding-left: 10px">Last Name</label></td>
					<td><input class="easyui-textbox" name="lname" value="<?php echo $studentinfo_edit->lname;?>" style="width:460px;" >
						<small><?php echo form_error('lname');?></small>
					</td>
				</tr>
				<tr>
					<td><label style="width: 200px;margin-right: 10px">Father's Name<span style="color: red">*</span></label></td>
					<td> <input class="easyui-textbox" name="fathername" value="<?php echo $studentinfo_edit->fathername;?>" style="width:460px;margin-left: 30px" data-options="required:true">
						<small><?php echo form_error('fathername');?></small>
					</td>
					<td><label style="width: 200px;margin-right: 10px;padding-left: 10px">Mother's Name<span style="color: red">*</span></label></td>
					<td><input class="easyui-textbox" name="mname" value="<?php echo $studentinfo_edit->mname;?>" style="width:460px;margin-left: 30px" data-options="required:true">
						<small><?php echo form_error('mname');?></small>
					</td>
				</tr>
				<tr>
					<td><label style="width: 250px;margin-right: 20px">School Name<span style="color: red">*</span></label></td>
					<td><input class="easyui-textbox" name="sname" value="<?php echo $studentinfo_edit->sname;?>" style="width:460px;" data-options="required:true">
						<small><?php echo form_error('sname');?></small>
					</td>
					<td> <label style="width: 200px;margin-right:25px;padding-left: 10px">Class<span style="color: red">*</span></label></td>
					<td> <select class="easyui-combobox" name="class" value="" style="width:460px;">
							<option value="<?php echo $studentinfo_edit->class;?>"><?php echo $studentinfo_edit->class;?></option>
							<option value="Five">Five</option>
							<option value="Six">Six</option>
							<option value="Seven">Seven</option>
							<option value="Eight">Eight</option>
							<option value="Nine">Nine</option>
							<option value="Ten">Ten</option>
						</select>
						<small><?php echo form_error('class');?></small>
					</td>
				</tr>
				<tr>
					<td> <label style="width: 200px;margin-right:75px">Section</label></td>
					<td> <select class="easyui-combobox" name="section" value="<?php echo $studentinfo_edit->section;?>" style="width:460px;">
							<option value="1" <?php if($studentinfo_edit->section==1) {?> selected  <?php } ?>>A</option>
							<option value="2" <?php if($studentinfo_edit->section==2) {?> selected  <?php } ?>>B</option>
						</select>
						<small><?php echo form_error('section');?></small>
					</td>

					<td> <label style="width: 200px;margin-right:60px;padding-left: 10px">District<span style="color: red">*</span></label></td>
					<td> <select class="easyui-combobox" name="district" value="" style="width:460px">
							<option value="<?php echo $studentinfo_edit->district;?>"><?php echo $studentinfo_edit->district;?></option>
							<option value="Rangpur">Rangpur</option>
							<option value="Dinajpur">Dinajpur</option>
							<option value="Gaibandha">Gaibandha</option>
							<option value="Kurigram">Kurigram</option>
							<option value="Panchagar">Panchagar</option>
							<option value="Nilphamari">Nilphamari</option>
						</select>
						<small><?php echo form_error('district');?></small>
					</td>

				</tr>
				<tr>

					<td><label style="width:200px;margin-right:75px;">Thana<span style="color: red">*</span></label></td>
					<td> <input class="easyui-textbox" name="thana" value="<?php echo $studentinfo_edit->thana;?>" style="width:460px;margin-left: 45px" data-options="required:true">
						<small><?php echo form_error('thana');?></small>
					</td>
					<td><label style="width: 200px;margin-right:35px;padding-left: 10px">Post Office</label></td>
					<td><input class="easyui-textbox" name="post_office" value="<?php echo $studentinfo_edit->post_office;?>" style="width:460px;" >

					</td>
				</tr>
				<tr>
					<td> <label style="width:200px;margin-right: 25px;">Village Name</label></td>
					<td><input class="easyui-textbox" name="village" value="<?php echo $studentinfo_edit->village;?>" style="width:460px;">
						<small><?php echo form_error('village');?></small>
					</td>
					<td> <label style="width:200px;margin-right: 75px;padding-left: 10px">Phone<span style="color: red">*</span></label></td>
					<td><input class="easyui-textbox" name="phone" value="<?php echo $studentinfo_edit->phone;?>" style="width:460px" data-options="required:true">
						<small><?php echo form_error('phone');?></small>
					</td>
				</tr>
				<tr>
					<td><label style="width: 200px;margin-right: 30px">Pay Method</label></td>
					<td><select class="easyui-combobox" name="pay_method" value="<?php echo $studentinfo_edit->pay_method;?>" style="width:460px">
							<option value="1" <?php if($studentinfo_edit->pay_method==1) {?> selected  <?php } ?>>Bkash</option>
							<option value="2" <?php if($studentinfo_edit->pay_method==3) {?> selected  <?php } ?>>Cash</option>
						</select>
						<small><?php echo form_error('pay_method');?></small>
					</td>
					<td> <label style="width: 200px;padding-right: 25px;padding-left: 10px">Gender</label></td>
					<td> 	Male  <input class="easyui-radiobutton" name="gender" value="1" <?php if($studentinfo_edit->gender==1) {?> checked=checked   <?php } ?>>
						Female  <input class="easyui-radiobutton" name="gender" value="2" <?php if($studentinfo_edit->gender==2) {?> checked=checked   <?php } ?>>

						<small><?php echo form_error('gender');?></small>
					</td>
				</tr>
				<tr>
					<td><label style="width: 200px;margin-right: 10px">Death Of Birth<span style="color: red">*</span> </label></td>
					<td> <input name="dob" class="easyui-datebox"  value="<?php echo date('m/d/Y',strtotime($studentinfo_edit->dob));?>" style="width: 460px">
						<small><?php echo form_error('dob');?></small>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><img width="120px" height="120px" src="<?=  base_url('uploads/'.$studentinfo_edit->userfile);?>">
					</td>
				</tr>
				<tr>
					<td>change image</td>
					<td> <input  class="easyui-filebox" name="userfile" value="<?php echo $studentinfo_edit->userfile ;?>" style="width:460px" accept="image/png, image/gif, image/jpeg, image/jpg" >
						<small><?php if(isset($error)) {echo $error;} ?></small>

					</td>
				</tr>
			</table>
			<div style="text-align:center;padding:5px 0">
				<button type="submit" class="easyui-linkbutton" style="width:80px">Update</button>

			</div>
		</form>

	</div>
</div>


