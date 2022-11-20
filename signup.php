<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SignUp Page</title>

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
    window.location.href='logout.php'
    }
</script>

</head>
<body>
    <div class="div1">
        <H1 id="title">Shop IT</H1>
        
        </div>


<?php
    $name=$_POST["name"];
    $password=$_POST["password"];
    $phone=$_POST["phoneNumber"];
    $email=$_POST["email"];
    $cpassword=$_POST["cpassword"];
    
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo "<h1>Invalid Email</h1>
        <a href='signup.html'>Try again</a>";

    }

else if($cpassword!=$password){
    echo "<h1>Password is not matching</h1>
        <a href='signup.html'>Try again</a>";
}


else{

    include_once "../shared/config.php";
    
    $cmd="Insert into clients(name,password,phone,email) values('$name',md5('$password'),'$phone','$email')";
    $results=mysqli_query($conn,$cmd);
   
    
    
    if($results)
    {
        header("location:../shared/login.html");
        
    }
     if(mysql_error())
     {
         echo "<h1>User's Phone number already exists</h1>";  
        echo "<a href='signup.html'>Try Again</a>"; 
     }
    
    //  else
    //  {
        
    //      echo "<h1>User's Phone number already exists</h1>";
    //     echo "<a href='signup.html'>Try Again</a>";
    //  }
}


?>
</body>
</html>