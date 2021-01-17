<html>
<head></head>
<body>

<?php

include 'common.php';


$sql7= "SELECT name, email_address FROM records where name LIKE 'nsearch'";

$re=$res->query($sql7);
  if (mysqli_query($res, $sql7)) {
      echo " usernames are listed";
      }


//echo '$name';

?>


<div class="entry12">

 <label for="Search">Search</label>
 <input type="text" placeholder="Search" id="nsearch" name="nsearch"<br><br>
</div>


<div class="entry10">
<input type="submit" value="Search">
</div>

</div>
</body>
</html>
