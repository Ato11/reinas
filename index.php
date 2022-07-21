<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery.min.js"></script>
	<title>Reinas</title>
</head>
<body>
	Cantidad
	<input type="text" id="numero" placeholder="Ingrese la cantidad">
	<button onClick="enviar()">Aceptar</button>
	<br>
</body>
</html>

<script>
	function enviar() {
		// let lista1 = [];
		// for (let index = 0; index < 8; index++) {
		// 	let lista = [];
		// 	for (let index = 0; index < 8; index++) {
		// 		lista.push(0);			
		// 	}
		// 	lista1.push(lista);
		// }
		// console.log(lista1);

		$.ajax({
			type: "GET",
			url: "pintar.php",
			data: {
				numero: $("#numero").val()
			},
			// dataType: "dataType",
			success: function (response) {
				console.log(response);
			}
		});
	}

</script>


<?php

?>