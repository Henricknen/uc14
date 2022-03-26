<?php
include("Reservas.php");
$res = new Reservas;
$res->setNumero($_REQUEST["numero"]);
$res->setSaida($_REQUEST["saida"]);
$res->setCondut($_REQUEST["condut"]);
$res->setAuto($_REQUEST["auto"]);
$res->ConectaBD();
$res->Registrar();
?>

<html>
<body>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Reservas - Inclusão</div>
<table>
<tr><th>Número</th><th>Saída</th><th>CNH</th><th>RENAVAM</th></tr>
<tr><td><?php echo($res->getNumero())?></td><td><?php echo ($res->getSaida())?></td>
<td><?php echo($res->getCondut())?></td><td><?php echo($res->getAuto())?></td></tr>
</table><p>
<div>Reserva incluída com sucesso !!!</div><p></p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
