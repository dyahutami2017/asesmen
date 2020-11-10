<?php 
    include_once "connection.php";
        //var_dump($_REQUEST);
        // if (isset($_REQUEST['submit'])) {
        $no_rm = rand(10, 100);
        $no_kunjungan = rand(10, 100);
        $tinggi_badan = $_REQUEST['tinggi_badan'];
        $berat_badan = $_REQUEST['berat_badan'];
        $tekanan_darah =$_REQUEST['tekanan_darah'];
        $nadi = $_REQUEST['nadi'];
        $visus_od =$_REQUEST['visus_od'];
        $visus_os =$_REQUEST['visus_os'];
        $pterygium = $_REQUEST['pterygium'];
        $butawarna = $_REQUEST['buta_warna'];
        $butawarna_dtl =  $_REQUEST['part_total'];
        $tonsil = $_REQUEST['tonsil'];
        $telingaperforasi = $_REQUEST['telinga_perforasi'];
        $telingaperforasi_size =$_REQUEST['telingaperforasi_size'];
        $jantung_paru = $_REQUEST['jantung_paru'];
        $hepar_lien = $_REQUEST['hepar_lien'];
        $temor = $_REQUEST['temor'];
        $temor_dtl = $_REQUEST['temor_rsb'];
        $tremor = $_REQUEST['tremor'];
        $tremor_dtl = $_REQUEST['rsb_tremor'];
        $tinea_versicolor = $_REQUEST['tinea_versicolor'];
        $hiperpegmentasi = $_REQUEST['hiperpegmentasi'];
        $tatto_tindik = $_REQUEST['tato_tindik'];
        $vertebra = $_REQUEST['vertebra'];
        $vertebra_dtl =$_REQUEST['vertebra_rsb'];
        $xo_been = $_REQUEST['xo_been'];
        $varises = $_REQUEST['varises'];
        $pes_planus =$_REQUEST['pes_planus'];
        $varicocele =$_REQUEST['variscocele'];
        $varicocele_dtl =$_REQUEST['variscocele_dtl'];
        $haemororid = $_REQUEST['haemoroid'];
        $haemororid_dtl =$_REQUEST['haemoroid_at'];
        $hernia = $_REQUEST['hernia'];
        $gigi = $_REQUEST['gigi'];

        mysqli_query($conn, "INSERT INTO gcu (no_rm, no_kunjungan, tinggi_badan, berat_badan, tekanan_darah, nadi, visus_od, visus_os, pterygium, butawarna, butawarna_dtl, tonsil, telingaperforasi, telingaperforasi_size, jantung_paru, hepar_lien, temor, temor_dtl, tremor, tremor_dtl, tinea_versicolor, hiperpegmentasi, tatto_tindik, vertebra, vertebra_dtl, xo_been, varises, pes_planus, varicocele, varicocele_dtl, haemoroid, haemoroid_dtl, hernia, gigi)
        VALUES ('$no_rm','$no_kunjungan','$tinggi_badan','$berat_badan','$tekanan_darah',
        '$nadi','$visus_od','$visus_os','$pterygium','$butawarna','$butawarna_dtl','$tonsil',
        '$telingaperforasi','$telingaperforasi_size','$jantung_paru','$hepar_lien','$temor',
        '$temor_dtl','$tremor','$tremor_dtl','$tinea_versicolor','$hiperpegmentasi','$tatto_tindik',
        '$vertebra','$vertebra_dtl','$xo_been','$varises','$pes_planus','$varicocele',
        '$varicocele_dtl','$haemororid','$haemororid_dtl','$hernia','$gigi')") or die(mysqli_error($conn));
        echo "1";
    
    // }
    // else {
    //     echo "-1";
    // }
    
?>