



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register - Social Bikers</title>

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
	float: left;
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

body {
	margin-bottom: 90px;
	
	
}
div.clear {
    clear:both;
}

#page-wrap {
	
	width: 300px;
	background: white;
	opacity:0.85;
	padding: 60px 10px 30px 50px;
	margin: 30px auto;
	min-height: 100px;
	/* [disabled]height: auto !important; */
	height: 500px;
	border-bottom-left-radius:8%;
	border-bottom-right-radius:8%;
	border-top-left-radius:8%;
	border-top-right-radius:8%;
}

#contact-area {
	color:#000;
	width: 300px;
	margin-top: 5px;
	margin-bottom:15px;
}
label {
	float: left;
	text-align: left;
	margin-top:2px;
	margin-right: 15px;
	width: 50px;
	padding-top: 5px;
	font-size: 1em;
}
a{text-decoration:none;
}
body
{
	background-size:cover;
    background-repeat: no-repeat;
	}
	
</style>

</head>


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
						  <li class="dropdown1"><p align="right"><a ><img src="images/gear.png" height="50" width="50"></a></p></a>
                          <ul class="dropdown1">
                          
									<li><a href="index.php"><h4><font color="#000000">Home</font></h4></a></li>
                                    <li><a href="log.php"><h4><font color="#000000">Login</font></h4></a></li>
                                    </ul>
							  <!--<ul class="dropdown2">
									<li><a href="bicycles.html">FIXED / SINGLE SPEED</a></li>
									<li><a href="bicycles.html">CITY BIKES</a></li>
									<li><a href="bicycles.html">PREMIMUN SERIES</a></li>												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="log.php"><h4><strong><font color="#000000">Login</font></strong></h4></a>
							 <!--<ul class="dropdown2">
									<li><a href="reg.php"><h4><font color="#000000">Register</font></h4></a></li>
									<li><a href="log.php"><h4><font color="#000000">Login</font></h4></a></li>
									<li><a href="admin.php"><h4><font color="#000000">Admin</font></h4></a></li>
									
							  </ul>-->
						 
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
     <body background="images/bg1.jpg" > 
<div class="dropdown" >
                   
  
   </div>
<div id="page-wrap">


<div id="contact-area">

<form action="dbconnect.php" method="post" >


<label>

<strong>Name:</strong><input type="text" autocomplete="on" placeholder="Full Name" name="name"  required="required" size="20" /> &nbsp;

<strong>Username:</strong><input type="text" name="username"   class="textbox" autocomplete="off" required="required"  size="20"  placeholder="Username"/> &nbsp;
<strong>Email:</strong> <input type="email" name="email"  autocomplete="on" required placeholder="E-mail"/> &nbsp;
<strong>Address:</strong> <input type="text" name="address"  autocomplete="on" required placeholder="Address"/> 

&nbsp;
<label>



<strong>BirthDate:</strong>
<input type="date" name="birthdate" min="1970-01-01" max="2016-07-31" required autocomplete="on"/>&nbsp;
Phone: <input type="number" name="ph" required  placeholder="Phone"  /> <br/> &nbsp;


&nbsp; 
<strong>Password:</strong> <input type="password" name="password" required  placeholder="Password"  /> <br/> &nbsp;

<strong><input type ="submit"  onclick="myFunction()"  value="Register" name="submit" > <br/></strong>

</label>



</form>
<div class="clear"/>
</div>
</div>


</div>


</body>
</html>
