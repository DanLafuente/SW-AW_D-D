
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link id="estilo" rel="stylesheet" type="text/css" href="csses/style.css" />
	</head>

	<body>
		<div id="contenedor">
		<?php require('cabecera.php'); ?>
		<main>
			<article>
				<?= $contenidoPrincipal ?>
			</article>
		</main>
		<?php require('footer.php'); ?>
		</div>
	</body>
</html>