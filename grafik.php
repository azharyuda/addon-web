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
              <a class="nav-link" href="ps_stb.php">
                <span data-feather="users"></span>
                Data Pelanggan PS 2nd STB
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="grafik.php">
                <span data-feather="users"></span>
                Grafik data pelanggan PS 2nd STB
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- bagian tengah -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h4>Grafik PS 2ND STB</h4>
        <br />
        <form action="grafik_ps.php" method="POST">
          <div class="form-group">
            <label style="font-size: 14.5px;">Silahkan pilih Bulan dan Tahun: </label>
            <select class="form-control" name="_bulan" style="width: 150px;">
              <option hidden>Pilih Bulan</option>
              <option value="1">Januari</option>
              <option value="2">Februari</option>
              <option value="3">Maret</option>
              <option value="4">April</option>
              <option value="5">Mei</option>
              <option value="6">Juni</option>
              <option value="7">Juli</option>
              <option value="8">Agustus</option>
              <option value="9">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
            &nbsp;
            <select class="form-control" name="_tahun" id="year" style="width: 125px;">
              <option hidden>
                Pilih Tahun
              </option>
            </select>
            &nbsp;
            <select class="form-control" name="_tipe" style="width: 125px;">
              <option hidden>
                Tipe Grafik
              </option>
              <option value="bar">
                Bar
              </option>
              <option value="pie">
                Pie
              </option>
            </select>
            <br />
            <button type="submit" class="btn btn-primary">Cari!</button>
          </div>
        </form>
      </main>
    </div>

</body>
</html>
<script src="dist/js/node_modules/jquery/dist/jquery.js"></script>
<script src="dist/js/bootstrap.js"></script>

<script src="dist/datatables/datatables.js"></script>
<script src="dist/datatables/AutoFill-2.3.2/js/dataTables.autoFill.min.js"></script>
<script src="dist/datatables/AutoFill-2.3.2/js/autoFill.bootstrap4.min.js"></script>
<script src="dist/table.js"></script>
<script>
  for (i=new Date().getFullYear(); i > 2016; i--)
  {
    $('#year').append($('<option />').val(i).html(i));
  }
</script>
