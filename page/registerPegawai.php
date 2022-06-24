<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>Register Page</title> 
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
  <!-- namacustomer,passwordcustomer,tanggallahircustomer,emailcustomer,nomorteleponcustomer,alamatcustomer,nomorktpcustomer,nomorsimcustomer,dokumenktp,dokumensim-->
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold text-center">Register Pegawai</div> 
            <div class="card-body"> 
             
             <form action="../process/registerPegawaiProcess.php" method="post"> 
           
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama</label> 
                  <input class="form-control" id="namapegawai" name="namapegawai" aria-describedby="namapegawai" placeholder="nama pegawai"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Password</label> 
                  <input type="password"class="form-control" id="password" name="password" placeholder="Password"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label> 
                  <input class="form-control" id="tanggallahirpegawai" name="tanggallahirpegawai" aria-describedby="tanggallahirpegawai" type="date"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label> 
                  <select class="form-select" aria-label="Default select example" name="jeniskelaminpegawai" id="jeniskelaminpegawai"> 
                    <option value="bahasaD">....</option>
                    <option value="Pria">Wanita</option> 
                    <option value="Wanita">Pria</option> 
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Email</label> 
                  <input class="form-control" id="emailpegawai" name="emailpegawai" placeholder="email pegawai" aria-describedby="emailpegawai"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomorteleponpegawai" name="nomorteleponpegawai" aria-describedby="nomorteleponpegawai" placeholder="Nomor Telepon"> 
                </div>  
                <div class="mb-3">
                    <label> Foto Pegawai :</label>
                    <input type="file" name="fotopegawai" id="fotopegawai"><br>
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatpegawai" name="alamatpegawai" aria-describedby="alamatpegawai" placeholder="alamat pegawai"> 
                </div> 
                
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="registerPegawai">Register</button> 
                </div> 

             </form> 

              <p class="mt-2 mb-0 text-center">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p> 
            </div> 
          </div> 
        </div> 
    </div> 
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 
