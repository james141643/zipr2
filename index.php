<?php

$db = new mysqli("localhost", "james141643", "smitherines", "links141643");

function generateRandomString($length = 6) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

if (isset($_GET['title'])) {
	// SELECT link FROM our database
	$result = $db->prepare("SELECT * FROM links WHERE title=?");
	$result->bind_param("s", $_GET['title']);
	$result->execute();

	$goto = $result->get_result()->fetch_array();
	$g = $goto[1];
	header("Location: $g");
}

if (isset($_POST['shorten'])) {

	// Generate title
	$title = generateRandomString();

	// Insert http://
	if (substr($_POST['url_to_shorten'], 0, 7) != "http://") {
		// Prepend http://
		$url = "http://".$_POST['url_to_shorten'];
	} else {
		$url = $_POST['url_to_shorten'];
	}

	// INSERT link into our database
	$result = $db->prepare("INSERT INTO links VALUES('', ?, ?)");
	$result->bind_param("ss",$url, $title);
	$result->execute();
	
	echo "<center>Your shortened link: <br /> zipr.me/".$title."</center>";

}

?>
<!doctype html>
<html>
	<head>
		<meta charset="uft-8":>
		<title>zipr.me URL Shortener</title>
		<link type="text/css" rel="stylesheet" href="global.css">
	</head>
	<body>
		<div class="container">
			<h1 class="title">Shorten a URL.</h1>
			<form action="index.php" method="POST">
				<input type="text" name="url_to_shorten" value="" placeholder="Enter a URL here">
				<input type="submit" name="shorten" value="Shorten" />
			</form>
		</div>
	</body>
</html>