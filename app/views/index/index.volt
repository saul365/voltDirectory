<html>
	<head>
		<title>Saul Great Domain</title>
		{{ assets.outputCss() }}
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
			{% set myArray = {'Apple', 'Banana', 'Orange'} %}
			{% for fruit in myArray %}
				<p>Fruta:</p>
				<p>{{ fruit}} </p>
			{% endfor %}
		</main>
	</body>
</html>
