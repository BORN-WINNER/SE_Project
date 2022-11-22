<?php

$mobile=$_POST['phoneNumber'];
$password=$_POST['password'];


if($mobile==1&&$password=='admin'){
    header('location:../admin/admin.html');

}
else{
    $password=md5($password);

include_once '../shared/config.php';

$cmd="

select * from clients where phone='$mobile' and password='$password' limit 1";

$sql_obj=mysqli_query($conn,$cmd);

$total_rows=mysqli_num_rows($sql_obj);

if($total_rows==0)
{
    echo "<h2>Invalid Credentials</h2>";
    echo "<a href='login.html'>Try Again</a>";
}
else
{
    
    
    $row=mysqli_fetch_assoc($sql_obj);
    
    session_start();
    $_SESSION['client_id']=$row['id'];
    $_SESSION['client_name']=$row['name'];

    header('location:../clients/option.html');
}
}


?>