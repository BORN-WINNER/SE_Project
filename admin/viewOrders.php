<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>View Orders Page</title>
    <style>
        body{
            background-image: url("order6.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }
        table{
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
        table{
            width:1000px;
        }
        th{
            font-size:20px;
            color:black;

        }
        tr{
            font-size:18px;
        }
    </style>
</head>
<body>
    <div class="div1">
        <H1 id="title">Shop IT</H1>
        
        </div>
        <br>

    

<?php
    include_once '../shared/config.php';

    $sql_obj=mysqli_query($conn,'select * from orders');
    $total_rows=mysqli_num_rows($sql_obj);
    
    if($total_rows==0 )
    {
        echo "
        <div class='empty'>
        <h1>No Orders yet</h1>
            <a id='a1' href='viewProductsAdmin.php'>Edit Products</a>
        </div>";
        die;
        
    }
    else{

    echo" <table border='1px'>
        <tr>
            <th>Id</th>
            <th>Client_id</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Address</th>
            <th>Date</th>
            <th>Time</th>
            <th>Price</th>
            
        </tr>";
    
        $id=0;
    while($row=mysqli_fetch_assoc($sql_obj))
    {            
        
        $name=$row['name'];
        $phone=$row['phone'];
        $address=$row['address'];
        $date=$row['date'];
        $time=$row['time'];
        $price=$row['price'];
        $client_id=$row['client_id'];
        $id=$id+1;

        echo "
            <tr>
                <td>$id</td>
                <td>$client_id</td>
                <td>$name</td>
                <td>$phone</td>
                <td>$address</td>
                <td>$date</td>
                <td>$time</td>
                <td>$price</td>
                


            </tr>
        
        
        
        
        ";



        }
    }

?>
</table>
</body>
</html>