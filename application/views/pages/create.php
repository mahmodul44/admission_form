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
        <a href="index" class="easyui-linkbutton c6" iconCls="" plain="false" >Student List</a>

    </div>
	<div style="padding: 20px">
    <form id="ff" name="admissionform" action="<?php echo base_url('index.php/admissionController/create');?>" method="post" enctype="multipart/form-data">
        <table>
			<tr>
				<td><label>First Name<span style="color: red">*</span></label></td>
				<td><input class="easyui-textbox" name="fname" value="<?=set_value('fname')?>" style="width:460px;" data-options="required:true">
					<small><?php echo form_error('fname');?></small>
				</td>
				<td><label style="padding-left: 10px">Last Name</label></td>
				<td><input class="easyui-textbox" name="lname" value="<?=set_value('lname')?>" style="width:460px;" >
					<small><?php echo form_error('lname');?></small>
				</td>
			</tr>
			<tr>
				<td><label style="">Father's Name<span style="color: red">*</span></label></td>
				<td> <input class="easyui-textbox" name="fathername" value="<?=set_value('fathername')?>" style="width:460px;margin-left: 30px" data-options="required:true">
					<small><?php echo form_error('fathername');?></small>
				</td>
				<td><label style="width: 200px;margin-right: 10px;padding-left: 10px">Mother's Name<span style="color: red">*</span></label></td>
				<td><input class="easyui-textbox" name="mname" value="<?=set_value('mname')?>" style="width:460px;margin-left: 30px" data-options="required:true">
					<small><?php echo form_error('mname');?></small>
				</td>
			</tr>
			<tr>
				<td><label style="width: 250px;margin-right: 20px">School Name<span style="color: red">*</span></label></td>
				<td><input class="easyui-textbox" name="sname" value="<?=set_value('sname')?>" style="width:460px;" data-options="required:true">
					<small><?php echo form_error('sname');?></small>
				</td>
				<td> <label style="width:200px;margin-right: 25px;padding-left: 10px">Class<span style="color: red">*</span></label></td>
				<td><select class="easyui-combobox" name="class" value="<?=set_value('class')?>" style="width:460px;" data-options="required:true">
						<option value="Five">Five</option>
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Nine" selected>Nine</option>
						<option value="Ten">Ten</option>
					</select>
					<small><?php echo form_error('class');?></small></td>
			</tr>
			<tr>
				<td> <label style="width: 200px;margin-right:75px">Section</label></td>
				<td> <select class="easyui-combobox" name="section" value="<?=set_value('section')?>" style="width:460px;">
						<option value="1">A</option>
						<option value="2">B</option>
					</select>
					<small><?php echo form_error('section');?></small>
				</td>
				<td> <label style="width: 200px;margin-right:60px;padding-left: 10px">District<span style="color: red">*</span></label></td>
				<td> <select class="easyui-combobox" name="district" value="<?=set_value('district')?>" style="width:460px">
						<option value="Panchagar">Panchagar</option>
						<option value="Dinajpur">Dinajpur</option>
						<option value="Gaibandha">Gaibandha</option>
						<option value="Kurigram">Kurigram</option>
						<option value="Rangpur" selected="selected">Rangpur</option>
						<option value="Nilphamari">Nilphamari</option>
					</select>
					<small><?php echo form_error('district');?></small>
				</td>

			</tr>
			<tr>
				<td><label style="width:200px;margin-right:75px;">Thana<span style="color: red">*</span></label></td>
				<td> <input class="easyui-textbox" name="thana" value="<?=set_value('thana')?>" style="width:460px;margin-left: 45px" data-options="required:true">
					<small><?php echo form_error('thana');?></small>
				</td>
				<td><label style="width: 200px;margin-right:35px;padding-left: 10px">Post Office</label></td>
				<td><input class="easyui-textbox" name="post_office" value="<?=set_value('post_office')?>" style="width:460px;" >

				</td>

			</tr>
			<tr>
				<td> <label style="width:200px;margin-right: 25px;">Village Name</label></td>
				<td><input class="easyui-textbox" name="village" value="<?=set_value('village')?>" style="width:460px;" >
					<small><?php echo form_error('village');?></small>
				</td>
				<td> <label style="width:200px;margin-right: 75px;padding-left: 10px">Phone<span style="color: red">*</span> </label></td>
				<td><input class="easyui-textbox" name="phone" value="<?=set_value('phone')?>" style="width:460px" data-options="required:true">
					<small><?php echo form_error('phone');?></small>
				</td>
			</tr>
			<tr>
				<td><label style="width: 200px;margin-right: 30px">Pay Method</label></td>
				<td><select class="easyui-combobox" name="pay_method" value="<?=set_value('pay_method')?>" style="width:460px">
						<option value="1" selected="selected">Bkash</option>
						<option value="2">Cash</option>
					</select>
					<small><?php echo form_error('pay_method');?></small>
				</td>
				<td> <label style="width: 200px;padding-right: 25px;padding-left: 10px">Gender</label></td>
				<td> Male  <input class="easyui-radiobutton" name="gender" value="1" checked>
					Female  <input class="easyui-radiobutton" name="gender" value="2" >

				</td>
			</tr>
			<tr>
				<td><label style="width: 200px;margin-right: 10px">Death Of Birth<span style="color: red">*</span></label></td>
				<td> <input id="dd" type="text" name="dob" class="easyui-datebox" value="<?=set_value('dob')?>" style="width: 460px" data-options="required:true">
					<small><?php echo form_error('dob');?></small>
				</td>
				<td><label style="width: 200px;margin-right: 91px;padding-left: 10px">File<span style="color: red">*</span></label></td>
				<td> <input class="easyui-filebox" name="userfile" value="<?=set_value('userfile')?>" style="width:460px" data-options="required:true" accept="image/png, image/gif, image/jpeg, image/jpg">
					<small><?php if(isset($error)) {echo $error;} ?></small>

				</td>
			</tr>
		</table>
    <div style="text-align:center;padding:5px 0">
        <button type="submit" class="easyui-linkbutton" style="width:80px">Submit</button>
		<button type="reset" class="easyui-linkbutton" style="width:80px">Clear</button>
    </div>
	</form>
	</div>
</div>


