<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrit y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>Login Page</title> 
  
  </head> 
  <body> 
    <nav class="navbar navbar-dark bg-dark fixed-top"> 
        <div class="container"> 
            <a class="navbar-brand fw-bold" href="/uts_p3l_j_710139">ATMA JOGJA RENTAL (AJR)</a>
            <div class="d-flex justify-content-end">  
                <button class="btn btn-primary me-2" type="button" > 
                    <a class="text-light" style="text-decoration: none" href="../index.php">HOME</a>                 
                </button>
              </div> 
        </div> 
    </nav> 
 
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;"> 
            <div class="card-header fw-bold">Login Pegawai</div> 
            <div class="card-body"> 
              <form action="../process/loginPegawaiProcess.php" method="post"> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama</label> 
                  <input class="form-control" id="namapegawai" name="namapegawai" aria-describedby="namapegawai" placeholder="nama pegawai"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Password</label> 
                  <input type="password"class="form-control" id="password" name="password" placeholder="Password"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nama Jabatan</label> 
                  <select class="form-select" aria-label="Default select example" name="namajabatan" id="namajabatan">  
                    <option value="Manager">Manager</option> 
                    <option value="Administrasi">Administrasi</option>
                    <option value="Customer Service">Customer Service</option>  
                  </select> 
                </div> 
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="loginPegawai">Login</button> 
                </div> 
              </form> 
              <p class="mt-2 mb-0">Belum punya akun ? <a href="./registerPage.php" class="textprimary">Klik Disini!</a></p> 
            </div> 
          </div> 
        </div> 
    </div> 
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 
