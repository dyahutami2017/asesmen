<?php include_once 'connection.php';

    //TRAISE
    if(isset($_REQUEST['kesadaran'])){
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    $triase_tanggal = $_REQUEST['tanggal_masuk'];
    $triase_waktu = $_REQUEST['jam_masuk'];
    $cara_masuk = $_REQUEST['cara_masuk'];
    $sudah_terpasang = $_REQUEST['sudah_terpasang'];
    $id_kedatangan = $_REQUEST['alasan_kedatangan'];
    $alasan_kedatangan = $_REQUEST['alasan_kedatangan_rujuk'];
    $penjemput = $_REQUEST['alasan_kedatangan_jemput'];
    $kendaraan = $_REQUEST['kendaraan'];
    $idpengantar_nama = $_REQUEST['identitas_pengantar_nama'];
    $idpengantar_telp = $_REQUEST['identitas_pengantar_no'];
    $kasus = $_REQUEST['kasus'];

    //MEKATRAUMA
    $jenis_trauma = $_REQUEST['mekanisme_trauma'];
    $keterangan = $_REQUEST['mekanisme_trauma_ket'];
    $waktu = $_REQUEST['mekanisme_trauma_waktu'];

    //TANDA VITAL
    $kesadaran = $_REQUEST['kesadaran_tanda_vital'];
    $bb = $_REQUEST['bb'];
    $tb = $_REQUEST['tb'];
    $suhu = $_REQUEST['suhu'];
    $nadi = $_REQUEST['nadi'];
    $pernafasan = $_REQUEST['pernafasan'];
    $tekanan_darah = $_REQUEST['tekanan_darah'];
    $spo2 = $_REQUEST['spo'];
    $gcs = $_REQUEST['gcs'];
    $gcs_e = $_REQUEST['gcs_e'];
    $gcs_v = $_REQUEST['gcs_v'];
    $gcs_m = $_REQUEST['gcs_m'];
    $skala_nyeri = $_REQUEST['skala_nyeri'];
    $keputusan = $_REQUEST['Keputusan'];
    $waktu_keluhan = $_REQUEST['pukul'];
    $ruang = $_REQUEST['ruang'];

    //WPSS
    $kesadaran = $_REQUEST['kesadaran'];
    $tek_darah_sis = $_REQUEST['tek_darah_sis'];
    $nadi1 = $_REQUEST['nadi_wpss'];
    $respirasi = $_REQUEST['respirasi'];
    $temperature = $_REQUEST['temperatur'];
    $satuarasi = $_REQUEST['satuarasi'];
    $total = $_REQUEST['total'];

   
    //MEDIS
    $medis_keluhan = $_REQUEST['medis_keluhan'];
    $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
    $penyakit_dulu = $_REQUEST['penyakit_dulu'];
    $penyakit_dulu = json_encode($penyakit_dulu);
    $riwayat_operasi = $_REQUEST['riwayat_op'];
    if($riwayat_operasi == ''){
        $riwayat_operasi = 'Tidak Ada';
     }
    $medis_alergi = $_REQUEST['riwayat_alergi'];
    if($medis_alergi == ''){
        $medis_alergi = 'Tidak';
     }
    $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
    if($penyakit_keluarga == ''){
        $penyakit_keluarga = 'Tidak';
     }
    $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
    if($riwayat_pengobatan == ''){
        $riwayat_pengobatan = 'Tidak';
     }
    //$pemeriksaan_fisik = " ";
    $kode_icd = $_REQUEST['kode_icd'];
    $diagnosa = $_REQUEST['diagnosa'];
    $rencana_tindakan = $_REQUEST['rencana_tindakan'];
    $edukasi_topik = $_REQUEST['edukasi_topik'];

    $sql= "INSERT INTO igd1 (no_rm, no_kunjungan, triase_tanggal, triase_waktu, cara_masuk, sudah_terpasang, id_kedatangan,alasan_kedatangan,penjemput, kendaraan, idpengantar_nama, idpengantar_telp, kasus, jenis_trauma, keterangan, waktu, kesadaran, bb, tb, suhu, nadi, pernafasan, tekanan_darah, spo2, gcs, gcs_e, gcs_v, gcs_m, skala_nyeri, keputusan, waktu_keluhan, ruang) 
    VALUES ('$no_rm','$no_kunjungan','$triase_tanggal','$triase_waktu','$cara_masuk','$sudah_terpasang','$id_kedatangan','$alasan_kedatangan','$penjemput','$kendaraan','$idpengantar_nama','$idpengantar_telp','$kasus','$jenis_trauma','Kesetrum','$waktu','$kesadaran','$bb','$tb','$suhu','$nadi','$pernafasan','$tekanan_darah','$spo2','$gcs','$gcs_e','$gcs_v','$gcs_m','$skala_nyeri','$keputusan','$waktu_keluhan','$ruang')";

    $result = mysqli_query($conn,$sql);

    mysqli_query($conn, "INSERT INTO igd_wpss (no_rm, no_kunjungan, kesadaran, tek_darah_sis, nadi, respirasi, temperature, satuarasi, total)
    VALUES ('$no_rm','$no_kunjungan','$kesadaran','$tek_darah_sis','$nadi1','$respirasi','$temperature','$satuarasi','$total')") or die(mysqli_error($conn));

    mysqli_query($conn, "INSERT INTO rm_ralan_medis (no_rm, no_kunjungan, keluhan, riwayat_sakit_sekarang, riwayat_sakit_lama, riwayat_operasi, riwayat_alergi, riwayat_sakit_keluarga, riwayat_pengobatan, diagnosa,kode_icd, rencana_tindakan, edukasi_topik)
    VALUES ('$no_rm','$no_kunjungan','$medis_keluhan','$penyakit_sekarang','$penyakit_dulu','$riwayat_operasi','$medis_alergi','$penyakit_keluarga','$riwayat_pengobatan','$diagnosa','$kode_icd','$rencana_tindakan','$edukasi_topik')") or die(mysqli_error($conn));

    echo "Jaya";
    }
?>