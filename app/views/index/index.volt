<html>
	<head>
		<title>Saul Great Domain</title>
		{{ assets.outputCss() }}
	</head>
	<body>
		<header>
		<h1>Hello volt</h1>
		<nav>
			<a href="#">about</a>
			<a href="/">Inicio</a>
			<a href="#">IDK</a>
		</nav>
		</header>
		<main>
			{#
			{% set myArray = {'Apple', 'Banana', 'Orange','Tomato','Tangerine','Avocado'} %}
			<p>{{ prueba}}</p>
			#}
			<div id="box"> 
			{% for contact in contacts %}
				<div class="item">
					<p>Name: {{contact.name}}</p>
            				<p>Phone: {{contact.phone}}</p>
            				<p>Email: {{contact.email}}</p>
           				<p>Company: {{contact.company}}</p>
				</div>
			{% endfor %}
			</div> 
			<aside>
				<ul>
					<li>Hello sidebar</li>
					<li><a href="add">Add contact</a></li>
				</ul>
			</aside>
		</main>
		<footer>
            		<p>hola</p>
        	</footer>

	</body>
</html>
