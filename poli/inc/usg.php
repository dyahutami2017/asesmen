<?php include_once "connection.php";
if(isset($_REQUEST['par_G'])){
    $no_kunjungan = rand(10, 100);
    $par_G = $_REQUEST['par_G'];
    $par_V = $_REQUEST['par_V'];
    $par_A = $_REQUEST['par_A'];
    $par_Ah = $_REQUEST['par_Ah'];
    $resiko_hamil = $_REQUEST['resiko_hamil'];
    $hpm = $_REQUEST['hpm'];
    $hpl = $_REQUEST['hpl'];
    $umur_kehamilan = $_REQUEST['umur_kehamilan'];
    $gs = $_REQUEST['gs'];
    $urine = $_REQUEST['urine'];
    $janin = $_REQUEST['janin'];
    $fh = $_REQUEST['fh'];
    $fh_jenis = $_REQUEST['fh_jenis'];
    $crl = $_REQUEST['crl'];
    $fm = $_REQUEST['fm'];
    $present_janin = $_REQUEST['present_janin'];
    $bpd = $_REQUEST['bpd'];
    $fl = $_REQUEST['fl'];
    $ac = $_REQUEST['ac'];
    $berat = $_REQUEST['berat'];
    $umur = $_REQUEST['umur'];
    $plasenta = $_REQUEST['plasenta'];
    $grade = $_REQUEST['grade'];
    $klasifikasi = $_REQUEST['klasifikasi'];
    $jml_ketuban = $_REQUEST['jml_ketuban'];
    $indeks_ketuban = $_REQUEST['indeks_ketuban'];
    $kelainan = $_REQUEST['kelainan'];
    $maymin = $_REQUEST['maymin'];
    $sex = $_REQUEST['sex'];
    $kelainan_uterus = $_REQUEST['kelainan_uterus'];
    $kesimpulan = $_REQUEST['kesimpulan'];

    mysqli_query($conn, "INSERT INTO usg
    VALUES ( '$no_kunjungan','$par_G', '$par_V','$par_A','$par_Ah', '$resiko_hamil', '$hpm', '$hpl','$umur_kehamilan', '$gs', '$urine', 
    '$janin', '$fh', '$fh_jenis', '$crl', '$fm', '$present_janin', '$bpd', '$fl', '$ac', '$berat', '$umur', '$plasenta', 
    '$grade', '$klasifikasi', '$jml_ketuban', '$indeks_ketuban', '$kelainan' , '$maymin', '$sex', '$kelainan_uterus', '$kesimpulan' )") or die(mysqli_error($conn));

    echo "Berhasil";
}   
?>