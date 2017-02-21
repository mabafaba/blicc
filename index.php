<!DOCTYPE html>
<?php $name = "martin" ; $name2 = "stef"?>

<html>
<head>
	<title><?php echo($name) ?></title>
</head>
<body>
<?php for ($i=0; $i < 10; $i++) { ?>
	<br><div style="color: red">yeah</div>
	<?php
	if ($i===8) {
		echo $name2;
	} else {
		echo $name;
	}

} ?>


</body>
</html>
