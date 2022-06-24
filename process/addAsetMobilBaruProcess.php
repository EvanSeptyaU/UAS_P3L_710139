<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addAsetMobilBaru'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
//namamobil,tipemobil,jenisbahanbakar,jenistransmisi,warnamobil,fasilitasmobil,tarifsewamobil,kapasitaspenumpang,platnomor,volumebahanbakar,nomorstnk,periodekontrakmulai,periodekontrakakhir,tanggalakhirservice,fotomobil-->
              
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $namamobil = $_POST['namamobil']; 
        $tipemobil =$_POST['tipemobil']; 
        $jenisbahanbakar = $_POST['jenisbahanbakar']; 
        $jenistransmisi= $_POST['jenistransmisi']; 
        $warnamobil = $_POST['warnamobil'];
        $fasilitasmobil = $_POST['fasilitasmobil'];
        $tarifsewamobil = $_POST['tarifsewamobil'];
        $kapasitaspenumpang = $_POST['kapasitaspenumpang'];
        $platnomor = $_POST['platnomor'];
        $volumebahanbakar = $_POST['volumebahanbakar'];
        $nomorstnk= $_POST['nomorstnk'];
        $periodekontrakmulai= $_POST['periodekontrakmulai'];
        $periodekontrakakhir= $_POST['periodekontrakakhir'];
        $tanggalakhirservice= $_POST['tanggalakhirservice'];
        $fotomobil= $_POST['fotomobil'];


        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,  
            "INSERT INTO mobil(namamobil,tipemobil,jenisbahanbakar,jenistransmisi,warnamobil,fasilitasmobil,tarifsewamobil,kapasitaspenumpang,platnomor,volumebahanbakar,nomorstnk,periodekontrakmulai,periodekontrakakhir,tanggalakhirservice,fotomobil)  
            VALUES 
            ('$namamobil', '$tipemobil', '$jenisbahanbakar','$jenistransmisi','$warnamobil','$fasilitasmobil','$tarifsewamobil','$kapasitaspenumpang','$platnomor','$volumebahanbakar','$nomorstnk','$periodekontrakmulai','$periodekontrakakhir','$tanggalakhirservice','$fotomobil')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Register Success"); 
                    window.location = "../page/listMobilPage.php"
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