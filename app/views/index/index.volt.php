<html>
	<head>
		<title>Saul Great Domain</title>
		<?= $this->assets->outputCss() ?>
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
			
			<div id="box"> 
			<?php foreach ($contacts as $contact) { ?>
				<div class="item">
					<p>Name: <?= $contact->name ?></p>
            				<p>Phone: <?= $contact->phone ?></p>
            				<p>Email: <?= $contact->email ?></p>
           				<p>Company: <?= $contact->company ?></p>
				</div>
			<?php } ?>
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
