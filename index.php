<!DOCTYPE html>
<html>
		<head>
				<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
				<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
				<link rel="stylesheet" href="./dst/css/index.css">
				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131225464-1"></script>
				<script>
						window.dataLayer = window.dataLayer || [];
						function gtag(){dataLayer.push(arguments);}
						gtag('js', new Date());

						gtag('config', 'UA-131225464-1');
				</script>
				<title>Lib-gate analytics</title>
		</head>
		<body>
<?php if (strpos($_SERVER['QUERY_STRING'], 'bad-ui') !== false) {
	include("./include/bad-ui.html");
} elseif (strpos($_SERVER['QUERY_STRING'], 'itex') !== false) {
	include("./include/itex.html");
} ?>
		</body>
</html>