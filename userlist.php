<?php 
session_start();
$con=mysqli_connect('localhost','root','','muraribank');
// if($con)
// {
//       echo"succcessfull";
// }
// else{
//       echo"unsucccessfull due to".mysqli_connect_error();
// }
$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
echo $row_count;

?>
<html>
<head>
   <title>
   Userlist
    </title>
    </head>
    <style>
body{
background-image:url("imgs/img2.jpg");
 background-size:cover;
 
	}
       h1{ 
              text-shadow:2px 2px 1px #ffbf69;  
            font-size:50px;
      }  
	</style>
    <body>
	
	<center>
        <h1><font face="Verdana" color="#011627">User's Detail</font></h1>
		<br>

        <table border=2 width="30%" height="70%">
		
	 <thead bgcolor="white">
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody  align="center">
	<tr bgcolor=white>
      
     	
        <?php  
      $row=mysqli_fetch_assoc($result)
            
                      ?>
                      
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr bgcolor=white> -->
            
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor=white>
        <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   </tr>
        
	</tbody>
</table>
<div>
 <div>
       <a href="home.php" ><input type="button" name="Home" value="Back" style="background-color:blue;color:white;font-size: 20px;width:170px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px"/>
            </a>
</div>
 </div>
        </center>
    </body>
</html>