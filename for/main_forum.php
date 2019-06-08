<script src="js/jquery.easydropdown.js"></script>
<link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Forum</title>

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
	margin-bottom: 100px;
	background-size:cover;
	margin-top:30px;
	
	
}

#page-wrap {
	width: 300px;
	background: white;
	 opacity:0.8;
	padding: 60px 10px 30px 50px;
	margin: 30px auto;
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
	margin-top: 5px;
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
			     <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><p align="right"> &nbsp;&nbsp;&nbsp;<a href="../index1.php" ><img src="../images/gear.png" height="50" width="50"></a></p>
                          <ul class="dropdown2">
                          
									
                                    <li><a href="create_topic.php"><h4><font color="#000000">Create Topic</font></h4></a></li>
									<li><a href="../bicycle1.php"><h4><font color="#000000">Bikes</font></h4></a></li>
                                    <li><a href="../profile.php?username=<?php echo $user;?> "><h4><font color="#000000">Profile</font></h4></a></li>
                                     <li><a href="../gallery1.php"><h4><font color="#000000">Gallery</font></h4></a></li>
                                    <li><a href="../index.php"><h4><font color="#000000">Logout</font></h4></a></li>
                                    </ul>
                          
                          
                      
				 </div>
                 
				 
	  </div>	 
	 
	 </div>


<?php



$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="forum_question"; // Table name 

// Connect to server and select databse.
$connection=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";



// OREDER BY id DESC is order result by descending

$result=mysqli_query($connection,$sql);
?>
<body background="../images/124-(1).jpg">

<table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
<tr>


<br />
<tr>
<!--<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Id</strong></td>-->
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows=mysqli_fetch_array($result)){
	$id=$rows['id'];
	$topic=$rows['topic'];
	$view=$rows['view'];
	$reply=$rows['reply'];
	$time=$rows['datetime'];
echo "<tr>";
//echo "<td bgcolor=\"#FFFFFF\">$id</td>";
echo "<td bgcolor=\"#FFFFFF\"><a href=\"view_topic.php?id=$id\"><font color=\"#000000\"><h3>$topic</h3></font></td>";
echo "><td align=\"center\" bgcolor=\"#FFFFFF\">$view</td>";
echo "<td align=\"center\" bgcolor=\"#FFFFFF\">$reply</td>";
echo "<td align=\"center\" bgcolor=\"#FFFFFF\">$time</td>";
echo "</tr>";
?>
<?php
// Exit looping and close connection 
}
mysqli_close($connection);
?>

</table>
</table>
</body>