
<?php
include("header.php")
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
destroy()
{
	<?php
	session_destroy();
	?>
}
</script>
</head>

<style type="text/css">
.menu,
.menu ul,
.menu li,
.menu a {
	margin: 0;
	padding: 0;
	border: none;
	outline: none;
}
.menu {	
	height: 40px;
	width: 700px;

	background: red;
	background: -webkit-linear-gradient(top,#666 0%,#3CF 100%);
	background: -moz-linear-gradient(top,#666 0%,#3CF 100%);
	background: -o-linear-gradient(top,#666 0%,#3CF 100%);
	background: -ms-linear-gradient(top, #666 0%,#3CF 100%);
	background: linear-gradient(top, #666 0%,#3CF 100%);

    -ms-border-radius: 0px;
	-o-border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}

.menu li {
	position: relative;
	list-style: none;
	float: left;
	display: block;
	height: 40px;
}

.menu li a {
	display: block;
	padding: 0 14px;
	margin: 6px 0;
	line-height: 28px;
	text-decoration: none;
	
	border-left: 1px solid #C90;
	

	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 13px;

	color: #f3f3f3;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.9);

	-webkit-transition: color .5s ease-in-out;
	-moz-transition: color .5s ease-in-out;
	-o-transition: color .5s ease-in-out;
	-ms-transition: color .5s ease-in-out;
	transition: color .5s ease-in-out;
	
	
}

.menu li:first-child a { 
border-left: none; 
}
.menu li:last-child a{
 border-right: none; 
}

.menu li:hover > a { 
color: yellow; 

-webkit-box-shadow: rgba( 0px 1px 33px) #2ab7ec;
	-moz-box-shadow:  rgba( 0px 1px 33px) #2ab7ec;
	-o-box-shadow:  rgba( 0px 1px 33px) #2ab7ec;
	box-shadow:  rgba( 0px 1px 33px) #2ab7ec;
	
	
	

}
.menu ul {
	position: absolute;
	top: 40px;
	left: 0px;

	opacity: 0;
	
	background:blue;

	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;

	-webkit-transition: opacity .25s ease .2s;
	-moz-transition: opacity .25s ease .2s;
	-o-transition: opacity .25s ease .2s;
	-ms-transition: opacity .25s ease .2s;
	transition: opacity .25s ease .2s;
	
	-webkit-box-shadow: 0px 2px 33px #888;
	-moz-box-shadow: 0px 2px 33px #888;
	box-shadow: 0px 2px 33px #888;
}
#apDiv2 {
	position:absolute;
	left:2px;
	top:1px;
	width:1366px;
	height:124px;
	z-index:2;
	background-color: #FF0000;
}
#apDiv3 {
	position:absolute;
	left:301px;
	top:14px;
	width:560px;
	height:54px;
	z-index:3;
	color: #FFF;
	font-size: 36px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
#apDiv4 {
	position:absolute;
	left:152px;
	top:11px;
	width:138px;
	height:85px;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	left:295px;
	top:76px;
	width:826px;
	height:34px;
	z-index:5;
}

</style>

<body>

<div id="apDiv5">
  
  <ul class="menu">

	<li><a href="data.php">See Message</a></li>
	<li><a href="file.php">Upload</a> </li>
   
	<li><a href="change.php">Change Password</a> </li>
    <li><a href="index.php" onclick="destroy();">Logout</a> </li>
	<!-- end .menu -->
</ul>
</div>

</body>
</html>



<?php
include("footer.php")
?>
