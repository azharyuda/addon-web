<?php
include "dist/koneksi.php";
$thn=$_POST['_tahun'];
$bln=$_POST['_bulan'];
$graf=$_POST['_tipe'];

switch ($bln){
  case '1':
  $bulan='Januari';
  break;

  case '2':
  $bulan='Februari';
  break;

  case '3':
  $bulan='Maret';
  break;

  case '4':
  $bulan='April';
  break;

  case '5':
  $bulan='Mei';
  break;

  case '6':
  $bulan='Juni';
  break;

  case '7':
  $bulan='Juli';
  break;

  case '8':
  $bulan='Agustus';
  break;

  case '9':
  $bulan='September';
  break;

  case '10':
  $bulan='Oktober';
  break;

  case '11':
  $bulan='November';
  break;

  case '12':
  $bulan='Desember';
  break;
}
 ?>
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
                <span data-feather="users">
                Grafik data pelanggan PS 2nd STB <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- bagian tengah -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h4>Grafik PS 2ND STB</h4>

        <br />
        <div class="card">
        <div class="card-header">
          <center><b>Grafik PS 2nd STB bulan <?php echo $bulan; ?> Tahun <?php echo $thn; ?></b></center>
        </div>
        <div class="card-body">
          <?php

          $qry=$link->query("SELECT * FROM stb_ps WHERE MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          if($qry=0){
            echo "data tidak ada!";
          }else{
           ?>
            <canvas id="myChart" width="50" height="20"></canvas>
        </div>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: "<?php echo $graf; ?>",
    data: {
      labels: ["CRL","147","IN","MIG","OTHERS","PRS","PLS","OBC","CUST","SALES","DEMO PLASA","EBIS","SMR","TGG","DGS","KSTO-TGG2","MO","SPWAL96"],
      datasets: [{
        label: "# of Data",
        data:[
        <?php
          $crl=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%CRL%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($crl); ?>,
        <?php
          $satupatujuh=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%147%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($satupatujuh);
          ?>,
        <?php
          $in=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%IN%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($in); ?>,
        <?php
          $mig=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%MIG%'  AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($mig); ?>,
        <?php
          $others=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%OTHERS%'  AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($others); ?>,
        <?php
          $prs=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%PRS%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($prs); ?>,
        <?php
          $pls=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%PLS%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($pls); ?>,
        <?php
          $obc=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%OBC%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($obc); ?>,
        <?php
          $cust=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%CUST%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($cust);?>,
        <?php
          $sales=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%SALES%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($sales);?>,
        <?php
          $demo=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%DEMO PLASA%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($demo);?>,
        <?php
          $ebis=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%EBIS%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($ebis);?>,
        <?php
          $smr=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%SMR%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($smr);?>,
        <?php
          $tgg=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%TGG%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($tgg);?>,
        <?php
          $dgs=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%DGS%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($dgs);?>,
        <?php
          $ksto=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%KSTO-TGG2%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($ksto);?>,
        <?php
          $mo=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%MO%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($mo);?>,
        <?php
          $spwal=$link->query("SELECT * FROM stb_ps WHERE agent LIKE '%SPWAL96%' AND MONTH(tgl_ps)=$bln AND YEAR(tgl_ps)=$thn");
          echo mysqli_num_rows($spwal);
        }?>],
        backgroundColor: [
          'rgba(76, 116, 225, 0.5) ',
          'rgba(68, 233, 211, 0.5) ',
          'rgba(227, 109, 59, 0.5) ',
          'rgba(26, 183, 78, 0.5) ',
          'rgba(26, 123, 183, 0.5) ',
          'rgba(234, 204, 98, 0.5) ',
          'rgba(219, 26, 26, 0.5)',
          'rgba(44, 201, 143, 0.5)',
          'rgba(192, 216, 224, 0.5)',
          'rgba(0, 166, 166, 0.5)',
          'rgba(91, 141, 222, 0.5)',
          'rgba(249, 111, 108, 0.5)',
          'rgba(133, 199, 242, 0.5)',
          'rgba(255, 193, 122, 0.5)',
          'rgba(0, 105, 137, 0.5)',
          'rgba(231, 235, 144, 0.5)',
          'rgba(103, 71, 205, 0.5)',
          'rgba(29, 107, 87, 0.5)'
        ],
        borderColor:[
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1) ',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1)',
          'rgba(255, 255, 255, 1)'
        ],
      borderWidth: 5
    }]

      },
      options: {
        plugins: {
          labels: [
            {
            render:
            "<?php if ($graf=='pie'){
              echo 'percentage';
            }elseif($graf=='bar'){
              echo 'value';
            }?>",
            fontColor: 'black',
            position: 'outside',
            fontStyle: 'bold',
            precision: 0
          },
          {
            render:
            "<?php if ($graf=='pie'){
              echo 'label';
            }elseif($graf=='bar'){
              echo 'value';
            }?>",
              fontColor: 'black'
            }
          ]
        },
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }]
    }
  }
});
</script>
