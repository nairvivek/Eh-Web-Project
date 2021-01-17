<html>
<head></head>
<body>

<?php



$name3 = $_GET["uname"];
$mailid3 = $_GET["umailid"];


include 'common.php';

$sq="UPDATE records SET name='$nname', email_address='$nemail'  WHERE name='$name3' AND email_address = '$mailid3'";

$re=$res->query($sq);
  if (mysqli_query($res, $sq)) {
      echo " Updated name, email-id successfully";
      }

?> 


<div class="entry">

<label for="New_name">Name</label>
<input type="text" placeholder="New_Name" id="nname" name="nname"><br><br>
</div>

<div class = "entry11">
<label for="New_Email-id">Email-Id</label>
<input type="email" placeholder="New_Email_id" id="nemail" name="nemail"><br><br>
</div>



<div class="entry12">
<input type="submit" value="Update">
</div>  

</div>
</body>
</html>
