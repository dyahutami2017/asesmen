<?php include 'connection.php';

    //TRAISE
    
    $no_rm = rand(10, 100);
    $no_kunjungan = rand(10, 100);
    // $triase_tanggal = 1;
    // $triase_waktu =1;
    // $cara_masuk = 1;
    // $sudah_terpasang = 1;
    // $alasan_kedatangan = 1;
    // $kendaraan = 1;
    // $idpengantar_nama =1;
    // $idpengantar_telp = 1;
    // $kasus = 1;

    // //MEKATRAUMA
    // $jenis_trauma = 1;
    // $keterangan = 1;
    // $waktu =1;

    //  //TANDA VITAL
    //  $kesadaran = 1;
    //  $bb = 1;
    //  $tb = 1;
    //  $suhu = 1;
    //  $nadi = 1;
    //  $pernafasan = 1;
    //  $tekanan_darah = 1;
    //  $spo2 = 1;
    //  $gcs = 1;
    //  $gcs_e = 1;
    //  $gcs_v = 1;
    //  $gcs_m = 1;
    //  $skala_nyeri = 1;
    //  $keputusan = 1;
    //  $waktu_keluhan = 1;
    //  $ruang = 1;

    $sql=  "INSERT INTO igd_ku (no_rm, no_kunjungan) 
     VALUES ('$no_rm','$no_kunjungan')";
    $result = mysqli_query($conn,$sql);
    echo "Jaya1";

?> 