<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Buku</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Buku</li>
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
					<div class="float-right">
					<a href="<?php echo site_url('buku/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Kode Buku</th>
								<th>Judul</th>
								<th>Pengarang</th>
								<th>ISBN</th>
								<th>Rak</th>
								<th>Stok</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($buku as $b): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $b['kode_buku'] ?></td>
								<td><?php echo $b['judul'] ?></td>
								<td><?php echo $b['pengarang'] ?></td>
								<td><?php echo $b['isbn'] ?></td>
								<td><?php echo $b['rak'] ?></td>
								<td><?php echo $b['stok'] ?></td>
								<td><?php echo $b['keterangan'] ?></td>
								<td align="center">
									<a href="<?php echo site_url('buku/edit/'.$b['kode_buku']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('buku/remove/'.$b['kode_buku']); ?>"
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