<?php
    include '../component/sidebarDriver.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM driver WHERE id=$id") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >Edit Data Driver</h4>
        <hr>
        <form action="../process/editDriverProcess.php" method="post">
            <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nama</label> 
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <input class="form-control" id="namadriver" name="namadriver" aria-describedby="namadriver" placeholder="Nama Driver" value="<?php echo $data['namadriver'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Password</label> 
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password Driver"> 
                </div> 
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatdriver" name="alamatdriver" aria-describedby="alamatdriver" placeholder="Alamat Driver" value="<?php echo $data['alamatdriver'];?> "> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Tanggal Lahir</label> 
                  <input class="form-control" id="tanggallahirdriver" name="tanggallahirdriver" aria-describedby="tanggallahirdriver" type="date" value="<?php echo $data['tanggallahirdriver'];?> "> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Jenis Kelamin</label> 
                  <select class="form-select" aria-label="Default select example" name="jeniskelamindriver" id="jeniskelamindriver" > 
                    <?php
                        if($data['jeniskelamindriver']=="Pria") {
                            echo '<option selected value="Pria">'.$data['jeniskelamindriver'].'</option>';
                            echo '<option value="Wanita">Wanita</option>';
                        }
                        else {
                            echo '<option value="Pria">Pria</option>';
                            echo '<option selected value="Wanita">'.$data['jeniskelamindriver'].'</option>';
                        }
                    ?> 
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Email</label> 
                  <input class="form-control" id="emaildriver" name="emaildriver" aria-describedby="emaildriver" placeholder="Email Aktif" value="<?php echo $data['emaildriver'];?> "> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomortelepondriver" name="nomortelepondriver" aria-describedby="nomortelepondriver" placeholder="Nomor Telepon Aktif" value="<?php echo $data['nomortelepondriver'];?> "> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Nomor SIM </label> 
                  <input class="form-control" id="nomorsimdriver" name="nomorsimdriver" aria-describedby="nomorsimdriver" placeholder="Nomor SIM Driver" value="<?php echo $data['nomorsimdriver'];?> "> 
                </div>
                <div class="mb-3">
                    <label> Foto Driver :</label>
                    <input type="file" name="fotodriver" id="fotodriver" value="<?php echo $data['fotodriver'];?> "><br>
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Status Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="statusdriver" id="statusdriver"> 
                     <?php
                        if($data['statusdriver']=="Available") {
                            echo '<option selected value="Available">'.$data['statusdriver'].'</option>';
                            echo '<option value="Non-available">Non-available</option>';
                        }
                        else {
                            echo '<option value="Available">Available</option>';
                            echo '<option selected value="Non-available">'.$data['statusdriver'].'</option>';
                        }
                    ?> 
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Bahasa</label> 
                  <select class="form-select" aria-label="Default select example" name="bahasadriver" id="bahasadriver"> 
                    <?php
                        if($data['bahasadriver']=="Indonesia") {
                            echo '<option selected value="Indonesia">'.$data['bahasadriver'].'</option>';
                            echo '<option value="English">English</option>';
                            echo '<option value="France">France</option>';
                            echo '<option value="Spanyol">Spanyol</option>';
                        }
                        else if($data['bahasadriver']=="English") {
                            echo '<option value="Indonesia">Indonesia</option>';
                            echo '<option selected value="English">'.$data['bahasadriver'].'</option>';
                            echo '<option value="France">France</option>';
                            echo '<option value="Spanyol">Spanyol</option>';
                        }
                           else if($data['bahasadriver']=="France") {
                            echo '<option value="Indonesia">Indonesia</option>';
                            echo '<option value="English">English</option>';
                            echo '<option selected value="France">'.$data['bahasadriver'].'</option>';
                            echo '<option value="Spanyol">Spanyol</option>';
                        }
                        else {
                            echo '<option value="Indonesia">Indonesia</option>';
                            echo '<option value="English">English</option>';
                            echo '<option value="France">France</option>';
                            echo '<option selected value="Spanyol">'.$data['bahasadriver'].'</option>';
                        }
                    ?> 
                  </select> 
                </div>
                <div class="mb-3">
                    <label> Surat Bebas Napza :</label>
                    <input type="file" name="suratbebasnapza" id="suratbebasnapza" value="<?php echo $data['suratbebasnapza'];?> "><br>
                </div>
                <div class="mb-3">
                    <label> Surat Kesehatan Jiwa :</label>
                    <input type="file" name="suratkesehatanjiwa" id="suratkesehatanjiwa" value="<?php echo $data['suratkesehatanjiwa'];?> "><br>
                </div>
                <div class="mb-3">
                    <label> Surat Kesehatan Jasmani :</label>
                    <input type="file" name="suratkesehatanjasmani" id="suratkesehatanjasmani" value="<?php echo $data['suratkesehatanjasmani'];?> "><br>
                </div>
                <div class="mb-3">
                    <label> SKCK :</label>
                    <input type="file" name="skck" id="skck" value="<?php echo $data['skck'];?> "><br>
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Tarif Driver </label> 
                  <input class="form-control" id="tarifdriver" name="tarifdriver" aria-describedby="tarifdriver" placeholder="Tarif Driver" value="<?php echo $data['tarifdriver'];?> "> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Rerata Rating Driver </label> 
                  <input class="form-control" id="rerataratingdriver" name="rerataratingdriver" aria-describedby="rerataratingdriver" placeholder="Rerata Rating Driver" value="<?php echo $data['rerataratingdriver'];?> "> 
                </div>
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="editDriver">Register</button> 
                </div> 
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>