<?php
    include 'connection.php';

    if (isset($_GET['kode'])) {
        $kode = $_GET['kode'];
        //$query = "Select * from rm_ralan_keperawatan join rm_ralan_masalah_keperawatan on rm_ralan_keperawatan.no_rm = rm_ralan_masalah_keperawatan.no_rm where rm_ralan_masalah_keperawatan.no_rm=".$kode;
        $query = "Select * from rm_ralan_keperawatan join rm_tanda_vital on rm_ralan_keperawatan.no_rm = rm_tanda_vital.no_rm join rm_ralan_masalah_keperawatan on rm_tanda_vital.no_rm = rm_ralan_masalah_keperawatan.no_rm join rm_resiko_jatuh on rm_ralan_masalah_keperawatan.no_rm = rm_resiko_jatuh.no_rm join rm_ralan_rencainterven on rm_resiko_jatuh.no_rm = rm_ralan_rencainterven.no_rm join rm_ralan_waktu_pelaksanaan on rm_ralan_rencainterven.no_rm = rm_ralan_waktu_pelaksanaan.no_rm join rm_ralan_evaluasi on rm_ralan_waktu_pelaksanaan.no_rm = rm_ralan_evaluasi.no_rm where rm_ralan_keperawatan.no_rm=".$kode;

        $result = $conn->query($query);
        if (!empty($result) && $result->num_rows > 0) {
            //while
            ($row=$result->fetch_assoc())
            //{
?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Identitas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center">ASESMEN RAWAT JALAN</h2>
    
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2">Keperawatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No. Rekam Medis / Nama</td>
                        <td><?php echo $row["no_rm"]?> /</td>
                    </tr>
                    <tr>
                        <td>Umur / Jenis Kelamin</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kunjungan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jam Datang</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jam Pulang</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Klinik Yang dituju</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sumber Data</td>
                        <td><?php echo $row["sumber_data"]?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $row["nama_sb"]?></td>
                    </tr>
                    <tr>
                        <td>Hubungan</td>
                        <td><?php echo $row['hubungan_sb']?></td>
                    </tr>
                    <tr>
                        <td>Datang ke RS</td>
                        <td><?php echo $row['cara_datang']?></td>
                    </tr>
                    <thead>
                    <tr>
                        <th colspan="2">Pengkajian Keperawatan (S & O)</th>
                    </tr>
                </thead>
                    <tr>
                        <td>Keluhan Utama</td>
                        <td><?php echo $row['keluhan_utama']?></td>
                    </tr>
                    <tr>
                        <td>Riwayat Kesehatan sekarang</td>
                        <td><?php echo $row['riwayat_kes_skrg']?></td>
                    </tr>
                    <tr>
                        <td>Riwayat Kesehatan yang lalu</td>
                        <td><?php echo $row['riwayat_kes_lama']?></td>
                    </tr>
                    <tr>
                        <td>Riwayat Alergi</td>
                        <td><?php echo $row['riwayat_alergi']?></td>
                    </tr>
                    <tr>
                        <td>Suhu</td>
                        <td><?php echo $row['suhu']?></td>
                    </tr>
                    <tr>
                        <td>Nafas</td>
                        <td><?php echo $row['nafas']?></td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td><?php echo $row['bb']?></td>
                    </tr>
                    <tr>
                        <td>SPO2</td>
                        <td><?php echo $row['spo2']?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">DATA KELUARGA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Istri / Suami / Anak Dari</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama Penjamin</td>
                    <td></td>
                </tr>
            </tbody>
        
            <thead>
                <tr>
                    <th colspan="2">DATA KONTAK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alamat</td>
                    <td>KENAJI RT06 RW02 TAMANMARTANI KALASAN SLEMAN</td>
                </tr>
                <tr>
                    <td>Kelurahan</td>
                    <td>TAMANMARTANI</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>KALASAN</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>SLEMAN</td>
                </tr>
                <tr>
                    <td>Propinsi</td>
                    <td>DI Yogyakarta</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>-/ 085729848582</td>
                </tr>
            </tbody>
        
            <thead>
                <tr>
                    <th colspan="2">DATA KEANGGOTAAN POLRI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NRP/NIP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Kesatuan</td>
                    <td></td>
                </tr>
            </tbody>
        
            <thead>
                <tr>
                    <th>DATA PENDAFTARAAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TGL Register</td>
                    <td>12 Jan 2019 00:00</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>


    
</body>

</html>
                <!-- Nama : <?php echo $row["nama_sb"]?><br> -->
<?php
             //}
        }
    }

?>