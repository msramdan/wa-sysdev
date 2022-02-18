<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "wa_sysdev";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "https://sman1tual.sch.id/wa/wa-sysdev/";
date_default_timezone_set('Asia/Jakarta');
?>
