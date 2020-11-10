<?php include_once "connection.php";
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
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
    $nadi1 = $_REQUEST['nadi_wpss'];
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

    mysqli_query($conn, "INSERT INTO igd_wpss (no_rm, no_kunjungan, kesadaran, tek_darah_sis, nadi, respirasi, temperature, satuarasi, total)
    VALUES ('$no_rm','$no_kunjungan','$kesadaran','$tek_darah_sis','$nadi1','$respirasi','$temperature','$satuarasi','$total')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_triase (no_rm, no_kunjungan, triase_tanggal, triase_waktu, cara_masuk, sudah_terpasang, alasan_kedatangan, kendaraan, idpengantar_nama, idpengantar_telp, kasus)
    VALUES ('$no_rm','$no_kunjungan','$triase_tanggal','$triase_waktu','$cara_masuk','$sudah_terpasang','$alasan_kedatangan','$kendaraan','$idpengantar_nama','$idpengantar_telp', $kasus)") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO igd_meka_trauma (no_rm, no_kunjungan, kll_tunggal, kll, kll_tunggal_waktu, kll_tunggal_tempat,kll_waktu, kll_tempat, jatuh_ketinggian, luka_bakar, trauma_listrik, trauma_kimia, trauma_lainnya, ket_jatuh_ketinggian, ket_luka_bakar, ket_trauma_listrik, ket_trauma_kimia, ket_trauma_lain)
    VALUES ('$no_rm','$no_kunjungan','$kll_tunggal','$kll','$kll_tunggal_waktu','$kll_tunggal_tempat','$kll_waktu','$kll_tempat','$jatuh_ketinggian','$luka_bakar','$trauma_listrik','$trauma_kimia','$trauma_lainnya',
    '$ket_jatuh_ketinggian','$ket_luka_bakar','$ket_trauma_listrik','$ket_trauma_kimia','$ket_trauma_lain')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_tanda_vital (no_rm, no_kunjungan, kesadaran, bb, tb, suhu, nadi, nafas, tekanan_darah, spo2, gcs, gcs_e, gcs_v, gcs_m, nyeri)
    VALUES ('$no_rm','$no_kunjungan','$kesadaran','$bb','$tb','$suhu','$nadi','$nafas','$tekanan_darah','$spo2','$gcs','$gcs_e','$gcs_v','$gcs_m','$nyeri')") or die(mysqli_error($conn));
    echo "Berhasil";

?>