<?php include_once "connection.php"; 
$no_rm = rand(10, 100);
$no_kunjungan = rand(10, 100);

$umur = "2";//$_REQUEST['umur'];
$tanggal ="2020/02/12";// $_REQUEST['tanggal'];
$dokter_rujukan = "A";//$_REQUEST['dokter_rujukan'];
$diag_medis = "B";//$_REQUEST['diag_medis'];
$tujuan_rujukan = "C";//$_REQUEST['tujuan_rujukan'];
$awal_gejala = "D";//$_REQUEST['awal_gejala'];
$awal_status_gangguan ="E";// $_REQUEST['awal_status_gangguan'];
$awal_parameter = "F";//$_REQUEST['awal_parameter'];
$awal_diag_fisio = "G";//$_REQUEST['awal_diag_fisio'];
$akhir_gejala = "H";//$_REQUEST['akhir_gejala'];
$akhir_status_gangguan = "I";// $_REQUEST['akhir_status_gangguan'];
$akhir_parameter = "J";//$_REQUEST['akhir_parameter'];
$akhir_diag_fisio = "K";//$_REQUEST['akhir_diag_fisio'];
$hambatan_keberhasilan = "L";//$_REQUEST['hambatan_keberhasilan'];
$rekomen_lanjut = "M";//$_REQUEST['rekomen_lanjut'];

mysqli_query($conn, "INSERT INTO fisio_resume (no_rm, no_kunjungan, umur, tanggal, dokter_rujukan, diag_medis, tujuan_rujukan, awal_gejala, awal_status_gangguan, awal_parameter, awal_diag_fisio, akhir_gejala, akhir_status_gangguan, akhir_parameter, akhir_diag_fisio, hambatan_keberhasilan, rekomen_lanjut)
VALUES ('$no_rm', '$no_kunjungan', '$umur', '$tanggal', '$dokter_rujukan', '$diag_medis', '$tujuan_rujukan', '$awal_gejala', '$awal_status_gangguan', '$awal_parameter', '$awal_diag_fisio', '$akhir_gejala', '$akhir_status_gangguan', '$akhir_parameter', '$akhir_diag_fisio', '$hambatan_keberhasilan', '$rekomen_lanjut' )") or die(mysqli_error($conn));
echo "Santayy disik";
?>