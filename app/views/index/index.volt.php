<html>
	<head>
		<title>Saul Great Domain</title>
		<link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<p>Hello volt</p>
		<?php $myArray = ['Apple', 'Banana', 'Orange']; ?>
		<?php foreach ($myArray as $fruit) { ?>
			<p>Fruta:</p>
			<p><?= $fruit ?> </p>
		<?php } ?>
	</body>
</html>
