<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Penerbit</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Penerbit</a></li>
					<li class="breadcrumb-item active">Edit Penerbit</li>
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
					<h3 class="card-title">Data Penerbit</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php echo form_open_multipart('penerbit/edit/'.$penerbit['isbn']); ?>
                    <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?php echo $penerbit['nama'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="tahun">Tahun</label>
                                <input type="text" class="form-control" name="tahun" id="tahun"
                                    placeholder="tahun" value="<?php echo $penerbit['tahun'] ?>">
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