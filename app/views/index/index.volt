<html>
	<head>
		<title>Saul Great Domain</title>

	</head>
	<body>
		<p>Hello volt</p>
		{% set myArray = {'Apple', 'Banana', 'Orange'} %}
		{% for fruit in myArray %}
			<p>Fruta:</p>
			<p>{{ fruit}} </p>
		{% endfor %}
	</body>
</html>
