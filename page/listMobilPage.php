<?php
    include '../component/sidebarMobil.php'
?>
    <div 
        class="container p-3 m-4 h-50" 
        style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h5>List Add Aset Mobil Baru</h5>
        <hr>
            <table class="table">
            <thead>
                <!--namamobil,tipemobil,jenisbahanbakar,jenistransmisi,warnamobil,fasilitasmobil,tarifsewamobil,kapasitaspenumpang,platnomor,volumebahanbakar,nomorstnk,periodekontrakmulai,periodekontrakakhir,tanggalakhirservice,fotomobil-->
          
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">nama mobil</th>
                    <th scope="col">tipe mobil</th>
                    <th scope="col">jenis bahan bakar</th>
                    <th scope="col">jenis transmisi</th>
                    <th scope="col">warnamobil</th>
                    <th scope="col">fasilitasmobil</th>
                    <th scope="col">tarifsewamobil</th>
                    <th scope="col">kapasitaspenumpang</th>
                    <th scope="col">platnomor</th>
                    <th scope="col">volumebahanbakar</th>
                    <th scope="col">nomorstnk</th>
                    <th scope="col">periodekontrakmulai</th>
                    <th scope="col">periodekontrakakhir</th>
                    <th scope="col">tanggalakhirservice</th>
                    <th scope="col">fotomobil</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
           <tbody>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM mobil") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }
                else
                { 
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['namamobil'].'</td>
                            <td>'.$data['tipemobil'].'</td>
                            <td>'.$data['jenisbahanbakar'].'</td>
                            <td>'.$data['jenistransmisi'].'</td>
                            <td>'.$data['warnamobil'].'</td>
                            <td>'.$data['fasilitasmobil'].'</td>
                            <td>'.$data['tarifsewamobil'].'</td>
                            <td>'.$data['kapasitaspenumpang'].'</td>
                            <td>'.$data['platnomor'].'</td>
                            <td>'.$data['volumebahanbakar'].'</td>
                            <td>'.$data['nomorstnk'].'</td>
                            <td>'.$data['periodekontrakmulai'].'</td>
                            <td>'.$data['periodekontrakakhir'].'</td>
                            <td>'.$data['tanggalakhirservice'].'</td>
                            <td>'.$data['fotomobil'].'</td>
                            
                            <td>
                                <a href="./editPemilikMobil.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deletePemilikMobilProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Yakin?\')">
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