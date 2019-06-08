<?php
session_start();
include 'connect.php';
$username=$_GET['username'];

        $pass = sha1($_POST['oldpass']);
        $newpass = sha1($_POST['newpass']);
        $confirmpass = sha1($_POST['confirmpass']);
        $result = mysql_query("SELECT password FROM users WHERE 
username='$username'");
        
        if($pass!= mysql_result($result, 0))
        {?>
        <script type="text/javascript">
alert("You Entered an incorrect password.");
window.location.href = "passchange.php";
</script>
<?php
        }else if($pass==$newpass)
	   {?>
       
       <script type="text/javascript">
alert("Password is similar to old one");
window.location.href = "passchange.php";
</script>
<?php }
         else if($newpass==$confirmpass)
		{
        $sql=mysql_query("UPDATE users SET password='$newpass' where 

 username='$username'");
        if($sql)?>
        
		<script type="text/javascript">
alert("Congratulations You have successfully changed your password");
window.location.href = "profile.php?username=<?php echo $username;?> ";
</script>
<?php
        }
       
       
	   
        else 
		{
       ?>
	  <script type="text/javascript">
alert("Password do not match");
window.location.href = "passchange.php";
</script>
<?php
       }
      ?>