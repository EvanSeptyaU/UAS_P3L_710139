<?php
    if(isset($_GET['idpemilikmobil'])){
        include ('../db.php');
        $idpemilikmobil = $_GET['idpemilikmobil'];
        $queryDelete = mysqli_query($con, "DELETE FROM pemilikmobil WHERE idpemilikmobil='$idpemilikmobil'") or die(mysqli_error($con));
        if($queryDelete){
            echo '<script>alert("Delete Success"); window.location = "../page/listPemilikMobilPage.php"</script>';
        }else{
            echo '<script>alert("Delete Failed"); window.location = "../page/listPemilikMobilPage.php"</script>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }
?>