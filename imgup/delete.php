<?php
$mod=$_GET['model'];
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
$sql = "DELETE FROM tbl_uploads WHERE model='$mod'";



if (mysqli_query($conn, $sql)) {
	?>
<script type="text/javascript">
alert("Deleted");
window.location.href = "view.php";
</script>
<?php     
} else {
	?>
    
    <script type="text/javascript">
alert("Error Deleting Record");
window.location.href = "view.php";
</script>
    <?php
    
}
 
mysqli_close($conn);
?>