<?php if($this->session->flashdata('status')): ?>
	<div style="color: #ffff;background-color: #4cae4c;text-align: center;font-size: 16px;padding:8px">
		<?php echo $this->session->flashdata('status'); ?>
	</div>
<?php endif; ?>
<table id="dg" title="Online Admission List" class="easyui-datagrid" style="width:100%;height:460px"
       url="index"
       toolbar="#toolbar" pagination="true"
       rownumbers="false" fitColumns="true" singleSelect="true">
	<div id="toolbar">
		<a href="<?php echo base_url().'index.php/admissionController/create' ?>" class="easyui-linkbutton c4" iconCls="icon-add" plain="false" >Add New</a>
	</div>
	<thead>
    <tr>
		<th field="id" width="5">SI</th>
		<th field="firstname" width="15">First Name</th>
        <th field="lastname" width="10">Last Name</th>
		<th field="fathername" width="15">Father name</th>
        <th field="phone" width="10">Phone</th>
		<th field="class" width="10">class</th>
		<th field="section" width="5">Section</th>
		<th field="dob" width="10">Death of Birth</th>
		<th field="action" width="20">Action</th>
    </tr>
    </thead>
	<tbody>
	<?php if(!empty($admissionlist)){
	foreach ($admissionlist as $key=>$admission) {?>
	<tr>
		<td><?php  echo $key+1;?></td>
		<td><?php  echo $admission->fname;?></td>
		<td><?php  echo $admission->lname;?></td>
		<td><?php  echo $admission->fathername;?></td>
		<td><?php  echo $admission->phone;?></td>
		<td><?php  echo $admission->class;?></td>
		<td><?php  echo $admission->section==1?'A':'B';?> </td>
		<td><?php  echo $admission->dob;?></td>
		<td><a class="easyui-linkbutton" iconCls="icon-edit" plain="false" href="<?php echo base_url('').'index.php/AdmissionController/edit/',$admission->id?>">Edit</a>
			<a class="easyui-linkbutton" iconCls="icon" plain="false" href="<?php echo base_url('').'index.php/AdmissionController/view/',$admission->id?>">View</a>
			<a class="easyui-linkbutton" iconCls="icon-remove" plain="false" onclick="return confirm('Are you sure to delete this row !')" href="<?php echo base_url('').'index.php/AdmissionController/delete/',$admission->id?>">Delete</a> </td>
	</tr>
	<?php } } ?>
	</tbody>
</table>




