<?php 
    // ini buat ngecek tombol yang namenya 'register' sudah di pencet atau belum 
    // $_POST itu method di formnya    
     if(isset($_POST['loginCustomer'])){  
     
        include('../db.php'); // untuk mengoneksikan dengan databas dengan memanggil file db.php  
        //tampung nilai yang ada di from ke variable 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        $namacustomer = $_POST['namacustomer']; 
        $password= $_POST['password']; 
 
        // Melakukan insert ke databse dengan query dibawah ini 
    $query = mysqli_query($con,
    "SELECT * FROM customer WHERE namacustomer = '$namacustomer'") or die(mysqli_error($con));         
// ini buat ngecek kalo misalnya hasil dari querynya == 0 ato ga ketemu -> usernamenya tdk ditemukan         
    if(mysqli_num_rows($query) == 0)
    {              
        echo 
            '<script>                 
                alert("Customer not found!"); 
                window.location = "../page/loginCustomer.php"                 
            </script>'; 
    }
    else
    { 
        $user = mysqli_fetch_assoc($query);             
        if(password_verify($password, $user['password'])){ 
                // session adalah variabel global sementara yang disimpen di server  
                // buat mulai sessionnya pake session_start()                 
            session_start(); 
                //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum 
            $_SESSION['isLogin'] = true;                  
            $_SESSION['user'] = $user;                 
            echo 
                '<script>                     
                    alert("Login Success"); 
                    window.location = "../page/dashboardCustomerPage.php"                     
                </script>'; 
            }
            else 
            {                 
                echo 
                    '<script>                     
                        alert("Nama dan Password Invalid");                      
                        window.location = "../page/loginCustomer.php" 
                    </script>'; 
            } 
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

