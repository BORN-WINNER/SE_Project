<?php

$pid=$_GET['pid'];
$name=$_GET['name'];
$details=$_GET['details'];
$price=$_GET['price'];


session_start();
$client_id=$_SESSION['client_id'];


include_once '../shared/config.php';

$cmd="insert into cart(client_id,pdt_id,name,details,price) values($client_id,$pid,'$name','$details',$price)";
$sql_res=mysqli_query($conn,$cmd);
if($sql_res)
{
    header('location:../admin/view2.php');
}
else
{
    echo "Error in Adding the Products";
}




?>