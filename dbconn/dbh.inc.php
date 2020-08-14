<?php

$servername ="127.0.0.1";
$dbusername = "root";
$dbpaswword = "";
$dbname = "loginsystem";

$conn=mysqli_connect($servername,$dbusername,$dbpaswword,$dbname);

if (!$conn){
    die("Connection faild:".mysqli_connect_error());
}
