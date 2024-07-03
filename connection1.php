<?php
define('DB_SERVER','localhost:3307');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($conn==false)
{
    dir('Error : Can not connect');
}
?>