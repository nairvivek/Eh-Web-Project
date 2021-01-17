<html>

<head></head>
<body>




<?php

include 'common.php';

$name2 = $_POST["uname"];
$mailid2 = $_POST["umailid"];

echo "<h5>Name : $name2</h5>";
echo " Mailid    : $mailid2 <br>";

$sql5 = "SELECT name, email_address FROM records WHERE name = '$name2' AND  email_address = '$mailid2'";

  $result = $res->query($sql5);
  
  if($result->num_rows > 0)
  {
  	//while($row = $result->fetch_assoc())
  	$row = $result->fetch_assoc();
  	
  	
  	  echo "<br><h2> ". $row["name"] . $row["email_address"] . "</h2>"; 
  }	//echo " Authentication Success";





 /*$c_query=mysqli_query($res, $sql2);
 
  $f_query=mysqli_fetch_fields($c_query); */
  
  
  
  
  
  
    // echo "Hi" $name;
     
                                  //update name, email address
     
  
?>


<form action="update.php" method="GET">
<input type="submit" value="Update">
</form>


<!-- <form> -->

  <!--<div class="topnav-right">                                                <!-- update name, email address -->  
 <!--<a href= "update_name.php">$name</a>
 <a href= "update_email.php">$email</a>
 </div>   --> 
 
 
<!-- <div class = "add_c">
<label for = "addc_comments"> Type here</label>
<textarea class="form-control" id="addc_comments" rows="4"></textarea>
</div>   


</body>
</html>

