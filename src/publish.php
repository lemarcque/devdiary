<?php
	/*
	 * Author 		: Henoc SESE
	 * Description 	: Simple daily log tools
	 * License		: MIT
	 */

	const JSON_FILE_PATH = "./log.json";

	// const - Error
	const ERROR_JSON_UNEXIST = 1;
	const ERROR_MAX_LOGDAY = 2;
	ERROR_UNAUTHORIZED_ACCESS = 3;

	function warning($flag) {

		switch ($flag) {
			case ERROR_JSON_UNEXIST:
				print "Erreur : " . $flag . " The JSON files that store data doesn't exist";
				break;

			case ERROR_MAX_LOGDAY:
				print"Erreur : " . $flag . " You've already logged the jobs of the day";

			case ERROR_UNAUTHORIZED_ACCESS:
				print"Erreur : " . $flag . "You're authorized to access this page.";
			
			default:
				# code...
				break;
		}
	}

	function log_day() {
		$title = $_POST['form-dailylog-title'];
		$story = $_POST['form-dailylog-story'];

		if($title != null && $story != null) {

			if(file_exists(JSON_FILE_PATH)) {
				$fileContent = file_get_contents(JSON_FILE_PATH);
				$jsonObject = json_decode($fileContent, true);

				// get date
				$date = getdate();
				$date = $date['mday'] . "-" . $date['mon'] . "-" .  $date['year'];
				
				
				if($jsonObject['log'][$date] != null) {
					warning(ERROR_MAX_LOGDAY);
				}else {
					$jsonObject['log'][$date]['title'] = $title;
					$jsonObject['log'][$date]['story'] = $story;
					$jsonExport = json_encode($jsonObject);
					file_put_contents(JSON_FILE_PATH, $jsonExport);

					print "The log was saved with success !";
				}
			}else {
				warning(ERROR_JSON_UNEXIST);
			}
		}else {
			warning(ERROR_UNAUTHORIZED_ACCESS);
		}  
	}

	// start the app
	log_day();

	
?>