<!-- start: REGISTER BOX -->
<div class="box-register">
	<h3>Sign Up</h3>
	<p>
		Enter your personal details below:
	</p>
	<form class="form-register" method="POST" action="<?php echo base_url('register/proses');?>">
		<div class="errorHandler alert alert-danger no-display">
			<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
		</div>
		<fieldset>
			<div class="form-group">
				<input type="text" class="form-control" name="nama_lengkap" placeholder="Full Name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Full Name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="alamat" placeholder="Address">
			</div>
			<div class="form-group">
				<div>
					<label class="radio-inline">
						<input type="radio" class="grey" value="L" name="jenis_kelamin">
						LAKI - LAKI
					</label>
					<label class="radio-inline">
						<input type="radio" class="grey" value="P" name="jenis_kelamin">
						PEREMPUAN
					</label>
				</div>
			</div>
			<p>
				Isikan detail akun :
			</p>
			<div class="form-group">
				<span class="input-icon">
					<input type="email" class="form-control" name="email" placeholder="Email">
					<i class="fa fa-envelope"></i> </span>
			</div>
			<div class="form-group">
				<span class="input-icon">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<i class="fa fa-lock"></i> </span>
			</div>
			<div class="form-group">
				<span class="input-icon">
					<input type="password" class="form-control" name="password_again" placeholder="Password Again">
					<i class="fa fa-lock"></i> </span>
			</div>
			<div class="form-actions">
				<a class="btn btn-light-grey go-back">
					<i class="fa fa-circle-arrow-left"></i> Back
				</a>
				<button type="submit" class="btn btn-bricky pull-right">
					Submit <i class="fa fa-arrow-circle-right"></i>
				</button>
			</div>
		</fieldset>
	</form>
</div>
<!-- end: REGISTER BOX -->
