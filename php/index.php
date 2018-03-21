<!doctype html>
<html>
	<head>
		<meta charset="uft-8:>
		<title>URL Shortener</title>
		<link type="text/css" rel="stylesheet" href="php/global.css">
	</head>
	<body>
		<div class="container">
			<h1 class="title">Shorten a URL.</h1>
			
			<form action="shorten.php" method="post">
				<input type="url" name="url" placeholder="Enter a URL here." autocomplete="off">
				<input type="submit" value="Shorten">
			</form>
		</div>
	</body>
</html>