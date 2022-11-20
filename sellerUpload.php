<?php

include_once '../shared/config.php';

$name=$_POST['pName']."(old)";
$price=$_POST['pPrice'];
$details=$_POST['pDesc'];

$fileobj=$_FILES['pFile'];

date_default_timezone_set('Asia/Kolkata');
$unique_name=date("Y_m_d_H_i_s");

$target_path="../admin/$unique_name.jpg";
move_uploaded_file($fileobj['tmp_name'],$target_path);


$cmd="insert into products(name,price,details,impath) values('$name',$price,'$details','$target_path')";
$sql_result=mysqli_query($conn,$cmd);

if($sql_result)
{
    header("location:thankSeller.html");
}
else
{
    echo "Upload Failed, check Query=$cmd";
}

?>