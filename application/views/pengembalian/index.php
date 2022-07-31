<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pengembalian</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Pengembalian</li>
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
					<div class="float-right">
					<a href="<?php echo site_url('pengembalian/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>(NISN) Nama</th>
								<th>Judul</th>
								<th>Tgl Pinjam (Tgl Pengembalian)</th>
								<th>Tgl Dikembalikan</th>
								<th>Lama</th>
								<th>Denda</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($pengembalian as $p):
								$pinjam = $this->db->get_where('peminjaman',array('id_peminjaman'=>$p['id_peminjaman']))->row_array();
								$siswa = $this->db->get_where('siswa',array('nisn'=>$pinjam['nisn']))->row_array();
								$buku = $this->db->get_where('buku',array('kode_buku'=>$pinjam['kode_buku']))->row_array(); ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo "(".$siswa['nisn'].")".$siswa['nama'] ?></td>
								<td><?php echo $buku['judul'] ?></td>
								<td><?php echo date('d-m-Y', strtotime($pinjam['tgl_pinjam']))." (".date('d-m-Y', strtotime('+7 days', strtotime($pinjam['tgl_pinjam']))).")" ?></td>
								<td><?php echo date('d-m-Y', strtotime($p['tgl_pengembalian'])) ?></td>
								<td><?php echo $p['lama'] ?></td>
								<td><?php echo $p['denda'] ?></td>
								<td align="center">
									<a href="<?php echo site_url('pengembalian/edit/'.$p['id_pengembalian']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('pengembalian/remove/'.$p['id_pengembalian']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><span
											class="far fa-trash-alt"></span></a>
									<a href="<?php echo site_url('laporan/faktur2/'.$p['id_pengembalian']); ?>"
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