<body onload="window.print()">
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
        <table border="1" style="border-collapse: collapse" width="100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
				$cetak = $this->db->query("SELECT * FROM siswa")->result_array();
				foreach ($cetak as $s): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $s['nisn'] ?></td>
                    <td><?php echo $s['nama'] ?></td>
                    <td><?php echo $s['jenis_kelamin'] ?></td>
                    <td><?php echo $s['tempat_lahir'].", ".$s['tgl_lahir'] ?></td>
                    <td><?php echo $s['agama'] ?></td>
                    <td><?php echo $s['alamat'] ?></td>
                    <td><?php echo $s['no_telp'] ?></td>
                    <td align="center"><img src="<?php echo site_url('foto/'.$s['foto']) ?>" alt="" height="100px" width="100px"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table><br><br>
        <div style="float: right">
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
</body>