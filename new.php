<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$start=$_POST['start'];
$start="2013-03-15";
//$date2=date_create($start);
$end=$_POST['end'];
$end="2014-03-15";
$datetime="20".date('y-m-d');





$date1=date_create('$start');
$date2=date_create('$end');
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");

?>
<body>
</body>
</html>