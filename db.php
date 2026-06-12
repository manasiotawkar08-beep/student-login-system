<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "vp_studentlogin"
);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>