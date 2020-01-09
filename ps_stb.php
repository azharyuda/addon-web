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
    <link href="dist/ico/favicon.png" rel="icon" />
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
              <a class="nav-link" href="ext.php">
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
              <a class="nav-link active" href="ps_stb.php">
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
        <h4>Data PS 2ND STB</h4>

        <!-- form upload data -->
        <form action="" enctype="multipart/form-data" method="POST">
          Upload file Excel: <input  name="migrasi_data" type="file" accept="application/vnd.ms-excel, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
          <br>
          <button type="submit" class="btn btn-success btn-sm" name="submit-migrate">Submit!</button>
          <a href="download/stbps_down.php" class="btn btn-primary btn-sm" name="_stbps" style="float: right;">Download!</a>
          <br />
          <!-- end of upload data -->
        </form>

        <br />
          <div class="table-responsive">
            <table class="table table-bordered table-sm" id="mig">
              <thead>
                <th class="text-center">No</th>
                <th class="text-center">WITEL</th>
                <th class="text-center">NCLI</th>
                <th class="text-center">NDOS</th>
                <th class="text-center">NDEM</th>
                <th class="text-center">NO. Inet</th>
                <th class="text-center">Item</th>
                <th class="text-center">Price</th>
                <th class="text-center">Tanggal VA</th>
                <th class="text-center">Tanggal PS</th>
                <th class="text-center">K-Contact</th>
                <th class="text-center">No. SC</th>
                <th class="text-center">Agent</th>
              </thead>

              <!-- kode php untuk migrasi 2p 3p -->
              <?php
                include "dist/koneksi.php";

                $ambil=$link->query("SELECT * FROM stb_ps") or die (mysqli_error($link));
                while($data=$ambil->fetch_array()){
               ?>
                <tr>
                  <td class="text-center"><?php echo $data['id']; ?></td>
                  <td class="text-center"><?php echo $data['witel']; ?></td>
                  <td class="text-center"><?php echo $data['ncli']; ?></td>
                  <td class="text-center"><?php echo $data['ndos']; ?></td>
                  <td class="text-center"><?php echo $data['ndem']; ?></td>
                  <td class="text-center"><?php echo $data['no_inet']; ?></td>
                  <td class="text-center"><?php echo $data['item']; ?></td>
                  <td class="text-center"><?php echo $data['price']; ?></td>
                  <td class="text-center"><?php echo $data['tgl_va']; ?></td>
                  <td class="text-center"><?php echo $data['tgl_ps']; ?></td>
                  <td class="text-center"><?php echo $data['kcontact']; ?></td>
                  <td class="text-center"><?php echo $data['no_sc']; ?></td>
                  <td class="text-center"><?php echo $data['agent']; ?></td>
                </tr>
            <?php } ?>
          </table>
          </div>
          <canvas id="tes" width="200" height="40">

          </canvas>
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
<script src="dist/table0.js"></script>


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
      $witel=$data->val($i, 1); //baris WITEL
      $ncli=$data->val($i, 2); //baris NCLI
      $ndos=$data->val($i, 3); //baris NDOS
      $ndem=$data->val($i, 4); // baris NDEM
      $inet=$data->val($i, 5); //baris No. Internet
      $item=$data->val($i, 6); //baris Item
      $price=$data->val($i, 7); //baris PRICE
      $va=$data->val($i, 8); //baris TGL VA
      $ps=$data->val($i, 9); // baris TGL PS
      $kcontact=$data->val($i, 10); //baris K-Contact

      $pecah=explode(";", $kcontact); //memecah antara nomer sc dan agen

      //mencari no. order yang duplicate
      $dup=$link->query("SELECT no_inet FROM stb_ps WHERE no_inet='$inet'");
      $cari=mysqli_num_rows($dup);

      if(empty($cari)){
        //jika hasil pencarian ditemukan tidak ada data yang duplikat
        if(strpos($pecah[0], "SC")!== false){
        $hasil=$link->query("INSERT INTO stb_ps VALUES(
          '',
          '$witel',
          '$ncli',
          '$ndos',
          '$ndem',
          '$inet',
          '$item',
          '$price',
          '$va',
          '$ps',
          '$kcontact',
          '$pecah[0]',
          '$pecah[1]'
        )") or die(mysqli_error($link));
      }elseif(strpos($pecah[0], "MYIN")!== false){
        $hasil=$link->query("INSERT INTO stb_ps VALUES(
          '',
          '$witel',
          '$ncli',
          '$ndos',
          '$ndem',
          '$inet',
          '$item',
          '$price',
          '$va',
          '$ps',
          '$kcontact',
          '$pecah[4]',
          '$pecah[1]'
        )") or die(mysqli_error($link));
      }
    }
  }
    echo "<meta http-equiv='refresh' content'2' />";
  }

?>

<!-- untuk simpan data -->
