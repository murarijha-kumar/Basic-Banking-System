<?php
$con=mysqli_connect('localhost','root','','muraribank');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
</head>
<style>
body{
background-image:url("imgs/back2.jpg");
 background-size:cover;
 overflow:hidden;
	}
    select{
          width:150px;
          padding:15px;
          color:black;
          border:2px solid black ;
          background:gray;
          border-radius:5px;
          cursor:pointer;
    }  
    select:hover{
          background:#6d6875;
    }
    h1{
      text-shadow:2px 2px 1px #ffbf69;  
            font-size:50px;
    }
	</style>
<body>
<center>


<form  action="senderdetail.php" method="post">

    <font face="verdana" color="#011627" >
	<h1> Select a User from this list</h1>
	</font>
	
    <table height="60%" width="40%" border="3">


    <?php 
session_start();
$con=mysqli_connect('localhost','root','','muraribank');
$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

	<thead bgcolor="#b1a7a6">
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody align="center">
		<tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</body>
</table>


    <div>

<table cellspacing=30px style="position: relative; center: 50%;color:white; font-size:25px; width:150px; height:30px">
  <tr>
      <td> <h2><font color="#001233">Select Sender</font></h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','muraribank');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>----Select----</option>
      
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
    </tr>
        </table>
    </form> 
	</center>
</body>
</html>