<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pengguna</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
					<li class="breadcrumb-item active">Pengguna</li>
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
					<h3 class="card-title">Data Pengguna</h3>
					<div class="float-right">
					<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Nama Pengguna</th>
								<th>Departemen</th>
								<th>Autentikasi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="show_data">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="username">Nama Pengguna</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Nama Pengguna">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password"
							placeholder="Password">
					</div>
					<div class="form-group">
						<label for="departemen">Departemen</label>
						<input type="text" class="form-control" name="departemen" id="departemen" placeholder="Departemen">
					</div>
					<div class="form-group">
						<label for="level">Autentikasi</label>
						<select name="level" class="form-control" id="level">
							<option value="0">...</option>
							<option value="1">Super Admin</option>
							<option value="2">Admin</option>
							<option value="3">Pengguna</option>
						</select>
					</div>
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" class="form-control" name="nik2" id="nik2" placeholder="NIK">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama2" id="nama2" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="username">Nama Pengguna</label>
						<input type="text" class="form-control" name="username2" id="username2" placeholder="Nama Pengguna">
					</div>
					<!-- <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password2" id="password2"
							placeholder="Password">
					</div> -->
					<div class="form-group">
						<label for="departemen">Departemen</label>
						<input type="text" class="form-control" name="departemen2" id="departemen2" placeholder="Departemen">
					</div>
					<div class="form-group">
						<label for="level2">Autentikasi</label>
						<select name="level2" class="form-control" id="level2">
							<option value="0">...</option>
							<option value="1">Super Admin</option>
							<option value="2">Admin</option>
							<option value="3">Pengguna</option>
						</select>
					</div>
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary" id="btn_update">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--MODAL HAPUS-->
<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">

					<input type="hidden" name="id" id="textid" value="">
					<div class="alert alert-warning">
						<p>Apakah Anda yakin mau menghapus pengguna ini?</p>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn_hapus btn btn-danger" id="btn_hapus">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--END MODAL HAPUS-->
<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		function reload_table(){
			$(window).error(function(){
				return true;
			});
			$('#example1').DataTable().ajax.reload();
		}
		tampil_data_pengguna();

		$('#mydata').dataTable({
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

		function tampil_data_pengguna() {
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("user/data_user") ?>',
				async: false,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var url_edit = '<?php echo site_url("user/edit/") ?>';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].nik + '</td>' +
							'<td>' + data[i].nama + '</td>' +
							'<td>' + data[i].username + '</td>' +
							'<td>' + data[i].departemen + '</td>' +
							'<td>' + data[i].level + '</td>' +
							'<td align="center" style="text-align:right;">' +
							'<a href="'+ url_edit + data[i].id + '" class="btn btn-icon btn-sm btn-info"><i class="far fa-edit"></i></a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="far fa-trash-alt"></i></a>' +
							'</td>' +
							'</tr>';
					}
					$('#show_data').html(html);
				}

			});
		}

		//GET UPDATE
		$('#show_data').on('click', '.item_edit', function () {
			var id = $(this).attr('data');
			$.ajax({
				type: "GET",
				url: "<?php echo site_url('user/get_user')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$.each(data, function (id, nik, nama, username, departemen, level) {
						$('#editModal').modal('show');
						$('[name="id"]').val(data.id);
						$('[name="nik2"]').val(data.nik);
						$('[name="nama2"]').val(data.nama);
						$('[name="username2"]').val(data.username);
						// $('[name="password2"]').val(data.password);
						$('[name="departemen2"]').val(data.departemen);
						$('[name="level2"]').val(data.level);
					});
				}
			});
			return false;
		});


		//GET HAPUS
		$('#show_data').on('click', '.item_hapus', function () {
			var id = $(this).attr('data');
			$('#removeModal').modal('show');
			$('[name="id"]').val(id);
		});

		//Simpan Pengguna
		$('#btn_simpan').on('click', function () {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('user/add')?>",
				dataType: "JSON",
				data: {
					nik: $('#nik').val(),
					nama: $('#nama').val(),
					username: $('#username').val(),
					departemen: $('#departemen').val(),
					password: $('#password').val(),
					level: $('#level').val()
				},
				success: function (data) {
					$('[name="nik"]').val("");
					$('[name="nama"]').val("");
					$('[name="username"]').val("");
					$('[name="password"]').val("");
					$('[name="departemen"]').val("");
					$('[name="level"]').val("");
					$('#addModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			return false;
		});

		//Update Pengguna
		$('#btn_update').on('click', function () {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('user/edit')?>",
				dataType: "JSON",
				data: {
					id: $('#id').val(),
					nik: $('#nik2').val(),
					nama: $('#nama2').val(),
					username: $('#username2').val(),
					departemen: $('#departemen2').val(),
					password: $('#departemen2').val(),
					level: $('#level2').val()
				},
				success: function (data) {
					$('[name="id"]').val("");
					$('[name="nik2"]').val("");
					$('[name="nama2"]').val("");
					$('[name="username2"]').val("");
					$('[name="password2"]').val("");
					$('[name="departemen2"]').val("");
					$('[name="level2"]').val("");
					$('#editModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			return false;
		});

		//Hapus Pengguna
		$('#btn_hapus').on('click', function () {
			var id = $('#textid').val();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('user/remove')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$('#removeModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			reload_table();
			return false;
		});

	});

</script>
