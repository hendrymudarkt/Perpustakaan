<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Booking</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Booking</li>
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
					<div class="float-right">
						<a href="<?php echo site_url('booking/add') ?>" class="btn btn-primary btn-sm" title="Tambah"><i
								class="far fa-plus-square"></i></a>
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
								<th>Tgl Booking</th>
								<th>Tgl Pinjam</th>
								<?php
									if ($this->session->userdata('sebagai') == "siswa") {
										echo "";
									}else{
										echo "<th>Aksi</th>";
									}
									?>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($booking as $p): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $p['nisn'] ?></td>
								<td><?php $siswa = $this->db->get_where('siswa',array('nisn'=>$p['nisn']))->row_array(); echo $siswa['nama'] ?>
								</td>
								<td><?php echo $p['kode_buku'] ?></td>
								<td><?php $buku = $this->db->get_where('buku',array('kode_buku'=>$p['kode_buku']))->row_array(); echo $buku['judul'] ?>
								</td>
								<td><?php echo date('d-m-Y', strtotime($p['tgl_booking'])) ?></td>
								<td><?php echo date('d-m-Y', strtotime($p['tgl_pinjam'])) ?></td>
								<?php
									if ($this->session->userdata('sebagai') == "siswa") {
										echo "";
									}else{
									?>
								<td align="center">
									<a href="<?php echo site_url('booking/edit/'.$p['id_booking']); ?>"
										class="btn btn-info btn-xs" title="Edit"><span class="far fa-edit"></span></a>
									<a href="<?php echo site_url('booking/remove/'.$p['id_booking']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><span
											class="far fa-trash-alt"></span></a>
								</td>
								<?php } ?>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>