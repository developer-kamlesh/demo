<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
    <title></title>
</head>

<body>
   <?php 
	 echo $_SERVER['REMOTE_ADDR'];
	 while (list ($key, $val) = each ($_SERVER)) {
		$key -> $val;
	}
	echo 'Scrum Master';
 ?> 
</body>
</html>
