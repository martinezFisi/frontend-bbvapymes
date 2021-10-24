
<!DOCTYPE html>
<html lang="es">

<head>
	<!--
		Tomar una fotografía y guardarla en un archivo v3
	    @date 2018-10-22
	    @author parzibyte
	    @web parzibyte.me/blog
	-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Tomar foto con Javascript y PHP v3.0</title>
	<style>
		@media only screen and (max-width: 700px) {
			video {
				max-width: 100%;
			}
		}
	</style>
</head>

<body>
	
	<div>
		<select name="listaDeDispositivos" id="listaDeDispositivos" style="display:none"></select>
		
		<p id="estado"></p>
	</div>
	<br>
	<video muted="muted" id="video"></video>
	<canvas id="canvas" style="display: none;"></canvas>
</body>
<script src="camara.js"></script>

</html>