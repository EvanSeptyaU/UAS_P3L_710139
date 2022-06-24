<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addCustomer'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $namacustomer = $_POST['namacustomer']; 
        $password =password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $tanggallahircustomer = $_POST['tanggallahircustomer']; 
        $emailcustomer = $_POST['emailcustomer']; 
        $nomorteleponcustomer = $_POST['nomorteleponcustomer'];
        $alamatcustomer = $_POST['alamatcustomer'];
        $nomorktpcustomer = $_POST['nomorktpcustomer'];
        $nomorsimcustomer = $_POST['nomorsimcustomer'];
        $dokumenktp = $_POST['dokumenktp'];
        $dokumensim = $_POST['dokumensim'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,  
            "INSERT INTO customer(namacustomer,password,tanggallahircustomer,emailcustomer,nomorteleponcustomer,alamatcustomer,nomorktpcustomer,nomorsimcustomer,dokumenktp,dokumensim)  
            VALUES 
            ('$namacustomer', '$password', '$tanggallahircustomer','$emailcustomer','$nomorteleponcustomer','$alamatcustomer','$nomorktpcustomer','$nomorsimcustomer','$dokumenktp','$dokumensim')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Register Success"); 
                    window.location = "../page/listCustomerPage.php"
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