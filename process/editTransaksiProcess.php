<?php
    if(isset($_POST['editTransaksi'])){

        include('../db.php');
        $tanggalmulaisewa = $_POST['tanggalmulaisewa']; 
        $tanggalselesaisewa =$_POST['tanggalselesaisewa']; 
        $totalbiaya = $_POST['totalbiaya']; 
        $denda = $_POST['denda'];
        $buktipembayaran = $_POST['buktipembayaran']; 
        $metodepembayaran = $_POST['metodepembayaran']; 
        $tanggaltransaksi = $_POST['tanggaltransaksi'];  
        $tanggalpengembalian = $_POST['tanggalpengembalian']; 
        $biayasubtotal = $_POST['biayasubtotal']; 
        $biayapromo= $_POST['biayapromo']; 
        $ratingdriver = $_POST['ratingdriver'];
        $komendriver = $_POST['komendriver'];
        $statusdriver = $_POST['statusdriver'];  

        $query = mysqli_query($con, "UPDATE transaksi SET tanggalmulaisewa='$tanggalmulaisewa', tanggalselesaisewa='$tanggalselesaisewa',totalbiaya='$totalbiaya',denda='$denda',buktipembayaran='$buktipembayaran',metodepembayaran='$metodepembayaran',tanggaltransaksi='$tanggaltransaksi',tanggalpengembalian='$tanggalpengembalian',biayasubtotal='$biayasubtotal',biayapromo='$biayapromo',ratingdriver='$ratingdriver',komendriver='$komendriver',statusdriver='$statusdriver' WHERE idtransaksi='$idtransaksi'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); 
                window.location = "../page/listTransaksiPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>