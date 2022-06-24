<?php
    include '../component/sidebarDriver.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >TAMBAH DRIVER</h4>
        <hr>
        <form action="../process/createDriverProcess.php" method="post">
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
                    <option value="statusD">....</option>
                    <option value="Available">Available</option> 
                    <option value="Non-available">Non-available</option>  
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Bahasa</label> 
                  <select class="form-select" aria-label="Default select example" name="bahasadriver" id="bahasadriver"> 
                    <option value="bahasaD">....</option>
                    <option value="Indonesia">INDONESIA</option> 
                    <option value="English">ENGLISH</option>
                    <option value="France">FRANCE</option>
                    <option value="Spanyol">SPANYOL</option>  
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
                <button type="submit" class="btn btn-primary" name="addDriver">Tambah Driver</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>