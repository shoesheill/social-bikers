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
	background-image:url(../images/c3.jpg);
	}
	
</style>

</head>
<body>


<!--<div id="page-wrap">
<div id="contact-area">-->

<div id="page-wrap">


<div id="contact-area">
	<form action="upload.php" method="post" enctype="multipart/form-data" >
	Image:<input type="file" name="file"  required size="20"/>
</br>
    </br>
    Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="image_name"  required/> <br/></br>
    Model: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model" required /> <br/></br>
    Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price"  required/> <br/></br>
	Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="type">
            
            <option value="MOUNTAIN"> MOUNTAIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>
            <option value="ROAD"> ROAD </option>
            <option value="URBAN"> URBAN </option>
          </select>  <br/></br>
 	Brand: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='brand'  required required/>  <br/></br>
	Description: <textarea name="img_description" required/></textarea>  <br/>
    <br>
    
	<input type="submit" name="btn-upload" height="20" width="40"></button>
    <br />
    <br /><br />
    <br /><br />
    
    <p><a href="view.php"><strong><h3>Click here to view file.</h3></font></strong></a></p>
    
   
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


