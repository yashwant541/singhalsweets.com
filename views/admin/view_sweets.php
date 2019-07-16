<?php include('view_header.php');
$i=1; ?>
<div class="container">
<br/>
<h1>All Sweets</h1>
 	<table class="table">
		<thead>
			<th>S.No.</th>
			<th>Sweet's Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Weight</th>
			<th>Description</th>
			<th>Image</th>
			<th colspan='2'>Action</th>
		</thead>
		<tbody>
			<?php if (count($data)): ?>
				<?php foreach ($data as $data): ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $data['sweet_name']; ?></td>
			<td><?php echo $data['category']; ?></td>
			<td><?php echo $data['price']; ?></td>
			<td><?php echo $data['weight']; ?></td>
			<td><?php echo $data['sweet_description']; ?></td>
			<td><img src="<?php echo base_url('uploads/sweets/'.$data['sweet_image']); ?>" style='height:80px; width:80px;' ></td>
			<td><?php echo  anchor("Admin/editSweet/{$data['sweet_id']}",'Edit',['class'=>'btn btn-primary']); ?></td>
			<td><?php echo  anchor("Admin/deleteSweet/{$data['sweet_id']}",'Delete',['class'=>'btn btn-danger']); ?></td>
		</tr>
				<?php $i++; endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="3">No Records Found.</td>
					</tr>
				<?php  endif ?>
		</tbody>
	</table>
</div>
<?php include('admin_footer.php'); ?>
