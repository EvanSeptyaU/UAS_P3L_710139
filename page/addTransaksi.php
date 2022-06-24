<?php
    include '../component/sidebarTransaksi.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >TAMBAH PEMILIK MOBIL</h4>
        <hr>
        <form action="../process/createTransaksiProcess.php" method="post">
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
                <button type="submit" class="btn btn-primary" name="addTransaksi">Add Transaksi</button>
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
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>