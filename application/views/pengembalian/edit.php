<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pengembalian</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pengembalian</a></li>
					<li class="breadcrumb-item active">Edit Pengembalian</li>
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
					<h3 class="card-title">Data Pengembalian</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('pengembalian/edit/'.$pengembalian['id_pengembalian']); ?>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="id_peminjaman">Peminjaman</label>
                                <select name="id_peminjaman" id="id_peminjaman" class="form-control">
                                    <option value="<?php echo $pengembalian['id_peminjaman'] ?>"><?php echo $pengembalian['id_peminjaman'] ?></option>
                                    <?php foreach ($peminjaman as $n):
										$siswa = $this->db->get_where('siswa',array('nisn'=>$n['nisn']))->row_array();
										$buku = $this->db->get_where('buku',array('kode_buku'=>$n['kode_buku']))->row_array(); ?>
                                        <option value="<?php echo $n['id_peminjaman']; ?>"><?php echo $n['id_peminjaman']." => ".$siswa['nama']." => ".$buku['judul']; ?></option>
                                    <?php endforeach; ?>
								</select>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" value="<?php echo $pengembalian['tgl_pengembalian'] ?>">
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