<html>
<head> </head>
<body>
<h3> Register page</h3>


<?php
$host = 'localhost';
$username = 'vivsn';
$password = 'viv123';

$username1 = $_POST["uname"];
$password1 = $_POST["upword"];
$mailid1 = $_POST["umailid"];
// collect emailid

//echo "<h5> Name : $username1 </h5>";
//echo " Password : $password1 <br>";

$res = mysqli_connect($host, $username, $password, "userlog");
if(!res)
{
echo "Connection FAILED";

}

echo "Connection SUCCESS<br>";

$sql = "INSERT INTO records (name, email_address, password) VALUES ('$username1', '$mailid1', '$password1')"; 

/*mysqli_query($sql)*/
   
   if (mysqli_query($res, $sql)) {
      echo " New record created successfully";
     
      }
     
      
   
  /* if($res->query($sql) == TRUE)  {
   echo "New record created";
   }
   else
   echo  "Error: " . $sql . "<br>" . $conn->error;  */


?>
<br><br>
<a href="register.php"> Register </a>




</body>
</html>





















