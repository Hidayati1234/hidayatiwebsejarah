<div class="content-wrapper">
	<section class="content">

		<?php foreach ($data as $registrasi) { ?>

		<form action="<?php echo base_url().'C_admin/update'; ?>" method="post">
			<div class="container">

			<div class="form-group">
				<label>NAME</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $registrasi->id ?>">
				<input type="text" name="name" class="form-control" value="<?php echo $registrasi->name ?>">
					
			</div>
			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" value="<?php echo $registrasi->email ?>">		
			</div>
			<div class="form-group">
				<label>IMAGE</label>
				<input type="text" name="image" class="form-control" value="<?php echo $registrasi->image ?>">		
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="text" name="password" class="form-control" value="<?php echo $registrasi->password ?>">		
			</div>
			<div class="form-group">
				<label>ROLE_ID</label>
				<input type="text" name="role_id" class="form-control" value="<?php echo $registrasi->role_id ?>">		
			</div>
			<div class="form-group">
				<label>IS_ACTIVE</label>
				<input type="text" name="is_active" class="form-control" value="<?php echo $registrasi->is_active ?>">		
			</div>
			
			</div>


			<button type="riset" class="btn btn-danger">RISET</button>

			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

	<?php }?>
		
	</section>
	
</div>