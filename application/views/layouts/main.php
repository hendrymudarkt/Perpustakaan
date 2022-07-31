<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perpustakaan SMA Negeri 7 Padang</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo site_url('dist/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('plugins/chosen/chosen.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search"
						aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?php echo site_url('dist/img/logo.png'); ?>" alt="Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Perpustakaan</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo site_url('dist/img/avatar04.png'); ?>" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="<?php echo site_url('user/edit_pass/'.$this->session->userdata('id')) ?>"
							class="d-block"><?php echo $this->session->userdata('nama') ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?php echo site_url('dashboard');?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('siswa');?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Siswa
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('penerbit');?>" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Penerbit
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('isbn');?>" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									ISBN
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('buku');?>" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Buku
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('booking');?>" class="nav-link">
								<i class="nav-icon fas fa-clock"></i>
								<p>
									Booking
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('peminjaman');?>" class="nav-link">
								<i class="nav-icon fas fa-arrow-alt-circle-up"></i>
								<p>
									Peminjaman
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('pengembalian');?>" class="nav-link">
								<i class="nav-icon fas fa-arrow-alt-circle-down"></i>
								<p>
									Pengembalian
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-envelope"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/buku') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Buku</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/peminjaman') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Peminjaman</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/pengembalian') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pengembalian</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('login/logout') ?>" class="nav-link">
								<i class="fas fa-share-square nav-icon"></i>
								<p>Keluar</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php
			if(isset($_view) && $_view)
      	$this->load->view($_view);
  ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1
			</div>
			<strong>Copyright &copy; 2019 <a href="#">SMA Negeri 7 Padang</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo site_url('plugins/jquery/jquery.min.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo site_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- DataTables -->
	<script src="<?php echo site_url('plugins/datatables/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo site_url('dist/js/adminlte.min.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/chosen/chosen.jquery.js'); ?>"></script>
	<!-- page script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"language": {
					"sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
					"sProcessing": "Sedang memproses...",
					"sLengthMenu": "Tampilkan _MENU_ entri",
					"sZeroRecords": "Tidak ditemukan data yang sesuai",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
					"sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
					"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
					"sInfoPostFix": "",
					"sSearch": "Cari:",
					"sUrl": "",
					"oPaginate": {
						"sFirst": "Pertama",
						"sPrevious": "Sebelumnya",
						"sNext": "Selanjutnya",
						"sLast": "Terakhir"
					}
				}
			});
		});

		$('document').ready(function () {
			$("#nisn").chosen();
			$("#kode").chosen();
			$("#id_peminjaman").chosen();
		})

		$(document).ready(function () {
			$('#nama').change(function () {
				var nama = $(this).val();
				$.ajax({
					url: "<?php echo site_url('isbn/get_nama');?>",
					method: "POST",
					data: {
						nama: nama
					},
					dataType: 'json',
					success: function (data) {
						var html = 'Data Tidak Ada';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<input type="text" class="form-control" value="' + data[i].tahun + '" readonly>';
						}
						$('#tahun').html(html);

					}
				});
			});
		});

		function printContent(el) {
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}
	</script>
	<!-- TinyMCE -->
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});
	</script>
</body>

</html>