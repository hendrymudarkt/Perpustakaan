<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Siswa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Siswa</li>
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
					<div class="float-right">
					<a href="<?php echo site_url('siswa/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					<a href="<?php echo site_url('laporan/siswa') ?>" class="btn btn-success btn-sm"
						title="Tambah" target="_blank"><i class="fa fa-print"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>NISN</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Tempat/Tgl Lahir</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>No. Telp</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($siswa as $s): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $s['nisn'] ?></td>
								<td><?php echo $s['nama'] ?></td>
								<td><?php echo $s['jenis_kelamin'] ?></td>
								<td><?php echo $s['tempat_lahir'].", ".$s['tgl_lahir'] ?></td>
								<td><?php echo $s['agama'] ?></td>
								<td><?php echo $s['alamat'] ?></td>
								<td><?php echo $s['no_telp'] ?></td>
								<td><img src="<?php echo site_url('foto/'.$s['foto']) ?>" alt="" class="img-thumbnail"></td>
								<td align="center">
									<a href="<?php echo site_url('siswa/edit/'.$s['nisn']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('siswa/remove/'.$s['nisn']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><span
											class="far fa-trash-alt"></span></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>