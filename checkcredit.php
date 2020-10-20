
<?php

session_start();
$con=mysqli_connect('localhost','root','','muraribank');
$name1=$_SESSION['name'];
$q="select credit from user where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['credit'];
$from=$_SESSION['name'];    

$to=$_SESSION['to'];
$q1="select credit from user where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['credit'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update user set credit='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update user set credit='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    $message="Successful transfer";
    
    echo"<script type='text/javascript'>alert('$message');
    </script>";
    include 'home.php';
}  
    

else
{
    $message="Insufficient Balance";
    echo"<script type='text/javascript'>alert('$message');
    </script>";
    
    include 'home.php';
    
}

?>  
