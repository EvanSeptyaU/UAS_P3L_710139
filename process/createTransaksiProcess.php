<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addTransaksi'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
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


        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO transaksi(tanggalmulaisewa,tanggalselesaisewa,totalbiaya,denda,buktipembayaran,metodepembayaran,tanggaltransaksi,tanggalpengembalian,biayasubtotal,biayapromo,ratingdriver,komendriver,statusdriver)  
            VALUES 
            ('$tanggalmulaisewa', '$tanggalselesaisewa', '$totalbiaya','$denda','$buktipembayaran','$metodepembayaran','$tanggaltransaksi','$tanggalpengembalian','$biayasubtotal','$biayapromo','$ratingdriver','$komendriver','$statusdriver')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Register Success"); 
                    window.location = "../page/listPemilikMobilPage.php"
                </script>';
        }else{
            echo 
                '<script>
                    alert("Register Failed");
                </script>';
        }
    }else{
        echo 
            '<script>
                window.history.back()
            </script>';
    }
?>