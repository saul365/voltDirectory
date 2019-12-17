<html>
	<head>
		<title>Saul Great Domain</title>
		<?= $this->assets->outputCss() ?>
	</head>
	<body>
		<header>
		<h1 style="margin:0">Hello volt</h1>
		<nav>
			<ul id="navi">
				<li class="navigation_block">about</li>
				<li class="navigation_block">inicio</li>
				<li class="navigation_block">idk</li>
			</ul>
			<div class="clear"> </div> 
		</nav>
		</header>
		<main>
			<?php $myArray = ['Apple', 'Banana', 'Orange', 'Tomato', 'Tangerine', 'Avocado']; ?>
			<?php foreach ($myArray as $fruit) { ?>
				<div class="box"> 
				<p>Fruta: 
			<?= $fruit ?> </p>
				</div> 
			<?php } ?>
		</main>
		<aside id="sidebar">
			<ul>
				<li>Hello sidebar</li>
			</ul>
		</aside>
	</body>
</html>
