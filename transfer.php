<?php
session_start();
$con=mysqli_connect('localhost','root','','muraribank');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title> viewUser  </title>
    </head>
    <style>
body{
background-image:url("imgs/transfer.jpg");
 background-size:cover;
	}
    .sur{
        padding :10px;
        margin: 15px;
        font-weight:bold;
        border-radius: 5px;
    }
    h1{
        text-shadow:2px 2px 1px #4ea8de;  
            font-size:60px;
            text-align:center;
    }
	</style>
    <body>
	<br><br><br>
	<center>
     <form action="checkcredit.php" method="post"  style="position:relative; center:30">
          
             <h1> <b><font color="#011627">Enter Credit To Transfer</font></b></h1>
          <br>
            <br>
          <input class= "sur" type="text" name="transfer" placeholder="Credit"><br>
          <br>
        
          <input class="radio" type="submit" value="Submit" style="background-color:blue;color:white;font-size: 20px;width:150px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px">
        
        
        </form>

        </center>
    </body>
</html>
