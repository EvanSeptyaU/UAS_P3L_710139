<?php
    include '../component/sidebarTransaksi.php'
    
?>

<?php
    if(isset($_GET['idtransaksi'])) {
        include '../db.php';
        
        $idtransaksi=$_GET['idtransaksi'];

        $query = mysqli_query($con, "SELECT * FROM transaksi WHERE idtransaksi=$idtransaksi") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT TRANSAKSI</h4>
        <hr>
        <form action="../process/editTransaksiProcess.php" method="post">
          <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Mulai Sewa</label> 
                  <input type="hidden" name="idtransaksi" value="<?php echo $data['idtransaksi']; ?>">
                  <input class="form-control" id="tanggalmulaisewa" name="tanggalmulaisewa" aria-describedby="tanggalmulaisewa" placeholder="tanggal mulai sewa" type="date" value="<?php echo $data['tanggalmulaisewa'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Selesai Sewa</label> 
                  <input class="form-control" id="tanggalselesaisewa" name="tanggalselesaisewa" aria-describedby="tanggalselesaisewa" placeholder="tanggal selesai sewa" type="date" value="<?php echo $data['tanggalselesaisewa'];?> "> 
                </div>
               <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Total Biaya</label> 
                  <input class="form-control" id="totalbiaya" name="totalbiaya" aria-describedby="totalbiaya" placeholder="Total Biaya" value="<?php echo $data['totalbiaya'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Denda</label> 
                  <input class="form-control" id="denda" name="denda" aria-describedby="denda" placeholder="Denda" value="<?php echo $data['denda'];?> "> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Bukti Pembayaran</label> 
                  <input class="form-control" id="buktipembayaran" name="buktipembayaran" placeholder="buktipembayaran" aria-describedby="Bukti Pembayaran" value="<?php echo $data['buktipembayaran'];?> "><br> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Metode Pembayaran</label> 
                  <select class="form-select" aria-label="Default select example" name="metodepembayaran" id="metodepembayaran" > 
                    <?php
                        if($data['metodepembayaran']=="Cash") {
                            echo '<option selected value="Cash">'.$data['metodepembayaran'].'</option>';
                            echo '<option value="Transfer">Transfer</option>';
                        }
                        else {
                            echo '<option value="Cash">Cash</option>';
                            echo '<option selected value="Transfer">'.$data['metodepembayaran'].'</option>';
                        }
                    ?> 
                  </select> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label> 
                  <input class="form-control" id="tanggaltransaksi" name="tanggaltransaksi" placeholder="tanggal transaksi" aria-describedby="tanggaltransaksi" type="date" value="<?php echo $data['tanggaltransaksi'];?> "> 
                </div>                
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label> 
                  <input class="form-control" id="tanggalpengembalian" name="tanggalpengembalian" placeholder="Tanggal Pengembalian" aria-describedby="tanggalpengembalian" type="date" value="<?php echo $data['tanggalpengembalian'];?> "> 
                </div>
                 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Biaya Subtotal</label> 
                  <input class="form-control" id="biayasubtotal" name="biayasubtotal" placeholder="Biaya Subtotal" aria-describedby="biayasubtotal" value="<?php echo $data['biayasubtotal'];?>"> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Biaya Promo</label> 
                  <input class="form-control" id="biayapromo" name="biayapromo" placeholder="Biaya Promo" aria-describedby="biayapromo" value="<?php echo $data['biayapromo'];?>"> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Biaya Subtotal</label> 
                  <input class="form-control" id="biayasubtotal" name="biayasubtotal" placeholder="biaya subtotal" aria-describedby="biayasubtotal" value="<?php echo $data['biayasubtotal'];?>"> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Rating Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="ratingdriver" id="ratingdriver"> 
                    <?php
                        if($data['ratingdriver']=="Bintang 1") {
                            echo '<option selected value="Bintang 1">'.$data['ratingdriver'].'</option>';
                            echo '<option value="Bintang 2">Bintang 2</option>';
                            echo '<option value="Bintang 3">Bintang 3</option>';
                            echo '<option value="Bintang 4">Bintang 4</option>';
                            echo '<option value="Bintang 5">Bintang 5</option>';
                        }
                        else if($data['ratingdriver']=="Bintang 2") {
                            echo '<option value="Bintang 1">Bintang 1</option>';
                            echo '<option selected value="Bintang 2">'.$data['ratingdriver'].'</option>';
                            echo '<option value="Bintang 3">Bintang 3</option>';
                            echo '<option value="Bintang 4">Bintang 4</option>';
                            echo '<option value="Bintang 5">Bintang 5</option>';
                        }
                           else if($data['ratingdriver']=="Bintang 3") {
                            echo '<option value="Bintang 1">Bintang 1</option>';
                            echo '<option value="Bintang 2">Bintang 2</option>';
                            echo '<option selected value="Bintang 3">'.$data['ratingdriver'].'</option>';
                            echo '<option value="Bintang 4">Bintang 4</option>';
                            echo '<option value="Bintang 5">Bintang 5</option>';
                        }
                        else if($data['ratingdriver']=="Bintang 4") {
                            echo '<option value="Bintang 1">Bintang 1</option>';
                            echo '<option value="Bintang 2">Bintang 2</option>';
                            echo '<option value="Bintang 3">Bintang 3</option>';
                            echo '<option selected value="Bintang 4">'.$data['ratingdriver'].'</option>';
                            echo '<option value="Bintang 5">Bintang 5</option>';
                        }
                        else {
                            echo '<option value="Bintang 1">Bintang 1</option>';
                            echo '<option value="Bintang 2">Bintang 2</option>';
                            echo '<option value="Bintang 3">Bintang 3</option>';
                            echo '<option value="Bintang 4">Bintang 4</option>';
                            echo '<option selected value="Bintang 5">'.$data['ratingdriver'].'</option>';
                        }
                    ?> 
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Komen Driver</label> 
                  <input class="form-control" id="komendriver" name="komendriver" placeholder="Komen Driver" aria-describedby="komendriver"  value="<?php echo $data['komendriver'];?>"> 
                </div>
                 <div class="mb-3"> 
                  <label for="exampleInputDriver1" class="form-label">Status Driver</label> 
                  <select class="form-select" aria-label="Default select example" name="statusdriver" id="statusdriver" > 
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
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editTransaksi">Edit Transaksi</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>