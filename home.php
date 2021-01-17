<html>

<head></head>
<body>




<?php
session_start();

$password1 = $_GET["upword"];
$mailid1 = $_GET["umailid"];

/*$message1 = $_POST["umessage"]; */

// collect emailid

//echo "<h5>Email Id : $mailid1 </h5>";
//echo " Password    : $password1 <br>";


include_once('common.php');

if(isset($_SESSION["username"]))
{


  echo "<br><h2> Hi ". $_SESSION["username"] . "</h2>"; 

}

else
{

$sql1= "SELECT name FROM records WHERE email_address = '$mailid1' and password='$password1'";
  
  $result = $res->query($sql1);
  
  if($result->num_rows > 0)
  {
  	//while($row = $result->fetch_assoc())
  	$row = $result->fetch_assoc();
  	{
  	
  	  echo "<br><h2> Hi ". $row['name'] . "</h2>"; 
  	//echo " Authentication Success";
  	$_SESSION["username"] = $row['name'];
  	

  	
  	}
 
  }
  else
  {
  
  	echo "<br><br> Authentication Failed";
	 
	unset($_SESSION["username"]);
  	return;
  
  }
}

   
 ?>     
  
  

<form name="formpostmessage" action="savepost.php" method="GET">
<div class = "add_c">
<label for = "addc_comments"></label>
<textarea class="form-control" id="message" name="message" rows="4" cols="100"></textarea>
</div>
<div class="reg_entry5">
<input type="submit" value="POST_message" onclick="savepost()">
</div>


</form>

<form action="index.html" method="GET">
<input type="submit" value="Logout">
</form>

<form action="profile.php" method="GET">
<input type="submit" value="Profile">
</form>

<form action="search.php" method="GET">
<input type="submit" value="Search">
</form>

<?php
 //include_once('common.php');
  $sql4 = "SELECT message FROM newrecord order by id  desc";
  $result = $res->query($sql4);
 if($result->num_rows > 0)
  {
	while($row = $result->fetch_assoc())
  	
  	{
  	
  	  echo "<br><h4>". $row['message'] ."</h4>"; 
  	
        }
        
      }  
  
  else
  {
  
  	echo "<br><br> No posts";
  	return;
  
  }
  
  //session_destroy();
  
?>








<!-- <div class="topnav-right">
 <a href= "profile.php">View profile</a>
 </div>  -->
 
 

</body>
</html>

