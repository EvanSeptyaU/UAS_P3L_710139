<?php
    if(isset($_POST['editCustomer'])){

        include('../db.php');

        $id = $_POST['id'];
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

        $query = mysqli_query($con, "UPDATE customer SET namacustomer='$namacustomer', password='$password', tanggallahircustomer='$tanggallahircustomer',emailcustomer='$emailcustomer', nomorteleponcustomer='$nomorteleponcustomer',alamatcustomer='$alamatcustomer',nomorktpcustomer='$nomorktpcustomer',nomorsimcustomer='$nomorsimcustomer',dokumenktp='$dokumenktp',dokumensim='$dokumensim'  WHERE id='$id'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Customer Berhasil Diedit !"); window.location = "../page/listCustomerPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Customer Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>