<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Laporan Peminjaman</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item">Laporan Peminjaman</li>
					<li class="breadcrumb-item active">Peminjaman</li>
				</ol>
			</div>
		</div>
		<div class="row mb-2">
			<form method="post">
				<table>
					<tr>
						<td><input type="date" class="form-control" name="awal"></td>
						<td><input type="date" class="form-control" name="akhir" onchange="this.form>submit();"></td>
						<td><button class="btn btn-primary" name="cetak" onclick="printContent('div1')"><i
									class="fa fa-print"></i> Cetak</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<!-- /.card-header -->
				<?php
				if (isset($_POST['akhir'])) { ?>
				<div class="card-body" id="div1">
					<table width="100%">
						<tr>
							<td align="center" width="10%"><img src="<?php echo site_url('dist/img/logo.png') ?>" alt="" height="100px" width="100px"></td>
							<td align="center"><h1>SMA NEGERI 7 PADANG</h1></td>
						</tr>
					</table><hr>
					<b>Periode : <?php echo $_POST['awal']." s/d ".$_POST['akhir'] ?></b><br><br>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>NISN</th>
								<th>Nama</th>
								<th>Kode Buku</th>
								<th>Judul</th>
								<th>Pengarang</th>
								<th>Tanggal Peminjaman</th>
								<th>Lama (hari)</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								$cetak = $this->db->query("SELECT * FROM peminjaman WHERE tgl_pinjam BETWEEN '$_POST[awal]' AND '$_POST[akhir]'")->result_array();
								foreach ($cetak as $c): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $c['nisn'] ?></td>
								<td><?php $siswa = $this->db->get_where('siswa',array('nisn'=>$c['nisn']))->row_array(); echo $siswa['nama'] ?>
								</td>
								<td><?php echo $c['kode_buku'] ?></td>
								<td><?php $buku = $this->db->get_where('buku',array('kode_buku'=>$c['kode_buku']))->row_array(); echo $buku['judul'] ?>
								</td>
								<td><?php echo $buku['pengarang'] ?></td>
								<td><?php echo date('d-m-Y', strtotime($c['tgl_pinjam'])) ?></td>
								<td align="center"><?php
										$tgl1 = new DateTime($c['tgl_kembali']);
										$tgl2 = new DateTime($c['tgl_pinjam']);
										$selisih = $tgl1->diff($tgl2);
										echo $selisih->days; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table><br><br>
					<div class="float-right">
	                    	<table>
	                    		<tr>
	                    			<td align="center" colspan="3"><b>Padang, <?php echo date('d-m-Y') ?></b></td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
	                    		</tr>
	                    	</table>
	                    </div>
				</div>
				<?php }
				?>
			</div>
		</div>
	</div>
</section>