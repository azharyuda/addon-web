<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add-On Website</title>

    <!-- plugin css -->
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/datatables/datatables.css">
    <link rel="stylesheet" href="dist/datatables/AutoFill-2.3.2/css/autoFill.bootstrap4.css">
    <link rel="stylesheet" href="dist/datatables/AutoFill-2.3.2/css/autoFill.dataTables.css">
    <!-- custom css -->
    <link rel="stylesheet" href="dist/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="dist/ico/favicon.ico" rel="icon" />
    <link href="https://fonts.googleapis.com/css?family=Bitter|Lato" rel="stylesheet">
  </head>
  <body>

    <!-- menu atas -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Add-on Web</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Keluar</a>
      </li>
    </ul>
  </nav>

  <!-- menu samping -->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span data-feather="file"></span>
                Data Pelanggan 2nd STB
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ext.php">
                <span data-feather="file"></span>
                Data Pelanggan WIFI Extender <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rev.php">
                <span data-feather="users"></span>
                Data Revenue
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ps_stb.php">
                <span data-feather="users"></span>
                Data Pelanggan PS 2nd STB
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grafik.php">
                <span data-feather="users"></span>
                Grafik data pelanggan PS 2nd STB
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- bagian tengah -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h4>Pelanggan WIFI Extender</h4>

        <!-- form upload data -->
        <form action="" enctype="multipart/form-data" method="POST">
          Upload file Excel: <input  name="migrasi_data" type="file" accept="application/vnd.ms-excel, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
          <br>
          <button type="submit" class="btn btn-success btn-sm" name="submit-migrate">Submit!</button>
          <br />
          <!-- end of upload data -->
        </form>

        <br />
          <div class="table-responsive">
            <table class="table table-bordered table-sm" id="migrate">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">ID Order</th>
                  <th class="text-center">NCLI</th>
                  <th class="text-center">POTS</th>
                  <th class="text-center">Internet</th>
                  <th class="text-center">Nama Customer</th>
                  <th class="text-center">No. HP</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">K-Contact</th>
                  <th class="text-center">Action</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center">Tanggal Tindak Lanjut</th>
                  <th class="text-center">Tanggal Upload</th>
                </tr>
              </thead>

              <!-- kode php untuk migrasi 2p 3p -->
              <?php
                include "dist/koneksi.php";

                $ambil=$link->query("SELECT * FROM tbl_wifiext") or die (mysqli_error($link));
                while($data=$ambil->fetch_array()){
               ?>

                <tr>
                  <td class="text-center"><?php echo $data['id']; ?></td>
                  <td class="text-center"><?php echo $data['order_id']; ?></td>
                  <td class="text-center"><?php echo $data['ncli']; ?></td>
                  <td class="text-center"><?php echo $data['pots']; ?></td>
                  <td class="text-center"><?php echo $data['internet']; ?></td>
                  <td class="text-center"><?php echo $data['nama_cust']; ?></td>
                  <td class="text-center"><?php echo $data['hp']; ?></td>
                  <td class="text-center"><?php echo $data['alamat']; ?></td>
                  <td class="text-center"><?php echo $data['k-contact']; ?></td>
                  <td class="text-center"><?php echo $data['action']; ?></td>
                  <td class="text-center"><?php echo $data['ket']; ?></td>
                  <td class="text-center"><?php echo $data['tgl_tindak_lanjut']; ?></td>
                  <td class="text-center"><?php echo $data['tgl_upload']; ?></td>
                </tr>

            <?php } ?>
          </table>
          </div>
        </main>
      </div>
    </div>

  </body>
</html>
<script src="dist/js/node_modules/jquery/dist/jquery.js"></script>
<script src="dist/js/bootstrap.js"></script>

<script src="dist/datatables/datatables.js"></script>
<script src="dist/datatables/AutoFill-2.3.2/js/dataTables.autoFill.min.js"></script>
<script src="dist/datatables/AutoFill-2.3.2/js/autoFill.bootstrap4.min.js"></script>
<script src="dist/table.js"></script>


<?php
  // kode untuk upload excel file migrasi 2p

  if(isset($_POST['submit-migrate'])){
    //excel reader plugin
    include "dist/excel/php-excel-reader/excel_reader2.php";

    //database koneksi
    include "dist/koneksi.php";

    //baca file yang ingin diupload
    $data=new Spreadsheet_Excel_Reader($_FILES['migrasi_data']['tmp_name']);

    //baca jumlah baris database
    $baris=$data->rowcount($sheet_index=0);

    //import dari bari 2 (baris 1 = header)
    //angka angka menunjukkan baris.
    //perulangan untuk mengambil semua data yang berada di baris tersebut

    for($i=2; $i<=$baris; $i++){
      $order=$data->val($i, 6); //baris no. order
      $ncli=$data->val($i, 10); //baris NCLI
      $pots=$data->val($i, 11); //baris pots
      $internet=$data->val($i, 12); //baris internet
      $cust=$data->val($i, 18); //baris cust
      $hp=$data->val($i, 19); //baris hp
      $alamat=$data->val($i, 20); //baris alamat
      $k=$data->val($i, 21); //baris k-contact
      $keterangan=$data->val($i, 35); //baris keterangan
      $lanjut=$data->val($i, 37);
      $act=$data->val($i, 41);
      $tgl = date('Y-m-d');

      $split=explode("~",$internet); //mendapatkan nomer internet
      //mencari no. order yang duplicate
      $dup=$link->query("SELECT order_id FROM tbl_wifiext WHERE order_id='$order'");
      $cari=mysqli_num_rows($dup);

      if(empty($cari)){
        //jika hasil pencarian ditemukan tidak ada data yang duplikat
        $hasil=$link->query("INSERT INTO tbl_wifiext VALUES(
          '',
          '$order',
          '$ncli',
          '$pots',
          '$split[1]',
          '$cust',
          '$hp',
          '$alamat',
          '$k',
          '$act',
          '$keterangan',
          '$lanjut',
          '$tgl'
        )") or die(mysqli_error($link));
}else{
  $update=$link->query("UPDATE tbl_wifiext SET act='$act', keterangan='$keterangan', tgl_tindak_lanjut='$lanjut', tgl_upload='$tgl' WHERE order_id='$order'");}
}
}

?>

<!-- untuk simpan data -->
