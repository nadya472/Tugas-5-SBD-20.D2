<html>
    <head>
        <meta charset = "utf-8">
        <link rel = "stylesheet" type ="text/css" href ="style.css">
        <title> Tugas Basis Data 5 </title>
    </head>
    <body> 
        <div class = "container">
            <h1> Sistem Klinik 312010110 </h1>
            <div class = "main">
                <?php 
                include ("koneksi.php");
                // query untuk menampilkan data
                $sql = 'SELECT * From dokter';
                $result = mysqli_query ($conn, $sql);
                ?>
                <h3> Tabel Dokter </h3>
                <table>
                    <tr> 
                        <th> ID Dokter </th>
                        <th> Nama Dokter </th>
                    </tr>
                    <?php if($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                    <tr>
                        <td><?=$row ['id_dokter'];?></td>
                        <td><?=$row ['nama_dokter'];?></td>
                    </tr>
                    <?php endwhile; else: ?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>
                <?php
                include ("koneksi.php");
                // query untuk menampilkan data
                $sql2 = 'SELECT * From pasien';
                $result = mysqli_query ($conn, $sql2);
                ?>
                <h3> Tabel Pasien </h3>
                <table>
                    <tr>
                        <th> ID Pasien </th>
                        <th> Nama Pasien </th>
                        <th> Jenis Kelamin </th>
                        <th> Umur </th>
                    </tr>
                    <?php if ($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                    <tr>
                        <td><?=$row ['id_pasien'];?></td>
                        <td><?=$row ['nama_pasien'];?></td>
                        <td><?=$row ['jenis_kelamin'];?></td>
                        <td><?=$row ['umur'];?></td>
                    </tr>
                    <?php endwhile; else: ?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>  
                <?php 
                include ("koneksi.php");
                $sql3 = 'SELECT * From obat';
                $result = mysqli_query ($conn, $sql3);
                ?>
                <h3> Tabel Obat </h3>
                <table>
                    <tr>
                        <th> ID Obat </th>
                        <th> Nama Obat </th>
                    </tr>
                    <?php if ($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                    <tr>
                        <td><?=$row ['id_obat'];?></td>
                        <td><?=$row ['nama_obat'];?></td>
                    </tr>
                    <?php endwhile; else:?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>
                <?php 
                include ("koneksi.php");
                // query untuk menampilkan data
                $sql4 = 'SELECT * From berobat';
                $result = mysqli_query ($conn, $sql4);
                ?>
                <h3> Tabel Berobat </h3>
                <table>
                    <tr>
                        <th> ID Berobat </th>
                        <th> ID Pasien </th>
                        <th> ID Dokter </th>
                        <th> Tanggal Berobat </th>
                        <th> Keluhan Pasien </th>
                        <th> Hasil Diagnosa </th>
                        <th> Penatalaksanaan </th>
                    </tr>
                    <?php if ($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                    <tr>
                        <td><?=$row ['id_berobat'];?></td>
                        <td><?=$row ['id_pasien'];?></td>
                        <td><?=$row ['id_dokter'];?></td>
                        <td><?=$row ['tgl_berobat'];?></td>
                        <td><?=$row ['keluhan_pasien'];?></td>
                        <td><?=$row ['hasil_diagnosa'];?></td>
                        <td><?=$row ['penatalaksanaan'];?></td>
                    </tr>
                    <?php endwhile; else:?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>
                <?php
                include ("koneksi.php");
                $sql5 = 'SELECT * From resep_obat';
                $result = mysqli_query ($conn, $sql5);
                ?>
                <h3> Tabel Resep Obat </h3>
                <table>
                    <tr>
                        <th> ID Resep </th>
                        <th> ID Berobat </th>
                        <th> ID Obat </th>
                    </tr>
                    <?php if ($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                            <tr>
                        <td><?=$row ['id_resep'];?></td>
                        <td><?=$row ['id_berobat'];?></td>
                        <td><?=$row ['id_obat'];?></td>
                    </tr>
                    <?php endwhile; else:?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>
                <?php
                include ("koneksi.php");
                $sql6 = 'SELECT * From users';
                $result = mysqli_query ($conn, $sql6);
                ?>
                <h3> Tabel Users </h3>
                <table>
                    <tr>
                        <th> ID Users </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Nama Lengkap </th>
                    </tr>
                    <?php if ($result):?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                            <tr>
                        <td><?=$row ['id'];?></td>
                        <td><?=$row ['username'];?></td>
                        <td><?=$row ['password'];?></td>
                        <td><?=$row ['nama_lengkap'];?></td>
                    </tr>
                    <?php endwhile; else:?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </body>
</html>
