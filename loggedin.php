<?php
$username=$_GET['id'];
echo "Welcome ".$username;

?>
<html>
<head>
<style type="text/css">
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
p{
	size:15px;
}
label{
	color:#00F !important
	
}
#log{
	margin-left:15px;
	text-align: right;
	margin-right:30px;
	font-size:20px;
	
}
.textbox
{width:25%;
border-color:#000;
border-width:2.5px;
height:80px;
font-size:10pt;
border-style:solid;}
textarea {
	padding: 5px;
	width: 200px;
	height:80px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 12px 100px 10px 40px;
	border: 4px solid #ccc;
}
</style>
</head>
<body>
<div  id="log">
<label>
<ul>
<a href="home.php">Home</a>   &nbsp;&nbsp;&nbsp;

<a href="profile.php">Profile</a>&nbsp;&nbsp; &nbsp;
<a href="log1.php">Logout</a>&nbsp;&nbsp; &nbsp;
</ul>
</label>
</div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<div>
<label>
<p>Post:</p>
  <textarea name="Message" rows="20" cols="20"></textarea>

</body>
</html>