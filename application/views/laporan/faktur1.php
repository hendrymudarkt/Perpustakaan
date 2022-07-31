<body onload="window.print()">
    <div class="card-body" id="div1">
        <table width="100%">
            <tr>
                <td align="center">
                    <h1>Laporan Data Faktur Peminjaman Buku pada Perpustakaan SMA NEGERI 7 PADANG</h1>
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td>No. Faktur Peminjaman</td>
                <td>:</td>
                <td>FK<?php echo date('dmY').$peminjaman['id_peminjaman'] ?></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $peminjaman['nisn'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $peminjaman['nisn'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td>:</td>
                <td><?php echo date('d-m-Y', strtotime($peminjaman['tgl_pinjam'])) ?></td>
            </tr>
            <tr>
                <td>Tanggal Pengembalian</td>
                <td>:</td>
                <td><?php echo date('d-m-Y', strtotime($peminjaman['tgl_kembali'])) ?></td>
            </tr>
        </table><br><br>
        <table border="1" style="border-collapse: collapse" width="100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>ISBN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $cetak = $this->db->get_where('buku',array('kode_buku'=>$peminjaman['kode_buku']))->result_array();
                foreach ($cetak as $s):
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $s['kode_buku'] ?></td>
                    <td><?php echo $s['judul'] ?></td>
                    <td><?php echo $s['pengarang'] ?></td>
                    <td><?php echo $s['isbn'] ?></td>
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