<?php
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
		
		$name=$_POST["name"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$phone=$_POST["ph"];
		$dob=$_POST["birthdate"];
		$password=sha1($_POST["password"]);

		
				}
//variable to store result
$query="insert into users  (`name`, `username`, `email`, `address`, `ph`, `birthdate`, `password`) VALUES ('$name', '$username', '$email','$address', '$phone','$dob','$password');";


$result=mysqli_query($connection,$query);
if(!$result){?>
<script type="text/javascript">
alert("Username already exists");
window.location.href = "reg.php";
</script>

	<?php 
	exit;
	}
	else
	{
	?>
    <script type="text/javascript">
alert("Registered Sucessfully");
window.location.href = "log.php";
</script>
	<?php 
	}
	?>
    <html>
    <head>
    <style>
	.txt{
		color:#FF0;
	</style>
    </head>
    <body background="images/m1.jpg">
	jhbjbbjhbj
    </body>
    </html>
	<br/>
	<br/>
	<br/>
	
<?php
session_start();?>

	 <script type="text/javascript">
alert("Registered");
window.location.href = "log.php";
</script>
<?php
	 
?>
