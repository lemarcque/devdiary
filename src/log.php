<!--
	Author : Henoc SESE
	License : MIT

-->
<!DOCTYPE html>
<html>
	<head>
		<title>/devdiary - New log</title>
		<meta charset="utf-8" />
		<style type="text/css">
			html, body {
				width: 100%;
				height: 100%;
				padding: 0;
				margin: 0;
			}

			#container {
				display: flex;
				flex-direction: column;
				width: 700px;
				height: 100%;
				margin: 0 auto;
			}

			#header {
				display: flex;
				justify-content: flex-end;
				align-items: center;
				width: 100%;
				height: 90px;
				background: white;
			}

			#section {
				display: flex;
				width: 100%;
				height: 100%;
				padding-top: 50px;
				flex: 1;
			}

			/* link that redirect unto homepage */
			#homepage-link {
				margin-right: auto;
				font-size: 1.2em;
			}

			#homepage-link a {
				text-decoration: none;
				color: black;
			}

			/* button for publishing "article" */
			#publish-link {
				padding: 9px 15px;
				border: 1px solid black;
				border-radius: 5px;
				font-size: 1em;
			}

			#publish-link:hover {
				cursor: pointer;
			}

			#publish-link:active {
				color: black;
			}

			/* main formular */
			#form-dailylog {
				display: flex;
				flex-direction: column;
				width: 100%;
				height: 100%;
			}

			/* input */
			input, textarea {
				background-color: transparent;
				border: 0;
				padding-left: 20px;
			}
			
			input:focus, textarea:focus {
				outline: none;
				border-left: 1px solid #c2c2c2;
			}

			/* input for title */
			#form-dailylog-title {
				font-size: 1.6em;
				margin-bottom: 15px;
			}

			/* input for writing story */
			#form-dailylog-story {
				height: 100%;
				font-size: 1.3em;
				line-height: 1.8;
			}
		</style>
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