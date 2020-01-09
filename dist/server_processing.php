<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'tblrev';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => '0' ),
    array( 'db' => 'nper',  'dt' => '1' ),
    array( 'db' => 'cca',   'dt' => '2' ),
    array( 'db' => 'snd',     'dt' => '3' ),
    array( 'db' => 'snd_group', 'dt' => '4' ),
    array( 'db' => 'produk1',  'dt' => '5' ),
    array( 'db' => 'bisnis_area',   'dt' => '6' ),
    array( 'db' => 'unit',     'dt' => '7' ),
    array( 'db' => 'category', 'dt' => '8' ),
    array( 'db' => 'sto_desc',  'dt' => '9' ),
    array( 'db' => 'datms',   'dt' => '10' ),
    array( 'db' => 'datrs',     'dt' => '11' ),
    array( 'db' => 'umur_plg', 'dt' => '12' ),
    array( 'db' => 'usage_desc',  'dt' => '13' ),
    array( 'db' => 'paket_fbip',   'dt' => '14' ),
    array( 'db' => 'paket_speedy_desc',     'dt' => '15' ),
    array( 'db' => 'status', 'dt' => '16' ),
    array( 'db' => 'total_net',  'dt' => '17' ),
    array( 'db' => 'total',   'dt' => '18' ),
    array( 'db' => 'ppn',     'dt' => '19' ),
    array( 'db' => 'abonemen', 'dt' => '20' ),
    array( 'db' => 'pemakaian',  'dt' => '21' ),
    array( 'db' => 'kredit',   'dt' => '22' ),
    array( 'db' => 'debit',     'dt' => '23' ),
    array( 'db' => 'total_net_lalu', 'dt' => '24' ),
    array( 'db' => 'total_lalu',  'dt' => '25' ),
    array( 'db' => 'ppn_lalu',   'dt' => '26' ),
    array( 'db' => 'abonemen_lalu',     'dt' => '27' ),
    array( 'db' => 'pemakaian_lalu', 'dt' => '28' ),
    array( 'db' => 'kredit_lalu',  'dt' => '29' ),
    array( 'db' => 'debit_lalu',   'dt' => '30' ),
    array( 'db' => 'bayar',     'dt' => '31' ),
    array( 'db' => 'bayar_desc', 'dt' => '32' ),
    array( 'db' => 'centite',  'dt' => '33' ),
    array( 'db' => 'group_portofolio', 'dt' => '34' ),
    array( 'db' => 'indihome_desc',     'dt' => '35' ),
    array( 'db' => 'bundling', 'dt' => '36' ),
    array( 'db' => 'pots',  'dt' => '37' ),
    array( 'db' => 'inet',   'dt' => '38' ),
    array( 'db' => 'total_pembayaran',     'dt' => '39' ),
    array( 'db' => 'indihome_nonindihome', 'dt' => '40' ),
    array( 'db' => 'ibooster',  'dt' => '41' ),
    array( 'db' => 'dossier',   'dt' => '42' ),
    array( 'db' => 'uim',     'dt' => '32' ),
    array( 'db' => 'paket', 'dt' => '44' ),
    array( 'db' => 'produk2',  'dt' => '45' ),
    array( 'db' => 'nama',   'dt' => '46' ),
    array( 'db' => 'alamat',     'dt' => '47' ),
    array( 'db' => 'kecamatan', 'dt' => '48' ),
    array( 'db' => 'kodya',  'dt' => '49' ),
    array( 'db' => 'sto',   'dt' => '50' ),
    array( 'db' => 'flag',     'dt' => '51' ),
    array( 'db' => 'ps_homewifi', 'dt' => '52' ),
    array( 'db' => 'tgl_ps',  'dt' => '53' ),
    array( 'db' => 'datel',   'dt' => '54' ),
    array( 'db' => 'kontak',     'dt' => '55' ),
  );

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'dbkpro',
    'host' => 'localhost'
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);
