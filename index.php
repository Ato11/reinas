<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="supervisor/venta/js/jquery.min.js"></script>
	<title>Reinas</title>
</head>
<body>
	Cantidad
	<input type="text" id="numero" placeholder="Ingrese la cantidad">
	<button onClick="enviar()">Aceptar</button>
	<div id="mostrar" style="margin: 15px;"></div>
</body>
</html>

<script>
	function enviar() {
		$.ajax({
			type: "GET",
			url: "pintar.php",
			data: {
				numero: $("#numero").val()
			},
			beforeSend: function(){
				$("#mostrar").empty();
				$("#mostrar").append("<img src='cargando.gif' width='80px' id='imagen'> <br>Cargando...");
			},
			success: function (response) {
				// console.log(response);
				$("#mostrar").empty();
				$("#mostrar").append(response);
			}
		});
	}
</script>


<?php

?>