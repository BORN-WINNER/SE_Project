<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Details Page</title>
    <style>
        .div1{
            text-align: center;
            background-color: rgb(26, 166, 247);
            color: aliceblue;
            width: 300px;
            margin: auto;
           
        }
        #div2{
            background-color:transparent;
            width:550px;
            height: fit-content;
            text-align: center;
            vertical-align: middle;
            margin: auto;
           
            border: 3px solid black;
            padding: 10px;
            margin-top: 200px;
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
        body{
            background-image: url("img3.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            

        }
        .words{
            color: aliceblue;
        }
        input{
           border:none;
           border-bottom: 2px solid wheat;
           background-color: transparent;
           color: rgb(246, 246, 8);
           font-weight: bolder;
           height:20px;
           font-size:15px;
           

        }
        ::placeholder{
            color: antiquewhite;
            font-weight: normal;
        }
        button{
            background-color: transparent;
            color: black;
            border: 2px solid blue;
            border-radius: 10%;
            width: 250px;
            font-weight: bold;
        }
        h3{
            color:white;
        }
        .empty{
            margin:auto;
            text-align:center;
            border: 3px solid;
            width:400px;
            color:white;
            margin-top:10%;
        }
        #div4{
        position:sticky;
       }
       #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
       
        

    </style>


</head>
<body>
<video autoplay muted loop id="myVideo">
        <source src="purchase2.mp4" type="video/mp4">
      </video>
    <div id="div4">

    <div class="div1">
    <H1 >Online Book Store</H1>
    
    </div>



    <?php
   session_start();
   if(!isset($_SESSION['client_id']))
   {
       echo "
               <div class='empty'>
               <h1>Unauthorized to Access</h1>
                   <h2><a id='a1' href='../shared/login.html'>Login First </a></h2>
               </div>";
               
       // echo "<h2 class='bg-danger'>Unauthorized to Access</h2>";
       // echo "<a href='../shared/login.html'>Login First </a>";
        die;
   }
        $client_id=$_GET['client_id'];
        $total=$_GET['total'];
        echo "
        <form action='getOrders.php?client_id=$client_id&total=$total' method='post'>
        <div id='div2'>
        <div id='div3'>
            <h1 class='words' id='details'>Add Your Details Here</h1><hr><br>
            
            <h4 class='up words'>Full Name</h4>
             <input type='text' name='name' placeholder='Full Name' required/>
        
            <br><br>
            <h4 class='up words' >Phone Number</h4>
            <input type='number' name='phone'  placeholder='Phone No.' required/>
            <br><br>
            <h4 class='up words'>Address</h4>
            <textarea rows='2' !required cols='32' name='address' required></textarea>
            <br><br>
            <h3>Amount: $total Rs</h3>
            <br>
        
            <button >Buy Now</button>
        </div>";




    ?>
    
    </div>
</div>
    </form>



</body>
</html>