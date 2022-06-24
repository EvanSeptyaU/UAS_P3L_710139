<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>PROMO PAGE</title> 
  </head> 
  <body> 
    <nav class="navbar navbar-dark bg-dark fixed-top"> 
        <div class="container"> 
            <a class="navbar-brand fw-bold" href="/uts_p3l_j_710139">ATMA JOGJA RENTAL (AJR)</a> 
        </div> 
    </nav> 
 
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold text-center">PROMO</div> 
            <div class="card-body"> 
             <form action="../process/registerPromoProcess.php" method="post"> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Kode</label> 
                  <select class="form-select" aria-label="Default select example" name="kodepromo" id="kodepromo"> 
                    <option value="kodep">....</option>
                    <option value="MHS">MHS</option> 
                    <option value="BDAY">BDAY</option>
                    <option value="MDK">MDK</option>
                    <option value="WKN">WKN</option>  
                  </select> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Jenis Promo</label> 
                  <select class="form-select" aria-label="Default select example" name="jenispromo" id="jenispromo"> 
                    <option value="jenisp">....</option>
                    <option value="MHS">Pelajar & Mahasiswa</option> 
                    <option value="BDAY">Birth Day</option>
                    <option value="MDK">Mudik</option>
                    <option value="WKN">Weekend</option>  
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Keterangan Promo</label> 
                  <select class="form-select" aria-label="Default select example" name="keteranganpromo" id="keteranganpromo"> 
                    <option value="keteranganp">....</option>
                    <option value="MHS">Promo bagi customer yang berusia mulai dari 17-22 tahun
                    dan memiliki kartu identitas pelajar/mahasiswa, mendapat 
                    diskon sebesar 20%.</option> 
                    <option value="BDAY">Promo bagi customer yang sedang berulang tahun, mendapat 
                    diskon sebesar 15%.</option>
                    <option value="MDK">MPromo berlaku selama masa libur Lebaran dan Nataru, 
                    mendapat diskon sebesar 25%.</option>
                    <option value="WKN">Promo berlaku selama hari Sabtu dan Minggu, mendapat 
                    diskon sebesar 10%</option>  
                  </select> 
                </div> 
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="registerPromo">Promo</button> 
                </div> 

             </form> 

            </div> 
          </div> 
        </div> 
    </div> 
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 
