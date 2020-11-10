<?php 

if(!$conn=mysqli_connect("localhost", "root", "")){
	echo "No. Connection Please Check Server is OFF.";
	exit;
} 

if(!$my_db = mysqli_select_db($conn, "wewillwedo")) {
	echo "No. Database Please Check Server is OFF.";
	exit;
}

//	if(!$conn=mysqli_connect("localhost", "u9023152_root", "Need4speed$$$")){
//		echo "No. Connection Please Check Server is OFF.";
//		exit;
//	} 
	
//	if(!$my_db = mysqli_select_db($conn, "u9023152_wwwd")) {
//		echo "No. Database Please Check Server is OFF.";
//		exit;
//	}
?>