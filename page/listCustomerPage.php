<?php
    include '../component/sidebarCustomer.php'
?>
    <div class="container p-3 m-4 h-50" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h5>DAFTAR CUSTOMER</h5>
        <hr>
            <table class="table" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor KTP</th>
                    <th scope="col">Nomor SIM</th>
                    <th scope="col">Dokumen SIM</th>
                    <th scope="col">Dokumen SIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
           <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM customer") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['namacustomer'].'</td>
                            <td>'.$data['tanggallahircustomer'].'</td>
                            <td>'.$data['emailcustomer'].'</td>
                            <td>'.$data['nomorteleponcustomer'].'</td>
                            <td>'.$data['alamatcustomer'].'</td>
                            <td>'.$data['nomorktpcustomer'].'</td>
                            <td>'.$data['nomorsimcustomer'].'</td>
                            <td>'.$data['dokumenktp'].'</td>
                            <td>'.$data['dokumensim'].'</td>
                            <td>
                                 <a href="./editCustomerPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deleteCustomerProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Yakin?\')">
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