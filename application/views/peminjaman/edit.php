<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Peminjaman</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Peminjaman</a></li>
					<li class="breadcrumb-item active">Edit Peminjaman</li>
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
					<h3 class="card-title">Data Peminjaman</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('peminjaman/edit/'.$peminjaman['id_peminjaman']); ?>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="nisn">NISN</label>
                                <select name="nisn" id="nisn" class="form-control">
                                    <option value="<?php echo $peminjaman['nisn'] ?>"><?php echo $peminjaman['nisn'] ?></option>
                                    <?php foreach ($siswa as $n): ?>
                                        <option value="<?php echo $n['nisn']; ?>"><?php echo $n['nisn']." => ".$n['nama']; ?></option>
                                    <?php endforeach; ?>
								</select>
                            </div>
                            <div class="col-md-6">
                                <label for="kode_buku">Buku</label>
                                <select name="kode_buku" id="kode" class="form-control">
                                    <option value="<?php echo $peminjaman['kode_buku'] ?>"><?php echo $peminjaman['kode_buku'] ?></option>
                                    <?php foreach ($buku as $k): ?>
                                        <option value="<?php echo $k['kode_buku']; ?>"><?php echo $k['kode_buku']." => ".$k['judul']; ?></option>
                                    <?php endforeach; ?>
								</select>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pinjam">Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $peminjaman['tgl_pinjam'] ?>">
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