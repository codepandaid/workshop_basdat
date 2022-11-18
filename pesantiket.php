<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['pesantiket'])){

	// ambil data dari formulir
    $nama_user = $_POST['namauser'];
    $nama_query = pg_query("SELECT * FROM users WHERE nama = '$nama_user'");
    var_dump($_POST);
    var_dump($nama_query);
	// // buat query
    //  $query = pg_query("INSERT INTO tiket (id_stasiun_tujuan, id_stasiun_sumber, id_kereta, harga, jadwal_berangkat, jadwal_sampai) VALUEs ($st_tujuan, $st_asal, $kereta, $harga, '$jadwal_berangkat', '$jadwal_sampai')");

	// // apakah query simpan berhasil?
	// if( $query==TRUE ) {
	// 	// kalau berhasil alihkan ke halaman index.php 
	// 	header('Location: index.php');
	// } else {
	// 	// kalau gagal kembalikan ke halaman form
	// 	header('Location: pesantiket_page.php');
	// }


} else {
	die("Akses dilarang...");
}
?>