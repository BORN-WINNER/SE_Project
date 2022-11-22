<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Cart</title>

<style>
    .d1{
        background-color:transparent;
        display: flex;
        color: aliceblue;
        border: 1.5px solid rgb(229, 241, 11);
        margin: 20px;
        text-align: center;
       

    }
    img{
        height: 300px;
        width: 350px;
        margin: 10px;
        border-radius: 10%;
        margin-left: 4.5%;
    }
    body{
            background-image: url("cart2.webp");
            background-repeat: no-repeat;
            background-size:fixed;
            background-color: rgb(255, 184, 86);

        }
    #buy{
        background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 10%;
            width: 150px;
            font-weight: bold;
            font-size: 15px;
        height: 50px;
        position: static;
        bottom: 10px;
        align-items: center;
        margin-left: 46%;

    }
    .remove{
        background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 10%;
            width: 100px;
            font-weight: bold;
            
           
    }
    .d2{
        text-align: center;
        margin-left: 15%;
    }
    .delete{
            width: 45px;
            height: 45px;
            margin-right: 25px;
            margin-left: 10px;
        }
    h1{
        font-size:40px;
    }
    h2{
        font-size: 25px;
    }
    #cost{
        margin-left: 42%;
    }
    .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }

    #title{
        font-size:40px ;
    }

    .empty{
            margin:auto;
            text-align:center;
            border: 3px solid;
            width:400px;
            color:white;
            margin-top:10%;
        }
        


</style>
</head>
<body>
<div class="div1">
        <H1 id="title">Shop IT</H1>
        
        </div>
        <br>
    <div>
        

<?php
    include_once '../shared/config.php';

    session_start();
    $client_id=$_SESSION['client_id'];
    
    $cmd="select products.*,cart.* from cart 
    join products on cart.pdt_id=products.id 
    where client_id=$client_id";
    
    $sql_obj=mysqli_query($conn,$cmd);
    $total=0;
   
    while($row=mysqli_fetch_assoc($sql_obj))
    {
         $name=$row['name'];
                $impath=$row['impath'];
                $price=$row['price'];
                $details=$row['details'];
                $pid=$row['id'];
                $pdt_id=$row['pdt_id'];
                $total=$total+$price;

        echo " <div class='d1'>
                <img src='../admin/$impath'/>
                <div class='d2'>
                    <h1>$name</h1>
                    <h2>$details</h2><br>
                    <h1>$price Rs</h1>
                    <a href='removeProductFromCart.php?client_id=$client_id&name=$name&price=$price&details=$details'>
                    <img class='delete' src='remove.png'>
                    </a>
                </div>
            </div>    ";
        

            
    }
    if($total!=0){
    echo "
    <br>
        <br>
        <div class='d1' >
            <h1 id='cost'>Total cost $total Rs</h1>
        </div>
        <a href='orderDetails.php?client_id=$client_id&total=$total'>
        <button id='buy'>Purchase</button>
        </a>
    </div>";
    }
    else
    {
        echo "
                <div class='empty'>
                <h1>No Products added</h1>
                    <a id='a1' href='../admin/view2.php'>Add Products</a>
                </div>";
                die;
    }

?>

    
</body>
</html>