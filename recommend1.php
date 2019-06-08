<?php
            
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "db";
			$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 
			if(isset($_GET['model'])){
			$model1=$_GET['model'];}
			
			$query="select * from book";
			$result=mysqli_query($connection,$query);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$model=$row['model'];
				echo $model."<br>";
				
				$query2="Select qty from cart where model='$model'";
				$query1="update tbl_uploads set count=count+1 where model='$model'";
				$result1=mysqli_query($connection,$query1);
				$result2=mysqli_query($connection,$query2);
				while($row1=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					$qty=$row1['qty'];
					$query3="update tbl_uploads set count=count+qty where model='$model'";
					$result3=mysqli_query($connection,$query3);
					}
				
				}
			
			
			header("Location:details1.php?model=$model1");
				?>