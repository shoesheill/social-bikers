 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
        
        
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
	color:#FF0;
	float:right;
	margin-left:5px; 
    text-decoration: none;
    display: block;
}
a
{ color:#FFF;
}

.dropdown:hover .dropbtn {
	color:#FFF;
}
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

</style>




</head>
<body background="images/790c8e4d06263cd2652f0b2b6781f4a1.jpg">

<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
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
						
<br>
<br>

				   </div>
			       							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><p align="right"> &nbsp;&nbsp;&nbsp;<a href="index1.php" ><img src="images/gear.png" height="50" width="50"></a></p>
                          <ul class="dropdown1">
                          
									<li><a href="admin/index.php"><h4><font color="#000000">Admin</font></h4></a></li>
                                    <li><a href="for/main_forum.php"><h4><font color="#000000">Forum</font></h4></a></li>
                                    
									<li><a href="bicycle1.php"><h4><font color="#000000">Bikes</font></h4></a></li>
                                    
                                    <li><a href="gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    
                                    <li><a href="index.php"><h4><font color="#000000">Logout</font></h4></a></li>
                                    </ul>
							  
							
					  </ul>
				 </div>
				 
	  </div>





<?php
//create a database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>

<?php

echo "<table border=\"1\" width=\"800\" cols=\"7\" bgcolor=\"#999999\">";
        echo "<tr>";
		echo "<tr>";
	
		echo "<td>";
		echo "</td>";
		echo "</tr>";
		echo "<table border=\"0\" width=\"900\" cols=\"7\" bgcolor=\"#999999\">";
		echo "</td>";
		echo "<tr>";
	
		echo "<td>";
		echo "</td>";
		echo "</tr>";
		
        echo "<td width=\"100\"> <strong>Name</strong>";
 		echo "</td>";
		
		echo "<td><strong>Email</strong>";
 		echo "</td>";
		echo "<td width=\"100\"><strong>Address</strong>";
 		echo "</td>";
		echo "<td><strong>Phone</strong>";
 		echo "</td>";
		echo "<td><strong>Bike Name</strong>";
 		echo "</td>";
		echo "<td><strong>Model</strong>";
 		echo "</td>";
		echo "<td><strong>Type</strong>";
 		echo "</td>";
		echo "</tr>";
$query="select * from book";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$name= $row['name'];
	$email=$row['email'];
    $address=$row['address'];
	$phone=$row['ph'];
	$model=$row['model'];
	$bike=$row['bikename'];
	$type=$row['type'];
	

		
        
		
		
	
		echo "<td>".$name;
		echo "</td>";
		
	
		
		echo "<td>".$email;
		echo "</td>";
		echo "<td>".$address;
		echo "</td>";
		echo "<td>".$phone;
		echo "</td>";
		echo "<td>".$bike;
		echo "</td>";
		echo "<td>".$model;
		echo "</td>";
		echo "<td>".$type;
		echo "</td>";
		echo "</tr>";
	
}

?>








