<?php

$servername = "localhost";
$username = "root";
$password = ""; //kalo pake yang lainnya bisa kosong/root

$db_name = "login_db";

//koneksi database
$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
