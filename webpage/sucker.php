<?php 
	// $name = $_REQUEST["name"];
	// $cardNumber = $_REQUEST["cardNumber"];

	// $namePattern = "/([A-Z][a-z]+.[A-Z][a-z]+)/";
	// $cardNumberPattern = "/(([0-9]{4}.){3}[0-9]{4})/";

	// if(!preg_match($namePattern, $name) || !preg_match($cardNumberPattern, $cardNumber)) 
	// {
	//     header("Location: suckerChecker.php", TRUE, 301);
	//     die();
	// }

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
				<dd>
					<?= $_REQUEST["name"] ?>	
				</dd>

			<dt>Section</dt>
				<dd>
					<?= $_REQUEST["section"] ?>
				</dd>

			<dt>Credit Card</dt>
				<dd>
					<?= $_REQUEST["cardNumber"] ?> (<?= $_REQUEST["cardType"] ?>)
				</dd>
		</dl>
		<?php
			$getData = $_REQUEST["name"] ."; " . $_REQUEST["section"] ."; " . $_REQUEST["cardNumber"] ."; " . ($_REQUEST["cardType"] ."\n" );
			file_put_contents("sucker.txt", $getData, FILE_APPEND);
		?>
	<div>
	    <h2>List of Suckers : </h2>
	    <pre><?= file_get_contents("sucker.txt")?></pre>
	
	<hr />
	<p>Success !!! <a href="buyagrade.php">Try again</a></p>

	</body>

</html>  