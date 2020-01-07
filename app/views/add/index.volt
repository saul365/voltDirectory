<html>
	<head>
		<title>Saul Great Domain</title>
	</head>
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
		<h2>Sign up using this form</h2>
		{#
		{% this.tag.form("signup/register") %}
		<p><label for="name">Name</label>{% this.tag.texField("name")%}</p>
		<p><label for="phone">Phone</label>{% this.tag.texField("phone")%}</p>
		<p><label for="email">Email</label>{% this.tag.texField("email")%}</p>
		<p><label for="company">Company</label>{% this.tag.texField("company")%}</p>
		<p>{% this->tag->submitButton("Register") %}</p>
		#}
		{{ form('add/save', 'method': 'post') }}

    		<label for='name'>Name</label>
    		{{ text_field('name', 'size': 40) }}

    		<label for='phone'>Phone</label>
    		{{ text_field('phone', 'size': 40) }}

		<br/>

    		<label for='email'>Email</label>
    		{{ text_field('email', 'size': 40) }}

    		<label for='company'>Company</label>
    		{{ text_field('company', 'size': 10) }}

    		{{ submit_button('Send') }}

		{{ end_form() }}

	</main>
</html>
