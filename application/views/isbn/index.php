<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>ISBN</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">ISBN</li>
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
					<h3 class="card-title">Data ISBN</h3>
					<div class="float-right">
					<a href="<?php echo site_url('isbn/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					<a href="<?php echo site_url('laporan/isbn') ?>" class="btn btn-success btn-sm"
						title="Cetak" target="_blank"><i class="fa fa-print"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>ISBN</th>
								<th>Nama</th>
								<th>Tahun</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($isbn as $p): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $p['isbn'] ?></td>
								<td><?php echo $p['nama'] ?></td>
								<td><?php echo $p['tahun'] ?></td>
								<td align="center">
									<a href="<?php echo site_url('isbn/edit/'.$p['isbn']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('isbn/remove/'.$p['isbn']); ?>"
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