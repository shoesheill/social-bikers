<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile | Social Bikers</title>


<style type="text/css">
.dropbtn {
	margin-top:80px;
	margin-left:30px;
	background-size:0px;
	background-color:transparent;
	color:#0C3;
	background:none;
	text-shadow:#FFF;
	border:none;
	  
    cursor: pointer;
	float:left;
	font-size:20px;
	padding:1px 3px;
	border-radius:20px;
	
	
}
#dropdown-content a {
	color:#FF0;
	float:left;
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
.textarea{
	text-align:centre;
	font-size:22px;
	color:#FFF;
	opacity:0.0;
	
}
a{text-decoration:none;

}

body {
	margin-bottom: 150px;
	background-size:cover;
	margin-top:0px;
	
	
}

#page-wrap {
	width: 300px;
	background: white;
	 opacity:0.8;
	padding: 60px 10px 30px 50px;
	
	min-height: 100px;
	/* [disabled]height: auto !important; */
	height: 250px;
	border-top-left-radius:8%;
	border-top-right-radius:8%;
	border-bottom-left-radius:8%;
	border-bottom-right-radius:8%;
}
#p{
	margin-left:1000px;
	text-align:center;
}

#contact-area {
	width: 300px;
	margin-left:450px;
	margin-top: 80px;
	margin-bottom:15px;
}
label {
	float: left;
	text-align: left;
	margin-right: 15px;
	width: 50px;
	padding-top: 5px;
	font-size: 1em;
}

	}
</style>

<style>
a
{
	text-decoration:none;
	margin-left:50px;
	text-align:left
}

</style>
<div class="container">
			 <div class="header">
             
             <div class="logo">
						


				   </div>
			       							 
				  <div class="top-nav" align="right">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <!--<li class="dropdown1"><a href="../imgup/index.php"><h4><strong><font color="#000000"> Add/View Bikes</font> </strong></h4></a>
							  <!--<ul class="dropdown2">
									<li><a href="bicycles.html">FIXED / SINGLE SPEED</a></li>
									<li><a href="bicycles.html">CITY BIKES</a></li>
									<li><a href="bicycles.html">PREMIMUN SERIES</a></li>												
							  </ul>
						  </li>
						  
                          <li class="dropdown1"><a href="../index.php"><h4><strong><font color="#000000">Logout</font></strong></h4></a>-->
                          <li class="dropdown1"><a href="index1.php"><h4><strong><font color="#000000"><img src="images/gear.png" width="50" height="50"></font></strong></h4></a>
							 <ul class="dropdown2">
									
                                    
									<li><a href="for/main_forum.php"><h4><font color="#000000">Forum Posts</font></h4></a></li>
									<li><a href="bicycle1.php"><h4><font color="#000000">Bicycles</font></h4></a></li>
                                    <li><a href="gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                     <li><a href="index.php"><h4><font color="#000000">Logout</font></h4></a></li>
									
							  </ul>
						 
						<!-- <li class="dropdown1"><a href="log.php"><h4><strong><font color="#000000">Forum</font></strong></h4></a>
							 <ul class="dropdown2">
									<li><a href="for/create_topic.php"><h4><font color="#000000">Create Topic</font></h4></a></li>
										<li><a href="for/main_forum.php"><h4><font color="#000000">View Topic</font></h4></a></li>
										
							  </ul>
						 </li>               
						 <!--<li class="dropdown1"><a href="about.php"><h4><font color="#000000"> <strong>About Us</strong></font></h4></a>
							
					  </ul>-->
                      
				 </div>
                 
				 
	  </div>	 
	 
	 </div>



<style>



{
	background-color:transparent;
}
p
{
	margin-left:100px;
}
a
{ text-align:left;
margin-left:50px;
text-decoration:none;
}



body{
	margin-top:5px;
	margin-left:25px;
	
	padding-bottom:50px;
	padding:50px;
	
	
	
	
	}
	input[type=text]
	{
		width:99%;
		
	}
	
	
	
	textarea
	{
		width:98%;
	}
	
	table{
		padding:50px;
	}
	</style>
    <title>Profile</title>
</head>


<body background="images/Wallpapers-room_com___Surface_Pack_Black_by_Alexander-GG_1920x1200.jpg">
<div id="contact-area">


<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<?php 


$userna=$_GET['username'];
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query="select * from users where username='$userna'";
$result=mysqli_query($connection,$query) or die("Query failed");
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$modeldb=$row['username'];
	$name=$row['name'];
	$add=$row['address'];
	$phone=$row['ph'];
	$email=$row['email'];
	$dob=$row['birthdate'];
	
				
				
			
echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"passchange.php\" >";
echo "<td>";
echo "<table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";


echo "<tr>";
echo "<td colspan=\"3\"><strong>Name:</strong> &nbsp;&nbsp;&nbsp; $name";
echo "<br/>";echo "<br/>";
echo"</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan=\"3\"><strong>Email:</strong> &nbsp;&nbsp;&nbsp; $email";
echo "<br/>";echo "<br/>";
echo"</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=\"3\"><strong>Address:</strong> &nbsp; $add";
echo "<br/>";echo "<br/>";
echo"</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=\"3\"><strong>Phone:</strong> &nbsp;&nbsp;&nbsp; $phone";
echo "<br/>";echo "<br/>";
echo"</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=\"3\"><strong>DOB:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $dob";
echo "<br/>";echo "<br/>";
echo"</td>";
echo "</tr>";


}
	?>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" value="Change Password" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
