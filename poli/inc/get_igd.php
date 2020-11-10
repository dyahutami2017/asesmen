<?php
	include_once "../../inc/connection.php";
	session_start();
	$query = mysqli_query($conn, "select * from 
									igd1 join igd_wpss on igd1.no_kunjungan = igd_wpss.no_kunjungan 
									join rm_ralan_medis on igd_wpss.no_kunjungan = rm_ralan_medis.no_kunjungan
									where igd1.no_kunjungan='".$_REQUEST['no_kunjungan']."'"
	);
	$num = mysqli_num_rows($query);

	if ($num > 0) {
		$response["posts"]      = array();
		$post             	= array(); 	
		$ang_ke = 1; 
		$row = mysqli_fetch_array($query);	
				
		$date1 = $row['tgl_lahir'];
		$date2 = date("Y-m-d");

		$diff = abs(strtotime($date2) - strtotime($date1));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		
		$post["no_rm"]				= $row["no_rm"];
		$post["no_kunjungan"] 		= $row["no_kunjungan"];
		$post["triase_tanggal"]		= $row["triase_tanggal"];
		$post["triase_waktu"] 		= $row["triase_waktu"];
		$post["cara_masuk"]			= $row["cara_masuk"];
		$post["sudah_terpasang"]	= $row["sudah_terpasang"];
		$post["id_kedatangan"]		= $row["id_kedatangan"];
		$post["alasan_kedatangan"]	= $row["alasan_kedatangan"];
		$post["penjemput"]			= $row["penjemput"];
		$post["kendaraan"]			= $row["kendaraan"];
		
		$post["id_pengantar_nama"]	= $row["id_pengantar_nama"];
		$post["idpengantar_telp"]	= $row["idpengantar_telp"];
		$post["kasus"]				= $row["kasus"];
		$post["jenis_trauma"]		= $row["jenis_trauma"];
		$post["keterangan"]			= $row["keterangan"];
		$post["waktu"]				= $row["waktu"];
		$post["kesadaran"]			= $row["kesadaran"];
		$post["bb"]					= $row["bb"];
		$post["tb"]					= $row["tb"];
		$post["suhu"]				= $row["suhu"];
		$post["nadi"]				= $row["nadi"];
		$post["pernafasan"]			= $row["pernafasan"];
		$post["tekanan_darah"]		=$row['tekanan_darah'];
		$post["spo2"]				= $row["spo2"];
		$post["gcs"]				= $row["gcs"];
		$post["gcs_e"]				= $row["gcs_e"];
		$post["gcs_v"]				= $row["gcs_v"];
		$post["gcs_m"]				=$row['gcs_m'];
		$post["skala_nyeri"]		= $row["skala_nyeri"];
		$post["keputusan"]			=$row['keputusan'];
		$post["waktu_keluhan"]		= $row["waktu_keluhan"];
		$post["ruang"]				= $row["ruang"];
		$post["gcs_e"]				= $row["gcs_e"];
		$post["gcs_v"]				= $row["gcs_v"];
		$post["gcs_m"]				=$row['gcs_m'];
		
		array_push($response["posts"], $post);
		
			
		$response["success"] = 1;
		$response["message"] = "Post Available!";
		echo json_encode($response);
	} 
	else {
		$response["success"] = 0;
		$response["message"] = "No Post Available!";
		die(json_encode($response));
	}

?>