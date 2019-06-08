<?php
$user=$_GET['username'];
$model=$_GET['model'];

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
		
		$qty=$_POST["qty"];
		$start=$_POST["start"];
		$end=$_POST["end"];
		$datetime=date('m/d/y');
		
	
		
			
		

		$start=$_POST['start'];
		$end=$_POST['end'];
		$datetime="20".date('y-m-d');
		if($start<$datetime){?>
		<script type="text/javascript">
alert("Start Date Invalid");
window.location.href = "details1.php?model=<?php echo $model;?>";
</script><?php
		}

		else if($end<$start){?>
		<script type="text/javascript">
alert("End Date Invalid");
window.location.href = "details1.php?model=<?php echo $model;?>";
</script><?php
		}
		else
		{
		
		
				
				$sql2="select * from tbl_uploads where model='$model'";
				$result2=mysqli_query($connection,$sql2);
				$row2=mysqli_fetch_array($result2);
				$name=$row2['image_name'];
				$price=$row2['price'];
				$type=$row2['type'];
				
				$sq="select name from users where username='$user'";
				$re=mysqli_query($connection,$sq);
				$r=mysqli_fetch_array($re,MYSQLI_ASSOC);
				$fname= $r['name'];
				
				$sql="INSERT INTO cart(qty,model,user,price,name,fname,type,start,end) VALUES('$qty','$model','$user','$price','$name','$fname','$type','$start','$end')";


$result=mysqli_query($connection,$sql);
if($result)
 { 
?>
				
				
			
		<script type="text/javascript">
alert("Added To Cart");
window.location.href = "cart.php?username=<?php echo $user;?>&&name=<?php echo $fname;?>";
</script><?php
		}
		}
	}?>

				
				
