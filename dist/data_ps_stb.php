<?php
  include "koneksi.php";

  $mei=$link->query("SELECT agent FROM stb_ps WHERE MONTH(tgl_ps) = 5 and YEAR(tgl_ps) = 2018");
  $count =mysqli_num_rows($mei);
 ?>
