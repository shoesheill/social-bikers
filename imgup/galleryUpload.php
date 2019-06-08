<?php
include_once 'dbconfig.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery.easydropdown.js"></script>

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
	height: 200px;
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
	background-image:url(../images/c3.jpg);
	}
	
</style>

</head>
<body>


<!--<div id="page-wrap">
<div id="contact-area">-->

<div id="page-wrap">


<div id="contact-area">
	<form action="uploadg.php" method="post" enctype="multipart/form-data" >
	Image:<input type="file" name="image"  required size="20"/>
</br>
    </br>
    
	Caption: <textarea name="caption" required    /></textarea>  <br/>
    <br>
    
	<input type="submit" name="btn-upload" height="20" width="40"></button>
    <br />
    
    
    <p><a href="../gallery1.php"><strong><h3>Shared Gallery.</h3></font></strong></a></p>
    
   
	</form>
    <br /><br />
	<div class="clear"/>
</div>
</div>


</div>

    </body>
</html>
    <?php
 if(isset($_GET['success']))
 { 
  
 }
 else if(isset($_GET['fail']))
 {
 
 }
 else
 {
  ?>
        
        <?php
 }
 ?>


