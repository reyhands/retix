<?php

$db = "localhost";
$usr = "root";
$pwd = "";
$dbname = "retiket";

$knk = mysqli_connect($db, $usr, $pwd, $dbname);

if (!$knk) {

	die("Koneksi Gagal : " . mysqli_connect_error ());
}

