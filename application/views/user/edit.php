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
                    <form action="<?php echo site_url('user/edit/'.$user['id']) ?>" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" value="<?php echo $user['nik'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $user['nama'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="username">Nama Pengguna</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nama Pengguna" value="<?php echo $user['username'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" value="<?php echo $this->encryption->decrypt($user['password']) ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="departemen">Departemen</label>
                                <input type="text" class="form-control" name="departemen" id="departemen" placeholder="Departemen" value="<?php echo $user['departemen'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="level">Autentikasi</label>
                                <select name="level" class="form-control" id="level">
                                    <option value="<?php echo $user['level'] ?>"><?php echo $user['level'] ?></option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Pengguna</option>
                                </select>
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