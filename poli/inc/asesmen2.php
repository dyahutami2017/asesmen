<?php
include_once "connection.php";
if (isset($_REQUEST['medis_keluhan'])) {
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    //medis
    $medis_keluhan = $_REQUEST['medis_keluhan'];
    $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
    $penyakit_dulu = $_REQUEST['penyakit_dulu'];
    $riwayat_operasi = $_REQUEST['riwayat_op'];
    $medis_alergi = $_REQUEST['riwayat_alergi'];
    $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
    $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
    //$pemeriksaan_fisik = $_REQUEST['pemeriksaan_fisik'];
    $diagnosa = $_REQUEST['diagnosa'];
    $kode_icd = $_REQUEST['kode_icd'];
    $rencana_tindakan = $_REQUEST['rencana_tindakan'];
    $edukasi_topik = $_REQUEST['edukasi_topik'];
    
    mysqli_query($conn, "INSERT INTO rm_ralan_medis
        VALUES ('$no_rm','no_kunjungan','$medis_keluhan','$penyakit_sekarang','$penyakit_dulu','$riwayat_operasi','$medis_alergi','$penyakit_keluarga','$riwayat_pengobatan','$diagnosa','$kode_icd','$rencana_tindakan','$edukasi_topik')") or die(mysqli_error($conn));
    
    echo $no_rm;
} else {
    echo "-1";
}
