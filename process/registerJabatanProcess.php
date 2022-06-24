<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['registerJabatan']))
    {  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php         
         include('../db.php'); 
//namacustomer,passwordcustomer,tanggallahircustomer,emailcustomer,nomorteleponcustomer,alamatcustomer,nomorktpcustomer,nomorsimcustomer,dokumenktp,dokumensim
        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        $namajabatan = $_POST['namajabatan'];
        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO jabatan(namajabatan)  
            VALUES 
            ('$namajabatan')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die” 
                
            if($query){             
                echo 
                    '<script>                 
                        alert("Register Jabatan Success"); 
                        window.location = "../index.php" 
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
