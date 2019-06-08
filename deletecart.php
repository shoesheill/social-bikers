<?php
$user=$_GET['username'];


$id=$_GET['id'];
$fname=$_GET['name'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// sql to delete a record
$sql = "DELETE FROM cart WHERE id='$id'";



if (mysqli_query($conn, $sql)) {

	?>
<script type="text/javascript">
alert("Deleted");
window.location.href = "cart.php?username=<?php echo $user;?>&&name=<?php echo $fname;?>";
</script>
<?php     
} else {
	?>
    
    <script type="text/javascript">
alert("Error Deleting Record");
window.location.href = "cart.php?username=<?php echo $user;?>&&name=<?php echo $fname;?>";
</script>
    <?php
    
}
 
mysqli_close($conn);
?>