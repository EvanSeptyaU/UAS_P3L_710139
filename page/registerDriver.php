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
 <!-- namadriver,passworddriver,alamatdriver,tanggallahirdriver,jeniskelamindriver,nomortelepondriver,nomorsimdriver,fotodriver,statusdriver,bahasadriver,suratbebasnapza,suratkesehatanjiwa,suratkesehatanjasmani,skck,tarifdriver,rerataratingdriver-->
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold text-center">Register Driver</div> 
            <div class="card-body"> 
              
             <form action="../process/registerDriverProcess.php" method="post"> 
                
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nama</label> 
                  <input class="form-control" id="namadriver" name="namadriver" aria-describedby="namadriver" placeholder="Nama Driver"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Password</label> 
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password Driver"> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatdriver" name="alamatdriver" aria-describedby="alamatdriver" placeholder="Alamat Driver"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Tanggal Lahir</label> 
                  <input class="form-control" id="tanggallahirdriver" name="tanggallahirdriver" aria-describedby="tanggallahirdriver" type="date"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Jenis Kelamin</label> 
                  <select class="form-select" aria-label="Default select example" name="jeniskelamindriver" id="jeniskelamindriver"> 
                    <option value="jeniskelamiN">....</option>
                    <option value="Pria">Pria</option> 
                    <option value="Wanita">Wanita</option>  
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Email</label> 
                  <input class="form-control" id="emaildriver" name="emaildriver" aria-describedby="emaildriver" placeholder="Email Aktif"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomortelepondriver" name="nomortelepondriver" aria-describedby="nomortelepondriver" placeholder="Nomor Telepon Aktif"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nomor SIM </label> 
                  <input class="form-control" id="nomorsimdriver" name="nomorsimdriver" aria-describedby="nomorsimdriver" placeholder="Nomor SIM Driver"> 
                </div>
                <div class="mb-3">
                    <label> Foto Driver :</label>
                    <input type="file" name="fotodriver" id="fotodriver"><br>
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Status Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="statusdriver" id="statusdriver"> 
                    
                    <option value="Available">Available</option> 
                    <option value="Non-available">Non-available</option>  
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Bahasa</label> 
                  <select class="form-select" aria-label="Default select example" name="bahasadriver" id="bahasadriver"> 
                  
                    <option value="Indonesia">Indonesia</option> 
                    <option value="English">English</option>
                    <option value="France">France</option>
                    <option value="Spanyol">Spanyol</option>  
                  </select> 
                </div>
                <div class="mb-3">
                    <label> Surat Bebas Napza :</label>
                    <input type="file" name="suratbebasnapza" id="suratbebasnapza"><br>
                </div>
                <div class="mb-3">
                    <label> Surat Kesehatan Jiwa :</label>
                    <input type="file" name="suratkesehatanjiwa" id="suratkesehatanjiwa"><br>
                </div>
                <div class="mb-3">
                    <label> Surat Kesehatan Jasmani :</label>
                    <input type="file" name="suratkesehatanjasmani" id="suratkesehatanjasmani"><br>
                </div>
                <div class="mb-3">
                    <label> SKCK :</label>
                    <input type="file" name="skck" id="skck"><br>
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Tarif Driver </label> 
                  <input class="form-control" id="tarifdriver" name="tarifdriver" aria-describedby="tarifdriver" placeholder="Tarif Driver"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Rerata Rating Driver </label> 
                  <input class="form-control" id="rerataratingdriver" name="rerataratingdriver" aria-describedby="rerataratingdriver" placeholder="Rerata Rating Driver"> 
                </div>
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="registerDriver">Register</button> 
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
