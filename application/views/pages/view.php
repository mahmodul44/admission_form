<style>
table{
	width: 1000px;

}
	td{
		vertical-align:text-bottom;
		padding-bottom: 5px;
	}
	td label{
		font-weight: bold;
		color: black;

	}
	small{
		color: red;
	}
</style>
<div class="easyui-panel" title="Online Admission Form" style="width:100%;max-width:100%;">
	<div id="toolbar" class="datagrid-toolbar">
		<a href="<?php echo base_url().'index.php/admissionController/index';?>" class="easyui-linkbutton c1" iconCls="" plain="false" >Student List</a>
	</div>
	<div style="padding: 10px;">

		<table>
			<img style="float: right;" width="120px" height="120px" src="<?= base_url('uploads/'.$studentinfo_view->userfile);?>">

			<tr>

				<td > <label>First Name*</label></td>
				<td><?php echo $studentinfo_view->fname;?></td>
				<td> <label>Last Name</label></td>
				<td><?php echo $studentinfo_view->lname;?></td>
			</tr>
			<tr>
				<td><label>Father's Name*</label></td>
				<td><?php echo $studentinfo_view->fathername;?></td>
				<td><label>Mother's Name*</label></td>
				<td><?php echo $studentinfo_view->mname;?></td>
			</tr>
			<tr>
				<td><label>School Name*</label></td>
				<td><?php echo $studentinfo_view->sname;?></td>
				<td> <label>Class*</label></td>
				<td> <?php echo $studentinfo_view->class;?></td>
			</tr>
			<tr>
				<td> <label>Section</label></td>
				<td> <?php  echo $studentinfo_view->section==1?'A':'B';?></td>
				<td> <label>District*</label></td>
				<td><?php echo $studentinfo_view->district;?></td>

			</tr>
			<tr>
				<td><label>Thana*</label></td>
				<td><?php echo $studentinfo_view->thana;?></td>
				<td><label>Post Office</label></td>
				<td><?php echo $studentinfo_view->post_office;?></td>

			</tr>
			<tr>
				<td> <label>Village Name</label></td>
				<td><?php echo $studentinfo_view->village;?></td>
				<td> <label>Phone*</label></td>
				<td><?php echo $studentinfo_view->phone;?></td>
			</tr>
			<tr>
				<td><label>Pay Method</label></td>
				<td><?php  echo $studentinfo_view->pay_method==1?'Bkash':'Cash';?>
					<small><?php echo form_error('pay_method');?></small>
				</td>
				<td> <label>Gender*</label></td>
				<td> 	Male  <input class="easyui-radiobutton" name="gender" readonly value="1" <?php if($studentinfo_view->gender==1) {?> checked=checked   <?php } ?>>
					Female  <input class="easyui-radiobutton" name="gender" readonly value="2" <?php if($studentinfo_view->gender==2) {?> checked=checked   <?php } ?>>

					<small><?php echo form_error('gender');?></small>
				</td>
			</tr>
			<tr>
				<td><label>Death Of Birth </label></td>
				<td><?php echo $studentinfo_view->dob;?> </td>
			</tr>


		</table>


	</div>
</div>


