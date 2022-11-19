<?php
    include('config.php');
    if(isset($_POST['buattiket'])){

	// ambil data dari formulir
    $st_tujuan = (int)$_POST['st_tujuan'];
    $st_sumber = (int)$_POST['st_sumber'];
    $kereta = (int)$_POST['kereta'];
    $harga = (int)$_POST['harga'];
    $jadwal_berangkat = $_POST['jadwal_berangkat'];
    $temp_time = strtotime($jadwal_berangkat);
    $jadwal_berangkat = date('Y-m-d H:i:s', $temp_time);
    $jadwal_sampai = $_POST['jadwal_sampai'];
    $temp_time = strtotime($jadwal_sampai);
    $jadwal_sampai = date('Y-m-d H:i:s', $temp_time);

	// buat query
    $query = pg_query("INSERT INTO tiket (id_stasiun_tujuan, id_stasiun_sumber, id_kereta, harga, jadwal_berangkat, jadwal_sampai) VALUEs ($st_tujuan, $st_sumber, $kereta, $harga, '$jadwal_berangkat', '$jadwal_sampai')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status=berhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: buattiket_page.php');
	}


    } else {
        die("Akses dilarang...");
    }
?>