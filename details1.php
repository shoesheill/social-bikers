
<!DOCTYPE html>
<html>
<head>
<title>Social Bikers || Details</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
#re
{
	margin-top:50px;
	margin-right:40px;
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
						<p align="right"><form name="search" method="post"  action="search/findme1.php">
<input type="text" name="find" required= required  align="right"/> 


<input type="submit" name="search" value="Search" >

</form>
</p>
<br>
<br>
<?php
session_start();
$user=$_SESSION['username'];
 echo "<div style='text-align:left'><font color=\"#000000\"><h3>Logged in as: "."<a href='profile.php?username=$user'>".$_SESSION['username']."!</font></a></h3></div>";

?>


				   </div>
			       							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><p align="right"> &nbsp;&nbsp;&nbsp;<a href="index1.php" ><img src="images/gear.png" height="50" width="50"></a></p>
                          <ul class="dropdown2">
                          
									
                                    <li><a href="for/main_forum.php"><h4><font color="#000000">Forum</font></h4></a></li>
									
                                    <li><a href="profile.php?username=<?php echo $user;?> "><h4><font color="#000000">Profile</font></h4></a></li>
                                    <li><a href="gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    <li><a href="index.php"><h4><font color="#000000">Logout</font></h4></a></li>
                                    
                                    </ul>
                      
				 </div>
                 
				 
	  </div>	 
	 
	 </div>
     
     
     <div id="re">
     <table align="right" border="0" bordercolor="#000000" >
     <tr>
     <td><h3>Recommendation By Popularity</h3>
     </td>
     
     <tr>
     <td>
     </td>
     </tr>
     </tr>
     <tr>
     <td></td>
     
	<?php $dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="db";
			$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
			$query_rec="select * from tbl_uploads order by count desc limit 3";
			$result_rec=mysqli_query($connection,$query_rec);     
            while($row_rec=mysqli_fetch_array($result_rec,MYSQLI_ASSOC)){
				$name_rec=$row_rec['image_name'];
				$imgsrc_rec=$row_rec['file'];
				$model_rec=$row_rec['model'];
	echo "<tr>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "";
	echo"</td>";
     echo "<td><br><br><br><a href='details.php?model=$model_rec'>$name_rec</a></td>";
	 echo "</tr>";
	 echo "<tr>";
     echo "<td><a href='details.php?model=$model_rec'><img src=imgup/uploads/$imgsrc_rec width='210' height='125'></a></td>"       ;
	 echo "</tr>";
	 }?>
     
     </table>
     </div>
     
     
     
     
  
<?php 
$modelno=$_GET['model'];
//create a database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query="select * from tbl_uploads where model='$modelno'";
$result=mysqli_query($connection,$query) or die("Query failed");
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$modeldb=$row['model'];
	$price=$row['price'];
	$type=$row['type'];
	$brand=$row['brand'];
	$desc=$row['img_description'];
	$name=$row['image_name'];
	$imgsrc=$row['file'];
}
?>
<!--/banner-->
<div class="product">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">
				
					 <!--Include the Etalage files-->
						<!--<link rel="stylesheet" href="css/etalage.css">-->
						<!--<script src="js/jquery.etalage.min.js"></script>-->
				<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 100,
					thumb_image_height: 100,
					source_image_width: 200,
					source_image_height: 400,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						<!--alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
				<div class="details-left-slider">
				    <div class="grid images_3_of_2">
						  <ul id="etalage">
							<li><a href="optionallink.html"></a><img  src="imgup/uploads/<?php echo $imgsrc;?>" height="320" weight="400" /></li>
							
			      </div>
				   </div>
					 <div class="details-left-info">
							<h3><?php echo $name;?></h3>
								<h3><?php echo $modelno;?></h3>
							<h4></h4>
							<p><label>RS</label> <?php echo $price;?>/day</p>
                           <form action="addtocart.php?username=<?php echo $user;?>&&model=<?php echo $modelno;?>" method="post">
                            <h3>QTY:</h3><input type="number" name="qty" min="1" max="10" required>
                           
                            <br>
                            <?php 
								$datetime=date("m/d/y");
							
								?>
                            <h3>Start Date:</h3>
                            <input type="date" name="start" required  min="<?php echo $datetime;?>"/><br>
                            
                            <h3>End:</h3>
                            <input type="date" name="end" required/>
                            <br>
                            
							<div class="btn_form">
								<input type="submit" class="btn_form" onClick="check_date()" value="ADD TO CART"> 
                                
                                
								
							
								<input type="submit" value="BOOK NOW"></a>
								
							</div>
                            </form>
                            
							<div class="bike-type">
							<p>TYPE  ::<a href="#"><?php echo $type;?></a></p>
							<p>BRAND  ::<a href="#"><?php echo $brand;?></a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc"><?php echo $desc;?></p>
					 </div>
					 <div class="clearfix"></div>				 	
			   </div>
			  </div>
		  </div>
		  <div class="single-bottom2">
			  <h6>Related Products</h6>
              

			 
             
             <?php
				//create a database connection
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$dbname="db";
				$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				$query="select * from tbl_uploads where type='$type'";
				$result=mysqli_query($connection,$query) or die("Query failed");
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$modeldb=$row['model'];
					$price=$row['price'];
					$type=strtoupper($row['type']);
					$brand=$row['brand'];
					$desc=$row['img_description'];
					$name=$row['image_name'];
					$imgsrc=$row['file'];
					
			if($modeldb==$modelno){
				continue;
				}			             
             
             
             
             
             
			 echo "<div class=\"product\">";
					 echo "<div class=\"product-desc\">";
						 echo " <div class=\"product-img product-img2\">";
							echo "<img src=\"imgup/uploads/$imgsrc\" class=\"img-responsive\"/>";
							
						 echo "</div>";
						 echo "<div class=\"prod1-desc\">";
								echo "<h5><a class=\"product_link\" href=\"details1.php?model=$modeldb\">$name</a></h5>";
								echo "<p class=\"product_descr\"> $desc</p>	";								
						echo " </div>";
						
	
						 echo "<div class=\"clearfix\">";
						 echo "</div>";
					 echo"</div>";
					 echo "<div class=\"product_price\">";
							echo "<span class=\"price-access\">RS $price</span>";								
							echo "<a class=\"button1\" href=\"book.php\"><span> Book</span></a>";
					 echo "</div>";
				  echo "<div class=\"clearfix\">";
				  echo "</div>";
			 echo "</div>";

			 }
			 ?>


</body>
</html>

