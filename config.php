<?php
$host ='localhost';
$user ='root';
$pass ='';
$db_name ='portofolio_dpkb';


$db = mysqli_connect($host,$user,$pass,$db_name);

if($db->connect_errno){
    echo "Koneksi Gagal : " . $db->connect_error;
    die("eror!");
} else {
    echo "Koneksi Berhasil";
}
