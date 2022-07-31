<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pengguna</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pengguna</a></li>
					<li class="breadcrumb-item active">Edit Pengguna</li>
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
					<h3 class="card-title">Data Pengguna</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
                    <form action="<?php echo site_url('user/edit_pass/'.$user['id']) ?>" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="password">Password Lama</label>
                                <input type="password" class="form-control" name="passwordlama" id="passwordlama"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password Baru</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>