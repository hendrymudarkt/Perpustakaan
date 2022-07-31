<!-- <body onload="window.print()"> -->
    <div class="card-body" id="div1">
        <table width="100%">
            <tr>
                <td align="center">
                    <h1>Laporan Data Faktur Pengembalian Buku pada Perpustakaan SMA NEGERI 7 PADANG</h1>
                </td>
            </tr>
        </table>
        <hr>
        <?php
            $pinjam = $this->db->get_where('peminjaman', array('id_peminjaman' => $pengembalian['id_peminjaman']))->row_array();
            $siswa = $this->db->get_where('siswa', array('nisn' => $pinjam['nisn']))->row_array();
        ?>
        <table>
            <tr>
                <td>No. Faktur pengembalian</td>
                <td>:</td>
                <td>FK<?php echo date('dmY').$pengembalian['id_pengembalian'] ?></td>
            </tr>
            <tr>
                <td>No. Faktur Pengembalian</td>
                <td>:</td>
                <td>FKP<?php echo date('dmY').$pengembalian['id_pengembalian'] ?></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $pinjam['nisn'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $siswa['nama'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td>:</td>
                <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_pinjam'])) ?></td>
            </tr>
            <tr>
                <td>Tanggal Pengembalian</td>
                <td>:</td>
                <td><?php echo date('d-m-Y', strtotime($pengembalian['tgl_pengembalian'])) ?></td>
            </tr>
            <tr>
                <td>Lama</td>
                <td>:</td>
                <td><?php echo $pengembalian['lama']." Hari" ?></td>
            </tr>
            <tr>
                <td>Denda</td>
                <td>:</td>
                <td><?php echo "Rp. ".number_format($pengembalian['denda']) ?></td>
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
                $cetak = $this->db->get_where('buku',array('kode_buku'=>$pinjam['kode_buku']))->result_array();
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