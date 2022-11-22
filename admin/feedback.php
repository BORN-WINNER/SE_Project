<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Feedback Page</title>

<style>

    body{
        background-image:url("img14.jpg");
        background-repeat:no-repeat;
        background-size: cover;
    }
    .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }
        .empty{
            margin:auto;
            text-align:center;
            border: 3px solid;
            width:400px;
            color:white;
            margin-top:10%;
        }
        h2{
            color: rgb(0, 72, 255);
        }
        #logout{
        margin-left: 55%;
        
            background-color: transparent;
            border: 2px ;
            border-radius: 10%;
            
            font-weight: bold;
            height:70px ;
            width: 90px;
       }
       #logoutIcon{
        height:40px;
        width: 40px;

       }
       #order{
        color:blue;
       }

</style>
<script>
    function move(){
    window.location.href='../shared/logout.php'
    }
</script>

</head>
<body>
    <div class="div1">
        <H1 id="title">Shop IT</H1>
        
        </div>


<?php
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $type=$_POST["type"];
    $review=$_POST["view"];
    $suggestions=$_POST["suggestions"];
    $date=date("d/m/Y");
    date_default_timezone_set("Asia/Calcutta");
    $time=date("h:i:sa");
    


    include_once "../shared/config.php";
    
    $cmd="Insert into feedbacks(name,phone,type,feedback,suggestions,date,time) values('$name','$phone','$type','$review','$suggestions','$date','$time')";
    $results=mysqli_query($conn,$cmd);
    
    if($results)
    {
        header("location:../shared/login.html");
        
    }
    else
    {
        
        echo "<h1>Error</h1>";
        echo "<a href='feedbackform.html'>Try Again</a>";
        die;
    }



?>
</body>
</html>