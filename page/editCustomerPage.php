<?php
    include '../component/sidebarCustomer.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM customer WHERE id=$id") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT MAHASISWA</h4>
        <hr>
        <form action="../process/editCustomerProcess.php" method="post">
            <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama</label> 
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <input class="form-control" id="namadcustomer" name="namadcustomer" aria-describedby="namadcustomer" placeholder="Nama Customer" value="<?php echo $data['namacustomer'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Password</label> 
                  <input type="password"class="form-control" id="password" name="password" placeholder="Password Customer"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label> 
                  <input class="form-control" id="tanggallahircustomer" name="tanggallahircustomer" aria-describedby="tanggallahircustomer" type="date" value="<?php echo $data['tanggallahircustomer']; ?> "> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Email</label> 
                  <input class="form-control" id="emailcustomer" name="emailcustomer" placeholder="email Customer" aria-describedby="emailcustomer" value="<?php echo $data['emailcustomer']; ?>"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomorteleponcustomer" name="nomorteleponcustomer" aria-describedby="nomorteleponcustomer" placeholder="Nomor Telepon" value="<?php echo $data['emailcustomer']; ?>"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatcustomer" name="alamatcustomer" aria-describedby="alamatcustomer" placeholder="Alamat Customer"  value="<?php echo $data['alamatcustomer']; ?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor KTP</label> 
                  <input class="form-control" id="nomorktpcustomer" name="nomorktpcustomer" aria-describedby="nomorktpcustomer" placeholder="Nomor KTP Customer" value="<?php echo $data['nomorktpcustomer']; ?> " > 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor SIM</label> 
                  <input class="form-control" id="nomorsimcustomer" name="nomorsimcustomer" aria-describedby="nomorsimcustomer" placeholder="Nomor SIM Customer" value="<?php echo $data['nomorsimcustomer']; ?> "> 
                </div> 
                <div class="mb-3">
                    <label> Dokumen KTP :</label>
                    <input type="file" name="dokumenktp" id="dokumenktp"  value="<?php echo $data['dokumenktp']; ?> "><br>
                </div>
                <div class="mb-3">
                    <label> Dokumen SIM :</label>
                    <input type="file" name="dokumensim" id="dokumensim" value="<?php echo $data['dokumensim']; ?> "><br>
                </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editCustomer">Edit Customer</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>