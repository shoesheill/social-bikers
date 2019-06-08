
<!DOCTYPE html>
<html>
<head>
<title>Social Bikers</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->


<style>
.dropbtn {
	margin-top:80px;
	margin-left:10px;
	background-size:0px;
	background-color:transparent;
	color:#0C3;
	background:none;
	text-shadow:#FFF;
	border:none;
	  
    cursor: pointer;
	float:right;
	font-size:20px;
	padding:1px 3px;
	border-radius:20px;
	
	
}
#dropdown-content a {
	color:#000;
	float:right;
	margin-right:20px;
	margin-left:5px; 
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropbtn {
	color:#FFF;
}
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

</style>
</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  

	

	  <div class="container">
			 <div class="header">
            
             <div class="logo">
						<p align="left"><form name="search" method="post"  action="search/findme.php">
<input type="text" name="find" required= required  align="right"/> 


<input type="submit" name="search" value="Search" />
</form>
</p>
				   </div>
			       							 
				   <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><p align="right"> &nbsp;&nbsp;&nbsp;<a href="index.php" ><img src="images/gear.png" height="50" width="50"></a></p>
                          <ul class="dropdown1">
                          <li><a href="reg.php"><h4><font color="#000000">Register</font></h4></a></li>
									<li><a href="log.php"><h4><font color="#000000">Login</font></h4></a></li>
									<li><a href="admin/admin.php"><h4><font color="#000000">Admin</font></h4></a></li>
                                    <li><a href="gallery.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    
                                    </ul>
				 </div>
				 
	  </div>	 
	 
	 </div>
<div class="bikes">	
<div class="clearfix"></div>
	 
	 <div class="mountain-sec">
		 <h2>ROAD BIKES</h2>
         <div class="header">
		   <?php
				//create a database connection
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$dbname="db";
				$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				$query="select * from tbl_uploads";
				$result=mysqli_query($connection,$query) or die("Query failed");
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$modeldb=$row['model'];
					$price=$row['price'];
					$type=strtoupper($row['type']);

					$brand=$row['brand'];
					$desc=$row['img_description'];
					$name=$row['image_name'];
					$imgsrc=$row['file'];
					if(strcmp("ROAD",$type)==0){
						echo "<a href=\"details.php?model=$modeldb\"><div class=\"bike\">";				 
						echo " <img src=\"imgup/uploads/$imgsrc\" alt=\"\"/>";
				     	echo "<div class=\"bike-cost\">";
						echo	" <div class=\"bike-mdl\">";
						echo 			 "<h4>Model:$modeldb</h4>";
						echo		 "</div>";
						echo		 "<div class=\"bike-cart\">";						 
				
						echo		 "</div>";
						echo 		 "<div class=\"clearfix\"></div>";
				   		echo					"</div>";
						echo  "<div class=\"fast-viw\">";
						echo 		"<a href=\"recommend.php?model=$modeldb\">Quick View</a>";
						echo $modeldb;
						echo "</div>";
					    echo  "</div></a>";
					}
					

				}



		  	?>
		  	<div class="clearfix"></div>
		 </div>
	  <div class="singlespeed-sec">
		   <h2>MOUNTAIN BIKES</h2>
			 <?php
				//create a database connection
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$dbname="db";
				$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				$query="select * from tbl_uploads";
				$result=mysqli_query($connection,$query) or die("Query failed");
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$modeldb=$row['model'];
					$price=$row['price'];
					$type=strtoupper($row['type']);
					$brand=$row['brand'];
					$desc=$row['img_description'];
					$name=$row['image_name'];
					$imgsrc=$row['file'];
					if(strcmp("MOUNTAIN",$type)==0){
						echo "<a href=\"details.php?model=$modeldb\"><div class=\"bike\">";				 
						echo " <img src=\"imgup/uploads/$imgsrc\" alt=\"\"/>";
				     	echo "<div class=\"bike-cost\">";
						echo	" <div class=\"bike-mdl\">";
						echo 			 "<h4>Model:$modeldb</h4>";
						echo		 "</div>";
						echo		 "<div class=\"bike-cart\">";						 
				
						echo		 "</div>";
						echo 		 "<div class=\"clearfix\"></div>";
				   		echo					"</div>";
						echo  "<div class=\"fast-viw\">";
						echo 		"<a href=\"recommend.php?model=$modeldb\">Quick View</a>";
						echo "</div>";
					    echo  "</div></a>";
					}
					

				}



		  	?>
			 
			 
			 
			 <div class="clearfix"></div>
		 </div>
		 
		 <div class="road-sec">
		   <h2>URBAN BIKES</h2>
			 <?php
				//create a database connection
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$dbname="db";
				$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				$query="select * from tbl_uploads";
				$result=mysqli_query($connection,$query) or die("Query failed");
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$modeldb=$row['model'];
					$price=$row['price'];
					$type=strtoupper($row['type']);
					$brand=$row['brand'];
					$desc=$row['img_description'];
					$name=$row['image_name'];
					$imgsrc=$row['file'];
					if(strcmp("URBAN",$type)==0){
						echo "<a href=\"details.php?model=$modeldb\"><div class=\"bike\">";				 
						echo " <img src=\"imgup/uploads/$imgsrc\" alt=\"\"/>";
				     	echo "<div class=\"bike-cost\">";
						echo	" <div class=\"bike-mdl\">";
						echo 			 "<h4>Model:$modeldb</h4>";
						echo		 "</div>";
						echo		 "<div class=\"bike-cart\">";						 
				
						echo		 "</div>";
						echo 		 "<div class=\"clearfix\"></div>";
				   		echo					"</div>";
						echo  "<div class=\"fast-viw\">";
						echo 		"<a href=\"recommend.php?model=$modeldb\">Quick View</a>";
						echo "</div>";
					    echo  "</div></a>";
					}
					

				}



		  	?>
			 <div class="clearfix"></div>
		 </div>
		 
	 </div>
</div>


</body>
</html>

