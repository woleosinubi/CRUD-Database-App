<?php
include("header.php")
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
<input type="file" name="file" id="file" />
<input type="submit" value="Go"/>
</form>
</body>
</html>

<?php
include("footer.php")
?>
