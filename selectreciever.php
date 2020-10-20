<?php
session_start();
$con=mysqli_connect('localhost','root','','muraribank');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);

?>


<html>
<head>
   <title>
   viewUser
    </title>
    </head>
    <style>
body{
background-image:url("imgs/home.jpg");
background-size:cover;
	}
    h1{
        text-shadow:2px 2px 1px #ffbf69;  
            font-size:50px;
    }
    
	</style>
    <body>
	<center>
    <div>
	<br><br><br>
        <h1><font color="#011627">Select User To Transfer Credits</font></h1>
        <form action="transfer.php" method="post" style="position: relative; center: 40%";font-size="20";color="blue">
		<br>
       <table>
           <th><h1><b><font color="#9a031e" size="70">User's Name</font></b></h1></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>
    
   <tr>   
       <td> <input class="radio" type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?>  </td>
   </tr>

<?php }
  ?>
       <tr>          
           <td>
           <br>
		   <input type="submit" value="CREDIT"style="background-color:blue;color:white;font-size: 20px;width:150px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px"/></td>
           </tr>
        </table>
        </form>
        </div>
		</center>
    </body>
</html>