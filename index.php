<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP URL Converter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>PHP URL-to-Title Converter</h2>
		<p>Copy and paste a list of urls, one per line, and press submit.</p>
		<form action="process-urls.php" method="post" role="form">
			<textarea name="urls" rows="20" class="form-control"></textarea><br>
			<input class="btn btn-default" type="submit" value="submit url(s)">
		</form>
	</div>
</body>
</html>