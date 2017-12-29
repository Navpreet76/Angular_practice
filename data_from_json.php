<?php
$data = file_get_contents("names.json");
$json = json_decode($data, true);
foreach ($json as $key => $value) {
	if (!is_array($value)) {
		echo $key . '=>' . $value . '<br/>';
	} else {
		foreach ($value as $key => $val){
			echo . $key .'=>' . $value . '<br/>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Get data from json file with PHP</title>
</head>
<body>	


</body>
</html>