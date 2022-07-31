<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Peminjaman</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Peminjaman</li>
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
					<div class="float-right">
					<a href="<?php echo site_url('peminjaman/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
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
								<th>Kode Buku</th>
								<th>Judul</th>
								<th>Tgl Pinjam</th>
								<th>Lama</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($peminjaman as $p):
								$date1=$p['tgl_kembali'];
								$date2=$p['tgl_pinjam'];
								$datetime1 = new DateTime($date1);
								$datetime2 = new DateTime($date2);
								$difference = $datetime1->diff($datetime2);
								?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $p['nisn'] ?></td>
								<td><?php $siswa = $this->db->get_where('siswa',array('nisn'=>$p['nisn']))->row_array(); echo $siswa['nama'] ?></td>
								<td><?php echo $p['kode_buku'] ?></td>
								<td><?php $buku = $this->db->get_where('buku',array('kode_buku'=>$p['kode_buku']))->row_array(); echo $buku['judul'] ?></td>
								<td><?php echo date('d-m-Y', strtotime($p['tgl_pinjam'])) ?></td>
								<td><?php echo $difference->days; ?></td>
								<td align="center">
									<a href="<?php echo site_url('peminjaman/edit/'.$p['id_peminjaman']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('peminjaman/remove/'.$p['id_peminjaman']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><span
											class="far fa-trash-alt"></span></a>
									<a href="<?php echo site_url('laporan/faktur1/'.$p['id_peminjaman']); ?>"
										class="btn btn-default btn-xs" title="Laporan"><span class="fa fa-print"></span></a>
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