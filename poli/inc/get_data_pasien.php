<?php
	include_once "../../inc/connection.php";
	session_start();
	$query = mysqli_query($conn, "select rk.no_kunjungan, p.no_rm, p.nama, rko.alamat, p.jenis_kelamin, ri.id_unit, jp.jenispasien, mj.nama_jaminan, ul.nama_unit, rk.waktu, 
									p.tgl_lahir, pen.nama_pendidikan, pkr.nm_pekerjaan, ag.agama, pag.pangkat, kes.kesatuan,  ra.nrp, p.gol_darah, ra.id_kesatuan, pen.nama_pendidikan,
									igd.id_dokter, igd.id_kasus, igd.klasifikasi, igd.kondisi_pulang, igd.sts_kedatangan, igd.kondisi_datang, ri.cara_bayar, rk.resiko_jatuh, 
									ksr.total, rs.id_rumah_sakit
								FROM rm_rujukan_internal ri 
								LEFT JOIN rm_kunjungan rk on rk.no_kunjungan = ri.no_kunjungan 								
								left join unit_layanan ul on ul.id_unit=ri.id_unit 
								LEFT JOIN rm_personal p on p.no_rm=rk.no_rm 
								LEFT JOIN jenis_pasien jp ON jp.id=p.jenis_pasien 	
								LEFT JOIN model_jaminan mj on mj.id_model=rk.model_jaminan 
								left join rm_kontak rko on rko.no_rm=p.no_rm
								left join rm_anggota ra on ra.no_rm=p.no_rm
								left join rm_keluarga rkel on rkel.no_rm = p.no_rm
								left join kelurahan kel on kel.id = rko.idkelurahan
								left join kecamatan kec on kec.id = rko.idkecamatan
								left join kabupaten kab on kab.id = rko.idkabupaten 
								left join pendidikan pen on pen.id_pendidikan = p.pendidikan
								left join agama ag on ag.id = p.agama
								left join pekerjaan pkr on pkr.id_pekerjaan = p.pekerjaan
								left join pangkat pag on pag.kode = ra.id_pangkat
								left join kesatuan kes on kes.id=ra.id_kesatuan 
								left join igd_register igd on igd.no_kunjungan=rk.no_kunjungan
								left join igd_rujukan_eksternal rs on rs.no_kunjungan=igd.no_kunjungan 
								left join kasir_ralan ksr on ksr.no_kunjungan=igd.no_kunjungan AND ksr.id_unit = '01'
							  where rk.no_kunjungan='".$_REQUEST['no_kunjungan']."' AND ri.id_unit='01' ");
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
		
		$post["no_rm"]		 	= $row["no_rm"];
		$post["nama_pasien"] 	= $row["nama"];
		$post["umur"]		 	= $years." Tahun";
		$post["alamat"]		 	= $row["alamat"];
		$post["jenis_pasien"]	= $row["jenispasien"];
		$post["model_jaminan"]	= $row["nama_jaminan"];
		
		$post["id_dokter"]	 	= $row["id_dokter"];
		$post["kasus"]	 		= $row["id_kasus"];
		$post["klasifikasi"]	= $row["klasifikasi"];
		$post["kondisi_pulang"]	= $row["kondisi_pulang"];
		$post["tgl_periksa"]	= $row["waktu"];
		$post["kondisi_datang"]	= $row["kondisi_datang"];
		$post["sts_kedatangan"]	= $row["sts_kedatangan"];
		$post["cara_bayar"]		= $row["cara_bayar"];
		$post["resiko_jatuh"]	= $row["resiko_jatuh"];
		$post["total_ksr"]		= $row["total"];
		$post["id_rumah_sakit"]	= $row["id_rumah_sakit"];
		$post["user_lvl"]		= $_SESSION['adm_id_unit'];

		
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