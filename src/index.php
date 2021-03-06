<!--
	Author : Henoc SESE
	License : MIT

-->
<!DOCTYPE html>
<html>
	<head>
		<title>/devdiary</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="res/css/home.css">
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
					$fileContent = file_get_contents("./data/log.json");
					$jsonObject = json_decode($fileContent, true);

					foreach (array_reverse($jsonObject['log']) as $date => $log) {

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
						print '<pre>' . $log['story'] . '</pre>';
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