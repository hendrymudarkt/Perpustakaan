<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Booking</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Booking</a></li>
					<li class="breadcrumb-item active">Tambah Booking</li>
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
					<h3 class="card-title">Data Booking</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('booking/add'); ?>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="nisn">NISN</label>
								<?php
								if ($this->session->userdata('sebagai') == 'siswa') { ?>
									<input type="text" name="nisn" class="form-control" readonly value="<?php echo $this->session->userdata('nisn')?>">
								<?php }else{
								?>
                                <select name="nisn" id="nisn" class="form-control">
                                    <option value="NULL">...</option>
                                    <?php foreach ($siswa as $n): ?>
                                        <option value="<?php echo $n['nisn']; ?>"><?php echo $n['nisn']." => ".$n['nama']; ?></option>
                                    <?php endforeach; ?>
								</select>
							<?php }
								?>
                            </div>
                            <div class="col-md-6">
                                <label for="kode_buku">Buku</label>
                                <select name="kode_buku" id="kode" class="form-control">
                                    <option value="NULL">...</option>
                                    <?php foreach ($buku as $k): ?>
                                        <option value="<?php echo $k['kode_buku']; ?>"><?php echo $k['kode_buku']." => ".$k['judul']; ?></option>
                                    <?php endforeach; ?>
								</select>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pinjam">Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam">
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