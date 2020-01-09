<table border="1">
  <thead>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">No</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">ID Order</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">NCLI</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">POTS</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Internet</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Nama Customer</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">No. HP</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Alamat</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">K-Contact</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Package Name</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Action</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Keterangan</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Tanggal Tindak Lanjut</th>
    <th class="text-center" style="background-color: #000000; color:#ffffff;">Tanggal Upload</th>
  </thead>

  <!-- kode php untuk migrasi 2p 3p -->
  <?php
    include "../dist/koneksi.php";

    $ambil=$link->query("SELECT *
    FROM stb_tambah") or die (mysqli_error());
    while($data=$ambil->fetch_array()){
   ?>
  <tr>
    <td class="text-center"><?php echo $data['no']; ?></td>
    <td class="text-center"><?php echo $data['order_id']; ?></td>
    <td class="text-center"><?php echo $data['ncli']; ?></td>
    <td class="text-center"><?php echo $data['pots']; ?></td>
    <td class="text-center"><?php echo $data['internet']; ?></td>
    <td class="text-center"><?php echo $data['nama_cust']; ?></td>
    <td class="text-center"><?php echo $data['no_hp']; ?></td>
    <td class="text-center"><?php echo $data['alamat']; ?></td>
    <td class="text-center"><?php echo $data['k_contact']; ?></td>
    <td class="text-center"><?php echo $data['package']; ?></td>
    <td class="text-center"><?php echo $data['act']; ?></td>
    <td class="text-center"><?php echo $data['keterangan']; ?></td>
    <td class="text-center"><?php echo $data['tgl_tindak_lanjut']; ?></td>
    <td class="text-center"><?php echo $data['tgl_upload']; ?></td>
  </tr>
<?php } ?>
</table>
?>
