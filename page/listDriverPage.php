<?php
    include '../component/sidebarDriver.php'
?>
    <div class="container p-5 m-5 h-100 w-10" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h5>DAFTAR Driver</h5>
        <hr>
            <table style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">No SIM</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">Status</th>
                    <th scope="col">Bahasa</th>
                    <th scope="col">Surat Bebas Napza</th>
                    <th scope="col">Surat Kesehatan Jiwa</th>
                    <th scope="col">Surat Kesehatan Jasmani</th>
                    <th scope="col">SKCK</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Rerata rating</th>
                </tr>
            </thead>
           <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM driver") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['namadriver'].'</td>
                            <td>'.$data['alamatdriver'].'</td>
                            <td>'.$data['tanggallahirdriver'].'</td>
                            <td>'.$data['jeniskelamindriver'].'</td>
                            <td>'.$data['emaildriver'].'</td>
                            <td>'.$data['nomortelepondriver'].'</td>
                            <td>'.$data['nomorsimdriver'].'</td>
                            <td>'.$data['fotodriver'].'</td>
                            <td>'.$data['statusdriver'].'</td>
                            <td>'.$data['bahasadriver'].'</td>
                            <td>'.$data['suratbebasnapza'].'</td>
                            <td>'.$data['suratkesehatanjiwa'].'</td>
                            <td>'.$data['suratkesehatanjasmani'].'</td>
                            <td>'.$data['skck'].'</td>
                            <td>'.$data['tarifdriver'].'</td>
                            <td>'.$data['rerataratingdriver'].'</td>
                            <td>
                                 <a href="./editDriverPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deleteDriverProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Yakin?\')">
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