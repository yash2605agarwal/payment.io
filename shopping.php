<?php
session_start();
$_SESSION['user']= 'asdldjfkxdfdf126456';

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Select Amount</p>
<form action="checkout.php" method="POST">
	<select name="amount">
		<option value="100">100</option>

		<option value="200">200</option>
	</select>
	<input type="submit" value="PayNow">
	</form>
</body>
</html>