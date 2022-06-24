<?php
    include '../component/sidebarTransaksi.php'
?>
    <div class="container p-3 m-4 h-50" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h5>DAFTAR TRANSAKSI</h5>
        <hr>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">tanggal mulai sewa</th>
                    <th scope="col">tanggal selesai sewa</th>
                    <th scope="col">total biaya</th>
                    <th scope="col">denda</th>
                    <th scope="col">bukti pembayaran</th>
                    <th scope="col">metode pembayaran</th>
                    <th scope="col">tanggal transaksi</th>
                    <th scope="col">tanggal pengembalian</th>
                    <th scope="col">biaya subtotal</th>
                    <th scope="col">biaya promo</th>
                    <th scope="col">rating driver</th>
                    <th scope="col">komen driver</th>
                    <th scope="col">status driver</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
          <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM transaksi") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['tanggalmulaisewa'].'</td>
                            <td>'.$data['tanggalselesaisewa'].'</td>
                            <td>'.$data['totalbiaya'].'</td>
                            <td>'.$data['denda'].'</td>
                            <td>'.$data['buktipembayaran'].'</td>
                            <td>'.$data['metodepembayaran'].'</td>
                            <td>'.$data['tanggaltransaksi'].'</td>
                            <td>'.$data['tanggalpengembalian'].'</td>
                            <td>'.$data['biayasubtotal'].'</td>
                            <td>'.$data['biayapromo'].'</td>
                            <td>'.$data['ratingdriver'].'</td>
                            <td>'.$data['komendriver'].'</td>
                            <td>'.$data['statusdriver'].'</td>
                            <td>
                                 <a href="./editTransaksi.php?id='.$data['idtransaksi'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deleteTransaksiProcess.php?id='.$data['idtransaksi'].'" onClick="return confirm ( \'Yakin?\')">
                                    <i style="color: red" class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }
            ?>
            </tbody>
            </table>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>