<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['buattiket'])){

	// ambil data dari formulir
    $st_asal = (int)$_POST['st_asal'];
    $st_tujuan = (int)$_POST['st_tujuan'];
    $kereta = (int)$_POST['kereta'];
    $harga = (int)$_POST['harga'];
    $jadwal_berangkat = strtotime($_POST['jadwal_berangkat']);
    $jadwal_berangkat = date('Y-m-d H:i:s', $jadwal_berangkat);

    $jadwal_sampai = strtotime($_POST['jadwal_sampai']);
    $jadwal_sampai = date('Y-m-d H:i:s', $jadwal_sampai);
    
    // var_dump($_POST);
    // var_dump($st_asal);
    // var_dump($jadwal_berangkat);

	// buat query
     $query = pg_query("INSERT INTO tiket (id_stasiun_tujuan, id_stasiun_sumber, id_kereta, harga, jadwal_berangkat, jadwal_sampai) VALUEs ($st_tujuan, $st_asal, $kereta, $harga, $jadwal_berangkat, $jadwal_sampai)");

	// apakah query simpan berhasil?
	// if( $query==TRUE ) {
	// 	// kalau berhasil alihkan ke halaman index.php 
	// 	header('Location: index.php');
	// } else {
	// 	// kalau gagal kembalikan ke halaman form
	// 	header('Location: buattiket_page.php');
	// }


} else {
	die("Akses dilarang...");
}
?>