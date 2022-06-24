<?php
    include '../component/sidebarCustomer.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >TAMBAH CUSTOMER</h4>
        <hr>
        <form action="../process/createCustomerProcess.php" method="post">
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama</label> 
                  <input class="form-control" id="namacustomer" name="namacustomer" aria-describedby="namacustomer" placeholder="Nama Customer"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Password</label> 
                  <input type="password"class="form-control" id="password" name="password" placeholder="Password Customer"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label> 
                  <input class="form-control" id="tanggallahircustomer" name="tanggallahircustomer" aria-describedby="tanggallahircustomer" type="date"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Email</label> 
                  <input class="form-control" id="emailcustomer" name="emailcustomer" placeholder="email Customer" aria-describedby="emailcustomer"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomorteleponcustomer" name="nomorteleponcustomer" aria-describedby="nomorteleponcustomer" placeholder="Nomor Telepon"> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatcustomer" name="alamatcustomer" aria-describedby="alamatcustomer" placeholder="Alamat Customer"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor KTP</label> 
                  <input class="form-control" id="nomorktpcustomer" name="nomorktpcustomer" aria-describedby="nomorktpcustomer" placeholder="Nomor KTP Customer"> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor SIM</label> 
                  <input class="form-control" id="nomorsimcustomer" name="nomorsimcustomer" aria-describedby="nomorsimcustomer" placeholder="Nomor SIM Customer"> 
                </div> 
                <div class="mb-3">
                    <label> Dokumen KTP :</label>
                    <input type="file" name="dokumenktp" id="dokumenktp"><br>
                </div>
                <div class="mb-3">
                    <label> Dokumen SIM :</label>
                    <input type="file" name="dokumensim" id="dokumensim"><br>
                </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="addCustomer">Tambah Customer</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>