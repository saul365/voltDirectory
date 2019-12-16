<html>
	<head>
		<title>Saul Great Domain</title>
		<?= $this->assets->outputCss() ?>
	</head>
	<body>
		<header>
		<pstyle="margin:0">Hello volt</p>
		<nav>
			<ul id="navi">
				<li class="navigation_block">contacto</li>
				<li class="navigation_block">inicio</li>
				<li class="navigation_block">idk</li>
			</ul>
			<div class="clear"> </div> 
		</nav>
		</header>
		<main>
			<?php $myArray = ['Apple', 'Banana', 'Orange']; ?>
			<?php foreach ($myArray as $fruit) { ?>
				<p>Fruta:</p>
				<p><?= $fruit ?> </p>
			<?php } ?>
		</main>
	</body>
</html>
