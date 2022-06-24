<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['registerDriver']))
    {  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php         
         include('../db.php'); 
// namadriver,passworddriver,alamatdriver,tanggallahirdriver,jeniskelamindriver,nomortelepondriver,nomorsimdriver,fotodriver,statusdriver,bahasadriver,suratbebasnapza,suratkesehatanjiwa,suratkesehatanjasmani,skck,tarifdriver,rerataratingdriver
    
        $namadriver = $_POST['namadriver']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $alamatdriver = $_POST['alamatdriver']; 
        $tanggallahirdriver = $_POST['tanggallahirdriver']; 
        $jeniskelamindriver = $_POST['jeniskelamindriver'];
        $emaildriver = $_POST['emaildriver'];
        $nomortelepondriver = $_POST['nomortelepondriver'];
        $nomorsimdriver = $_POST['nomorsimdriver'];
        $fotodriver = $_POST['fotodriver'];
        $statusdriver = $_POST['statusdriver'];
        $bahasadriver = $_POST['bahasadriver'];
        $suratbebasnapza = $_POST['suratbebasnapza'];
        $suratkesehatanjiwa = $_POST['suratkesehatanjiwa'];
        $suratkesehatanjasmani = $_POST['suratkesehatanjasmani'];
        $skck = $_POST['skck'];
        $tarifdriver = $_POST['tarifdriver'];
        $rerataratingdriver= $_POST['rerataratingdriver'];


        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO driver(namadriver,password,alamatdriver,tanggallahirdriver,jeniskelamindriver,emaildriver,nomortelepondriver,nomorsimdriver,fotodriver,statusdriver,bahasadriver,suratbebasnapza,suratkesehatanjiwa,suratkesehatanjasmani,skck,tarifdriver,rerataratingdriver)  
            VALUES 
            ('$namadriver','$password','$alamatdriver','$tanggallahirdriver','$jeniskelamindriver','$emaildriver','$nomortelepondriver','$nomorsimdriver','$fotodriver','$statusdriver','$bahasadriver','$suratbebasnapza','$suratkesehatanjiwa','$suratkesehatanjasmani','$skck','$tarifdriver','$rerataratingdriver')")                  
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
