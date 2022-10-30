<?php

include_once '../shared/config.php';

$pid=$_GET['pid'];
$name=$_POST['pName'];
$price=$_POST['pPrice'];
$details=$_POST['pDesc'];

$fileobj=$_FILES['pFile'];
date_default_timezone_set('Asia/Kolkata');
$unique_name=date("Y_m_d_H_i_s");

$target_path="$unique_name.jpg";
move_uploaded_file($fileobj['tmp_name'],$target_path);
$cmd="UPDATE products 
SET 
    
    price = '$price',
    name = '$name',
    details='$details',
    impath='$target_path'

WHERE
    id=$pid";


$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    header('location:viewProductsAdmin.php');
}
else
{
    echo "<h1>Error in SQL Query</h1>";
}
?>