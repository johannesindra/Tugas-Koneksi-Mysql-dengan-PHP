<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "uts_312310538";

// membuat koneksi
$conn = new mysqli($host, $user, $pass, $database);

// mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>