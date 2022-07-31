<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Siswa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Siswa</a></li>
					<li class="breadcrumb-item active">Edit Siswa</li>
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
					<h3 class="card-title">Data Siswa</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('siswa/edit/'.$siswa['nisn']); ?>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" name="nisn" placeholder="NISN" value="<?php echo $siswa['nisn'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $siswa['nama'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
									<option value="<?php echo $siswa['jenis_kelamin'] ?>"><?php echo $siswa['jenis_kelamin'] ?></option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
                            </div>
                            <div class="col-md-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                    placeholder="Tempat Lahir" value="<?php echo $siswa['tempat_lahir'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $siswa['tgl_lahir'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="agama">Agama</label>
                                <select name="agama" class="form-control" id="agama">
                                    <option value="<?php echo $siswa['agama'] ?>"><?php echo $siswa['agama'] ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
							</div>
							<div class="col-md-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>">
                            </div>
							<div class="col-md-6">
                                <label for="no_telp">No. Telp</label>
                                <input type="text" class="form-control" name="no_telp" id="no_telp"
                                    placeholder="No. Telp" value="<?php echo $siswa['no_telp'] ?>">
                            </div>
							<div class="col-md-6">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo site_url('foto/'.$siswa['foto']) ?>" alt="" class="img-thumbnail" height="200px" width="200px">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="<?php echo $this->encryption->decrypt($siswa['password']) ?>">
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