<?php 
session_start();
$con=mysqli_connect('localhost','root','','muraribank');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;

?>
<html>
<head>
   <title>
   viewUser
    </title>
</head>
<style>
body{
background-image:url("imgs/userdetail.jpg");
 background-size:cover;
	}
    h1{
        text-shadow:2px 2px 1px #ffbf69;  
            font-size:60px;
    }
	</style>
    <body>
	<center>

    <div><br><br>
     <font color="#011627">
     <h1><b>Details of Selected User</b></h1>
     </font>
		<br><br><br><br><br><br>
       <table height="15%" width="30%" border="2" bgcolor="#b1a7a6">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr align="center" bgcolor="#ced4da">
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
		<table>
        <tr>
		<td>
                 <a href="selectreciever.php" >
                 <input type="button" name="Transfer To Whom" value="Transfer To Whom" style="background-color:blue;color:white;font-size: 20px;width:180px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px"
/>
                 </a>
				 </td>
    
			   <td>
               
                 <a href="selectsender.php" ><input type="button" name="Back" value="Back" style="background-color:blue;color:white;font-size: 20px;width:150px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px"/>
				 </td>
                 </tr>
               </a>     
		</center>
    </body>
</html>