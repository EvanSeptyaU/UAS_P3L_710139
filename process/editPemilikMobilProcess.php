<?php
    if(isset($_POST['editPemilikMobil'])){

        include('../db.php');
        $idpemilikmobil = $_POST['idpemilikmobil'];
        $namapemilikmobil = $_POST['namapemilikmobil']; 
        $alamatpemilikmobil =$_POST['alamatpemilikmobil']; 
        $nomorteleponpemilikmobil = $_POST['nomorteleponpemilikmobil']; 
        $nomorktppemilikmobil = $_POST['nomorktppemilikmobil']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        $query = mysqli_query($con, "UPDATE pemilikmobil SET namapemilikmobil='$namapemilikmobil', alamatpemilikmobil='$alamatpemilikmobil',nomorteleponpemilikmobil='$namapemilikmobil',nomorktppemilikmobil='$nomorktppemilikmobil', password='$password' WHERE id='$id'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); 
                window.location = "../page/listPemilikMobilPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>