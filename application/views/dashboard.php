<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dashboard</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<!-- Info boxes -->
	<div class="row">
		<div class="col-12 col-sm-6 col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Buku</span>
					<span class="info-box-number">
						<?php $datab = $this->db->query("SELECT kode_buku FROM buku"); echo $datab->num_rows(); ?>
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-12 col-sm-6 col-md-3">
			<div class="info-box mb-3">
				<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-arrow-alt-circle-up"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Peminjaman</span>
					<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_peminjaman FROM peminjaman"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->

		<!-- fix for small devices only -->
		<div class="clearfix hidden-md-up"></div>

		<div class="col-12 col-sm-6 col-md-3">
			<div class="info-box mb-3">
				<span class="info-box-icon bg-success elevation-1"><i class="fas fa-arrow-alt-circle-down"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Pengembalian</span>
					<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_pengembalian FROM pengembalian"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-12 col-sm-6 col-md-3">
			<div class="info-box mb-3">
				<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Siswa</span>
					<span class="info-box-number"><?php $datab = $this->db->query("SELECT nisn FROM siswa"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>
	<div class="col-md-12">
		<div class="card">
			<center><h1>Selamat Datang di Dashboard<br>Perpustakaan</h1></center>
			<center><img src="<?php echo site_url('dist/img/logo.png'); ?>" height="220px" width="200px"></center>
		</div>
	</div>
	<!-- /.row -->
</section>