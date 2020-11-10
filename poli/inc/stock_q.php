<?php
	include_once "../../inc/connection.php";	
	if(isset($_REQUEST['STK'])){
		$date_now = date("Y-m-d");
		$tgl_expire 	= date("Y-m-d", strtotime($_REQUEST['tgl_expire'])); 
		if($tgl_expire > $date_now){
			$id_obat 		= $_REQUEST['id_obat'];
			$id_hrg 		= $_REQUEST['id_hrg'];
			$stok_akhir		= $_REQUEST['stok_akhir']; 
			$satuan_order 	= $_REQUEST['satuan'];
			
			$tgl 			= date("Y-m-d");
			$m_stk 			= date("m"); 
			$y_stk 			= date("Y"); 
			
			$ceks = mysqli_query($conn, "select * from obat_stock where id_obat='$id_obat' AND  YEAR(tgl_stok) = '$y_stk' AND MONTH(tgl_stok) = '$m_stk' ");
			$arps = mysqli_num_rows($ceks);
			if($arps > 0){
				mysqli_query($conn, "UPDATE obat_stock SET stok_awal='0', stok_akhir='$stok_akhir', id_satuan='$satuan_order', tgl_ed='$tgl_expire' 
									 WHERE id_obat='$id_obat' AND  YEAR(tgl_stok) = '$y_stk' AND MONTH(tgl_stok) = '$m_stk' ");
				//echo "DD".$id_obat.", ".$y_stk.", ".$m_stk;
			}
			else{
				mysqli_query($conn, "INSERT INTO obat_stock (id_obat, stok_awal, stok_akhir, id_satuan, tgl_ed, tgl_stok) 
												VALUES ('$id_obat', '0', '$stok_akhir', '$satuan_order',  '$tgl_expire', '$tgl') ");			
			}
			echo "1";
		}
		else
			echo "-1";
	}
	if(isset($_REQUEST['STKLAMA'])){
		$date_now = date("Y-m-d");
		$tgl_expire 	= date("Y-m-d", strtotime($_REQUEST['tgl_expire'])); 
		if($tgl_expire > $date_now){
			$id_obat 		= $_REQUEST['id_obat'];
			$id_hrg 		= $_REQUEST['id_hrg'];
			$stok_akhir		= $_REQUEST['stok_akhir']; 
			$satuan_order 	= $_REQUEST['satuan'];
			
			$tgl 			= date("Y-m-d");
			$bln 			= date("m");
			$thn 			= date("Y");
			mysqli_query($conn, "UPDATE obat SET stock='$stok_akhir', expire_date='$tgl_expire' WHERE id_obat='$id_obat' ");
			
			$crm = mysqli_query($conn, "select * from obat_stock where id_obat='$id_obat' and MONTH(tgl) = '$bln' and YEAR(tgl) = '$thn' ");
			$nrm = mysqli_num_rows($crm);
			if($nrm < 1){
				mysqli_query($conn, "INSERT INTO  obat_stock (id_obat, stock,  tgl, id_satuan, tgl_ed)
												VALUES('$id_obat', '$stok_akhir', '$tgl', '$satuan_order', '$tgl_expire')  ");
				mysqli_query($conn, "UPDATE obat_hrg SET id_satuan='$satuan_order' WHERE id_hrg='$id_hrg' ");
			}
			else{
				mysqli_query($conn, "UPDATE obat_stock SET stock='$stok_akhir', tgl_ed='$tgl_expire', id_satuan='$satuan_order' WHERE id_obat='$id_obat' and MONTH(tgl) = '$bln' and YEAR(tgl) = '$thn' ");
				mysqli_query($conn, "UPDATE obat_hrg SET id_satuan='$satuan_order' WHERE id_hrg='$id_hrg' ");
			}
			echo "1";
		}
		else
			echo "-1";
	}
	
	if(isset($_REQUEST['STS'])){	
		$id_obat 	= $_REQUEST['id'];
		$sts 		= $_REQUEST['status'];
		mysqli_query($conn, "UPDATE obat set status_obat ='$sts'  WHERE id_obat='$id_obat' ");
		echo "1";
	}
	
	if(isset($_REQUEST['DEL'])){
		$id = $_REQUEST['id'];
		mysqli_query($conn, "DELETE FROM obat WHERE id_obat='$id' ");
		mysqli_query($conn, "DELETE FROM obat_hrg WHERE id_obat='$id' ");
		mysqli_query($conn, "DELETE FROM obat_stock WHERE id_obat='$id' ");
		echo "1";
	}
	mysqli_close($conn);
?>