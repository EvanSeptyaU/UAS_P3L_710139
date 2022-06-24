<?php
    include '../component/sidebarPemilikMobil.php'
?>
<?php
    if(isset($_GET['idpemilikmobil'])) 
    {
        include '../db.php';
        
        $idpemilikmobil=$_GET['idpemilikmobil'];

        $query = mysqli_query($con, "SELECT * FROM pemilikmobil WHERE idpemilikmobil=$idpemilikmobil") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >TAMBAH ASET MOBIL BARU</h4>
        <hr>
        <form action="../process/addAsetMobilBaruProcess.php" method="post">
          <!--namamobil,tipemobil,jenisbahanbakar,jenistransmisi,warnamobil,fasilitasmobil,tarifsewamobil,kapasitaspenumpang,platnomor,volumebahanbakar,nomorstnk,periodekontrakmulai,periodekontrakakhir,tanggalakhirservice,fotomobil-->
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama Mobil</label> 
                  <input class="form-control" id="namamobil" name="namamobil" aria-describedby="namamobil" placeholder="Nama Mobil"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Tipe Mobil</label> 
                  <input class="form-control" id="tipemobil" name="tipemobil" placeholder="Tipe Mobil"> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Jenis Bahan Bakar</label> 
                  <select class="form-select" aria-label="Default select example" name="jenisbahanbakar" id="jenisbahanbakar">
                    <option value="Pertamax">Pertamax</option> 
                    <option value="Pertalite">Pertalite</option>
                    <option value="Premium">Premium</option>  
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">jenis transmisi</label> 
                  <select class="form-select" aria-label="Default select example" name="jenistransmisi" id="jenistransmisi">
                    <option value="AT">AT (Transmisi otomatis)</option> 
                    <option value="MT">MT (Transmisi Manual)</option>
                    <option value="CVT">CVT (Transmisi Variabel Kontinu)</option>  
                  </select> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">warna mobil</label> 
                  <input class="form-control" id="warnamobil" name="warnamobil" aria-describedby="warnamobil" placeholder="warna mobil"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">fasilitas mobil</label> 
                  <select class="form-select" aria-label="Default select example" name="fasilitasmobil" id="fasilitasmobil">
                    <option value="AC">AC</option> 
                    <option value="Multimedia">Multimedia</option>
                    <option value="Safety">Safety (Air Bag)</option>  
                  </select> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">tarif sewa mobil</label> 
                  <input class="form-control" id="tarifsewamobil" name="tarifsewamobil" aria-describedby="tarifsewamobil" placeholder="tarif sewa mobil"> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">kapasitas penumpang</label> 
                  <input class="form-control" id="kapasitaspenumpang" name="kapasitaspenumpang" aria-describedby="kapasitaspenumpang" placeholder="kapasitas penumpang"> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">plat nomor</label> 
                  <input class="form-control" id="platnomor" name="platnomor" aria-describedby="platnomor" placeholder="plat nomor"> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">volume bahan bakar</label> 
                  <input class="form-control" id="volumebahanbakar" name="volumebahanbakar" aria-describedby="volumebahanbakar" placeholder="volume bahan bakar"> 
                </div>
                  <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">nomor stnk</label> 
                  <input class="form-control" id="nomorstnk" name="nomorstnk" aria-describedby="nomorstnk" placeholder="nomor stnk"> 
                </div> 
                  <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">periode kontrak mulai</label> 
                  <input class="form-control" id="periodekontrakmulai" name="periodekontrakmulai" aria-describedby="periodekontrakmulai" placeholder="periode kontrak mulai"> 
                </div> 
                  <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">periode kontrak akhir</label> 
                  <input class="form-control" id="periodekontrakakhir" name="periodekontrakakhir" aria-describedby="periodekontrakakhir" placeholder="periode kontrak akhir"> 
                </div> 
                  <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">tanggal akhir service</label> 
                  <input class="form-control" id="tanggalakhirservice" name="tanggalakhirservice" aria-describedby="tanggalakhirservice" placeholder="tanggal akhir service"> 
                </div>
                  <div class="mb-3">
                    <label> Foto Mobil :</label>
                    <input type="file" name="fotomobil" id="fotomobil"><br>
                </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="addAsetMobilBaru">Add Aset Mobil Baru</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
        </script>
</body>
</html>