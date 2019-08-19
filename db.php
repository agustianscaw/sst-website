<?php
$koneksi = mysqli_connect("localhost","root","","mydb");
	
if ($koneksi->connect_errno)
{
    die("Failed: ".$koneksi->connect_error);
}
?>