<!--
	Author : Henoc SESE
	License : MIT

-->
<!DOCTYPE html>
<html>
	<head>
		<title>/devdiary - New log</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="res/css/log.css">
	</head>
	<body>
		<div id="container">
			<header id="header">
				<p id="homepage-link">
					<a href="index.php">/devdiary</a>
				</p>
				<input type="submit" form="form-dailylog" id="publish-link" value="publish" />
			</header>
			<section id="section">
				<form id="form-dailylog" action="publish.php" method="post">
					<input type="text" id="form-dailylog-title" name="form-dailylog-title" placeholder="Title" maxlength="50" />
					<textarea type="text" id="form-dailylog-story" name="form-dailylog-story" placeholder="Log your day..." maxlength="765"></textarea>
				</form>
			</section>
		</div>
	</body>
</html>