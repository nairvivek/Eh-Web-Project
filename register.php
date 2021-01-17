<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>

<script>
function checkPassword(formRegister){

if(formRegister.upword.value!=formRegister.cpword.value)
{
    alert("Passwords not match");
    return false;
   } 
    return true;
 }

</script>



<body>
<div class="content">


<form name="formRegister" action="connect.php" onsubmit="return checkPassword(formRegister)" method="POST"> 



<div class="reg_entry1">
<label for="rname">Name</label>
<input type="text" placeholder="Name" id="uname"  name="uname"><br><br>
</div>
<div class="reg_entry2">
<label for="umailid">Email-id</label>
<input type="email" placeholder="Email-id" id="umailid" name="umailid"><br><br>
</div>
<div class="reg_entry3">
<label for="upassword">Password</label>
<input type="password" placeholder="Password" id="upword"  name="upword"><br><br>
</div>
<div class="reg_entry4">
<label for="cpassword">Confirm</label>
<input type="password" placeholder="Confirm" id="cpword" name="cpword"><br><br>
</div>

<div class="reg_entry5">
<input type="submit" value="Register">
</div>
</form>
</div>
</body>
</html>



