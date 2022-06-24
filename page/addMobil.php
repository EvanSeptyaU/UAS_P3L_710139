<?php
    include '../component/sidebarMobil.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >TAMBAH DATA MOBIL</h4>
        <hr>
        <form action="../process/createMobilProcess.php" method="post">
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama Mobil</label> 
                  <input class="form-control" id="namamobil" name="namamobil" aria-describedby="namamobil" placeholder="Nama Mobil"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tipe Mobil</label> 
                  <input class="form-control" id="tipemobil" name="tipemobil" aria-describedby="tipemobil" placeholder="Tipe Mobil"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label> 
                  <select class="form-select" aria-label="Default select example" id="jenisbahanbakar" name="jenisbahanbakar"> 
                    <option value="Pertamax">Pertamax</option> 
                    <option value="Pertalite">Pertalite</option>
                    <option value="Premium">Premium</option>   
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label> 
                  <select class="form-select" aria-label="Default select example" id="jenistransmisi" name="jenistransmisi"> 
                    <option value="AT">AT</option> 
                    <option value="MT">MT</option>
                    <option value="CVT">CVT</option>   
                  </select> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Warna Mobil</label> 
                  <input class="form-control" id="warnamobil" name="warnamobil" aria-describedby="warnamobil" placeholder="Warna Mobil"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Fasilitas Mobil</label> 
                  <select class="form-select" aria-label="Default select example" id="fasilitasmobil" name="fasilitasmobil" > 
                    <option value="AC">AC</option> 
                    <option value="Multimedia">Multimedia</option>
                    <option value="Safety(Air Bag)">Safety(Air Bag)</option>  
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tarif Sewa Mobil</label> 
                  <input class="form-control" id="tarifsewamobil" name="tarifsewamobil" aria-describedby="tarifsewamobil" placeholder="Tarif Sewa Mobil"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label> 
                  <input class="form-control" id="kapasitaspenumpang" name="kapasitaspenumpang" aria-describedby="kapasitaspenumpang" placeholder="Kapasitas Penumpang"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Plat Nomor</label> 
                  <input class="form-control" id="platnomor" name="platnomor" aria-describedby="platnomor" placeholder="plat nomor"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">volume bahan bakar </label> 
                  <input class="form-control" id="volumebahanbakar" name="volumebahanbakar" aria-describedby="volumebahanbakar" placeholder="volumebahanbakar"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">nomor stnk</label> 
                  <input class="form-control" id="nomorstnk" name="nomorstnk" aria-describedby="nomorstnk" placeholder="nomorstnk"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Periode Kontrak Mulai </label> 
                  <input class="form-control" id="periodekontrakmulai" name="periodekontrakmulai" aria-describedby="periodekontrakmulai" placeholder="Periode Kontrak Mulai" type="date"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Periode Kontrak Akhir </label> 
                  <input class="form-control" id="periodekontrakakhir" name="periodekontrakakhir" aria-describedby="periodekontrakakhir" placeholder="Periode Kontrak Akhir" type="date"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Akhir Service </label> 
                  <input class="form-control" id="tanggalakhirservice" name="tanggalakhirservice" aria-describedby="tanggalakhirservice" placeholder="Tanggal Akhir Service" type="date"> 
                </div>
                <div class="mb-3">
                    <label> Foto Mobil :</label>
                    <input type="file" name="fotomobil" id="fotomobil"><br>
                </div>
                
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="addDriver">Tambah Driver</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>