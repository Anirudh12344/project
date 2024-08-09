<?php

$host="localhost";
$db="demo";
$user="root";
$pass="";
// mysqli extention//

// mysqli with procedural approach                                                     
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
else{
   echo"connection sucessfully created";
}
echo"<br><br>";
// mysqli object-oriented approach 
// $connn=new mysqli($host,$user,$pass,$db);
// if($connn->connect_error)
// {
// die("connection failed ".$connn->connect_error);
// }
// else{
//     echo"connection using oops connected successfully";
// }
//PDD(PHP data object)//
// echo"<br><br>";
// $querystring="INSERT INTO `test1`( `user name`, `userpassword`, `userroll`)
//  VALUES ('Aman','Aman@12','Student')";
//  if($conn->query($querystring)===TRUE)
//  {
//     echo"record added successfully";
//  }
//  else
//  {
//     echo"error in record insertion ".$querystring."<br>".$conn->error;
//  }
?>
