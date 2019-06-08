
<!DOCTYPE html>
<html>
<head>
<title>Social Bikers Home Page </title>
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
  
  
<div class="banner-bg banner-bg1">	

	  <div class="container">
			 <div class="header">
             
             <div class="logo">
						<p align="left"><form name="search" method="post"  action="search/findme1.php">
<input type="text" name="find" required= required  align="right"/> 


<input type="submit" name="search" value="Search" />
</form>
</p>
<br>
<br>
<?php
session_start();
$user=$_SESSION['username'];
 echo "<div style='text-align:left'><font color=\"#FFFFFF\"><h3>Logged in as: "."<a href='profile.php?username=$user'>".$_SESSION['username']."!</font></a></h3></div>";

?>
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
	 
	 </div>
          
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    
								<li><h1>ROAD BICYCLE</h1></li>	
								<li><h1>MOUNTAIN BICYCLE</h1></li>
                                <li><h1>URBAN BICYCLE</h1></li>	
						  </ul>
						  <p>You <span>create </span>the <span>journey,</span> we supply the <span>Bikes</span></p>
						  <a class="morebtn" href="bicycle1.php">BIKES</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"></a>
	 </div>				 
</div>

<div class="bikes">	
		 <h3>POPULAR BIKES</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
             
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
						echo "<a href=\"bicycles.php\"><div class=\"bike\">";				 
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
						echo 		"<a href=\"details1.php?model=$modeldb\">Quick View</a>";
						echo "</div>";
					    echo  "</div></a>";
					}
				}
					?>
				 
				 
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3,
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	</div>
</div>


		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>
