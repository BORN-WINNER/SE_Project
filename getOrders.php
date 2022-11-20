<?php
    $name=$_POST['name'];
    $client_id=$_GET['client_id'];
    $total=$_GET['total'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $date=date("d/m/Y");
    date_default_timezone_set("Asia/Calcutta");
    $time=date("h:i:sa");

    include_once '../shared/config.php';

    $cmd="insert into orders(client_id,name,phone,address,date,time,price) values($client_id,'$name','$phone','$address','$date','$time',$total)";
    $sql_result=mysqli_query($conn,$cmd);

    if($sql_result)
    {
         header("location:thankyou.html");
    }
    else
    {
         echo " Failed";
         die;
    }


?>