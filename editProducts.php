<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Edit Products Page</title>
    <style>
        .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }
        #div2{
           background-color: transparent;
            width:550px;
            height: fit-content;
            text-align: center;
            vertical-align: middle;
            margin: auto;
            border: 3px solid;
            padding: 10px;
            margin-top: 100px;
            border-radius: 10%;

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
            background-image: url('img14.jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }
        #view{
            margin-left: 55%;
            height:50px ;
            width: 90px;

        }

    </style>


</head>
<body>
    <div class='div1'>
    <H1 >Shop IT</H1>
    
    </div>
    
    
   








<?php
    include_once '../shared/config.php';
    $pid=$_GET['pid'];
    
    
    $cmd="select * from products where id='$pid'";
    $sql_obj=mysqli_query($conn,$cmd);
    $row=mysqli_fetch_assoc($sql_obj);
    $name=$row['name'];
    $impath=$row['impath'];
    $price=$row['price'];
    $details=$row['details'];
    $pid=$row['id'];
        
    echo " <form action='edit.php?pid=$pid' method='post' enctype='multipart/form-data'>
    <div id='div2'>
       <div id='div3'>
         <h1 class='words'>Edit an item</h1><hr><br>
         <h4 class='up words'>Product name</h4>
         <h4 class='up words'>id: $pid</h4>
         <input type='text' value='$name' name='pName' placeholder='Enter product name'/>
        
            <br><br>
            <h4 class='up words'>Price</h4>
            <input type='number'name='pPrice' value='$price' placeholder='Enter price'/>
            <br><br>
            <h4 class='up words'>Add Image</h4>
                <input type='file' value='$impath' name='pFile' accept=' .jpg'/>
            <br><br>
            <h4 class='up words'>Description</h4>
            <textarea rows='5' cols='50' name='pDesc' placeholder='Enter description here'>$details</textarea>
            <br><br>
        
            <button>Edit Item</button>
        </div>

    </div>
    </form>"









?>
</body>
</html>
