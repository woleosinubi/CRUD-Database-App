<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include'dbconnection.php';
$ret="select * from message";
$res=mysql_query($ret);
echo"<table border=1 align='center' bgcolor='#00FF66' height=40px width=100%>";
echo"<tr><th>Serial no.</th><th>Name</th><th>Email</th><th>Message</th></tr>";
while($val=mysql_fetch_array($res))
{
	
echo"<tr><td>$val[0]</td><td>$val[1]</td><td>$val[2]</td><td>$val[3]</td></tr>";
}
echo"</table>";






?>
</body>
</html>