<script src="js/jquery.easydropdown.js"></script>
<link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<title>Login</title>

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
	margin-left:50px;
	text-align:center;
}

#contact-area {
	width: 300px;
	margin-left:350px;
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
	margin-left:0px;
	text-align:left
}

</style>
<div class="container">
			 <div class="header">
             
             <div class="logo">
						


				   </div>
			       							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><p align="left"><a href="../index1.php" ><img src="../images/gear.png" height="50" width="50"></a></p>
                          <ul class="dropdown2">
                          
									
                                    <li><a href="main_forum.php"><h4><font color="#000000">Forum Posts</font></h4></a></li>
									<li><a href="../bicycle1.php"><h4><font color="#000000">Bikes</font></h4></a></li>
                                    <li><a href="../profile.php?username=<?php echo $user;?> "><h4><font color="#000000">Profile</font></h4></a></li>
                                    <li><a href="../gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    <li><a href="../index.php"><h4><font color="#000000">Logout</font></h4></a></li>
                                    </ul>
                      
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body background="../images/420">

<div id="contact-area">


<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php" onSubmit="alert('Topic Created Sucessfully.');">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" ><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="25%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" required/></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail" required></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"  required="required"/></td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="email" id="email" size="50"  required="required"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>







</body>
</html>