<?php
    include 'connection.php';

    if(isset($_GET['kode'])){
        $kode = $_GET['kode'];
        $query = "select * from rm_ralan_medis where rm_ralan_medis.no_rm =" .$kode;

        $result = $conn->query($query);
        if(!empty($result) && $result->num_rows > 0){
            //while
            ($row=$result->fetch_assoc())
            //{
                ?>
                Nama : <?php echo $row["keluhan"]?><br>
                <?php
             //}
        }
    }

?>