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
                    <th>ISBN</th>
                    <th>Nama</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
				$cetak = $this->db->query("SELECT * FROM isbn")->result_array();
				foreach ($cetak as $p): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p['isbn'] ?></td>
                    <td><?php echo $p['nama'] ?></td>
                    <td><?php echo $p['tahun'] ?></td>
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