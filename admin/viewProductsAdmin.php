<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Products(Admin)</title>
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
            height:50px ;
            width: 90px;

        }
        img{
            height: 300px;
            width: 300px;
            border-radius: 10%;
        }
        .addCartButton{
            margin-bottom: 10px;
            width: 35px;
            height: 35px;
            margin: 20px;
            text-align: center;
        }
        .div3{
            background-color: transparent;
            width:400px;
            height: fit-content;
            text-align: center;
            border: 3px solid;
            display: inline-block;
            
            border-radius: 10%;
            margin: 25px;
        }
        #cart{
            height: 40px;
            width: 40px;
            text-align: left;
           
            
        }
        .editDelete{
            width: 35px;
            height: 35px;
            margin-right: 25px;
            margin-left: 10px;
        }
        .empty{
            margin:auto;
            text-align:center;
            border: 3px solid;
            width:400px;
            color:white;
            margin-top:20%;
        }
        

    </style>
    


</head>
<body>
    <div class="div1">
    <H1 >Shop IT</H1>
    
    </div>
    
    
    <div id="div2">
       
        <?php
            include_once '../shared/config.php';

            $sql_obj=mysqli_query($conn,'select * from products');
            $total_rows=mysqli_num_rows($sql_obj);

            if($total_rows==0 )
            {
                echo "
                <div class='empty'>
                <h1>No Products added</h1>
                    <a id='a1' href='admin.html'>Add Products</a>
                </div>";
                die;
                
            }
            else{
            while($row=mysqli_fetch_assoc($sql_obj))
            {            
                $name=$row['name'];
                $impath=$row['impath'];
                $price=$row['price'];
                $details=$row['details'];
                $pid=$row['id'];
                
                echo "<div class='div3'>
            <img src='$impath' />
            <br>
            <h2>$name</h2>
            <h3>$details</h3>
            <h2>$price Rs</h2>
            <a href='editProducts.php?pid=$pid'>
            <img class='editDelete'  src='edit5.webp'/>
            </a>
            <a href='deleteProducts.php?pid=$pid'>    
            <img class='editDelete'  src='remove.png'/>
            </a>
            </div>";






            }

        }
        
        
        
        
        
        
        
        
        

        


    echo "</div>

    


</body>
</html>"

?>

<!--<script>
        function cart(){
            window.location.href = 'http://localhost/Project/deleteProducts.php/?pid=$pid';
    }
        
    </script>-->