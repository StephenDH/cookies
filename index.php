<?php 
	$userid = "";

	if(isset($_POST['name'])){
		setcookie('userid', $_POST['name'], strtotime('+1 day'));
		$userid = $_POST['name'];
	}else if(isset($_COOKIE['userid'])) {
		$userid = $_COOKIE['userid'];
	}

	if(isset($_GET["kill"])){
		setcookie("userid", "", strtotime('-1 year'));
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP </title>
</head>
<body>
	<?php 
		if($userid != ""){
			echo "<h1>hallo "."$userid"."</h1>";			
		}
	 ?>
	<form method="post">
		<input type="text" name="name"/>
		<input type="submit" value="Submit">

	</form>
	<button type="button" value="kill" onclick = "window.location.href='?kill='">Kill Cookie</button>
</body>
</html> 