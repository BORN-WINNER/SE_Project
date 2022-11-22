<?php
$conn=new mysqli("localhost","root","","book_store");

if($conn->connect_error)
{
    echo "Error in connecting";
    die;
}




?>