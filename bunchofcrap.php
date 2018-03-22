<html>
	<head>
	body {
		font: 1.5em Tahoma, sans-serif;
		background-color: lightblue;
		/*background-image: url("blah.jpg")*/
	}

	.title {
		font-weight:normal;
	}

	.container {
		width:100%;
		max-width:600px;
		text-align:center;
		margin:0 auto;
		position:relative;
		top:200px;
	}

	input {
		padding:10px;
		background-color:#fff;
		border: 1px solid #ccc;
		margin:0;
	}

	input[type="text"] {
		width:300px;
	}
		<meta charset="uft-8":>
		<title>zipr.me URL Shortener</title>
		<link type="text/css" rel="stylesheet" href="css/global.css">
	</head>
	<body>
		<div class="container">
			<h1 class="title">Shorten a URL.</h1>
			<form action="/" method="POST">
				<input type="text" name="url_to_shorten" value="" placeholder="Enter a URL here">
				<input type="submit" name="shorten" value="Shorten" />
			</form>
		</div>
	</body>
</html>

<!doctype html>
<html>
	<head>
		<meta charset="uft-8":>
		<title>URL Shortener</title>
		<link type="text/css" rel="stylesheet" href="css/global.css"/>
	</head>
	<body>
		<div class="container">
			<h1 class="title">Shorten a link with zipr.me!</h1>
			<form action="index.php" method="post">
				<input type="url" name="url" placeholder="Enter URL here" autocomplete="off">
				<input type="submit" value="Shorten">
			</form>
		</div>
	</body>
</html>
