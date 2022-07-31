<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Laporan Buku</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Laporan Buku</li>
                    <li class="breadcrumb-item active">Buku</li>
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
                            <td align="center" width="10%"><img src="<?php echo site_url('dist/img/logo.png') ?>" alt=""
                                    height="100px" width="100px"></td>
                            <td align="center">
                                <h1>SMA NEGERI 7 PADANG</h1>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <b>Periode : <?php echo $_POST['awal']." s/d ".$_POST['akhir'] ?></b><br><br>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>ISBN</th>
                                <th>Rak</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								$no = 1;
								$cetak = $this->db->query("SELECT * FROM buku WHERE created_at BETWEEN '$_POST[awal]' AND '$_POST[akhir]'")->result_array();
								foreach ($cetak as $b): ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $b['kode_buku'] ?></td>
                                <td><?php echo $b['judul'] ?></td>
                                <td><?php echo $b['pengarang'] ?></td>
                                <td><?php echo $b['isbn'] ?></td>
                                <td><?php echo $b['rak'] ?></td>
                                <td><?php echo $b['keterangan'] ?></td>
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
                                <td align="center" colspan="3">
                                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                                </td>
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