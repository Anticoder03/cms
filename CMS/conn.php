<?php
$conn = mysqli_connect("localhost","root","","CMS");
if(!$conn){
    echo "Failed to connect to database";
    die();
}
?>