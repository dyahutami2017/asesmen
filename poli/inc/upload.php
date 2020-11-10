<?php include 'connection.php';
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['name'])) {
$gambar_fungsional = $_FILES['userImage']['name'];
$file_tmp = $_FILES['userImage']['tmp_name'];
if(move_uploaded_file($file_tmp,'images/'.$gambar_fungsional)) {
    $query = mysql_query("INSERT INTO fisio_asesmen (gambar_fungsional) VALUES('$gambar_fungsional')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
?>
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
<?php
}
}
}
?>