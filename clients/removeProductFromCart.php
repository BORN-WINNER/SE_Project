<?php

$client_id=$_GET['client_id'];
$name=$_GET['name'];
$price=$_GET['price'];
$details=$_GET['details'];
include_once '../shared/config.php';



$cmd="delete from cart where client_id=$client_id and name='$name' and price=$price and details='$details' limit 1";
echo "$cmd";

$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    header('location:viewCart.php');
}
else
{
    echo "<h1>Error in SQL Query</h1>";
    die;
}

?>