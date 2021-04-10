<?php
	$code = $_POST["code"];
	$code_file = fopen("main.py", "w");
	fwrite($code_file, $code);
	fclose($code_file);
	$result = nl2br(shell_exec("python3 main.py"));
	echo "<button><a href='index.php'>go back</a></button>";
	echo "</br>result of code running: ".$result;
	$result_file = fopen("result.txt", "w");
	fwrite($result_file, $result);
	fclose($result_file);
?>
