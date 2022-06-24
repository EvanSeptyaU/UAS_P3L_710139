<?php
    if(isset($_POST['editDriver'])){

        include('../db.php');

        $id = $_POST['id'];
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

        $query = mysqli_query($con, "UPDATE driver SET namadriver='$namadriver',password='$password',alamatdriver='$alamatdriver',tanggallahirdriver='$tanggallahirdriver',jeniskelamindriver='$jeniskelamindriver',emaildriver='$emaildriver',nomortelepondriver='$nomortelepondriver',nomorsimdriver='$nomorsimdriver',fotodriver='$fotodriver',statusdriver='$statusdriver',bahasadriver='$bahasadriver',suratbebasnapza='$suratbebasnapza',suratkesehatanjiwa='$suratkesehatanjiwa',suratkesehatanjasmani='$suratkesehatanjasmani',skck='$skck',tarifdriver='$tarifdriver',rerataratingdriver='$rerataratingdriver' WHERE id='$id'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); window.location = "../page/listDriverPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>