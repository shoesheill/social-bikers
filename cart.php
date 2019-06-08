 <html>
            <head><title>Cart || Social bikers</title>
            
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
<body>

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
                          
									
                                    <li><a href="for/main_forum.php"><h4><font color="#000000">Forum</font></h4></a></li>
									<li><a href="bicycle1.php"><h4><font color="#000000">Bikes</font></h4></a></li>
                                    <li><a href="profile.php?username=<?php echo $user;?> "><h4><font color="#000000">Profile</font></h4></a></li>
                                    <li><a href="gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    <li class="dropdown1"><a href="about.php"><h4><font color="#000000">About Us</font></h4></a>
                                    <li><a href="index.php"><h4><font color="#000000">Logout</font></h4></a></li>
                                    </ul>
							  
							
					  </ul>
				 </div>
				 
	  </div>
            
            
            
            
            
            <style>
			.button1 {width: 250px;}
			a
			{text-decoration:none;}
			p
			{color:#000;
			
				text-align:center;
			}
			</style>
            </head>
            <body>

            <?php
            
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "db";
			$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 

			
			
			$username=$_GET['username'];
			$fname=$_GET['name'];
			
			
			
			
			
			
			
            
			 
			 
			 ?>
			<table width="600" border="1" align="center" cellpadding="10" cellspacing="5" bgcolor="#CCCCCC" >
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#CCCCCC">
<tr>
            <?php 
			
			echo "<br>";
		echo "<h2><p align=\"center\">".$fname."</p></h2>";	
			
			
            echo "<br> ";
			
			$sql="SELECT * FROM cart where user='$username'";
            $query = mysqli_query($connection,$sql)
             or die(mysqli_error($connection));
			while($result = mysqli_fetch_array( $query ,MYSQLI_ASSOC))
            {
				
				
				$mod=$result['model'];
				$id=$result['id'];
				$qty=$result['qty'];
				
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<strong>";
			
            echo "Model :" .$result['model'];
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<br> ";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "Qty :".$result['qty'];
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "Start :".$result['start'];
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "End :".$result['end'];
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<br>";
			
			echo "</strong>";
			
			$date1=$result['start'];
			$date2=$result['end'];
			
			
			$diff=abs(strtotime($date2)-strtotime($date1));
			$years=floor($diff/(365*60*60*24));
			$months=floor(($diff-$years*365*60*60*24)/(30*60*60*24));
			$days=floor(($diff-$years*365*60*60*24-$months*30*60*60*24)/(60*60*24));
			$tot=floor($years*365)+floor($months*30)+$days;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<strong>Rent for: ".$tot." days</strong>";
			
			
			
			
			
			
			
			
			
			
            
			?>
            <p align="right"><a href="deletecart.php?id=<?php echo $id?>&&username=<?php echo $username;?>&&name=<?php echo $fname;?>"><font color="#000000"><strong>Delete </strong></font></a></p>
            
            <?php
			echo "<br>";
			echo "<br>";
			echo "<br>";
            }

            ?> 
            <table width="100" border="0" align="center" cellpadding="10" cellspacing="5" bgcolor="#CCCCCC" >
<tr>
<td><table width="50%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#CCCCCC">
<tr>
<?php  
$sql2="select * from cart where user='$username'";
$total=0;
$result2=mysqli_query($connection,$sql2);
while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC))
{	
	$price=$row['price']*$row['qty']*$tot;;
	$total+=$price;
}
echo "<h4><p align=\"center\">Total:".$total."</h4></p>";

 

?>


</tr></table></td></tr></table>
<form action="book.php?username=<?php echo $username;?>&&model=<?php if(empty($mod)){echo "no";}else {echo $mod;}?>&&value=<?php echo $total;?>" method="post">
<p align="right" >
<?php echo"<input type=\"submit\"  value=\"    BOOK    \" width=\"100\" height=\"200\" name=\"book\" >";
?>

            </body>
            </html>