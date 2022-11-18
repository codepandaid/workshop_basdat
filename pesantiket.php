<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['pesantiket'])){

	// ambil data dari formulir
    $nama_user = $_POST['namauser'];
    $id_tiket = $_POST['id_tiket_dipesan'];
    $no_kursi = $_POST['no_kursi_kereta'];
    $time = time();
    $tanggal_pembelian = date('Y-m-d H:i:s', $time);

    // Pemeriksaan User
    $user_query = pg_query("SELECT * FROM users WHERE nama = '$nama_user'");
    $count = pg_num_rows($user_query);
    if ($count < 1) {
        $insert_user_baru = pg_query("INSERT INTO users (nama) VALUEs ('$nama_user')");
        $user_query = pg_query("SELECT * FROM users WHERE nama = '$nama_user'");
    }
    $user = pg_fetch_array($user_query);
    $id_user = $user['id'];

	// buat query
     $query = pg_query("INSERT INTO bukti_pembelian_tiket (nomor_kursi, id_user, id_tiket, tanggal_pembelian) VALUEs ($no_kursi, $id_user, $id_tiket, '$tanggal_pembelian')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: pesantiket_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>