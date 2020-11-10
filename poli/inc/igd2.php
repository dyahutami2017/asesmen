<?php
include_once "connection.php";
if (isset($_REQUEST['keluhan_utama'])) {
    // $date_now = date("Y-m-d");
    // $tgl_expire 	= date("Y-m-d", strtotime($_REQUEST['tgl_expire']));
    //$no_rm = $_REQUEST['klhn_utm'];
    // $no_kunjungan = $_REQUEST['no_kunjungan'];
    $tanggal_kunjungan = $_REQUEST['tgl_kunjungan'];
    $jam_datang = $_REQUEST['jam_dtg'];
    $jam_pulang = $_REQUEST['jam_plg'];
    $kategori_khusus = $_REQUEST['kategori'];
    if($kategori_khusus == '5'){
        $kategori_khusus = $_REQUEST['kategori_lain'];
     }
    $sumber_data = $_REQUEST['sumber_data'];
    $nama_sb = $_REQUEST['nama_sumber'];
    $hubungan_sb = $_REQUEST['hub_sumber'];
    $cara_datang = $_REQUEST['cara_datang'];
    if($cara_datang == '3'){
        $cara_datang = $_REQUEST['cara_datang_lain'];
     }
    $keluhan_utama = $_REQUEST['keluhan_utama'];
    $riwayat_kes_skrg = $_REQUEST['riwayat_kes_skrg'];
    $riwayat_kes_lama = $_REQUEST['riwayat_kes_lama'];
    $riwayat_alergi = $_REQUEST['alergi'];
    if($riwayat_alergi == 'ada'){
        $riwayat_alergi = $_REQUEST['alergi_ada'];
     }
    $suhu = $_REQUEST['suhu'];
    $nadi = $_REQUEST['nadi'];
    $tekanan_darah = $_REQUEST['tekanan_darah'];
    $nafas = $_REQUEST['nafas'];
    $nyeri = $_REQUEST['nyeri'];
    //$kesadaran = $_REQUEST['kesadaran'];
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
    if($tempat_tinggal== '3'){
        $tempat_tinggal = $_REQUEST['tempat_tinggal_lain'];
     }
    //resiko jatuh
    $resiko_dewasa = $_REQUEST['resiko_dewasa'];
    $resiko_anak = $_REQUEST['resiko_anak'];
    $resiko_geriarti = $_REQUEST['resiko_geriarti'];
    $resiko_jiwa = $_REQUEST['resiko_jiwa'];

       
    $status = $_REQUEST['masalah_keperawatan'];
    $status = json_encode($status);
    $ket_status = $_REQUEST['masalah_keperawatan_add'];
    $ket_status= json_encode($ket_status);

    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);

    $status_rencana = $_REQUEST['rencana_keperawatan'];
    $status_rencana = json_encode($status_rencana);
    //echo var_dump($status);
    $ket_lain = $_REQUEST['rencana_keperawatan_add'];

    $status_implemen =  $_REQUEST['implementasi_keperawatan'];
    $status_implemen = json_encode($status_implemen);
    $kolabinjek_analgesik = $_REQUEST['rencana_keperawatan_1'];
    $kolabinjek_antipiretik = $_REQUEST['rencana_keperawatan_2'];
    $kolab_diuretik = $_REQUEST['rencana_keperawatan_3'];
    $kolab_obat = $_REQUEST['rencana_keperawatan_4'];
    $kolab_obat = json_encode($kolab_obat);
    $kolab_nebulizer = $_REQUEST['rencana_keperawatan_5'];
    $cairan_infus = $_REQUEST['rencana_keperawatan_7'];
    $oksigen = $_REQUEST['rencana_keperawatan_13'];
    $implemen_lain = $_REQUEST['rencana_keperawatan_19'];
    //evaluasi soap
    $eval_soap = $_REQUEST['evaluasi_tindak_lanjut'];
    //Discharge Planning
    $kriteria= $_REQUEST['kriteria'];

    $status_tindak = $_REQUEST['tindak_lanjut'];
    $rs = $_REQUEST['tindak_lanjut_rs'];
    $waktu_meninggal = $_REQUEST['tindak_lanjut_meninggal'];
    $pendidikan_pulang = $_REQUEST['pasien_plg'];
    

    
    mysqli_query($conn, "INSERT INTO rm_ralan_keperawatan ( no_rm, no_kunjungan,tanggal_kunjungan,jam_datang, jam_pulang, kategori_khusus, sumber_data, nama_sb, hubungan_sb, cara_datang, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, riwayat_alergi, asesmen_psikologis, status_fungsional, imt, bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal)
        VALUES ( '$no_rm', '$no_kunjungan','$tanggal_kunjungan','$jam_datang','$jam_pulang','$kategori_khusus', '$sumber_data', '$nama_sb', '$hubungan_sb', '$cara_datang', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$riwayat_alergi', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal' )") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_tanda_vital ( no_rm, no_kunjungan, keluhan_utama, riwayat_kes_skrg, riwayat_kes_lama, suhu, nafas, bb, spo2, nadi, tekanan_darah, nyeri, tb, gcs, gcs_e, gcs_v, gcs_m, asesmen_psikologis, status_fungsional, imt, sn_bb, asupan_makan, sakit_berat, kognitif, motivasi_edukasi, keterbatasan_fisik, kebutuhan_penerjemah, kebutuhan_informasi, status_sosial, hubungan_keluarga, tempat_tinggal )
        VALUES ( '$no_rm', '$no_kunjungan', '$keluhan_utama', '$riwayat_kes_skrg', '$riwayat_kes_lama', '$suhu', '$nafas', '$bb', '$spo2', '$nadi', '$tekanan_darah', '$nyeri', '$tb', '$gcs', '$gcs_e', '$gcs_v', '$gcs_m', '$asesmen_psikologis', '$status_fungsional', '$imt', '$sn_bb', '$asupan_makan', '$sakit_berat', '$kognitif', '$motivasi_edukasi', '$keterbatasan_fisik', '$kebutuhan_penerjemah', '$kebutuhan_informasi', '$status_sosial', '$hubungan_keluarga', '$tempat_tinggal')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_ralan_masalah_keperawatan (no_rm, no_kunjungan, status, ket_status)
        VALUES ( '$no_rm', '$no_kunjungan', '$status','$ket_status')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_resiko_jatuh
        VALUES ( '$no_rm', '$no_kunjungan', '$resiko_dewasa', '$resiko_anak', '$resiko_geriarti', '$resiko_jiwa')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_rencana_keperawatan (no_rm, no_kunjungan, status, ket_lain)
        VALUES ( '$no_rm', '$no_kunjungan', '$status_rencana','$ket_lain')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_implementasi (no_rm, no_kunjungan, status, kolabinjek_analgesik, kolab_antipiretik, kolab_diuretik, kolab_obat, kolab_nebulizer, cairan_infus, oksigen, implemen_lain)
        VALUES ('$no_rm','$no_kunjungan','$status_implemen','$kolabinjek_analgesik','$kolabinjek_antipiretik','$kolab_diuretik','$kolab_obat','$kolab_nebulizer','$cairan_infus','$oksigen','$implemen_lain')") or die(mysqli_error($conn));
    
    mysqli_query($conn,"INSERT INTO igd_evaluasi 
        VALUES ('$no_rm','$no_kunjungan','$eval_soap')") or die(mysqli_error($conn));

    mysqli_query($conn,"INSERT INTO igd_displan
        VALUES ('$no_rm','$no_kunjungan','$kriteria')") or die(mysqli_error($conn));
    
    mysqli_query($conn,"INSERT INTO igd_tindak_lanjut (no_rm, no_kunjungan, status, rs, waktu_meninggal, pendidikan_pulang)
        VALUES ('$no_rm','$no_kunjungan','$status_tindak','$rs','$waktu_meninggal','$pendidikan_pulang')") or die(mysqli_error($conn));

    echo "Berhasil Tcoyy";
} else {
    echo "Salah";
}
