<?php
	/*
	 * Author 		: Henoc SESE
	 * Description 	: Simple daily log tools
	 * License		: MIT
	 */

	$fileContent = file_get_contents("./log.json");
	$jsonObject = json_decode($fileContent, true);

	// display content of the JSON object
	print '<pre>';
	print '<code>';
	print '</code>';
	print '</pre>';
?>

<script>
	$json = JSON.stringify(<?php print $fileContent; ?>, null, 2);
	document.querySelector('code').innerHTML = $json;
</script>