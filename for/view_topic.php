<style>

body
{
	margin-top:10px;
	
}

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

</style>
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
	margin-left:450px;
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
                          
									<li><a href="main_forum.php"><h4><font color="#000000">Forum Posts</font></h4></a></li>
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
$id=$_GET['id'];
//create a database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="test";
$tbl_name="forum_question";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query="select * from forum_question where id='$id'";
$result=mysqli_query($connection,$query) or die("Query failed");
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$name=$row['name'];
	$detail=$row['detail'];
	$email=$row['email'];
	$topic=$row['topic'];
	$datetime=$row['datetime'];
	
	
	
	
	




?>

<body bgcolor="#333333" background="../images/790c8e4d06263cd2652f0b2b6781f4a1.jpg">

<div id="contact-area">


</tr>
<table width="600" border="1" align="center" cellpadding="10" cellspacing="5" bgcolor="#CCCCCC" >
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#CCCCCC"><strong><font color="#000000"><h2></strong> <u><?php echo $topic; ?></td></u></h2></font>
</tr>

<tr>
<td bgcolor="#CCCCCC"><strong><font color="#000000"><h3></strong><?php echo $detail; ?></h3></font></td>
</tr>

<tr>
<td bgcolor="#CCCCCC"><strong><font color="#000000">By :</strong> <?php echo $name; ?></font></td></tr>
<tr>
<td> <strong>Email : </strong><?php echo $email;?></td>
</tr>

<tr>
<td bgcolor="#CCCCCC"><strong>Date/time : </strong><?php echo $datetime ?></td>
</tr>
</table></td>
</tr>
</table>
</div>

<?php
}
?>

<BR>
<p  ><h2> <font  color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Replies</h2></font></p>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM forum_answer WHERE question_id='$id'";
$result2=mysqli_query($connection,$sql2);
while($rows=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>

<table width="500" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<!--<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?Php //echo $rows['a_id']; ?></td>
</tr>-->

<tr>
<td width="18%" bgcolor="#CCCCCC"><strong>Name</strong></td>
<td width="5%" bgcolor="#CCCCCC">:</td>
<td width="77%" bgcolor="#CCCCCC"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC"><strong>Email</strong></td>
<td bgcolor="#CCCCCC">:</td>
<td bgcolor="#CCCCCC"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC"><strong>Answer</strong></td>
<td bgcolor="#CCCCCC">:</td>
<td bgcolor="#CCCCCC"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC"><strong>Date/Time</strong></td>
<td bgcolor="#CCCCCC">:</td>
<td bgcolor="#CCCCCC"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
 
<?php
}

$sql3="SELECT view FROM forum_question WHERE id='$id'";
$result3=mysqli_query($connection,$sql3);
while($rows=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
$view=$rows['view'];
}
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($connection,$sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($connection,$sql5);
mysqli_close($connection);
?>

<BR>
<table width="500" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php" onSubmit="alert('Answer Updated.');">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45" required></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="email" id="a_email" size="45" required></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer" required></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>

</script>
</tr>
</table>
</td>
</h3>
</form>
</tr>
</table>
</body>