<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Buku</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Buku</a></li>
					<li class="breadcrumb-item active">Edit Buku</li>
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
					<h3 class="card-title">Data Buku</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('buku/edit/'.$buku['kode_buku']); ?>
                    <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="kode_buku">Kode Buku</label>
                                <input type="text" class="form-control" name="kode_buku" id="kode_buku" value="<?php echo $buku['kode_buku'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $buku['judul'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" id="pengarang"
                                    placeholder="Pengarang" value="<?php echo $buku['pengarang'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="isbn">ISBN</label>
                                <select name="isbn" class="form-control">
                                    <option value="<?php echo $buku['isbn'] ?>"><?php echo $buku['isbn'] ?></option>
                                    <?php
									$qry = $this->db->query("SELECT * FROM isbn WHERE isbn NOT IN (SELECT isbn FROM buku)")->result_array();
									foreach ($qry as $p) {
										$siswa = $this->db->get_where('isbn',array('isbn'=>$p['isbn']))->row_array(); ?>
									<option value="<?php echo $p['isbn'] ?>"><?php echo $p['isbn'] ?></option>
									<?php } ?>
								</select>
                            </div>
                            <div class="col-md-3">
                                <label for="rak">Rak</label>
                                <input type="text" class="form-control" name="rak" id="rak" placeholder="Rak" value="<?php echo $buku['rak'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $buku['stok'] ?>">
                            </div>
							<div class="col-md-6">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan"
                                    placeholder="Keterangan" value="<?php echo $buku['keterangan'] ?>">
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