<?php
$db=pg_connect('host=localhost dbname=workshop_basdat user=postgres password=221829 port=1413');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>