<p> Hello phalcon</p>
<p>{{hi}}</p>
{% for stuff in prueba %}
	<p>{{stuff['name']}}</p>
	{# {% for campo in stuff %}
                <p>{{campo}} </p>
        {% endfor %} 
	uncomment this for outputting everythin the contact has instead of just its name#}
{% endfor %}
