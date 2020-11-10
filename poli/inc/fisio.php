<?php include_once "connection.php"; 
$no_rm = rand(10, 100);
$no_kunjungan = rand(10, 100);

$status = $_REQUEST['status'];
$tanggal = $_REQUEST['tanggal'];
$jam = $_REQUEST['jam'];
$anamnese = $_REQUEST['anamnese'];
$keluhan_utama = $_REQUEST['keluhan_utama'];
$riwayat_sakit_baru = $_REQUEST['riwayat_sakit_baru'];
$riwayat_sakit_dulu = $_REQUEST['riwayat_sakit_dulu'];
$td = $_REQUEST['td'];
$hr = $_REQUEST['hr'];
$suhu = $_REQUEST['suhu'];
$rr = $_REQUEST['rr'];
$skor_nyeri = $_REQUEST['skor_nyeri'];
$kemam_fungsional = $_REQUEST['kemam_fungsional'];
$ket_kemam_fung = $_REQUEST['ket_kemam_fung'];


$gambar_fungsional = $_FILES['file']['name'];
echo ($gambar_fungsional);
    // $nama = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];		
 move_uploaded_file($file_tmp, 'images'.$gambar_fungsional);


//$gambar_fungsional = $_REQUEST['gambar_fungsional'];

//Pemeriksaan Sistemik Khusus
$musculoskeletal = $_REQUEST['musculoskeletal'];
$neuromuscular = $_REQUEST['neuromuscular'];
$cardio_pulmonal = $_REQUEST['cardio_pulmonal'];
$integument = $_REQUEST['integument'];

//Pengukuran Khusus
$musculoskeletal = $_REQUEST['musculoskeletal_pengukuran'];
$neuromuscular = $_REQUEST['neuromuscular_pengukuran'];
$cardio_pulmonal = $_REQUEST['cardio_pulmonal_pengukuran'];
$integument = $_REQUEST['integument_pengukuran'];

//Data Penunjang
$radiologi = $_REQUEST['radiologi'];
$emg = $_REQUEST['emg'];
$laboratorium = $_REQUEST['laboratorium'];
$ket_lain = $_REQUEST['ket_lain'];

//Diagnosis Fisioterapi
$impairment = $_REQUEST['Impairment'];
$activity_limitation = $_REQUEST['activity_limitation'];
$participation_restriction = $_REQUEST['participation_restriction'];
$program_terapi = $_REQUEST['program_terapi'];
$intervensi_tanggal = $_REQUEST['intervensi_tanggal'];

$intervensi_gambar = $_FILES['file2']['name'];
echo ($intervensi_gambar);
    // $nama = $_FILES['file']['name'];
$file_tmp = $_FILES['file2']['tmp_name'];		
 move_uploaded_file($file_tmp, 'images'.$intervensi_gambar);
// $intervensi_gambar = $_REQUEST['intervensi_gambar'];
$intervensi_ket = $_REQUEST['intervensi_ket'];
$evaluasi = $_REQUEST['evaluasi'];


mysqli_query($conn, "INSERT INTO fisio_asesmen (no_rm, no_kunjungan, status, tanggal, jam, anamnese, keluhan_utama, riwayat_sakit_baru, riwayat_sakit_dulu, td, hr, suhu, rr, skor_nyeri, kemam_fungsional, ket_kemam_fung, gambar_fungsional)
VALUES ('$no_rm', '$no_kunjungan', '$status', '$tanggal', '$jam', '$anamnese', '$keluhan_utama', '$riwayat_sakit_baru', '$riwayat_sakit_dulu', '$td', '$hr', '$suhu', '$rr', '$skor_nyeri', '$kemam_fungsional', '$ket_kemam_fung','$gambar_fungsional')") or die(mysqli_error($conn));

mysqli_query($conn, "INSERT INTO fisio_sistemik_khusus (no_rm, no_kunjungan, musculoskeletal, neuromuscular, cardio_pulmonal, integument)
VALUES ('$no_rm', '$no_kunjungan', '$musculoskeletal', '$neuromuscular', '$cardio_pulmonal', '$integument' )") or die(mysqli_error($conn));

mysqli_query($conn, "INSERT INTO fisio_pengukuran_khusus (no_rm, no_kunjungan, musculoskeletal, neuromuscular, cardio_pulmonal, integument)
VALUES ('$no_rm', '$no_kunjungan', '$musculoskeletal', '$neuromuscular', '$cardio_pulmonal', '$integument' )") or die(mysqli_error($conn));

mysqli_query($conn, "INSERT INTO fisio_data_penunjang (no_rm, no_kunjungan, radiologi, emg, laboratorium, ket_lain)
VALUES ('$no_rm', '$no_kunjungan', '$radiologi', '$emg', '$laboratorium', '$ket_lain' )") or die(mysqli_error($conn));

mysqli_query($conn, "INSERT INTO fisio_diag_fisio (no_rm, no_kunjungan, impairment, activity_limitation, participation_restriction)
VALUES ('$no_rm', '$no_kunjungan', '$impairment', '$activity_limitation', '$participation_restriction' )") or die(mysqli_error($conn));

mysqli_query($conn, "INSERT INTO fisio_terapi (no_rm, no_kunjungan, program_terapi, intervensi_tanggal,intervensi_gambar, intervensi_ket, evaluasi)
VALUES ('$no_rm', '$no_kunjungan', '$program_terapi', '$intervensi_tanggal','$intervensi_gambar','$intervensi_ket', '$evaluasi' )") or die(mysqli_error($conn));

echo "Berhasil Tcoy";
?>