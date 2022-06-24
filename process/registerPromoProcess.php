<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['registerPromo']))
    {  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php         
         include('../db.php'); 

        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        //namapemilikmobil,alamatpemilikmobil,nomorteleponpemilikmobil,nomorktppemilikmobil
        $kodepromo = $_POST['kodepromo']; 
        $jenispromo =$_POST['jenispromo']; 
        $keteranganpromo = $_POST['keteranganpromo']; 
        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO promo(kodepromo,jenispromo,keteranganpromo)  
            VALUES 
            ('$kodepromo', '$jenispromo', '$keteranganpromo')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die” 
                
            if($query){             
                echo 
                    '<script>                 
                        alert("Register Promo Success"); 
                        window.location = "../page/dashboardPromo.php" 
                    </script>'; 
            }
            else
            {             
                echo 
                    '<script>                 
                        alert("Register Failed");  
                    </script>'; 
            } 
    }
    else
    {         
        echo 
            '<script>             
                window.history.back() 
            </script>'; 
    } 
?> 
