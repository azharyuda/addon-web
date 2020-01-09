<table border=1>
  <thead>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">No</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">WITEL</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">NCLI</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">NDOS</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">NDEM</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">NO. Inet</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Item</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Price</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Tanggal VA</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Tanggal PS</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">K-Contact</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Agent</th>
  </thead>

  <!-- kode php untuk migrasi 2p 3p -->
  <?php
    include "../dist/koneksi.php";

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
      <td class="text-center"><?php echo $data['agent']; ?></td>
    </tr>
<?php } ?>
</table>
