<?php
    include '../component/sidebarPegawai.php'
?>
    <div class="container p-5 m-5 h-100 w-10" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h5>MANAGER</h5>
        <hr>
            <table style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Jabatan</th>
                     <th scope="col">Aksi</th>
                </tr>
            </thead>
           <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM pegawai") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['namapegawai'].'</td>
                            <td>'.$data['tanggallahirpegawai'].'</td>
                            <td>'.$data['jeniskelaminpegawai'].'</td>
                            <td>'.$data['emailpegawai'].'</td>
                            <td>'.$data['nomorteleponpegawai'].'</td>
                            <td>'.$data['fotopegawai'].'</td>
                            <td>'.$data['alamatpegawai'].'</td>
                            <td>'.$data['namajabatan'].'</td>
                            <td>
                                 <a href="./editPegawai.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deletePegawaiProcess.php?id='.$data['idpegawai'].'" onClick="return confirm ( \'Yakin?\')">
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