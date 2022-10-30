<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop It</title>
    <style>
        .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }
        
        #title1{
            text-align: center;
            background-color: antiquewhite;
        }
        .up{
            text-align: left;
        }
        h4{
            margin: 10px;
            font-weight: bolder;
        }
        
        .words{
            color: aliceblue;
        }
        input{
           border:none;
           border-bottom: 2px solid wheat;
           
           color: rgb(2, 30, 43);
           font-weight: bolder;
           

        }
        ::placeholder{
            color: rgb(211, 198, 182);
            font-weight: normal;
        }
        button{
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 10%;
            width: 250px;
            font-weight: bold;
        }
        body{
            background-image: url("img14.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }
        #view{
            margin-left: 85%;
            height:70px ;
            width: 90px;

        }
        img{
            height: 300px;
            width: 300px;
            border-radius: 10%;
        }
        .addCartButton{
            margin-bottom: 10px;
            color:black;
            border:2px solid black;
        }
        .div3{
            /* background-color: transparent; */
            background-color:white;
            width:400px;
            height: fit-content;
            text-align: center;
            border: 3px solid black;
            display: inline-block;
            
            border-radius: 10%;
            margin: 25px;
        }
        #cart{
            height: 40px;
            width: 50px;
            text-align: left;
           
            
        }
        #logout{
        margin-left: 55%;
        
            
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
       #div8{
        background-color: transparent;
        align-items: center;
        border:auto;
        
       }
       #div15{
        position:sticky;
       }
       #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
img{
    width:100%
}
BUTTON{
    height:20px;
}
/* h2{
    color:white;
}
h3{
    color:white;
} */
.aU{
    height:10px;
    color:white;
}
.b{
    height:50px;
    color:black;
    border:2px solid black;
    background-color:white;
}


    </style>
    
    
    

</head>
<body>
<section class='showcase'>
<div class='video-container'>
<video autoplay muted loop id='myVideo'>
        <source src='lib4.mp4' type='video/mp4'>
      </video> 
<div id='div15'>

<div class='div1'>
    <H1 >Shop IT</H1>
    
    </div>
    <a href='../shared/logout.php'>
    <button id='logout'><img src='logout.png' id='logoutIcon'/><span>Logout</span></button><br>
    </a>
    <a href='../clients/viewCart.php'>
    <button id='view'><img  id='cart' src='img15.png'>Cart</button>
    </a>
<div id ='div8'>
    <a href="view2.php" ><button class="b">Home</button></a>
    <a href="aboutUs.html" ><button class="b">About us</button>
    <a href="contactUs.html"><button class="b">Contact us</button></a>
    <a href="faqs.html"><button class="b">FAQS</button></a>
    </div>


       
<?php


session_start();
if(!isset($_SESSION['client_id']))
{
    echo "<h2 class='bg-danger'>Unauthorized to Access</h2>";
    echo "<a href='login.html'>Login First </a>";
    die;
}

$client_name=$_SESSION['client_name'];
include_once '../shared/config.php';

    echo "
    <div id='div2'>  ";

    $sql_obj=mysqli_query($conn,'select * from products');
    while($row=mysqli_fetch_assoc($sql_obj))
    {            
            $name=$row['name'];
            $impath=$row['impath'];
            $price=$row['price'];
            $details=$row['details'];
            $pid=$row['id'];

        echo "<div class='div3'>
        <img src='$impath' alt='watch'/>
        <br>
        <h2>$name</h2>
        <h3>$details</h3>
        <h2>$price Rs</h2>
        
        <a href='../clients/addtocart.php?pid=$pid&name=$name&details=$details&price=$price' >
        <button class='addCartButton' >Add to Cart</button>
        </a>
        
        </div> ";




    }
    echo "</div></div>"

    
  

    
?>

</body>
</html>