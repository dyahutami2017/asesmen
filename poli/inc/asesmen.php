<?php
include_once "connection.php";
if (isset($_REQUEST['keluhan_utama'])) {
    // $date_now = date("Y-m-d");
    // $tgl_expire 	= date("Y-m-d", strtotime($_REQUEST['tgl_expire']));
    //$no_rm = $_REQUEST['klhn_utm'];
    // $no_kunjungan = $_REQUEST['no_kunjungan'];
    $jam_pulang = $_REQUEST['jam_plg'];
    $kategori_khusus = $_REQUEST['kategori'];
    $sumber_data = $_REQUEST['sumber_data'];
    $nama_sb = $_REQUEST['nama_sumber'];
    $hubungan_sb = $_REQUEST['hub_sumber'];
    $cara_datang = $_REQUEST['cara_datang'];
    $keluhan_utama = $_REQUEST['keluhan_utama'];
    $riwayat_kes_skrg = $_REQUEST['riwayat_kes_skrg'];
    $riwayat_kes_lama = $_REQUEST['riwayat_kes_lama'];
    $riwayat_alergi = $_REQUEST['alergi'];
    $suhu = $_REQUEST['suhu'];
    $nadi = $_REQUEST['nadi'];
    $tekanan_darah = $_REQUEST['tekanan_darah'];
    $nafas = $_REQUEST['nafas'];
    $nyeri = $_REQUEST['nyeri'];
    $kesadaran = $_REQUEST['kesadaran'];
    $bb = $_REQUEST['bb'];
    $tb = $_REQUEST['tb'];
    $spo2 = $_REQUEST['spo2'];
    $gcs = $_REQUEST['gcs'];
    $gcs_e = $_REQUEST['gcs_e'];
    $gcs_v = $_REQUEST['gcs_v'];
    $gcs_m = $_REQUEST['gcs_m'];
    $asesmen_psikologis = $_REQUEST['asesmen'];
    $status_fungsional = $_REQUEST['status_fg'];
    $imt = $_REQUEST['imt'];
    $sn_bb = $_REQUEST['sn_bb'];
    $asupan_makan = $_REQUEST['asupan_makan'];
    $sakit_berat = $_REQUEST['sakit_berat'];
    $kognitif = $_REQUEST['kognitif'];
    $motivasi_edukasi = $_REQUEST['motivasi_edukasi'];
    $keterbatasan_fisik = $_REQUEST['keterbatasan_fisik'];
    $kebutuhan_penerjemah = $_REQUEST['kebutuhan_penerjemah'];
    $kebutuhan_informasi = $_REQUEST['kebutuhan_informasi'];
    $status_sosial = $_REQUEST['status_sosial'];
    $hubungan_keluarga = $_REQUEST['hubungan_keluarga'];
    $tempat_tinggal = $_REQUEST['tempat_tinggal'];
    //resiko jatuh
    $resiko_dewasa = $_REQUEST['resiko_dewasa'];
    $resiko_anak = $_REQUEST['resiko_anak'];
    $resiko_geriarti = $_REQUEST['resiko_geriarti'];
    $resiko_jiwa = $_REQUEST['resiko_jiwa'];

    //masalah keperawatan
    // $status = $_REQUEST['masalah_keperawatan'];
    
    $status = $_REQUEST['masalah_keperawatan'];
    $status = json_encode($status);

    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    
    //echo $no_rm;

    //Rencana interfensi & Waktu Pelaksanaan & Evaluasi & Kontrol Lagi
    $rencana_intervensi = $_REQUEST['rencana_intervensi'];
    $waktu_pelaksanaan = $_REQUEST['waktu_pelaksanaan'];
    $evaluasi = $_REQUEST['evaluasi_tindak_lanjut'];
    $waktu_kontrol = $_REQUEST['kontrol_tanggal'];

    //medis
    // $medis_keluhan = $_REQUEST['medis_keluhan'];
    // $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
    // $penyakit_dulu = $_REQUEST['penyakit_dulu'];
    // $riwayat_operasi = $_REQUEST['riwayat_op'];
    // $medis_alergi = $_REQUEST['riwayat_alergi'];
    // $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
    // $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
    // $pemeriksaan_fisik = $_REQUEST['pemeriksaan_fisik'];
    // $diagnosa = $_REQUEST['diagnosa'];
    // $kode_icd = $_REQUEST['kode_icd'];
    // $rencana_tindakan = $_REQUEST['rencana_tindakan'];
    // $edukasi_topik = $_REQUEST['edukasi_topik'];

    mysqli_query($conn, "INSERT INTO rm_ralan_keperawatan ( no_rm, no_kunjungan, jam_pulang, kategori_khusus, sumber_data, nama_sb, hubungan_sb, cara_datang, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, riwayat_alergi, asesmen_psikologis, status_fungsional, imt, bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal)
        VALUES ( '$no_rm', '$no_kunjungan','$jam_pulang','$kategori_khusus', '$sumber_data', '$nama_sb', '$hubungan_sb', '$cara_datang', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$riwayat_alergi', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal' )") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_tanda_vital ( no_rm, no_kunjungan, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, suhu, nafas, kesadaran, bb, spo2, nadi, tekanan_darah, nyeri, tb, gcs, gcs_e, gcs_v, gcs_m, asesmen_psikologis, status_fungsional, imt, sn_bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal )
        VALUES ( '$no_rm', '$no_kunjungan', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$suhu', '$nafas', '$kesadaran', '$bb', '$spo2', '$nadi', '$tekanan_darah', '$nyeri', '$tb', '$gcs', '$gcs_e', '$gcs_v', '$gcs_m', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal')") or die(mysqli_error($conn));

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
    // if($na){
    //     header("inc/cetak.php?kode=".$no_rm);
    // }
    echo $no_rm;
} else {
    echo "-1";
}
