<?php include_once "connection.php";
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    $medis_keluhan = $_REQUEST['medis_keluhan'];
    $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
    $penyakit_dulu = $_REQUEST['penyakit_dulu'];
    $penyakit_dulu = json_encode($penyakit_dulu);
    $riwayat_operasi = $_REQUEST['riwayat_op'];
    $medis_alergi = $_REQUEST['riwayat_alergi'];
    $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
    $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
    //$pemeriksaan_fisik = " ";
    $kode_icd = $_REQUEST['kode_icd'];
    $diagnosa = $_REQUEST['diagnosa'];

    $rencana_tindakan = $_REQUEST['rencana_tindakan'];
    $edukasi_topik = $_REQUEST['edukasi_topik'];

    mysqli_query($conn, "INSERT INTO rm_ralan_medis (no_rm, no_kunjungan, keluhan, riwayat_sakit_sekarang, riwayat_sakit_lama, riwayat_operasi, riwayat_alergi, riwayat_sakit_keluarga, riwayat_pengobatan, diagnosa,kode_icd, rencana_tindakan, edukasi_topik)
    VALUES ('$no_rm','$no_kunjungan','$medis_keluhan','$penyakit_sekarang','$penyakit_dulu','$riwayat_operasi','$medis_alergi','$penyakit_keluarga','$riwayat_pengobatan','$diagnosa','$kode_icd','$rencana_tindakan','$edukasi_topik')") or die(mysqli_error($conn));
    
    echo "Good Job";
?>