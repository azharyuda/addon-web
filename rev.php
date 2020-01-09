<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="dist/ico/favicon.png" rel="icon" type="image.png" />
    <title>Add-On Website</title>

    <!-- plugin css (bootstrap, datatables) -->
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/datatables/datatables.css">
    <link rel="stylesheet" href="dist/datatables/AutoFill-2.3.2/css/autoFill.bootstrap4.css">
    <link rel="stylesheet" href="dist/datatables/AutoFill-2.3.2/css/autoFill.dataTables.css">
    <link rel="styleshet" href="dist/DataTables-1.10.18/css/jquery.dataTables.min.css" />

    <!-- custom css (CSS untuk page) -->
    <link rel="stylesheet" href="dist/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
              <a class="nav-link active" href="rev.php">
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
        <h4>Data Revenue</h4>

        <!-- form upload data -->
        <form action="" enctype="multipart/form-data" method="POST">
          Upload file Excel: <input  name="migrate" type="file" accept="application/vnd.ms-excel, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
          <br>
          <button type="submit" class="btn btn-success btn-sm" name="submit-migrate">Submit!</button>
          <br />

        </form>
        <!-- end of form upload data -->

        <br />
          <div class="table-responsive">
            <table class="table table-bordered table-sm" id="rev">
              <thead>
                <!-- table header revenue -->
                <th class="text-center">No.</th>
                <th class="text-center">NPER</th>
                <th class="text-center">CCA</th>
                <th class="text-center">SND</th>
                <th class="text-center">SND Group</th>
                <th class="text-center">Produk</th>
                <th class="text-center">Bisnis Area</th>
                <th class="text-center">Unit</th>
                <th class="text-center">Category</th>
                <th class="text-center">STO Desc</th>
                <th class="text-center">DATMS</th>
                <th class="text-center">DATRS</th>
                <th class="text-center">Umur Plg</th>
                <th class="text-center">Usage Desc</th>
                <th class="text-center">Paket FBIP</th>
                <th class="text-center">Paket Speedy Desc</th>
                <th class="text-center">Status</th>
                <th class="text-center">Total Net</th>
                <th class="text-center">Total</th>
                <th class="text-center">PPn</th>
                <th class="text-center">Abonemen</th>
                <th class="text-center">Pemakaian</th>
                <th class="text-center">Kredit</th>
                <th class="text-center">Debit</th>
                <th class="text-center">Total Net Lalu</th>
                <th class="text-center">Total Lalu</th>
                <th class="text-center">PPn Lalu</th>
                <th class="text-center">Abonemen Lalu</th>
                <th class="text-center">Pemakaian Lalu</th>
                <th class="text-center">Kredit Lalu</th>
                <th class="text-center">Debit Lalu</th>
                <th class="text-center">Bayar</th>
                <th class="text-center">Bayar Desc</th>
                <th class="text-center">Centite</th>
                <th class="text-center">Group Portofolio</th>
                <th class="text-center">Indihome Desc</th>
                <th class="text-center">Bundling</th>
                <th class="text-center">POTS</th>
                <th class="text-center">INET</th>
                <th class="text-center">Total Pembayaran</th>
                <th class="text-center">Indihome/Non-Indihome</th>
                <th class="text-center">IBooster</th>
                <th class="text-center">Dossier</th>
                <th class="text-center">UIM</th>
                <th class="text-center">Paket</th>
                <th class="text-center">Produk</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Kecamatan</th>
                <th class="text-center">Kodya</th>
                <th class="text-center">STO</th>
                <th class="text-center">Flag</th>
                <th class="text-center">PS Homewifi</th>
                <th class="text-center">TGL PS</th>
                <th class="text-center">Datel</th>
                <th class="text-center">Kontak</th>
              </thead>

              <!--menampilkan record Revenue -->
              <?php
                include "dist/koneksi.php";

                $ambil=$link->query("SELECT *
                FROM tblrev") or die (mysqli_error());
                while($data=$ambil->fetch_array()){
               ?>
            <tbody>
              <tr>
                <td class="text-center"><?php echo $data['id']; ?></td>
                <td class="text-center"><?php echo $data['nper']; ?></td>
                <td class="text-center"><?php echo $data['cca']; ?></td>
                <td class="text-center"><?php echo $data['snd']; ?></td>
                <td class="text-center"><?php echo $data['snd_group']; ?></td>
                <td class="text-center"><?php echo $data['produk1']; ?></td>
                <td class="text-center"><?php echo $data['bisnis_area']; ?></td>
                <td class="text-center"><?php echo $data['unit']; ?></td>
                <td class="text-center"><?php echo $data['category']; ?></td>
                <td class="text-center"><?php echo $data['sto_desc']; ?></td>
                <td class="text-center"><?php echo $data['datms']; ?></td>
                <td class="text-center"><?php echo $data['datrs']; ?></td>
                <td class="text-center"><?php echo $data['umur_plg']; ?></td>
                <td class="text-center"><?php echo $data['usage_desc']; ?></td>
                <td class="text-center"><?php echo $data['paket_fbip']; ?></td>
                <td class="text-center"><?php echo $data['paket_speedy_desc']; ?></td>
                <td class="text-center"><?php echo $data['status']; ?></td>
                <td class="text-center"><?php echo $data['total_net']; ?></td>
                <td class="text-center"><?php echo $data['total']; ?></td>
                <td class="text-center"><?php echo $data['ppn']; ?></td>
                <td class="text-center"><?php echo $data['abonemen']; ?></td>
                <td class="text-center"><?php echo $data['pemakaian']; ?></td>
                <td class="text-center"><?php echo $data['kredit']; ?></td>
                <td class="text-center"><?php echo $data['debit']; ?></td>
                <td class="text-center"><?php echo $data['total_net_lalu']; ?></td>
                <td class="text-center"><?php echo $data['total_lalu']; ?></td>
                <td class="text-center"><?php echo $data['ppn_lalu']; ?></td>
                <td class="text-center"><?php echo $data['abonemen_lalu']; ?></td>
                <td class="text-center"><?php echo $data['pemakaian_lalu']; ?></td>
                <td class="text-center"><?php echo $data['kredit_lalu']; ?></td>
                <td class="text-center"><?php echo $data['debit_lalu']; ?></td>
                <td class="text-center"><?php echo $data['bayar']; ?></td>
                <td class="text-center"><?php echo $data['bayar_desc']; ?></td>
                <td class="text-center"><?php echo $data['centite']; ?></td>
                <td class="text-center"><?php echo $data['group_portofolio']; ?></td>
                <td class="text-center"><?php echo $data['indihome_desc']; ?></td>
                <td class="text-center"><?php echo $data['bundling']; ?></td>
                <td class="text-center"><?php echo $data['pots']; ?></td>
                <td class="text-center"><?php echo $data['inet']; ?></td>
                <td class="text-center"><?php echo $data['total_pembayaran']; ?></td>
                <td class="text-center"><?php echo $data['indihome_nonindihome']; ?></td>
                <td class="text-center"><?php echo $data['ibooster']; ?></td>
                <td class="text-center"><?php echo $data['dossier']; ?></td>
                <td class="text-center"><?php echo $data['uim']; ?></td>
                <td class="text-center"><?php echo $data['paket']; ?></td>
                <td class="text-center"><?php echo $data['produk2']; ?></td>
                <td class="text-center"><?php echo $data['nama']; ?></td>
                <td class="text-center"><?php echo $data['alamat']; ?></td>
                <td class="text-center"><?php echo $data['kecamatan']; ?></td>
                <td class="text-center"><?php echo $data['kodya']; ?></td>
                <td class="text-center"><?php echo $data['sto']; ?></td>
                <td class="text-center"><?php echo $data['flag']; ?></td>
                <td class="text-center"><?php echo $data['ps_homewifi']; ?></td>
                <td class="text-center"><?php echo $data['tgl_ps']; ?></td>
                <td class="text-center"><?php echo $data['datel']; ?></td>
                <td><?php echo $data['kontak']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
          </table>
          </div>
        </main>
      </div>
    </div>

  </body>
</html>
<!-- javascript plugin (Jquery, Bootstrap, Datatables) -->
<script src="dist/js/node_modules/jquery/dist/jquery.js"></script>
<script src="dist/js/bootstrap.js"></script>
<script src="dist/datatables/datatables.js"></script>

<script src="dist/datatables/AutoFill-2.3.2/js/dataTables.autoFill.min.js"></script>
<script src="dist/datatables/AutoFill-2.3.2/js/autoFill.bootstrap4.min.js"></script>

<!-- javascript untuk menjalaknkan datatables -->
<script src="dist/table-revenue.js"></script>


<?php
  // kode untuk upload file csv



    if(isset($_POST['submit-migrate'])){

    //koneksi database
    include "dist/koneksi.php";

    //upload data file csv
    if ($_FILES['migrate']['size'] > 0) {
        $file = $_FILES['migrate']['tmp_name'];
        $handle = fopen($file, "r");
        while (($data = fgetcsv($handle, 100000, ";")) !== FALSE) {
    $import = "INSERT into tblrev
    values(
    '',
    '$data[0]',
    '$data[1]',
    '$data[2]',
    '$data[3]',
    '$data[4]',
    '$data[5]',
    '$data[6]',
    '$data[7]',
    '$data[8]',
    '$data[9]',
    '$data[10]',
    '$data[11]',
    '$data[12]',
    '$data[13]',
    '$data[14]',
    '$data[15]',
    '$data[16]',
    '$data[17]',
    '$data[18]',
    '$data[19]',
    '$data[20]',
    '$data[21]',
    '$data[22]',
    '$data[23]',
    '$data[24]',
    '$data[25]',
    '$data[26]',
    '$data[27]',
    '$data[28]',
    '$data[29]',
    '$data[30]',
    '$data[31]',
    '$data[32]',
    '$data[33]',
    '$data[34]',
    '$data[35]',
    '$data[36]',
    '$data[37]',
    '$data[38]',
    '$data[39]',
    '$data[40]',
    '$data[41]',
    '$data[42]',
    '$data[43]',
    '$data[44]',
    '$data[45]',
    '$data[46]',
    '$data[47]',
    '$data[48]',
    '$data[49]',
    '$data[50]',
    '$data[51]',
    '$data[52]',
    '$data[53]',
    '$data[54]'
    )";
                $link->query($import);
            }
        }
        fclose($handle);
    }
    echo "done";
?>
