<!--
	Author : Henoc SESE
	License : MIT

	inspiration :
		- https://premium.wpmudev.org/blog/wp-content/uploads/2012/01/Manifest-Minimalist-WordPress-Theme.png
		- 
-->
<!DOCTYPE html>
<html>
	<head>
		<title>/devdiary - New log</title>
		<meta charset="utf-8" />
		<style type="text/css">
			:root  {
				--main-color : #fb0057;
			}

			html, body {
				width: 100%;
				height: 100%;
				padding: 0;
				margin: 0;
			}

			h2, h5, p {
				font-family: sans-serif;
				line-height: 1.8em;
			}

			/* selection */
			/* WebKit/Blink Browsers */
			::selection {
			  background: var(--main-color);
			}

			 /* Gecko Browsers */
			::-moz-selection {
			  background: var(--main-color);
			}

			#container {
				display: flex;
				flex-direction: column;
				width: 600px;
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

			#article {
				display: flex;
				flex-direction: column;
				width: 100%;
				height: 100%;
				padding-top: 50px;
				flex: 1;
			}


			/* ------- HEADER ------- */

			/* link that redirect unto homepage */
			#homepage-link {
				margin-right: auto;
			}

			a {
				text-decoration: none;
				color: black;
				font-size: 1.2em;
			}

			/* button for publishing "article" */
			#post-link {
				padding: 9px 15px;
				border: 1px solid black;
				border-radius: 5px;
			}

			#post-link:hover {
				cursor: pointer;
			}

			#post-link:active {
				color: black;
			}

			/* ------- ARTICLE ------- */

			/* log article */
			.log-article {
				margin-bottom: 30px;
			}

			/* h2 title for article */
			.log-title {
				margin-bottom: 0;
			}

			.log-title:hover {
				color: var(--main-color);
				cursor: pointer;
			}

			/* h2 title for article */
			.log-date {
				margin-top: 0;
			}

			/* line separator */
			.separator {
				display: block;
				width: 20%;
				margin: 0 auto;
				margin-top: 30px;
				border-bottom: 1px dotted #c2c2c2;
			}


		</style>
	</head>
	<body>
		<div id="container">
			<header id="header">
				<p id="homepage-link">
					<a href="index.php">/devdiary</a>
				</p>
				<a href="log.php" id="post-link">post</a>
			</header>
			<article id="article">

				<?php
					// get all articles
					$fileContent = file_get_contents("./log.json");
					$jsonObject = json_decode($fileContent, true);

					foreach ($jsonObject['log'] as $date => $log) {

						// format the date
						$arrDate = explode("-", $date);
						$day = $arrDate[0];
						$dateObj = DateTime::createFromFormat('!m', $arrDate[1]);
						$month = $dateObj->format('F'); // March
						$month = substr($month, 0, 3);	// get only the 3 first char
						$year = $arrDate[2];
						$formatedDate = $day . " " . $month . " " . $year;

						print '<article id="log-' . $date. '" class="log-article">';
						print '<h2 class="log-title">' . $log['title'] . '</h2>';
						print '<h5 class="log-date">' . $formatedDate . '</h5>';
						print '<p>' . $log['story'] . '</p>';
						print '<span class="separator"></span>';
					}
				?>
				<!--<article id="log-14-2-2019" class="log-article">
					<h2 class="log-title">Title 1</h2>
					<h5 class="log-date">14 Feb 2019</h5>
					<p>Etiam erat ipsum, laoreet quis semper in, pretium ac dui. Etiam sed eros sed velit efficitur gravida. Etiam porttitor, leo eget dapibus commodo, nisi dolor vestibulum sem, id vehicula dui lacus eget lectus. Integer nec quam ac ante bibendum scelerisque. Phasellus quis viverra magna. In hac habitasse platea dictumst. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec interdum risus pretium ultricies egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<span class="separator"></span>
				</article>
				<article id="log-15-2-2019" class="log-article">
					<h2 class="log-title">Les rose sont rouges, les violletes sont bleues</h2>
					<h5 class="log-date">15 Feb 2019</h5>
					<p>Etiam erat ipsum, laoreet quis semper in, pretium ac dui. Etiam sed eros sed velit efficitur gravida. Etiam porttitor, leo eget dapibus commodo, nisi dolor vestibulum sem, id vehicula dui lacus eget lectus. Integer nec quam ac ante bibendum scelerisque. Phasellus quis viverra magna. In hac habitasse platea dictumst. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec interdum risus pretium ultricies egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<span class="separator"></span>
				</article>
				<article id="log-16-2-2019" class="log-article">
					<h2 class="log-title">Hard day</h2>
					<h5 class="log-date">16 Feb 2019</h5>
					<p>Etiam erat ipsum, laoreet quis semper in, pretium ac dui. Etiam sed eros sed velit efficitur gravida. Etiam porttitor, leo eget dapibus commodo, nisi dolor vestibulum sem, id vehicula dui lacus eget lectus. Integer nec quam ac ante bibendum scelerisque. Phasellus quis viverra magna. In hac habitasse platea dictumst. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec interdum risus pretium ultricies egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<span class="separator"></span>
				</article>-->
			</article>
		</div>
	</body>
</html>