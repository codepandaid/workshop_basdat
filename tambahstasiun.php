<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['tambahstasiun'])){

	// ambil data dari formulir
    $nama_stasiun = $_POST['nama_stasiun'];
    $kota_stasiun = $_POST['kota_stasiun'];

	// buat query
  $query = pg_query("INSERT INTO stasiun (nama, kota) VALUEs ('$nama_stasiun', '$kota_stasiun')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: tambahstasiun_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>