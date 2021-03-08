<?php
include("header.php")?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Untitled Document</title>

<style type="text/css">




}
#apDiv4 {
	position:absolute;
	left:152px;
	top:11px;
	width:138px;
	height:85px;
	z-index:4;
}
#loginform{
	
position:absolute;
	left:180px;
	top:65px;
	
}
body
{
background-image:url(../images/bg.gif)
}
#loginform { 
width: 600px; 
margin: 0 auto;
padding: 8px 12px; 
margin-top: 44px; 
border: 1px solid #c3d1d7; 
background: #fefefe; t
ext-align: center; 
-webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
border-radius:20px;
}
#formid input[type=text], #formid input[type=password] 
{ 
font-size: 1.4em;
color: #898989; 
font-family: Verdana, Arial, sans-serif; 
border: 1px solid #d5d9da; 
padding: 9px 7px; 
width: 420px; 
}

#formid input[type=text]:focus, #formid input[type=password]:focus 
{ border-color: #b3d5eb; 
color: #444;
}

label 
{ display: block; 
margin-top: 25px; 
margin-bottom: 44px; 
color: #444; 
font-weight: bold; 
font-size: 1.2em; }
p
{
text-align:center;
}
.submit {
	background:url(images/button.gif) no-repeat;
	
	border-bottom:solid #0F3;
           cursor: pointer;
            width: 85px;
            height: 38px;
             }
			 
a:visited,a:link {
text-decoration:none;
color:#0066FF;
}
</style>
</head>
<body>


<div id="loginform">
<form action="valinsert.php" method="post" id="formid">
	    	<p>
           
            <label>New User Name:</label>
	    	<input type="text" id="username" name="username" placeholder="User Name"/><br>
	    	<label>New Password:</label>
	    	<input type="password" id="pw" name="pw" placeholder=".........." /><br><br>
            <input class="submit" type="submit" value=""/>
          
            </p>
		</form>
</div>

</body>
</html>

<?php
include("footer.php")
?>