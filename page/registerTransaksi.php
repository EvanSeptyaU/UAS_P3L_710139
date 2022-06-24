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
            <div class="card-header fw-bold text-center">Register Transaksi</div> 
            <div class="card-body"> 
              
             <form action="../process/registerTransaksiProcess.php" method="post"> 
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Muali Sewa</label> 
                  <input class="form-control" id="tanggalmulaisewa" name="tanggalmulaisewa" aria-describedby="tanggalmulaisewa" placeholder="Tanggal Mulai Sewa" type="date"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Selesai Sewa</label> 
                  <input class="form-control" id="tanggalselesaisewa" name="tanggalselesaisewa" aria-describedby="tanggalselesaisewa" placeholder="Password Pemilik Mobil" type="date"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Total Biaya</label> 
                  <input class="form-control" id="totalbiaya" name="totalbiaya" aria-describedby="totalbiaya" placeholder="Total Biaya"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Denda</label> 
                  <input class="form-control" id="denda" name="denda" aria-describedby="denda" placeholder="Denda"> 
                </div>  
               <div class="mb-3">
                    <label> Bukti Pembayaran :</label>
                    <input type="file" name="buktipembayaran" id="buktipembayaran"><br>
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Metode Pembayaran</label> 
                  <select class="form-select" aria-label="Default select example" name="metodepembayaran" id="metodepembayaran"> 
                    <option value="Cash">Cash</option> 
                    <option value="Transfer">Transfer</option>  
                  </select> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label> 
                  <input class="form-control" id="tanggaltransaksi" name="tanggaltransaksi" placeholder="tanggaltransaksi" aria-describedby="Tanggal Transaksi" type="date"> 
                </div>                
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label> 
                  <input class="form-control" id="tanggalpengembalian" name="tanggalpengembalian" placeholder="tanggal pengembalian" aria-describedby="tanggalpengembalian" type="date"> 
                </div>
                 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Biaya Subtotal</label> 
                  <input class="form-control" id="biayasubtotal" name="biayasubtotal" placeholder="biaya subtotal" aria-describedby="biayasubtotal"> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Biaya Promo</label> 
                  <input class="form-control" id="biayapromo" name="biayapromo" placeholder="biaya promo" aria-describedby="biayapromo"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Rating Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="ratingdriver" id="ratingdriver"> 
                    <option value="Bintang 1">Bintang 1</option> 
                    <option value="Bintang 2">Bintang 2</option> 
                    <option value="Bintang 3">Bintang 3</option> 
                    <option value="Bintang 4">Bintang 4</option> 
                    <option value="Bintang 5">Bintang 5</option>  
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Komen Driver</label> 
                  <input class="form-control" id="komendriver" name="komendriver" placeholder="Komen Driver" aria-describedby="komendriver"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Status Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="statusdriver" id="statusdriver"> 
                    <option value="Available">Available</option> 
                    <option value="Non-available">Non-available</option>  
                  </select> 
                </div> 
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="registerTransaksi">Transaksi</button> 
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
