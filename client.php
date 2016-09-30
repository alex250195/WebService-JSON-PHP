<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
</head>
<body>
	<form action="#" method="get">
		<label>Opcao:</label>
		<input type="text" name="opcao">
		<input type="submit">
	</form>
</body>
</html>

<?php
	if(isset($_GET["opcao"])){
		$opcao = $_GET["opcao"];

		$result = file_get_contents('http://localhost/webservice/server.php?flag='.$opcao.'');
		$lista = explode(":", $result);
		$lista = str_replace('"', "", $lista);

		print_r("Nome: " .$lista[0]. "<br>");
		print_r("Idade: " .$lista[1]. "<br>");
		print_r("Sexo: " .$lista[2]. "<br>");
	}
?>