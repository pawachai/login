<?php

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    $sql = "SELECT username, password FROM log WHERE username = '".$user."' AND password = '".$pass."'";
    $result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('received!'); location.href='index.php';</script>";
    exit();
} else {
    echo '<script>alert("EROR YOUR PAGE")</script>';
}
?>