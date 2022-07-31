<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>ISBN</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">ISBN</a></li>
					<li class="breadcrumb-item active">Edit ISBN</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data ISBN</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('isbn/edit/'.$isbn['isbn']); ?>
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="isbn">ISBN</label>
							<input type="text" class="form-control" name="isbn" id="isbn"
								value="<?php echo $isbn['isbn'] ?>" readonly>
						</div>
						<div class="col-md-6">
							<label for="naa">Nama</label>
							<select name="nama" id="nama" class="form-control">
								<option value="<?php echo $isbn['nama'] ?>"><?php echo $isbn['nama'] ?></option>
								<?php
									foreach($penerbit as $p):
									?>
								<option value="<?php echo $p['nama'] ?>"><?php echo $p['nama'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="modal-footer bg-whitesmoke br">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>