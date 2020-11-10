<?php include_once "connection.php"; 
$no_rm = rand(10, 100);
$no_kunjungan = rand(10, 100);

$id_pasien = $_REQUEST['id_pasien'];
$id_pasien = json_encode($id_pasien);
$hasil_periksa_awal = $_REQUEST['hasil_periksa_awal'];
$hasil_periksa_awal = json_encode($hasil_periksa_awal);
$diag_medis = $_REQUEST['diag_medis'];
$diag_medis1 = json_encode($diag_medis);
$diag_fisio = $_REQUEST['diag_fisio'];
$diag_fisio = json_encode($diag_fisio);
$tindak_terapi =$_REQUEST['tindak_terapi'];
$tindak_terapi = json_encode($tindak_terapi);
$evaluasi = $_REQUEST['evaluasi'];
$evaluasi = json_encode($evaluasi);
$rekomendasi = $_REQUEST['rekomendasi'];
$rekomendasi = json_encode($rekomendasi);
$nama = $_REQUEST['nama'];
$nama = json_encode($nama);
$fisioterpis_perujuk = $_REQUEST['fisioterapis_perujuk'];
$fisioterpis_perujuk = json_encode($fisioterpis_perujuk);
$tanggal = $_REQUEST['tanggal_2'];


$umur = $_REQUEST['umur'];
$tanggal_resume = $_REQUEST['tanggal_resume'];
$dokter_rujukan = $_REQUEST['dokter_rujukan'];
$diag_medis = $_REQUEST['diag_medis_2'];
$tujuan_rujukan = $_REQUEST['tujuan_rujukan'];
$awal_gejala = $_REQUEST['awal_gejala'];
$awal_status_gangguan = $_REQUEST['awal_status_gangguan'];
$awal_parameter = $_REQUEST['awal_status_parameter'];
$awal_diag_fisio = $_REQUEST['awal_diag_fisio'];
$akhir_gejala = $_REQUEST['akhir_gejala'];
$akhir_status_gangguan = $_REQUEST['akhir_status_gangguan'];
$akhir_parameter =$_REQUEST['akhir_status_parameter'];
$akhir_diag_fisio = $_REQUEST['akhir_diag_fisio'];
$hambatan_keberhasilan = $_REQUEST['hambatan_keberhasilan'];
$rekomen_lanjut = $_REQUEST['rekomen_lanjut'];

mysqli_query($conn, "INSERT INTO fisio_resume (no_rm, no_kunjungan, umur, tanggal, dokter_rujukan, diag_medis, tujuan_rujukan, awal_gejala, awal_status_gangguan, awal_parameter, awal_diag_fisio, akhir_gejala, akhir_status_gangguan, akhir_parameter, akhir_diag_fisio, hambatan_keberhasilan, rekomen_lanjut)
VALUES ('$no_rm', '$no_kunjungan', '$umur', '$tanggal_resume', '$dokter_rujukan', '$diag_medis', '$tujuan_rujukan', '$awal_gejala', '$awal_status_gangguan', '$awal_parameter', '$awal_diag_fisio', '$akhir_gejala', '$akhir_status_gangguan', '$akhir_parameter', '$akhir_diag_fisio', '$hambatan_keberhasilan', '$rekomen_lanjut')") or die(mysqli_error($conn));

mysqli_query($conn,"INSERT INTO fisio_rujukan (no_rm, no_kunjungan, id_pasien, hasil_periksa_awal, diag_medis, diag_fisio, tindak_terapi, evaluasi, rekomendasi, nama, fisioterpis_perujuk, tanggal)
VALUES ('$no_rm', '$no_kunjungan', '$id_pasien', '$hasil_periksa_awal', '$diag_medis1', '$diag_fisio', '$tindak_terapi', '$evaluasi', '$rekomendasi', '$nama', '$fisioterpis_perujuk', '$tanggal' )") or die(mysqli_error($conn));

echo "Tak Gebuk kalau gak iso";
?>