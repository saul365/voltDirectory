<html>
        <head>
                <title>Saul Great Domain</title>
		{{ assets.outputCss() }}
        </head>
        <header>
                <h1>Hello volt</h1>
                <nav>
			<a href="#">about</a>
			<a href="/">Inicio</a>
			<a href="#">IDK</a>
                </nav>
        </header>
        <main>
		<div id="box">
                <h2>Sign up using this form</h2>
                {#
                {% this.tag.form("signup/register") %}
                <p><label for="name">Name</label>{% this.tag.texField("name")%}</p>
                <p><label for="phone">Phone</label>{% this.tag.texField("phone")%}</p>
                <p><label for="email">Email</label>{% this.tag.texField("email")%}</p>
                <p><label for="company">Company</label>{% this.tag.texField("company")%}</p>
                <p>{% this->tag->submitButton("Register") %}</p>
                #}
		<div id="options">
                {{ form('add/save', 'method': 'post') }}

                <label for='name'>Name</label>
                {{ text_field('name', 'size': 40) }}
                <label for='phone'>Phone</label>
                {{ text_field('phone', 'size': 40) }}
                <label for='email'>Email</label>
		{{ email_field('email', 'size': 40) }}
                <label for='company'>Company</label>
                {{ text_field('company', 'size': 10) }}
                {{ submit_button('Send') }}

                {{ end_form() }}
		</div><!--- end form --->
		</div><!-- end box -->
		<aside>
			<ul>
				<li>Hello sidebar</li>
				<li><a href="add">Add another contact</a></li>
			</ul>
		</aside>
        </main>
		<footer>
            		<p>hola</p>
        	</footer>
</html>
