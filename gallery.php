<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Shared Gallery</title>

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
	width: 100px;
	background: white;
	 opacity:0.8;
	padding: 60px 10px 30px 50px;
	
	min-height: 100px;
	/* [disabled]height: auto !important; */
	height: 800px;
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
	width: 500px;
	margin-left:400px;

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
                          <li class="dropdown1"><a href="index.php"><h4><strong><font color="#000000"><img src="images/gear.png" width="50" height="50"></font></strong></h4></a>
							 <ul class="dropdown2">
									<li><a href="log.php"><h4><font color="#000000">Login</font></h4></a></li>
                                    
									
									<li><a href="bicycles.php"><h4><font color="#000000">Bicycles</font></h4></a></li>
                                    
                                     
									
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
	margin-top:100px;
	margin-left:25px;
	
	padding-bottom:50px;
	padding:50px;
	
	
	
	
	}
	img.resize
	{
   max-width:100%;
   max-height:100%;
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
    
</head>


<body background="images/Wallpapers-room_com___Surface_Pack_Black_by_Alexander-GG_1920x1200.jpg">

<div class="bikes">	

	<div id="contact-area">	 
        




		   <?php
				//create a database connection
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$dbname="db";
				$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				$query="select * from gallery_uploads";
				$result=mysqli_query($connection,$query) or die("Query failed");
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$image=$row['image'];
					$caption=$row['caption'];
										
					$imgsrc=$row['image'];
														 
						echo " <img  class=\"resize\" src=\"imgup/gallery/$imgsrc\" alt=\"\"  /> ";
				     	
						echo "<h2><font color=\"#FFFFFF\">$caption</font></h2>";
						
					}
					
	  	?>
        
            
</div></div>

</body>

