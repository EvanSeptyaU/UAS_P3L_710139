
<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['registerPegawai']))
    {  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php         
         include('../db.php'); 
//namacustomer,passwordcustomer,tanggallahircustomer,emailcustomer,nomorteleponcustomer,alamatcustomer,nomorktpcustomer,nomorsimcustomer,dokumenktp,dokumensim
        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        $namapegawai= $_POST['namapegawai']; 
        $password =password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $tanggallahirpegawai= $_POST['tanggallahirpegawai']; 
        $jeniskelaminpegawai = $_POST['jeniskelaminpegawai']; 
        $emailpegawai= $_POST['emailpegawai'];
        $nomorteleponpegawai = $_POST['nomorteleponpegawai'];
        $fotopegawai = $_POST['fotopegawai'];
        $alamatpegawai = $_POST['alamatpegawai'];
        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO pegawai(namapegawai,password,tanggallahirpegawai,jeniskelaminpegawai,emailpegawai,nomorteleponpegawai,fotopegawai,alamatpegawai)  
            VALUES 
            ('$namapegawai', '$password', '$tanggallahirpegawai','$jeniskelaminpegawai','$emailpegawai','$nomorteleponpegawai','$fotopegawai','$alamatpegawai')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die” 
                
            if($query){             
                echo 
                    '<script>                 
                        alert("Register Success"); 
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
