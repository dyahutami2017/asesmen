<?php
include_once "connection.php";
if (isset($_GET['keluhan_utama'])) {
    // $date_now = date("Y-m-d");
    // $tgl_expire 	= date("Y-m-d", strtotime($_GET['tgl_expire']));
    //$no_rm = $_GET['klhn_utm'];
    // $no_kunjungan = $_GET['no_kunjungan'];
    $sumber_data = $_GET['sumber_data'];
    $nama_sb = $_GET['nama_sumber'];
    $hubungan_sb = $_GET['hub_sumber'];
    $cara_datang = $_GET['cara_datang'];
    $keluhan_utama = $_GET['keluhan_utama'];
    $riwayat_kes_skrg = $_GET['riwayat_kes_skrg'];
    $riwayat_kes_lama = $_GET['riwayat_kes_lama'];
    $riwayat_alergi = $_GET['alergi'];
    $suhu = $_GET['suhu'];
    $nadi = $_GET['nadi'];
    $tekanan_darah = $_GET['tekanan_darah'];
    $nafas = $_GET['nafas'];
    $nyeri = $_GET['nyeri'];
    $bb = $_GET['bb'];
    $tb = $_GET['tb'];
    $spo2 = $_GET['spo2'];
    $gcs = $_GET['gcs'];
    $gcs_e = $_GET['gcs_e'];
    $gcs_v = $_GET['gcs_v'];
    $gcs_m = $_GET['gcs_m'];
    $asesmen_psikologis = $_GET['asesmen'];
    $status_fungsional = $_GET['status_fg'];
    $imt = $_GET['imt'];
    $sn_bb = $_GET['sn_bb'];
    $asupan_makan = $_GET['asupan_makan'];
    $sakit_berat = $_GET['sakit_berat'];
    $kognitif = $_GET['kognitif'];
    $motivasi_edukasi = $_GET['motivasi_edukasi'];
    $keterbatasan_fisik = $_GET['keterbatasan_fisik'];
    $kebutuhan_penerjemah = $_GET['kebutuhan_penerjemah'];
    $kebutuhan_informasi = $_GET['kebutuhan_informasi'];
    $status_sosial = $_GET['status_sosial'];
    $hubungan_keluarga = $_GET['hubungan_keluarga'];
    $tempat_tinggal = $_GET['tempat_tinggal'];
    //resiko jatuh
    $resiko_dewasa = $_GET['resiko_dewasa'];
    $resiko_anak = $_GET['resiko_anak'];
    $resiko_geriarti = $_GET['resiko_geriarti'];
    $resiko_jiwa = $_GET['resiko_jiwa'];

    //masalah keperawatan
    // $status = $_GET['masalah_keperawatan'];
    
    $status = $_GET['masalah_keperawatan'];
    $status = json_encode($status);

    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    
    echo $no_rm;

    //Rencana interfensi & Waktu Pelaksanaan & Evaluasi & Kontrol Lagi
    $rencana_intervensi = $_GET['rencana_intervensi'];
    $waktu_pelaksanaan = $_GET['waktu_pelaksanaan'];
    $evaluasi = $_GET['evaluasi_tindak_lanjut'];
    $waktu_kontrol = $_GET['kontrol_tanggal'];

    //medis
    // $medis_keluhan = $_GET['medis_keluhan'];
    // $penyakit_sekarang = $_GET['penyakit_sekarang'];
    // $penyakit_dulu = $_GET['penyakit_dulu'];
    // $riwayat_operasi = $_GET['riwayat_op'];
    // $medis_alergi = $_GET['riwayat_alergi'];
    // $penyakit_keluarga = $_GET['riwayat_pykt_klg'];
    // $riwayat_pengobatan = $_GET['riwayat_pengobatan'];
    // $pemeriksaan_fisik = $_GET['pemeriksaan_fisik'];
    // $diagnosa = $_GET['diagnosa'];
    // $kode_icd = $_GET['kode_icd'];
    // $rencana_tindakan = $_GET['rencana_tindakan'];
    // $edukasi_topik = $_GET['edukasi_topik'];

    mysqli_query($conn, "INSERT INTO rm_ralan_keperawatan ( no_rm, no_kunjungan, sumber_data, nama_sb, hubungan_sb, cara_datang, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, riwayat_alergi, asesmen_psikologis, status_fungsional, imt, bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal)
        VALUES ( '$no_rm', '$no_kunjungan', '$sumber_data', '$nama_sb', '$hubungan_sb', '$cara_datang', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$riwayat_alergi', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal' )") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_tanda_vital ( no_rm, no_kunjungan, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, suhu, nafas, bb, spo2, nadi, tekanan_darah, nyeri, tb, gcs, gcs_e, gcs_v, gcs_m, asesmen_psikologis, status_fungsional, imt, sn_bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal )
        VALUES ( '$no_rm', '$no_kunjungan', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$suhu', '$nafas', '$bb', '$spo2', '$nadi', '$tekanan_darah', '$nyeri', '$tb', '$gcs', '$gcs_e', '$gcs_v', '$gcs_m', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_ralan_masalah_keperawatan
        VALUES ( '$no_rm', '$no_kunjungan', '$status')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_resiko_jatuh
        VALUES ( '$no_rm', '$no_kunjungan', '$resiko_dewasa', '$resiko_anak', '$resiko_geriarti', '$resiko_jiwa')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_ralan_rencainterven
        VALUES ('$no_rm','$no_kunjungan','$rencana_intervensi')") or die(mysqli_error($conn));
    
    mysqli_query($conn, "INSERT INTO rm_ralan_waktu_pelaksanaan
        VALUES ('$no_rm','$no_kunjungan','$waktu_pelaksanaan')") or die(mysqli_error($conn));
    
    $na = mysqli_query($conn, "INSERT INTO rm_ralan_evaluasi
        VALUES ('$no_rm','$no_kunjungan','$evaluasi','$waktu_kontrol')") or die(mysqli_error($conn));
    if($na){
        header("inc/cetak.php?kode=".$no_rm);
    }
    // echo "1";
} else {
    echo "-1";
}
