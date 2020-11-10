<?php include_once "connection.php";
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    //TRIASE
    $triase_tanggal = $_REQUEST['tanggal_masuk'];
    $triase_waktu = $_REQUEST['jam_masuk'];
    $cara_masuk = $_REQUEST['cara_masuk'];
    $sudah_terpasang = $_REQUEST['sudah_terpasang'];
    $alasan_kedatangan = $_REQUEST['alasan_kedatangan'];
    $kendaraan = $_REQUEST['kendaraan'];
    $idpengantar_nama = $_REQUEST['identitas_pengantar_nama'];
    $idpengantar_telp = $_REQUEST['identitas_pengantar_no'];
    $kasus = $_REQUEST['kasus'];

    //MEKATRAUMA
    $kll_tunggal = $_REQUEST['mekanisme_trauma'];
    $kll = $_REQUEST['mekanisme_trauma'] ;
    //$kll2 = $_REQUEST['mekanisme_trauma'];
    //$kll =$kll1 ." dan " . $kll2;
    $kll_tunggal_waktu = $_REQUEST['mekanisme_trauma'];
    $kll_tunggal_tempat = $_REQUEST['mekanisme_trauma'];
    $kll_waktu = $_REQUEST['mekanisme_trauma'];
    $kll_tempat = $_REQUEST['mekanisme_trauma'];
    $jatuh_ketinggian = $_REQUEST['mekanisme_trauma'];
    $luka_bakar = $_REQUEST['mekanisme_trauma'];
    $trauma_listrik = $_REQUEST['mekanisme_trauma'];
    $trauma_kimia = $_REQUEST['mekanisme_trauma'];
    $trauma_lainnya = $_REQUEST['mekanisme_trauma'];
    $ket_jatuh_ketinggian = $_REQUEST['mekanisme_trauma'];
    $ket_luka_bakar = $_REQUEST['mekanisme_trauma'];
    $ket_trauma_listrik = $_REQUEST['mekanisme_trauma'];
    $ket_trauma_kimia = $_REQUEST['mekanisme_trauma'];
    $ket_trauma_lain = $_REQUEST['mekanisme_trauma'];

    //WPSS
    //$tanda_vital = "1";
    $kesadaran = $_REQUEST['kesadaran'];
    $tek_darah_sis = $_REQUEST['tek_darah_sis'];
    $nadi = $_REQUEST['nadi_wpss'];
    $respirasi = $_REQUEST['respirasi'];
    $temperature = $_REQUEST['temperatur'];
    $satuarasi = $_REQUEST['satuarasi'];
    $total = $_REQUEST['total'];

    //tanda vital
    $kesadaran = $_REQUEST['kesadaran_tanda_vital'];
    $bb = $_REQUEST['bb'];
    $tb = $_REQUEST['tb'];
    $suhu = $_REQUEST['suhu'];
    $nadi = $_REQUEST['nadi'];
    $nafas = $_REQUEST['pernafasan'];
    $tekanan_darah = $_REQUEST['tekanan_darah'];
    $spo2 = $_REQUEST['spo'];
    $gcs = $_REQUEST['gcs'];
    $gcs_e = $_REQUEST['gcs_e'];
    $gcs_v = $_REQUEST['gcs_v'];
    $gcs_m = $_REQUEST['gcs_m'];
    $nyeri = $_REQUEST['skala_nyeri'];
    //catatan khusus
    $keputusan = $_REQUEST['Keputusan'];
    $waktu = $_REQUEST['pukul'];
    $ruang = $_REQUEST['ruang'];

    //medis
    $medis_keluhan = $_REQUEST['medis_keluhan'];
    $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
    $penyakit_dulu = $_REQUEST['penyakit_dulu'];
    $riwayat_operasi = $_REQUEST['riwayat_op'];
    $medis_alergi = $_REQUEST['riwayat_alergi'];
    $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
    $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
    //$pemeriksaan_fisik = " ";
    $kode_icd = $_REQUEST['kode_icd'];
    $diagnosa = $_REQUEST['diagnosa'];

    $rencana_tindakan = $_REQUEST['rencana_tindakan'];
    $edukasi_topik = $_REQUEST['edukasi_topik'];

    //masalah keperawatan
    $status_masalkeper = $_REQUEST['masalah_keperawatan'];
    $status_masalkeper = json_encode($status_masalkeper);
    echo var_dump($status);

    //rencana keperawatan
    $status_rencana = $_REQUEST['rencana_keperawatan'];
    $status_rencana = json_encode($status_rencana);
    echo var_dump($status);

    //implementasi keperawatan
    $status_implemen =  $_REQUEST['implementasi_keperawatan'];
    $status_implemen = json_encode($status_implemen);
    $obat = 'Amoxilin';
    $dosis = '19';

    //evaluasi soap
    $eval_soap = $_REQUEST['evaluasi_tindak_lanjut'];
    //discharge planning
    $kriteria= $_REQUEST['kriteria'];
    //tindak lanjut
    $status_tindak = $_REQUEST['tindak_lanjut'];
    $status_tindak = json_encode($status_tindak);
    $rs = $_REQUEST['tindak_lanjut'];
    $waktu_meninggal = $_REQUEST['tindak_lanjut'];
    $pendidikan_pulang = $_REQUEST['pasien_plg'];
    $pendidikan_pulang = json_encode($pendidikan_pulang);

    mysqli_query($conn, "INSERT INTO rm_ralan_medis (no_rm, no_kunjungan, keluhan, riwayat_sakit_sekarang, riwayat_sakit_lama, riwayat_operasi, riwayat_alergi, riwayat_sakit_keluarga, riwayat_pengobatan, diagnosa,kode_icd, rencana_tindakan, edukasi_topik)
    VALUES ('$no_rm','$no_kunjungan','$medis_keluhan','$penyakit_sekarang','$penyakit_dulu','$riwayat_operasi','$medis_alergi','$penyakit_keluarga','$riwayat_pengobatan','$diagnosa','$kode_icd','$rencana_tindakan','$edukasi_topik')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_wpss (no_rm, no_kunjungan, kesadaran, tek_darah_sis, nadi, respirasi, temperature, satuarasi, total)
    VALUES ('$no_rm','$no_kunjungan','$kesadaran','$tek_darah_sis','$nadi','$respirasi','$temperature','$satuarasi','$total')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_triase (no_rm, no_kunjungan, triase_tanggal, triase_waktu, cara_masuk, sudah_terpasang, alasan_kedatangan, kendaraan, idpengantar_nama, idpengantar_telp, kasus)
    VALUES ('$no_rm','$no_kunjungan','$triase_tanggal','$triase_waktu','$cara_masuk','$sudah_terpasang','$alasan_kedatangan','$kendaraan','$idpengantar_nama','$idpengantar_telp', $kasus)") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_meka_trauma (no_rm, no_kunjungan, kll_tunggal, kll, kll_tunggal_waktu, kll_tunggal_tempat,kll_waktu, kll_tempat, jatuh_ketinggian, luka_bakar, trauma_listrik, trauma_kimia, trauma_lainnya, ket_jatuh_ketinggian, ket_luka_bakar, ket_trauma_listrik, ket_trauma_kimia, ket_trauma_lain)
    VALUES ('$no_rm','$no_kunjungan','$kll_tunggal','$kll','$kll_tunggal_waktu','$kll_tunggal_tempat','$kll_waktu','$kll_tempat','$jatuh_ketinggian','$luka_bakar','$trauma_listrik','$trauma_kimia','$trauma_lainnya',
    '$ket_jatuh_ketinggian','$ket_luka_bakar','$ket_trauma_listrik','$ket_trauma_kimia','$ket_trauma_lain')") or die(mysqli_error($conn));
    
    mysqli_query($conn, "INSERT INTO igd_rencana_keperawatan
    VALUES ( '$no_rm', '$no_kunjungan', '$status')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_ralan_masalah_keperawatan
    VALUES ( '$no_rm', '$no_kunjungan', '$status')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_implementasi (no_rm, no_kunjungan, status, nama_obat, dosis)
    VALUES ('$no_rm','$no_kunjungan','$status_implemen','$obat','$dosis')") or die(mysqli_error($conn));

    mysqli_query($conn,"INSERT INTO igd_evaluasi 
    VALUES ('$no_rm','$no_kunjungan','$eval_soap')") or die(mysqli_error($conn));

    mysqli_query($conn,"INSERT INTO igd_displan
    VALUES ('$no_rm','$no_kunjungan','$kriteria')") or die(mysqli_error($conn));

    mysqli_query($conn,"INSERT INTO igd_tindak_lanjut (no_rm, no_kunjungan, status, rs, waktu_meninggal, pendidikan_pulang)
    VALUES ('$no_rm','$no_kunjungan','$status_tindak','$rs','$waktu_meninggal','$pendidikan_pulang')") or die(mysqli_error($conn));
    
    mysqli_query($conn, "INSERT INTO igd_catatan_khusus (no_rm, no_kunjungan, keputusan, waktu, ruang)
    VALUES ('$no_rm','$no_kunjungan','$keputusan','$waktu','$ruang')") or die(mysqli_error($conn));
    
    mysqli_query($conn, "INSERT INTO rm_tanda_vital (no_rm, no_kunjungan, kesadaran, bb, tb, suhu, nadi, nafas, tekanan_darah, spo2, gcs, gcs_e, gcs_v, gcs_m, nyeri)
    VALUES ('$no_rm','$no_kunjungan','$kesadaran','$bb','$tb','$suhu','$nadi','$nafas','$tekanan_darah','$spo2','$gcs','$gcs_e','$gcs_v','$gcs_m','$nyeri')") or die(mysqli_error($conn));
    echo "1";
