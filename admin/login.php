<?php

session_start();
//create a database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//test
if(mysqli_connect_errno()){
	die("Database Connection Failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
else{
	$username=$_POST["username"];
	$password=($_POST["password"]);
	}
$query="select * from admin where username='$username' ";
$result=mysqli_query($connection,$query);
$numrows=mysqli_num_rows($result);
if($numrows!=0){
		while($row=mysqli_fetch_assoc($result)){
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
			}
		if($username==$dbusername && $password==$dbpassword){?>
			<script type="text/javascript">
alert("Logged in sucessfully");
window.location.href = "index.php";
</script>
			 <?php
			 $_SESSION["username"]=$username;
			}
		else{?>
			<script type="text/javascript">
alert("Password didn't match");
window.location.href = "admin.php";
</script>
			<?php		
			}
	
	}else{?>
		<script type="text/javascript">
alert("Username doesn't exist");
window.location.href = "admin.php";
</script>
		<?php
		exit;
		}
				
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<body>

</body>
</head>

<body>
</body>
</html>